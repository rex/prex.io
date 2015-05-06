angular.module('app.controllers', [])
angular.module('app.directives', [])
angular.module('app.factories', [])
angular.module('app.filters', [])
angular.module('app.services', [])
angular
  .module('app.controllers')
  .controller('AppController', ['$scope', function($scope) {
    $scope.foo = "Bar"
  }])
angular
  .module('app.controllers')
  .controller('HomeController', ['$scope', 'Restangular', function($scope, Restangular) {
    $scope.githubCardLoading = true
    $scope.twitterCardLoading = true
    $scope.destinyCardLoading = true
    $scope.digitaloceanCardLoading = true
    $scope.instagramCardLoading = true
    $scope.itunesCardLoading = true
    $scope.lastfmCardLoading = true
    $scope.mixcloudCardLoading = true
    $scope.soundcloudCardLoading = true
    $scope.npmCardLoading = true
    $scope.rubygemsCardLoading = true
    $scope.spotifyCardLoading = true
    $scope.stackexchangeCardLoading = true

    Restangular.one('twitter/users/', 'self').get().then(function(twitter_user) {
      console.log("Twitter User Fetched", twitter_user.plain())
      $scope.twitter_user = twitter_user.plain()
      $scope.twitterCardLoading = false
    })

    Restangular.all('digitalocean/droplets').getList().then(function(droplets) {
      console.log("Digitalocean Droplets Fetched", droplets.plain())
      $scope.digitalocean_droplets = droplets.plain()
      $scope.digitaloceanCardLoading = false
    })

    Restangular.all('npm/modules').getList().then(function(modules) {
      console.log('NPM Modules Fetched', modules.plain())
      $scope.npm_modules = modules.plain()
      $scope.npmCardLoading = false
    })

    Restangular.one('mixcloud/users/self').get().then(function(user) {
      console.log("Mixcloud User Fetched", user.plain())
      $scope.mixcloud_user = user.plain()

      Restangular.all('mixcloud/users/self/cloudcasts').getList().then(function(cloudcasts) {
        console.log("Mixcloud Cloudcasts Fetched", cloudcasts.plain())
        $scope.mixcloud_cloudcasts = cloudcasts.plain()
        $scope.mixcloudCardLoading = false
      })
    })

    Restangular.all('rubygems/gems').getList().then(function(gems) {
      console.log("RubyGems Fetched", gems.plain())
      $scope.rubygems = gems.plain()
      $scope.rubygemsCardLoading = false
    })

    Restangular.one('soundcloud/users/self').get().then(function(user) {
      console.log("Soundcloud User Fetched", user.plain())
      $scope.soundcloud_user = user.plain()

      Restangular.all('soundcloud/users/self/tracks').getList().then(function(tracks) {
        console.log("Soundcloud Tracks Fetched", tracks.plain())
        $scope.soundcloud_tracks = tracks.plain()

        Restangular.all('soundcloud/users/self/playlists').getList().then(function(playlists) {
          console.log("Soundcloud Playlists Fetched", playlists.plain())
          $scope.soundcloud_playlists = playlists.plain()
          $scope.soundcloudCardLoading = false
        })
      })
    })

    Restangular.one('instagram/users/self').get().then(function(user) {
      console.log("Instagram User Fetched", user.plain())
      $scope.instagram_user = user.plain()

      Restangular.all('instagram/users/self/posts').getList().then(function(posts) {
        console.log("Instagram Posts Fetched", posts.plain())
        $scope.instagram_posts = posts.plain()
        $scope.instagramCardLoading = false
      })
    })

    Restangular.all('stackexchange/accounts').getList().then(function(accounts) {
      console.log("Stackexchange Accounts Fetched", accounts.plain())
      $scope.stackexchange_accounts = accounts.plain()
      $scope.stackexchangeCardLoading = false
    })
  }])
angular
  .module('app.directives')
  .directive('instagramPost', function() {
    return {
      restrict: 'E',
      scope: {
        post: '='
      },
      templateUrl: '/templates/instagram/post.html',
      link: function($scope, $el, $attr, $ctrl) {
        console.log("instagram-post $scope", $scope)
      }
    }
  })
angular
  .module('app.directives')
  .directive('cardDestiny', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-destiny.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardDigitalocean', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-digitalocean.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardGithubPush', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-github-push.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardGithubRepository', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-github-repository.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardGithub', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-github.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardInstagram', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-instagram.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardItunes', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-itunes.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardLastfm', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-lastfm.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardMixcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-mixcloud.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardNpm', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-npm.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardRubygems', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-rubygems.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardSoundcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-soundcloud.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardSpotify', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-spotify.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardStackoverflow', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-stackoverflow.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardTwitter', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-twitter.html'
    }
  })
angular
  .module('app.directives')
  .directive('twitterTweet', function() {
    console.log("Twitter Tweet running!")
    return {
      restrict: 'E',
      scope: {
        tweet: '='
      },
      templateUrl: '/templates/twitter-tweet.html',
      link: function($scope, $el, $attr, $ctrl) {
        console.log("twitter-tweet $scope", $scope)
      }
    }
  })
angular
  .module('app.directives')
  .filter('asDate', function() {
    return function(date_string) {
      return new Date(date_string)
    }
  })
var app = angular
  .module('PrexApp', [
    'restangular',
    'ui.router',
    'app.controllers',
    'app.directives',
    'app.factories',
    'app.filters',
    'app.services'
  ])
  .constant('ENV', PREX_ENV)
  .config(['$interpolateProvider', 'RestangularProvider', function($interpolateProvider, RestangularProvider) {
    console.log(" > window.PREX_ENV", PREX_ENV)
    console.log(" > window.PREX_ENDPOINTS", PREX_ENDPOINTS)

    $interpolateProvider.startSymbol('<<')
    $interpolateProvider.endSymbol('>>')

    RestangularProvider.setBaseUrl(PREX_ENDPOINTS.api_root)
  }])
//# sourceMappingURL=prex.js.map