<!DOCTYPE html>

<html> 
    <head>
        <meta charset="utf-8">
        <title>TooDoo List</title>
        <meta name="description" content="">
        <!-- Responsive layout -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        {{ HTML::style('assets/css/bootstrap.min.css')}}
        {{ HTML::style('assets/css/bootstrap-theme.min.css')}}
        <!-- Javascript that detects HTML5 CSS3 -->
        {{ HTML::script('assets/js/vendor/modernizr-2.6.2.min.js')}}
        <!-- Custom Style Sheet -->
        {{ HTML::style('assets/css/style.css')}}

    </head>
    <body>

 <div class="top-header" id="header">
    <h1>TooDoo <small> ...a bunch of stuff...</small></h1>
       </div>

    <div id="wrap">
      <div class="container">
        <!-- Main List goes here-->
        @yield('content')
      </div>
    </div>
        
        <!-- Javascript -->
        {{HTML::script('/assets/js/vendor/jquery-1.10.2.min.js')}}
        {{HTML::script('assets/js/vendor/bootstrap.min.js')}}
        {{HTML::script('assets/js/plugins.js')}}
        {{HTML::script('assets/js/main.js')}}

    </body>
</html>
