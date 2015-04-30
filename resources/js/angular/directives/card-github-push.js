angular
  .module('app.directives')
  .directive('cardGithubPush', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-github-push.html'
    }
  })