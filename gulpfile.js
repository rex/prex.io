var gulp = require('gulp')
  , elixir = require('laravel-elixir')

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

gulp.task("angular_templates", function() {
  gulp
    .src(['resources/js/angular/templates/**/*.html'])
    .pipe(gulp.dest('public/js/templates'))
})

elixir(function(mix) {
  mix
    .scripts([
      'angular/Preload.js',
      'angular/controllers/**/*.js',
      'angular/directives/**/*.js',
      'angular/factories/**/*.js',
      'angular/filters/**/*.js',
      'angular/services/**/*.js',
      'angular/App.js'
    ], 'public/js/prex.js')
    .sass('application.scss')

  mix.task('angular_templates', 'resources/js/angular/templates/**/*.html')
});
