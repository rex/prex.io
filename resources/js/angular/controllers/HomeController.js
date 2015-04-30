angular
  .module('app.controllers')
  .controller('HomeController', ['$scope', 'Restangular', function($scope, Restangular) {
    $scope.githubCardLoading = true
    $scope.twitterCardLoading = true
    $scope.destinyCardLoading = true
    $scope.digitaloceanCardLoading = true
    $scope.instagramCardLoading = true
    $scope.itunesCardLoading = true
    $scope.lastfmCardLoading = true
    $scope.mixcloudCardLoading = true
    $scope.soundcloudCardLoading = true
    $scope.npmCardLoading = true
    $scope.rubygemsCardLoading = true
    $scope.spotifyCardLoading = true
    $scope.stackoverflowCardLoading = true
  }])