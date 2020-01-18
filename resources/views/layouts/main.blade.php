<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Clean Blog
  </title>

  <meta name="description" content="A Blog Theme by Start Bootstrap">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="canonical" href="https://blackrockdigital.github.io/startbootstrap-clean-blog-jekyll/">
  <link rel="alternate" type="application/rss+xml" title="Clean Blog" href="/startbootstrap-clean-blog-jekyll/feed.xml">

</head>

<body>
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