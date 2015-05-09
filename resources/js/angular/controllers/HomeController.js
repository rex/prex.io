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
    $scope.stackexchangeCardLoading = true

    Restangular.one('twitter/card').get().then(function(card) {
      console.log("Twitter Card Fetched", card.plain())
      $scope.twitter_card = card.plain()
      $scope.twitterCardLoading = false
    })

    Restangular.one('digitalocean/card').get().then(function(card) {
      console.log("Digitalocean Card Fetched", card.plain())
      $scope.digitalocean_card = card.plain()
      $scope.digitaloceanCardLoading = false
    })

    Restangular.one('npm/card').get().then(function(card) {
      console.log('NPM Card Fetched', card.plain())
      $scope.npm_card = card.plain()
      $scope.npmCardLoading = false
    })

    Restangular.one('mixcloud/card').get().then(function(card) {
      console.log("Mixcloud Card Fetched", card.plain())
      $scope.mixcloud_card = card.plain()
      $scope.mixcloudCardLoading = false
    })

    Restangular.one('rubygems/card').get().then(function(card) {
      console.log("RubyGems Card Fetched", card.plain())
      $scope.rubygems_card = card.plain()
      $scope.rubygemsCardLoading = false
    })

    Restangular.one('soundcloud/card').get().then(function(card) {
      console.log("Soundcloud User Fetched", card.plain())
      $scope.soundcloud_card = card.plain()
      $scope.soundcloudCardLoading = false
    })

    Restangular.one('instagram/card').get().then(function(user) {
      console.log("Instagram Card Fetched", user.plain())
      $scope.instagram_card = user.plain()
      $scope.instagramCardLoading = false
    })

    Restangular.one('stackexchange/card').get().then(function(accounts) {
      console.log("Stackexchange Card Fetched", accounts.plain())
      $scope.stackexchange_card = accounts.plain()
      $scope.stackexchangeCardLoading = false
    })
  }])