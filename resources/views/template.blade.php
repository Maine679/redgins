<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <style>

        h5 { cursor:pointer;}
        span.close:after {
            content: "+"; /* Добавляемый текст */
        }
        span.open:after {
            content: "-"; /* Добавляемый текст */
        }
    </style>

    <title>Document</title>


    <link href="css/ocfilter.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/product-list.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/desktop-prod.css" type="text/css" rel="stylesheet" media="screen">


    <script src="js/saved_resource" type="text/javascript"></script>
    <script charset="utf-8" src="js/identify.js"></script><script src="js/f.txt"></script>



</head>
<body>
<conteiner>
    <div style="text-align: center;">
        <h1>REDGINS <br></h1>
        <h5>Место, где можно увидеть асортимент.</h5>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><b>На главную</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>Новинки</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>Весна</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>Осень</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active button-danger" aria-current="page" href="#"><b><div style="color: red">SALE</div></b></a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Найти</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            @yield('filter')


            <script>
                window[window.TiktokAnalyticsObject].instance("C2N0ANKQTD9EQVJR1L2G").track("ViewContent",{"pixelMethod":"standard"});
            </script>
            <script>
                dataLayer.push({
                    event: "gtagDynRem",
                    dynRemEventName: "view_item_list"
                });
            </script>



            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-10 col-xl-10">
                    @yield('content')
            </div>
        </div>

</conteiner>
</body>
<footer>
    <script src="js/product-list.min.js.загружено" type="text/javascript" defer=""></script>
    <script src="js/default.min.js.загружено" type="text/javascript" defer=""></script>

        <div class="row">
            <div class="col-xs-0 col-sm-0 col-md-1 col-lg-3 col-xl-3"></div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2"><a href="about">Инфо о нас</a><br><br></div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2"><a href="delivery">Доставка</a><br><br></div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2"><a href="contacts">Контакты</a><br><br></div>
            <div class="col-xs-0 col-sm-0 col-md-1 col-lg-3 col-xl-3"></div>
        </div>
    </div>


</footer>
</html>
