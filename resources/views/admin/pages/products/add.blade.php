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
                <select onfocus='this.size=5;'     onblur='this.size=1;'
                        onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                    <option selected>Не выбран</option>
                    <option value="1">Красный</option>
                    <option value="2">Черный</option>
                    <option value="3">Салатовый</option>
                    <option value="4">Малиновый</option>
                    <option value="5">Розовый</option>
                    <option value="6">Бежевый</option>
                    <option value="7">Белый</option>
                    <option value="8">Серый</option>
                    <option value="9">Графитовый</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xs-1">
            <input type="color" value="#ff00ff" disabled>
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
            <input type="" class="form-control" id="InputName" aria-describedby="nameHelp">
        </div>
        <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1 col-xl-1">
            <label class="form-label">Скидка:</label>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xs-3">
            <div class="mb-3">
                <select onfocus='this.size=5;'     onblur='this.size=1;'
                        onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                    <option selected>Без скидки</option>
                    <option value="0">3</option>
                    <option value="1">5</option>
                    <option value="2">7</option>
                    <option value="3">10</option>
                    <option value="4">12</option>
                    <option value="5">15</option>
                    <option value="6">17</option>
                    <option value="7">20</option>
                    <option value="8">23</option>
                    <option value="9">25</option>
                    <option value="10">28</option>
                    <option value="11">30</option>
                    <option value="12">35</option>
                    <option value="13">40</option>
                    <option value="14">45</option>
                    <option value="15">50</option>
                    <option value="16">55</option>
                    <option value="17">60</option>
                    <option value="18">65</option>
                    <option value="19">70</option>
                    <option value="20">75</option>
                    <option value="21">80</option>
                    <option value="22">85</option>
                    <option value="23">90</option>

                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <label class="form-label">Итого: 999</label>
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





    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
@endsection('content')


