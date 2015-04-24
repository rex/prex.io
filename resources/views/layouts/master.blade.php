<!DOCTYPE html>
<html>
  <head>
    <title>p.rex</title>
    <!-- <link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.6/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/css/application.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="/js/vendor/react-with-addons.min.js"></script>
    <!-- <script type="text/javascript" src="/assets/js/vendor/semantic.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.6/semantic.min.js"></script>
  </head>
  <body>
    <div class="ui left vertical labeled icon overlay visible main sidebar menu">
      <div class="logo item">
        pierce moore
      </div>
      <div class="item">
        <div class="ui buttons">
          <a href="https://github.com/rex" class="ui github icon button">
            <i class="github alternate icon"></i>
          </a>
          <a href="https://facebook.com/mrpiercemoore" class="ui facebook icon button">
            <i class="facebook icon"></i>
          </a>
          <a href="https://twitter.com/kiapierce" class="ui twitter icon button">
            <i class="twitter icon"></i>
          </a>
          <a href="https://soundcloud.com/piercemoore" class="ui soundcloud icon button">
            <i class="soundcloud icon"></i>
          </a>
        </div>
      </div>
      <a class="item">
        <i class="home icon"></i>
        Home
      </a>
      <a class="item">
        <i class="block layout icon"></i>
        Topics
      </a>
      <a class="item">
        <i class="smile icon"></i>
        Friends
      </a>
      <a class="item">
        <i class="calendar icon"></i>
        History
      </a>
      <a class="item">
        <i class="mail icon"></i>
        Messages
      </a>
      <a class="item">
        <i class="chat icon"></i>
        Discussions
      </a>
      <a class="item">
        <i class="trophy icon"></i>
        Achievements
      </a>
      <a class="item">
        <i class="shop icon"></i>
        Store
      </a>
      <a class="item">
        <i class="settings icon"></i>
        Settings
      </a>
    </div>
    <div class="pusher">
      @yield('content')
    </div>
  </body>
</html>