<!DOCTYPE html>
<html>
  <head>
    <title>p.rex</title>
    <!-- <link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.6/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/css/application.css">
    <script type="text/javascript" src="/js/vendor/react-with-addons.min.js"></script>
    <!-- <script type="text/javascript" src="/assets/js/vendor/semantic.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.6/semantic.min.js"></script>
  </head>
  <body>
    <header>
      <div class="ui grid">
        <div class="five wide left floated column logo">
          <a href="/">pierce moore</a>
        </div>
        <div class="three wide right floated column">
          <a href="https://github.com/rex" class="ui circular github icon button">
            <i class="github alternate icon"></i>
          </a>
          <a href="https://facebook.com/mrpiercemoore" class="ui circular facebook icon button">
            <i class="facebook icon"></i>
          </a>
          <a href="https://twitter.com/kiapierce" class="ui circular twitter icon button">
            <i class="twitter icon"></i>
          </a>
          <a href="https://soundcloud.com/piercemoore" class="ui circular soundcloud icon button">
            <i class="soundcloud icon"></i>
          </a>
        </div>
      </div>
    </header>

    @yield('content')

  </body>
</html>