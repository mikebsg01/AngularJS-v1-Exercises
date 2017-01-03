var app = angular.module('mainModule', [])

app.filter('removeHTML', function() {
  return function(text) {
    return String(text).replace(/<[^>]+>/gm, '')
  }
})

app.controller('FiltersController', [
  '$scope',
  function($scope) {
    $scope.myHTML = '<h1>Hello World</h1>'
    $scope.myJSON = {}
    $scope.myJSON.title = 'Some title'
    $scope.myJSON.body = 'Some body'
    $scope.myCurrency = 2
  }
])