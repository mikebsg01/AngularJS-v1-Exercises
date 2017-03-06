app.controller('MainController', [
  '$scope', '$resource', 'PostResource',
  function($scope, $resource, PostResource) {
    var User = $resource("http://jsonplaceholder.typicode.com/users/:id",  { id: "@id" })

    $scope.posts = PostResource.query()
    $scope.users = User.query()

    $scope.removePost = function(post) {
      if (confirm("Are your sure to do this operation?")) {
        PostResource.delete({
          id: post.id
        }, function(data) {
          console.log("Deleted post: ", data)
          $scope.posts = $scope.posts.filter(function(element) {
            return element.id !== post.id
          })
        })
      }
    }
  }
])

app.controller('PostController', [
  '$scope', '$routeParams', '$location', 'PostResource',
  function($scope, $routeParams, $location, PostResource) {
    $scope.formTitle = "Edit Post"
    
    $scope.post = PostResource.get({
      id: $routeParams.id
    })

    $scope.savePost = function() {
      PostResource.update({ 
        id: $scope.post.id 
      }, { 
        data: $scope.post
      }, function(data) {
        console.log("Updated post: ", data)
      })

      alert("The post has been updated successfully! :)")
      $location.path("/post/" + $scope.post.id)
    }
  }
])

app.controller('NewPostController', [
  '$scope', '$resource', '$location', 'PostResource',
  function($scope, $resource, $location, PostResource) {
    var Post = $resource("http://jsonplaceholder.typicode.com/posts/:id",  { id: "@id" })

    $scope.post = {}
    $scope.formTitle = "Create Post"

    $scope.savePost = function() {
      PostResource.save({
        data: $scope.post
      }, function(data) {
        console.log("Created post: ", data)
      })

      $scope.post = {}
      alert("The post has been created successfully! :)")
      $location.path("/")
    }
  }
])