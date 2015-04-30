angular
  .module('app.directives')
  .directive('cardLastfm', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-lastfm.html'
    }
  })