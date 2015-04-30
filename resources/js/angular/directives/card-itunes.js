angular
  .module('app.directives')
  .directive('cardItunes', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-itunes.html'
    }
  })