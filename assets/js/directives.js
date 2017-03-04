app.directive('myAutocomplete', function() {
  
  function link(scope, element, attrs) {
    $(element).keyup(function() {
      if ($(this).val() == "") {
        scope.$apply(function() {
          scope.repoNameSearch = null
        })
      }
    })

    $.ui.autocomplete({
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
    }, $(element))
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