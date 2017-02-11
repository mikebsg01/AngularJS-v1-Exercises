var app = angular.module('MyFirstApp', [])

app.run(function($rootScope) {
  $rootScope.name = 'Michael'
})

app.controller('FirstController', [
  '$scope',
  function($scope) {
    $scope.name = 'Serrato'
  }
])