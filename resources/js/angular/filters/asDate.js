angular
  .module('app.directives')
  .filter('asDate', function() {
    return function(date_string) {
      return new Date(date_string)
    }
  })