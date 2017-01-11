var app = angular.module('mainModule', [])

app.controller('FirstController', [
  '$scope', 
  function($scope) {
    $scope.name = 'Michael';

    setTimeout(function() {
      $scope.$apply(function() {
        $scope.name = 'Serrato';
        console.log($scope.name);
      });
    }, 2000);
  }
])