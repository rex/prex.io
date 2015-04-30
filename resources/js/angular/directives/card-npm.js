angular
  .module('app.directives')
  .directive('cardNpm', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-npm.html'
    }
  })