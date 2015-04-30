angular
  .module('app.directives')
  .directive('cardSoundcloud', function() {
    return {
      restrict: 'E',
      templateUrl: '/js/templates/card-soundcloud.html'
    }
  })