var app = angular.module('CustomDirective', [])

app.controller('AppCtrl', [
  '$scope', '$http',
  function ($scope, $http) {
    $scope.repos = [];

    $http.get('https://api.github.com/users/mikebsg01/repos')
    .then(function(res) {
      $scope.repos = res.data;
    }, function(res) {
      console.log(res)
    })
  }
])