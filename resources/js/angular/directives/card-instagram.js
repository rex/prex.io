angular
  .module('app.directives')
  .directive('cardInstagram', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-instagram.html'
    }
  })