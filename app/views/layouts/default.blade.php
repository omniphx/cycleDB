<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')

    <!-- Bootstrap -->
    {{ HTML::style(asset('assets/styles/compress/styles.css')) }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body>

    @include('layouts.navbar')

    <div class="container">

      @yield('container')

      @include('layouts.footer')
      
    </div>

    @include('layouts.scripts.disqus')

	</body>

  {{ HTML::script(asset('assets/javascript/compress/built.js')) }}

</html>