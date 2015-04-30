angular
  .module('app.directives')
  .directive('cardMixcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-mixcloud.html'
    }
  })