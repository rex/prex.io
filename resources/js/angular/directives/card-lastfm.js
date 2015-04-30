angular
  .module('app.directives')
  .directive('cardLastfm', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-lastfm.html'
    }
  })