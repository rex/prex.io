angular
  .module('app.directives')
  .directive('cardMixcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-mixcloud.html'
    }
  })