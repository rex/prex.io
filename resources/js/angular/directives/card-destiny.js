angular
  .module('app.directives')
  .directive('cardDestiny', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-destiny.html'
    }
  })