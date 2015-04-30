angular
  .module('app.directives')
  .directive('cardRubygems', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-rubygems.html'
    }
  })