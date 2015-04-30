angular
  .module('app.directives')
  .directive('cardSpotify', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-spotify.html'
    }
  })