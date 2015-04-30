angular
  .module('app.directives')
  .directive('cardGithub', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-github.html'
    }
  })