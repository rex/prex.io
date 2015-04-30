angular
  .module('app.directives')
  .directive('cardGithubRepository', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-github-repository.html'
    }
  })