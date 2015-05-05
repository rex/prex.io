angular
  .module('app.directives')
  .directive('instagramPost', function() {
    return {
      restrict: 'E',
      scope: {
        post: '='
      },
      templateUrl: '/templates/instagram/post.html',
      link: function($scope, $el, $attr, $ctrl) {
        console.log("instagram-post $scope", $scope)
      }
    }
  })