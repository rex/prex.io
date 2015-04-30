angular
  .module('app.directives')
  .directive('cardDigitalocean', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-digitalocean.html'
    }
  })