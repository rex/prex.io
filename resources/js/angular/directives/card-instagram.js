angular
  .module('app.directives')
  .directive('cardInstagram', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-instagram.html'
    }
  })