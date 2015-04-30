angular
  .module('app.directives')
  .directive('cardGithubPush', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-github-push.html'
    }
  })