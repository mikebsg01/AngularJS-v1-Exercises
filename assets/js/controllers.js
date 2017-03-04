app.controller('ReposController', [
  '$scope', '$http', '$routeParams',
  function ($scope, $http, $routeParams) {
    var url = 'https://api.github.com/',
        repoName = null

    if (typeof $routeParams.name !== "undefined" && $routeParams.name != "") {
      $scope.repo = {}
      repoName = $routeParams.name
      url += 'repos/mikebsg01/' + repoName
    } else {
      $scope.repos = []
      $scope.repoNameList = []
      url += 'users/mikebsg01/repos'
    }

    $http.get(url)
    .then(function(res) {
      if (!repoName) {
        $scope.repos = res.data

        for (i = 0; i < res.data.length; ++i) {
          var name = res.data[i].name
          $scope.repoNameList.push(name)
        }
      } else {
        $scope.repo = res.data
      }
    }, function(res) {
      console.log(res)
    })

    $scope.optionSelected = function(val) {
      $scope.$apply(function() {
        $scope.repoNameSearch = val
      })
    }
  }
])