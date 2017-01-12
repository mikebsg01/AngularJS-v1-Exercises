var app = angular.module('MyFirstApp', [])

app.controller('FirstController', [
  '$scope', '$http',
  function($scope, $http) {
    $scope.posts = []
    $scope.newPost = {}
    $scope.loading = true

    $http.get('http://jsonplaceholder.typicode.com/posts')
      .then(function(res) {
        console.log(res.data)
        $scope.posts = res.data
        $scope.loading = false
      },
      function(err) {
        console.log(err)
        $scope.loading = false
      })
  }
])