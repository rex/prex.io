angular
  .module('app.directives')
  .directive('cardRubygems', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-rubygems.html'
    }
  })