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

    Restangular.one('twitter/card').get().then(function(card) {
      console.log("Twitter Card Fetched", card.plain())
      $scope.twitter_card = card.plain()
      $scope.twitterCardLoading = false
    })

    Restangular.one('digitalocean/card').get().then(function(card) {
      console.log("Digitalocean Card Fetched", card.plain())
      $scope.digitalocean_card = card.plain()
      $scope.digitaloceanCardLoading = false
    })

    Restangular.one('npm/card').get().then(function(card) {
      console.log('NPM Card Fetched', card.plain())
      $scope.npm_card = card.plain()
      $scope.npmCardLoading = false
    })

    Restangular.one('mixcloud/card').get().then(function(card) {
      console.log("Mixcloud Card Fetched", card.plain())
      $scope.mixcloud_card = card.plain()
      $scope.mixcloudCardLoading = false
    })

    Restangular.one('rubygems/card').get().then(function(card) {
      console.log("RubyGems Card Fetched", card.plain())
      $scope.rubygems_card = card.plain()
      $scope.rubygemsCardLoading = false
    })

    Restangular.one('soundcloud/card').get().then(function(card) {
      console.log("Soundcloud User Fetched", card.plain())
      $scope.soundcloud_card = card.plain()
      $scope.soundcloudCardLoading = false
    })

    Restangular.one('instagram/card').get().then(function(user) {
      console.log("Instagram Card Fetched", user.plain())
      $scope.instagram_card = user.plain()
      $scope.instagramCardLoading = false
    })

    Restangular.one('stackexchange/card').get().then(function(accounts) {
      console.log("Stackexchange Card Fetched", accounts.plain())
      $scope.stackexchange_card = accounts.plain()
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