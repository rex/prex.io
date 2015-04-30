<!DOCTYPE html>
<html lang="en" ng-app="PrexApp">
  <head>
    <title>p.rex | {{ $title or 'home' }}</title>
    <!-- <link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.6/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/css/application.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.14/angular-ui-router.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/3.7.0/lodash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/restangular/1.5.1/restangular.min.js"></script>
    {{-- <script type="text/javascript" src="/js/vendor/react-with-addons.js"></script> --}}
    <!-- <script type="text/javascript" src="/assets/js/vendor/semantic.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.6/semantic.min.js"></script>
    <script type="text/javascript" src="/js/prex.js"></script>
  </head>
  <body ng-controller="AppController">
    @include('partials.sidebar')

    <div class="pusher">
      @yield('content')
    </div>
  </body>
</html>