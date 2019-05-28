<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../images/favicon.png" type="image/png">

  <title>@yield('title') - CSP Analytics</title>

  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

  <link rel="stylesheet" href="{{ asset('css/analytics.css') }}">

  <script src="{{ asset('js/modernizr.js') }}"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->

</head>

@yield('content')

</html>
