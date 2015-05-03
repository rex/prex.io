angular
  .module('app.directives')
  .directive('twitterTweet', function() {
    console.log("Twitter Tweet running!")
    return {
      restrict: 'E',
      scope: {
        tweet: '='
      },
      templateUrl: '/templates/twitter-tweet.html',
      link: function($scope, $el, $attr, $ctrl) {
        console.log("twitter-tweet $scope", $scope)
      }
    }
  })