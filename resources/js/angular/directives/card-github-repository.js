angular
  .module('app.directives')
  .directive('cardGithubRepository', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-github-repository.html'
    }
  })