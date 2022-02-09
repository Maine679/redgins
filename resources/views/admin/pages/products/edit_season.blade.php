@extends('admin.pages.products.admintemplate')
@section('content')

  <form action="/admin/action/edit_season" method="POST">
    {{ csrf_field() }}




    <div class="mb-3">
      <label for="InputName" class="form-label">Выберите сезон для изменения:</label>
      <div class="mb-3">
        <select id="selectCategoriesName" onblur='this.size=1;' onfocus='this.size=getSizeSelect();'
                onchange='this.size=1; this.blur(); changeCategories();' name="select_season" class="form-select" aria-label="">
          <option value="-1" selected>Добавить сезон</option>
          {{$i=0}}
          @foreach($dataSeason as $item)
{{--            <option value="{{$item->getAttributeValue('id')}}">{{$item->getAttributeValue('name')}}</option>--}}

          @endforeach


        </select>
      </div>
    </div>

    <input type="hidden" id="seasonId" name="seasonId" value="-1">




    <div class="mb-3">
      <label for="InputName" class="form-label">Название сезона:</label>
      <input type="text" name="seasonName" placeholder = 'Укажите название сезона' class="form-control" id="InputNameCategories" aria-describedby="nameHelp">
      <div id="nameHelp" class="form-text">Название сезона (для корректного подтягивания товара под сезон)</div>
    </div>


    <button type="submit" name="action" id="buttonSend" value="1" class="btn btn-primary">Добавить</button>
    <button type="submit" name="action" id="buttonSendDelete" value="-1" onclick="return confirm('Вы точно хотите удалить? Может привести к непредвиденным последствиям!');" style="visibility: hidden;" class="btn btn-primary">Удалить</button>
  </form>


  <script>

    function getSizeSelect() {
      var data = @json($dataSeason);
      var length = data.length;
      if(length > 4)
        length = 4;
      return length + 1;
    }

    function changeCategories() {
      var data = @json($dataSeason);
      var dop = -1;
      var id = document.getElementById("selectCategoriesName").value;

      //Ищем индекс массива по идентификатору
      dop = get_num_from_id(id,data);

      if(dop < 0) {

        document.getElementById("buttonSend").textContent = 'Добавить';
        document.getElementById("InputNameCategories").value = '';
        document.getElementById("seasonId").value = '-1';
        document.getElementById('buttonSendDelete').style = 'visibility:hidden';

      } else {

        document.getElementById("seasonId").value = data[dop].id;
        document.getElementById("InputNameCategories").value = data[dop].name;
        document.getElementById("buttonSend").textContent = 'Изменить';
        document.getElementById('buttonSendDelete').style = 'visibility:visible';

      }
    }

    function get_num_from_id(id,data) {
      if (id == -1) {
        return -1;
      }
      else {
        for(var i=0;i<data.length;i++) {
          if(data[i].id == id) {
            return i;
          }
        }
      }
      return -1;
    }

  </script>

@endsection('content')

