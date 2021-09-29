@extends('template')

@section('filter')
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">
        <div style="text-align: center"><b>Фильтры</b></div>
        <div class="box">
            <h5><span class="close">Цвет </span></h5>
            <ul>
                <li>Персиковый</li>
                <li>Серый</li>
                <li>Белый</li>
                <li>Молочный</li>
            </ul>
        </div>
        <div class="box">
            <h5><span class="close">Форма </span></h5>
            <ul>
                <li>Клатч</li>
                <li>Пельмень</li>
                <li>Мини</li>
            </ul>
        </div>
        <div class="box">
            <h5><span class="close">Сезон </span></h5>
            <ul>
                <li>Лето</li>
                <li>Зима</li>
                <li>Весна</li>
                <li>Осень</li>
            </ul>
        </div>

        <script>
            //Скрипт для работы развёртывания фильтра.
            $(document).ready(function(){
                $("ul").hide();
                $("h5 span").click(function(){

                    //Добавляет + и - в конце списка который сворачивается.
                    if($(this)[0].classList.contains('close')) {
                        $(this)[0].classList.remove('close');
                        $(this)[0].classList.add('open');
                    } else {
                        $(this)[0].classList.add('close');
                        $(this)[0].classList.remove('open');
                    }

                    //Сворачивает и разворачивает
                    $(this).parent().next().slideToggle();
                });
            });
        </script>


    </div>
@endsection




@section('content')

    <style>
        .element {
            background-color: green;
            height: 340px;
            width: 340px;
            margin: 8px 8px 8px 8px;
        }


        img {
            display: block;
            margin:0px;
            position: relative
        }
        div {
            overflow: hidden
        }
    </style>


        <div id="content" class="" style="padding-left: 0">

            <div class="list__banner">

                <div class="list__products row" data-language="ru-ru">




                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 ">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 ">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>
                    <div style=".testy{width:auto;}" class="testy product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                        <div class="product-image-hover" style="opacity: 0; display: block;">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow">
                                <img src="image/1.jpg" alt="Рюкзак кожаный женский Fidelitti">
                            </a>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" title="Рюкзак кожаный женский" rel="nofollow" class="main-img dl-product-click">
                            <div class="label-container">

                                <span class="label" style="color: #000000; background-color: #efecec">Новинка</span>
                                <span class="label" style="color: #ff0a0a; background-color: #ffffff">SALE</span>
                                <span class="label" style="color: #000000; background-color: #efecec">-40%</span>
                            </div>
                            <img src="image/2.jpg" data-main-src="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="main-img-product" alt="Рюкзак кожаный женский Fidelitti">
                            <button class="quick-view-link" type="button" data-product-id="6001" data-product-path="310_394">Быстрый просмотр</button>
                        </a>

                        <div class="colors-background colors">
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" data-count="0" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-r81-milli-f-2021-v2/117-r81-millif-2021-v2-1--1629126924-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d2c0a3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962" data-count="1" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-Arctic-Milli%20silver-F-2021/117-arctlc-mllll-sllver-f-2021-v2-1--1620138101-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #7dc1e3;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084" data-count="2" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-arctic-florencia-f-2021-v2/117-arctlc-florencia-f-2021-v2-3--1624541978-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #8a97cc;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999" data-count="3" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-11-4001-f-2021-v2/117-11-4001-f-2021-v2-1--1629127593-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #f2f2f2;"></div>
                            </a>
                            <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073" data-count="4" title="Рюкзак кожаный женский" data-second-image="https://fidelitti.com/image/cache/catalog/products/bags/117/117-red-piton-f-2021-v2/117-red-plton-f-2021-v2-1--1629127193-326x469.jpg" class="single-color dl-product-click">
                                <div class="single-color__box dl-product-color " style="background: #d11f1f;"></div>
                            </a>

                            <div class="product-size-content product-size-content-0" data-count="0">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001#size=2039407" class="size-content__item">ONE SIZE</a>
                            </div>

                            <div class="product-size-content product-size-content-1" data-count="1">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21014962#size=2033614" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-2" data-count="2">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21025084#size=2033813" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-3" data-count="3">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21055999#size=2039406" class="size-content__item">ONE SIZE</a>
                            </div>
                            <div class="product-size-content product-size-content-4" data-count="4">
                                <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21066073#size=2039458" class="size-content__item">ONE SIZE</a>
                            </div>
                        </div>

                        <a href="https://fidelitti.com/zhenschinam/ryukzak-kozhanyy-zhenskiy-21056001" class="product-info-block">
                        </a><a href="https://fidelitti.com/fidelitti">
                            <div class="product__brand">
                                Fidelitti
                            </div>
                        </a>
                        <div class="product__name">Рюкзак кожаный женский</div>
                        <div class="product__price">
                            <div class="product__price--new">
                                2520 грн.
                            </div>
                            <div class="product__price--old">
                                4200 грн.
                            </div>
                        </div>



                    </div>



                </div>





















    </div>

@endsection
