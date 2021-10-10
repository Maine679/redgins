@extends('admin.pages.products.admintemplate')
@section('content')




    <form action="/admin/action/edit_parameter" method="POST">
        {{ csrf_field() }}




        <div class="mb-3">
            <label for="InputName" class="form-label">Выберите параметр для изменения:</label>
            <div class="mb-3">
                <select id="selectParameterName" onblur='this.size=1;' onfocus='this.size=getSizeSelect();'
                        onchange='this.size=1; this.blur(); changeParameter(); changeNameParameter();' name="select_parameter" class="form-select" aria-label="">
                    <option value="-1" selected>Добавить параметр</option>
                    {{$i=0}}
                    @foreach($dataParam as $item)
                        <option value="{{$i++}}">{{$item->getAttributeValue('name')}}</option>

                    @endforeach


                </select>
            </div>
        </div>

        <input type="hidden" id="productId" name="productId" value="-1">




        <div class="mb-3">
            <label for="InputName" class="form-label">Название:</label>
            <input type="text" name="parameterName" placeholder = 'Укажите название' class="form-control" id="InputNameParameter" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Название параметра (будет доступно в фильтре)</div>
        </div>

        <div class="mb-3">
            <label for="InputName" class="form-label">Тип данных:</label>
            <div class="mb-3">
                <select id="selectParameterName" onblur='this.size=1;' onfocus='this.size=getSizeSelect();'
                        onchange='this.size=1' name="select_type_parameter" class="form-select" aria-label="">
                    <option value="0" selected>Строка</option>
                    <option value="1">Число</option>
                </select>
            </div>
           <div id="nameHelp" class="form-text">Тип данных которые будут указаны в этом параметре</div>
        </div>

        <button type="submit" id="buttonSend" class="btn btn-primary">Добавить</button>
    </form>


    <script>

        function getSizeSelect() {
            var data = @json($dataParam);
            var length = data.length;
            if(length > 4)
                length = 4;
            return length + 1;
        }

        function changeParameter() {
            var data = @json($dataParam);
            var dop = document.getElementById("selectParameterName").value;
        }

        function changeNameParameter() {
            var data = @json($dataParam);
            var dop = document.getElementById("selectParameterName").value;

            if(dop < 0) {
                document.getElementById("buttonSend").textContent = 'Добавить';
                document.getElementById("InputNameParameter").placeholder = 'Укажите название';
            } else {
                document.getElementById("InputNameParameter").value = data[dop].name;
                document.getElementById("buttonSend").textContent = 'Изменить';
                document.getElementById("productId").value = data[dop].id;
            }
        }



    </script>


@endsection('content')


