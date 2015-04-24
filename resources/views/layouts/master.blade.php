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
        <a href="#" class="ui fluid github button">
          <i class="github icon"></i>
          GitHub
        </a>
      </div>
      <div class="item">
        <a href="#" class="ui fluid linkedin button">
          <i class="linkedin icon"></i>
          Linkedin
        </a>
      </div>
      <a href="#" class="item js-digitalocean-status">
        <b>DIGITALOCEAN STATUS</b>
      </a>
      <a href="#" class="item">
        <b>ACTIVITY FEED</b>
      </a>
      <div class="item">
        <b>CODE</b>
        <div class="menu">
          <div class="item">
            <i class="github icon"></i>
            <b>GitHub</b>
            <div class="menu">
              <a href="#" class="item">
                <div class="ui mini label">32</div>
                Repositories
              </a>
              <a href="#" class="item">
                <div class="ui mini label">74</div>
                Gists
              </a>
            </div>
          </div>
          <a href="#" class="item">
            <div class="ui mini label">17</div>
            NPM Modules
          </a>
          <a href="#" class="item">
            <div class="ui mini label">2</div>
            Ruby Gems
          </a>
        </div>
      </div>
      <div class="item">
        <b>MUSIC</b>
        <div class="menu">
          <a href="https://soundcloud.com/piercemoore" class="item">
            <i class="soundcloud icon"></i>
            Soundcloud
          </a>
          <a href="#" class="item">
            Mixcloud
          </a>
          <a href="#" class="item">
            <i class="apple icon"></i>
            iTunes
          </a>
          <a href="#" class="item">
            <i class="spotify icon"></i>
            Spotify
          </a>
          <a href="#" class="item">
            <i class="lastfm icon"></i>
            Last.fm
          </a>
        </div>
      </div>
      <div class="item">
        <b>SOCIAL</b>
        <div class="menu">
          <a href="https://twitter.com/kiapierce" class="item">
            <i class="twitter icon"></i>
            Twitter
          </a>
          <a href="https://facebook.com/mrpiercemoore" class="item">
            <i class="facebook icon"></i>
            Facebook
          </a>
          <a href="#" class="item">
            <i class="instagram icon"></i>
            Instagram
          </a>
          <a href="#" class="item">
            <i class="google plus icon"></i>
            Google+
          </a>
          <a href="#" class="item">
            <i class="reddit icon"></i>
            Reddit
          </a>
          <a href="#" class="item">
            <i class="skype icon"></i>
            Skype
          </a>
          <a href="#" class="item">
            <i class="stack exchange icon"></i>
            StackExchange
          </a>
        </div>
      </div>
    </div>
    <div class="pusher">
      @yield('content')
    </div>
  </body>
</html>