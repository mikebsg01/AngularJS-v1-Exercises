var app = angular.module('MyFirstApp', [])

app.controller('FirstController', [
  '$scope', '$http', 
  function($scope, $http) {
    $scope.posts = []
    $scope.newPost = {};

    $http.get('http://jsonplaceholder.typicode.com/posts')
      .then(function(res) {
        res.data.pop()
        console.log('GET /posts', res)
        $scope.posts = res.data
      },
      function(err) {
        alert(err)
      })

    $scope.addPost = function() {
      $http.post('http://jsonplaceholder.typicode.com/posts', {
        title: $scope.newPost.title,
        body: $scope.newPost.body,
        userId: 1
      })
      .then(function(res) {
        console.log('POST /posts', res)
        $scope.posts.push($scope.newPost)
        $scope.newPost = {}
      },
      function(err) {
        alert(err)
      })
    }
  }
])