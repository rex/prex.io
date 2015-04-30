angular
  .module('app.directives')
  .directive('cardTwitter', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-twitter.html'
    }
  })