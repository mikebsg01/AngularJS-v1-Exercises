var app = angular.module('MyFirstApp', [])

app.controller('FirstController', function($scope) {
  $scope.name = 'Michael';
  $scope.newComment = {};
  $scope.comments = [
    {
      comment: "Buen tutorial",
      username: "mikebsg01"
    },
    {
      comment: "I love AngularJS",
      username: "MichaelSerrato.MX"
    }
  ];

  $scope.addComment = function() {
    $scope.comments.push($scope.newComment);
    $scope.newComment = {};
  };
});