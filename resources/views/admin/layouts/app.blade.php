<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('/image/admin/svg/logo.svg')}}" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('/css/admin/style.css')}}">

  <!-- Main styles -->
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('/css/admin/app-admin.css')}}">
</head>

<body>

@yield('content')

<!-- Chart library -->
<script src="{{asset('/plugins/admin/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{asset('/plugins/admin/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('/js/admin/script.js')}}"></script>

<!-- Custom scripts -->
<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/admin/app-admin.js')}}"></script>
</body>

</html>
