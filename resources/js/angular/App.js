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
  .constant('ENV', PREX_ENV)
  .config(['$interpolateProvider', 'RestangularProvider', function($interpolateProvider, RestangularProvider) {
    console.log(" > window.PREX_ENV", PREX_ENV)
    console.log(" > window.PREX_ENDPOINTS", PREX_ENDPOINTS)

    $interpolateProvider.startSymbol('<<')
    $interpolateProvider.endSymbol('>>')

    RestangularProvider.setBaseUrl(PREX_ENDPOINTS.api_root)
  }])