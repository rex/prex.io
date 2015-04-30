angular
  .module('app.directives')
  .directive('cardStackoverflow', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-stackoverflow.html'
    }
  })