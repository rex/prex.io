<?php namespace App\Helpers;

use Request;

class EndpointGenerator {
  public static final function generate() {
    $base_url = asset('/');
    $compiled_endpoints = [];
    $endpoint_map = [
      'digitalocean' => [
        'droplets',
        'droplets/{droplet_id}'
      ],
      'mixcloud' => [
        'users',
        'users/{user_id}',
        'cloudcasts',
        'cloudcasts/{cloudcast_id}'
      ],
      'soundcloud' => [
        'users',
        'users/{user_id}',
        'tracks',
        'tracks/{track_id}',
        'playlists',
        'playlists/{playlist_id}'
      ],
      'instagram' => [
        'users',
        'users/{user_id}',
        'posts',
        'posts/{post_id}'
      ],
      'twitter' => [
        'users',
        'users/{user_id}',
        'tweets',
        'tweets/{tweet_id}',
        'media_objects',
        'media_objects/{media_object_id}'
      ],
      'linkedin' => [
        'users',
        'users/{user_id}',
        'positions',
        'positions/{position_id}'
      ],
      'itunes' => [
        'tracks',
        'tracks/{track_id}',
        'albums',
        'albums/{album_id}',
        'wishlist',
        'wishlist/{wishlist_item_id}'
      ],
      'lastfm' => [
        'nowplaying',
        'users',
        'users/{user_id}',
        'tracks',
        'tracks/{track_id}',
        'albums',
        'albums/{album_id}',
        'artists',
        'artists/{artist_id}',
        'scrobbles',
        'scrobbles/{scrobble_id}'
      ],
      'github' => [
        'users',
        'users/{user_id}',
        'users/{user_id}/repos',
        'users/{user_id}/starred',
        'repos',
        'repos/{repo_id}',
        'pushes',
        'pushes/{push_id}',
        'commits',
        'commits/{commit_id}',
        'gists',
        'gists/{gist_id}',
        'issues',
        'issues/{issue_id}',
        'organizations',
        'organizations/{organization_id}',
        'events',
        'events/type/{event_type}',
        'events/{event_id}'
      ]
    ];

    foreach($endpoint_map as $namespace => $endpoints) {
      $compiled_endpoints[$namespace] = [];

      foreach($endpoints as $endpoint) {
        $compiled_endpoints[$namespace][] = "$base_url$namespace/$endpoint";
      }
    }

    return $compiled_endpoints;
  }
}