<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Clean Blog
  </title>

  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>

<body class="pt-0">
  <!-- SweetAlert -->
  @include('sweetalert::alert')

  <!-- Navigation -->
  @include('layouts._navbar')

  <!-- Page Header -->

  @yield('header', View::make('layouts._header'))

  <div class="container">
    @yield('content')
  </div>

  <!-- Footer -->

<hr>

@include('layouts._footer')

<script src="{{ asset('js/app.js')}}"></script>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
</body>
</html>