var app = angular.module('MyFirstApp', [])

app.service('ToDoService', ['localStorageService', 
  function(localStorageService) {
    this.key = "ToDoList";
    this.activities = [];

    if (localStorageService.get(this.key)) {
      this.activities = localStorageService.get(this.key)
    }

    this.getAll = function() {
      return this.activities
    }

    this.add = function(newActivity) {
      this.activities.push(newActivity)
      this.updateLocalStorage()
    }

    this.updateLocalStorage = function() {
      localStorageService.set(this.key, this.activities)
    }

    this.removeItem = function(item) {
      this.activities = this.activities.filter(function(activity) {
        return activity !== item
      })
      this.updateLocalStorage()
      return this.getAll()
    }

    this.clean = function() {
      this.activities = []
      this.updateLocalStorage()
      return this.activities
    }
  }
]);

app.controller('ToDoController', [
  '$scope', 'ToDoService',
  function($scope, ToDoService) {
    $scope.ToDoActivities = ToDoService.getAll();
    $scope.newActivity = {}

    $scope.addActivity = function() {
      ToDoService.add($scope.newActivity)
      $scope.newActivity = {}
    }

    $scope.removeActivity = function(item) {
      $scope.ToDoActivities = ToDoService.removeItem(item)
    }

    $scope.cleanActivities = function() {
      $scope.ToDoActivities = ToDoService.clean();
    }
  }
])
