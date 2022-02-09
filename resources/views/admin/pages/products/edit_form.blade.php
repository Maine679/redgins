@extends('admin.pages.products.admintemplate')
@section('content')

    <form action="/admin/action/edit_form" method="POST">
        {{ csrf_field() }}




        <div class="mb-3">
            <label for="InputName" class="form-label">Выберите форму для изменения:</label>
            <div class="mb-3">
                <select id="selectFormName" onblur='this.size=1;' onfocus='this.size=getSizeSelect();'
                        onchange='this.size=1; this.blur(); changeForm(); changeNameForm();' name="select_form" class="form-select" aria-label="">
                    <option value="-1" selected>Добавить форму</option>


                    {{$i=0}}
                    @foreach($dataForm as $item)
{{--                        <option value="{{$i++}}">{{$item->getAttributeValue('name')}}</option>--}}
                        <option value="{{$i++}}">{{$item->getAttributeValue('formname')}}</option>

                  @endforeach


                </select>
            </div>
        </div>

        <input type="hidden" id="productId" name="formId" value="-1">




        <div class="mb-3">
            <label for="InputName" class="form-label">Название:</label>
            <input type="text" name="formName" placeholder = 'Укажите название' class="form-control" id="InputNameForm" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Название формы сумки</div>
        </div>



      <button type="submit" name="action" value="1" id="buttonSend" class="btn btn-primary">Добавить</button>
      <button type="submit" name="action" id="buttonSendDelete" value="-1" onclick="return confirm('Вы точно хотите удалить? Может привести к непредвиденным последствиям!');" style="visibility: hidden;" class="btn btn-primary">Удалить</button>
    </form>


    <script>

        function getSizeSelect() {
            var data = @json($dataForm);
            var length = data.length;
            if(length > 4)
                length = 4;
            return length + 1;
        }

        function changeForm() {
            var data = @json($dataForm);
            var dop = document.getElementById("selectFormName").value;
        }

        function changeNameForm() {
            var data = @json($dataForm);
            var dop = document.getElementById("selectFormName").value;

            if(dop < 0) {
                document.getElementById("buttonSend").textContent = 'Добавить';
                document.getElementById("InputNameForm").placeholder = 'Укажите название';
                document.getElementById("productId").value = -1;
                document.getElementById("selectFormName").value = '-1';
                document.getElementById("InputNameForm").value = '';
                document.getElementById('buttonSendDelete').style = 'visibility:hidden';

            } else {
                document.getElementById("InputNameForm").value = data[dop].formname;
                document.getElementById("buttonSend").textContent = 'Изменить';
                document.getElementById("productId").value = data[dop].id;
                document.getElementById('buttonSendDelete').style = 'visibility:visible';
            }
        }



    </script>


@endsection('content')


