var app = angular.module('ToDoList', ['LocalStorageModule'])

app.controller('ToDoController', [
  '$scope', 'localStorageService',
  function($scope, localStorageService) {
    $scope.all = [];
    $scope.newActivity = {}

    if (localStorageService.get('todolist')) {
      $scope.all = localStorageService.get('todolist')
    }

    $scope.$watchCollection('all', function(newValue, oldValue) {
      localStorageService.set('todolist', $scope.all)
    })

    $scope.addActivity = function() {
      $scope.all.push($scope.newActivity)
      $scope.newActivity = {}
    }

    $scope.cleanAll = function() {
      $scope.all = []
    }
  }
])
