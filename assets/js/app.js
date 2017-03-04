app = angular.module('CustomDirective', ['ngRoute'])

app.config([
  '$routeProvider',
  function($routeProvider) {
    $routeProvider
      .when("/", {
        controller: "ReposController",
        templateUrl: "templates/home.html"
      })
      .when("/repo/:name", {
        controller: "ReposController",
        templateUrl: "templates/repo.html"
      })
      .otherwise("/")
  }
])