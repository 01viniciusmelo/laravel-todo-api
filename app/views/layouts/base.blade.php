<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Todo List App</title>
  {{ HTML::style('css/vendor/bootstrap.css') }}
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  {{ HTML::style('css/main.css') }}
</head>
<body>

  @yield('main')

  {{ HTML::style('js/vendor/bootstrap.js') }}
  @section('scripts')
  @show
</body>
</html>