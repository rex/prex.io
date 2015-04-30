angular
  .module('app.directives')
  .directive('cardTwitter', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-twitter.html'
    }
  })