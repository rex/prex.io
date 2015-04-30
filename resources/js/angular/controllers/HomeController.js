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

    Restangular.one('twitter/users/', 'self').get().then(function(twitter_user) {
      console.log("Twitter User Fetched", twitter_user.plain())
      $scope.twitter_user = twitter_user.plain()
      $scope.twitterCardLoading = false
    })

    Restangular.all('digitalocean/droplets').getList().then(function(droplets) {
      console.log("Digitalocean Droplets Fetched", droplets.plain())
      $scope.digitalocean_droplets = droplets.plain()
      $scope.digitaloceanCardLoading = false
    })

    Restangular.all('npm/modules').getList().then(function(modules) {
      console.log('NPM Modules Fetched', modules.plain())
      $scope.npm_modules = modules.plain()
      $scope.npmCardLoading = false
    })

    Restangular.one('mixcloud/users/self').get().then(function(user) {
      console.log("Mixcloud User Fetched", user.plain())
      $scope.mixcloud_user = user.plain()

      Restangular.all('mixcloud/users/self/cloudcasts').getList().then(function(cloudcasts) {
        console.log("Mixcloud Cloudcasts Fetched", cloudcasts.plain())
        $scope.mixcloud_cloudcasts = cloudcasts.plain()
        $scope.mixcloudCardLoading = false
      })
    })

    Restangular.all('rubygems/gems').getList().then(function(gems) {
      console.log("RubyGems Fetched", gems.plain())
      $scope.rubygems = gems.plain()
      $scope.rubygemsCardLoading = false
    })

    Restangular.one('soundcloud/users/self').get().then(function(user) {
      console.log("Soundcloud User Fetched", user.plain())
      $scope.soundcloud_user = user.plain()

      Restangular.all('soundcloud/users/self/tracks').getList().then(function(tracks) {
        console.log("Soundcloud Tracks Fetched", tracks.plain())
        $scope.soundcloud_tracks = tracks.plain()

        Restangular.all('soundcloud/users/self/playlists').getList().then(function(playlists) {
          console.log("Soundcloud Playlists Fetched", playlists.plain())
          $scope.soundcloud_playlists = playlists.plain()
          $scope.soundcloudCardLoading = false
        })
      })
    })

    Restangular.one('instagram/users/self').get().then(function(user) {
      console.log("Instagram User Fetched", user.plain())
      $scope.instagram_user = user.plain()

      Restangular.all('instagram/users/self/posts').getList().then(function(posts) {
        console.log("Instagram Posts Fetched", posts.plain())
        $scope.instagram_posts = posts.plain()
        $scope.instagramCardLoading = false
      })
    })
  }])