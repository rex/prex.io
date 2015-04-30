angular
  .module('app.directives')
  .directive('cardStackoverflow', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-stackoverflow.html'
    }
  })