angular
  .module('app.directives')
  .directive('cardItunes', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-itunes.html'
    }
  })