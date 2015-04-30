angular
  .module('app.directives')
  .directive('cardSoundcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/templates/card-soundcloud.html'
    }
  })