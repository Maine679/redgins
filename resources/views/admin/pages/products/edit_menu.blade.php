@extends('admin.pages.products.admintemplate')
@section('content')

  <form action="/admin/action/edit_menu" method="POST">
    {{ csrf_field() }}

    <?php
    //Функция для формирования вложенности имен при отображении в меню (для удобного восприятия).
    function create_name($item,$dataCategories) {
      $name = $item->getAttributeValue('name');
      //echo $dataCategories;
      $parent = $item->getAttributeValue('parent_id');
      while ($parent !== -1) {
        foreach($dataCategories as $paragraph) {
          if($paragraph->id == $parent) {
            $name = $paragraph->name . "/" . $name;
            $parent = $paragraph->parent_id;
            break;
          }
        }
      }
      echo $name;
    };
    ?>



    <div class="mb-3">
      <label for="InputName" class="form-label">Выберите пункт меню для изменения:</label>
      <div class="mb-3">
        <select id="selectCategoriesName" onblur='this.size=1;' onfocus='this.size=getSizeSelect();'
                onchange='this.size=1; this.blur(); changeCategories();' name="select_categories" class="form-select" aria-label="">
          <option value="-1" selected>Добавить пункт меню</option>
          {{$i=0}}
          @foreach($dataCategories as $item)
            <option value="{{$item->getAttributeValue('id')}}">{{create_name($item,$dataCategories)}}</option>

          @endforeach


        </select>
      </div>
    </div>

    <input type="hidden" id="categoriesId" name="categoriesId" value="-1">




    <div class="mb-3">
      <label for="InputName" class="form-label">Название пункта:</label>
      <input type="text" name="categoriesName" placeholder = 'Укажите название пункта меню' class="form-control" id="InputNameCategories" aria-describedby="nameHelp">
      <div id="nameHelp" class="form-text">Название пункта (будет доступно в меню)</div>
    </div>

    <div class="mb-3">
      <label for="InputName" class="form-label">Родительский пункт меню:</label>
      <div class="mb-3">
        <select id="ParentCategoriesName" onblur='this.size=1;' onfocus='this.size=getSizeSelect();'
                onchange='this.size=1; this.blur();' name="parent_categories" class="form-select" aria-label="">
          <option value="-1" selected>Главное меню</option>
          {{$i=0}}

          @foreach($dataCategories as $item)
            <option value="{{$item->getAttributeValue('id')}}">
              <?
                create_name($item,$dataCategories);
              ?>
            </option>

          @endforeach


        </select>
      </div>
    </div>



    <button type="submit" name="action" value="1" id="buttonSend" class="btn btn-primary">Добавить</button>
    <button type="submit" name="action" id="buttonSendDelete" value="-1" onclick="return confirm('Вы точно хотите удалить? Может привести к непредвиденным последствиям!');" style="visibility: hidden;" class="btn btn-primary">Удалить</button>
  </form>


  <script>

    function getSizeSelect() {
      var data = @json($dataCategories);
      var length = data.length;
      if(length > 4)
        length = 4;
      return length + 1;
    }

    function changeCategories() {
      var data = @json($dataCategories);
      var dop = -1;
      var id = document.getElementById("selectCategoriesName").value;

      //Ищем индекс массива по идентификатору
      dop = get_num_from_id(id,data);

      if(dop < 0) {

        document.getElementById("buttonSend").textContent = 'Добавить';
        document.getElementById("InputNameCategories").value = '';
        document.getElementById("categoriesId").value = '-1';
        document.getElementById('buttonSendDelete').style = 'visibility:hidden';

      } else {

        document.getElementById("categoriesId").value = data[dop].id;
        document.getElementById("InputNameCategories").value = data[dop].name;
        document.getElementById("buttonSend").textContent = 'Изменить';
        document.getElementById('buttonSendDelete').style = 'visibility:visible';

        if(data[dop].parent_id < 0) {
          document.getElementById("ParentCategoriesName").value = -1;
        } else {
          document.getElementById("ParentCategoriesName").value = data[dop].parent_id;
        }


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

