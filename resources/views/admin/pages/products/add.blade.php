@extends('admin.pages.products.admintemplate')
@section('content')

<form action="/admin/action/product_add" method="POST">
{{ csrf_field() }}

    <div class="mb-3">
        <label for="InputName" class="form-label">Название товара:</label>
        <input type="text" class="form-control" id="InputName" name="name" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Напишите название которое будет отображаться на сайте.</div>
    </div>



    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 col-xs-2">
            <label class="form-label">Цвет товара:</label>
        </div>
        <div class="col-xs-10 col-sm-7 col-md-8 col-lg-8 col-xs-9">
            <div class="mb-3">
                <select name="color" id="selectColorName" onfocus='this.size=getLength(@json($dataColor));'     onblur='this.size=1;'
                        onchange='this.size=1; this.blur(); changeColor(); changeNameColor();' class="form-select" aria-label="Default select example">
                    <option selected>Не выбран</option>
                    @foreach($dataColor as $item)
                      <option value="{{$item->getAttributeValue('id')}}">{{$item->getAttributeValue('name')}}</option>

                    @endforeach

                </select>
            </div>
        </div>
        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xs-1">
            <input id="ColorChange" type="color" value="#000000" disabled>
        </div>
    </div>

    <div id="app">
      <add-block :data-param='@json($dataParam)'></add-block>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>



    <div class="mb-3">
        <label for="InputName" class="form-label">Форма сумки:</label>
        <div class="mb-3">
            <select name="form" onfocus='this.size=getLength1(@json($dataForm));'     onblur='this.size=1;'
                    onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                <option selected>Не выбран</option>
                @foreach($dataForm as $item)
                  <option value="{{$item->getAttributeValue('id')}}">{{$item->getAttributeValue('formname')}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="InputName" class="form-label">Сезон товара:</label>
        <div class="mb-3">
            <select name="season" multiple="multiple" class="form-select" aria-label="Default select example">
                <option selected>Не выбран</option>
                <option value="1">Зима</option>
                <option value="2">Весна</option>
                <option value="2">Лето</option>
                <option value="2">Осень</option>
            </select>
        </div>
        <div id="nameHelp" class="form-text">Сезоны в которые актуален товар (Для корректного поиска и сортировки).</div>
    </div>


  <?php
  //Функция для формирования вложенности имен при отображении в меню (для удобного восприятия).
  function create_name($item,$dataMenu) {
    $name = $item->getAttributeValue('name');
    //echo $dataCategories;
    $parent = $item->getAttributeValue('parent_id');
    while ($parent !== -1) {
      foreach($dataMenu as $paragraph) {
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
    <label for="InputName" class="form-label">Родительский пункт меню:</label>
    <div class="mb-3">
      <select name="menu" id="ParentCategoriesName" onblur='this.size=1;' onfocus='this.size=getLength(@json($dataMenu));'
              onchange='this.size=1; this.blur();' name="parent_categories" class="form-select" aria-label="">
        <option value="-1" selected>Главное меню</option>
        {{$i=0}}

        @foreach($dataMenu as $item)
          <option value="{{$item->getAttributeValue('id')}}">
            <?
            create_name($item,$dataMenu);
            ?>
          </option>

        @endforeach


      </select>
    </div>
  </div>


    <div class="row">
        <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1 col-xl-1">
            <label class="form-label">Цена:</label>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xs-3">
            <input name="price" onchange='changePrice();' type="" class="form-control" id="InputPrice" aria-describedby="nameHelp">
        </div>
        <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1 col-xl-1">
            <label class="form-label">Скидка:</label>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xs-3">
            <div class="mb-3">
                <select name="discount" onfocus='this.size=5;'     onblur='this.size=1;'
                        onchange='this.size=1; this.blur(); changePrice();' id="percentSale" class="form-select" aria-label="Default select example">
                    <option value="0" selected>0</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="10">10</option>
                    <option value="12">12</option>
                    <option value="15">15</option>
                    <option value="17">17</option>
                    <option value="20">20</option>
                    <option value="23">23</option>
                    <option value="25">25</option>
                    <option value="28">28</option>
                    <option value="30">30</option>
                    <option value="35">35</option>
                    <option value="40">40</option>
                    <option value="45">45</option>
                    <option value="50">50</option>
                    <option value="55">55</option>
                    <option value="60">60</option>
                    <option value="65">65</option>
                    <option value="70">70</option>
                    <option value="75">75</option>
                    <option value="80">80</option>
                    <option value="85">85</option>
                    <option value="90">90</option>

                </select>
            </div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1 col-xl-1">
          <label class="form-label">Итог:</label>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <input name="result_price" disabled class="form-control" id="resultPrice" aria-describedby="nameHelp">
        </div>
    </div>


    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Выбрать несколько фото товара:</label>
        <input name="photo" class="form-control" type="file" id="formFileMultiple" multiple>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xs-2">
            <label class="form-label">Категории:</label>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 col-xs-10">
            <div class="mb-3">
                <select name="categories" onfocus='this.size=getLength(@json($dataCategories));'     onblur='this.size=1;'
                        onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                    <option value="-1" selected>Не выбрана</option>
                    @foreach($dataCategories as $item)
                      <option value="{{$item->getAttributeValue('id')}}">{{$item->getAttributeValue('name')}}</option>
                    @endforeach

                </select>
            </div>
        </div>
    </div>


  <script>

    var getLength1 = function getLength(arr) {
      length = 5;
      if(arr.length < length)
        length = arr.length;

      return length;
    }

    function changeColor() {
      var data = @json($dataColor);
      var dop = get_num_from_id(document.getElementById("selectColorName").value,data);

      if (dop >= 0) {
        document.getElementById("ColorChange").value = data[dop].color;
      } else
        document.getElementById("ColorChange").value = '#000000';
    }

    function changePrice() {

      var price = document.getElementById("InputPrice").value;
      var percentSale = document.getElementById("percentSale").value;

      console.log(' price ', price, ' percent ', percentSale);

      var newPrice = price;

      if(percentSale > 0) {
        newPrice = price - price*percentSale/100;
      }

      console.log('new price ', newPrice);
      document.getElementById("resultPrice").value = newPrice;
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



    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
@endsection('content')


