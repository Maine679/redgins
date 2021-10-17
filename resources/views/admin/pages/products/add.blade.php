@extends('admin.pages.products.admintemplate')
@section('content')

<form>
    <div class="mb-3">
        <label for="InputName" class="form-label">Название товара:</label>
        <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Напишите название которое будет отображаться на сайте.</div>
    </div>



    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 col-xs-2">
            <label class="form-label">Цвет товара:</label>
        </div>
        <div class="col-xs-10 col-sm-7 col-md-8 col-lg-8 col-xs-9">
            <div class="mb-3">
                <select id="selectColorName" onfocus='this.size=5;'     onblur='this.size=1;'
                        onchange='this.size=1; this.blur(); changeColor(); changeNameColor();' class="form-select" aria-label="Default select example">
                    <option selected>Не выбран</option>
                    {{$i=0}}
                    @foreach($dataColor as $item)
                      <option value="{{$i++}}">{{$item->getAttributeValue('name')}}</option>

                    @endforeach

                </select>
            </div>
        </div>
        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xs-1">
            <input id="ColorChange" type="color" value="#000000" disabled>
        </div>
    </div>

    <div class="mb-3">
        <label for="InputName" class="form-label">Форма сумки:</label>
        <div class="mb-3">
            <select onfocus='this.size=5;'     onblur='this.size=1;'
                    onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                <option selected>Не выбран</option>
                <option value="1">Тоут</option>
                <option value="2">Кросбоди</option>
                <option value="2">Пельмень</option>
                <option value="2">Клатч</option>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="InputName" class="form-label">Сезон товара:</label>
        <div class="mb-3">
            <select multiple="multiple" class="form-select" aria-label="Default select example">
                <option selected>Не выбран</option>
                <option value="1">Зима</option>
                <option value="2">Весна</option>
                <option value="2">Лето</option>
                <option value="2">Осень</option>
            </select>
        </div>
        <div id="nameHelp" class="form-text">Сезоны в которые актуален товар (Для корректного поиска и сортировки).</div>
    </div>



    <div class="row">
        <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1 col-xl-1">
            <label class="form-label">Цена:</label>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xs-3">
            <input onchange='changePrice();' type="" class="form-control" id="InputPrice" aria-describedby="nameHelp">
        </div>
        <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1 col-xl-1">
            <label class="form-label">Скидка:</label>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xs-3">
            <div class="mb-3">
                <select onfocus='this.size=5;'     onblur='this.size=1;'
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
            <input disabled class="form-control" id="resultPrice" aria-describedby="nameHelp">
        </div>
    </div>


    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Выбрать несколько фото товара:</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
    </div>



    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xs-2">
            <label class="form-label">Категории:</label>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 col-xs-10">
            <div class="mb-3">
                <select multiple="multiple" onfocus='this.size=6;'     onblur='this.size=1;'
                        onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                    <option selected>Не выбрана</option>
                    <option value="1">Женское</option>
                    <option value="2">Мужское</option>
                    <option value="3">Доп товары</option>
                    <option value="4">Сумки</option>
                    <option value="5">Обувь</option>
                    <option value="6">Унисекс</option>
                    <option value="7">Клатчки</option>
                    <option value="8">Пояса</option>
                    <option value="9">Юбки</option>
                </select>
            </div>
        </div>
    </div>


  <script>
    function changeColor() {
      var data = @json($dataColor);
      var dop = document.getElementById("selectColorName").value;

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


  </script>



    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
@endsection('content')


