var app = angular.module('CustomDirective', [])

app.directive('myAutocomplete', function() {

  function link(scope, element, attrs) {

    $(element).autocomplete({
      source: scope.$eval(attrs.myAutocomplete),
      select: function(event, ui) {
        event.preventDefault()

        if (ui.item) {
          scope.optionSelected(ui.item.value)
        }
      },
      focus: function(event, ui) {
        event.preventDefault()
        $(this).val(ui.item.label)
      }
    })
  }

  return {
    link: link
  }
})

app.directive('clearInput', function() {

  function link(scope, element, attrs) {

    $(element).click(function(event) {
      event.preventDefault()
      
      scope.$apply(function() {
        scope.repoNameSearch = null
      })

      $(element).siblings('input').val('')
    })
  }

  return {
    link: link
  }
})

app.directive('imgCircle', function() {
  return function($scope, $element, attrs) {
    attrs.$observe('imgCircle', function(val) {
      $element
        .attr({
          'src': val
        })
        .addClass('circle')
    })
  }
})

app.controller('AppCtrl', [
  '$scope', '$http',
  function ($scope, $http) {
    $scope.repos = []
    $scope.repoNameList = []

    $http.get('https://api.github.com/users/mikebsg01/repos')
    .then(function(res) {
      $scope.repos = res.data

      for (i = 0; i < res.data.length; ++i) {
        var name = res.data[i].name
        $scope.repoNameList.push(name)
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