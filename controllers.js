var app = angular.module('mainModule', [])

app.controller('FirstController', [
  '$scope', 
  function($scope) {
    $scope.name = 'Michael'

    var $button = document.querySelector('#button')
    
    $button.addEventListener('click', function() {
      $scope.$apply(function() {
        $scope.name = 'Serrato';
        console.log($scope.name)
      })
    })
  }
])