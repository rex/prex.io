angular
  .module('app.directives')
  .directive('cardSpotify', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-spotify.html'
    }
  })