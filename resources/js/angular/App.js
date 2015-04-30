var app = angular
  .module('PrexApp', [
    'restangular',
    'ui.router',
    'app.controllers',
    'app.directives',
    'app.factories',
    'app.filters',
    'app.services'
  ])
  .config(['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('<<')
    $interpolateProvider.endSymbol('>>')
  }])