angular
  .module('app.directives')
  .directive('cardGithub', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-github.html'
    }
  })