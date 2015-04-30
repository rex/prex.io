angular
  .module('app.directives')
  .directive('cardNpm', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-npm.html'
    }
  })