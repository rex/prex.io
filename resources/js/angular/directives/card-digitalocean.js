angular
  .module('app.directives')
  .directive('cardDigitalocean', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-digitalocean.html'
    }
  })