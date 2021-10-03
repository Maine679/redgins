@extends('admin.pages.products.admintemplate')
@section('content')




    <form action="/admin/action/edit_parameter" method="POST">
        {{ csrf_field() }}




        <div class="mb-3">
            <label for="InputName" class="form-label">Выберите цвет для изменения:</label>
            <div class="mb-3">
                <select id="selectColorName" onblur='this.size=1;' onfocus='this.size=getSizeSelect();'
                        onchange='this.size=1; this.blur(); changeColor(); changeNameColor();' name="select_color" class="form-select" aria-label="">
                    <option value="-1" selected>Добавить цвет</option>
                    {{$i=0}}
                    @foreach($dataColor as $item)
                        <option value="{{$i++}}">{{$item->getAttributeValue('name')}}</option>

                    @endforeach


                </select>
            </div>
        </div>

        <input type="hidden" id="productId" name="productId" value="-1">




        <div class="mb-3">
            <label for="InputName" class="form-label">Цвет:</label>
            <input type="text" name="colorName" placeholder = 'Укажите название' class="form-control" id="InputNameColor" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Название цвета (будет доступно в фильтре)</div>
        </div>



        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                <label class="form-label">Выберите цвет:</label>
            </div>

            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xs-1">
                <input name="color" id="ColorChange" type="color">
            </div>
        </div>


        <button type="submit" id="buttonSend" class="btn btn-primary">Добавить</button>
    </form>


    <script>

        function getSizeSelect() {
            var data = @json($dataColor);
            var length = data.length;
            if(length > 4)
                length = 4;
            return length + 1;
        }

        function changeColor() {
            var data = @json($dataColor);
            var dop = document.getElementById("selectColorName").value;

            if (dop >= 0) {

                document.getElementById("ColorChange").value = data[dop].color;
            } else
                document.getElementById("ColorChange").value = '#000000';
        }

        function changeNameColor() {
            var data = @json($dataColor);
            var dop = document.getElementById("selectColorName").value;

            if(dop < 0) {
                document.getElementById("buttonSend").textContent = 'Добавить';
                document.getElementById("InputNameColor").placeholder = 'Укажите название';
                document.getElementById("InputNameColor").value = '';
                document.getElementById("productId").value = '-1';

            } else {
                document.getElementById("InputNameColor").value = data[dop].name;
                document.getElementById("buttonSend").textContent = 'Изменить';
                document.getElementById("productId").value = data[dop].id;




            }
        }



    </script>


@endsection('content')


