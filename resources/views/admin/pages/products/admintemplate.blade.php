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
        <h1>Административная панель</h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/admin/products/product/add" id="" role="button" aria-expanded="false">
                            <b>Добавить</b>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Параметры
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/admin/products/product/edit_param">Изменить</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Удалить</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Цвет
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/admin/products/product/edit_color">Изменить</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Удалить</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <a class="nav-link active" aria-current="page" href="#">На сайт</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
        <div class="col-xs-0 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                @yield('content')
            </div>
        <div class="col-xs-0 col-sm-1 col-md-1 col-lg-1 col xl-1"></div>
        </div>
    </div>


</conteiner>
</body>
</html>
