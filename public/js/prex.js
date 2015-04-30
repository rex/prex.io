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
    $scope.stackoverflowCardLoading = true
  }])
angular
  .module('app.directives')
  .directive('cardDestiny', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-destiny.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardDigitalocean', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-digitalocean.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardGithubPush', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-github-push.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardGithubRepository', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-github-repository.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardGithub', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-github.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardInstagram', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-instagram.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardItunes', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-itunes.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardLastfm', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-lastfm.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardMixcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-mixcloud.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardNpm', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-npm.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardRubygems', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-rubygems.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardSoundcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-soundcloud.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardSpotify', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-spotify.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardStackoverflow', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-stackoverflow.html'
    }
  })
angular
  .module('app.directives')
  .directive('cardTwitter', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-twitter.html'
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
  .config(['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('<<')
    $interpolateProvider.endSymbol('>>')
  }])
//# sourceMappingURL=prex.js.map