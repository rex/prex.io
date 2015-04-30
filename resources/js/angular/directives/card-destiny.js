angular
  .module('app.directives')
  .directive('cardDestiny', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-destiny.html'
    }
  })