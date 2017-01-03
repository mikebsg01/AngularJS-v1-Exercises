<!DOCTYPE html>
<html ng-app="MyFirstApp">
<head>
  <meta charset="utf-8">
  <title>First Controller</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script type="text/javascript" src="angular.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="angular-local-storage.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="controllers.js?v=<?php echo time(); ?>"></script>
</head>
<body ng-controller="FirstController">
  <div class="block block-1">
    <label>
      Titulo:
      <br>
      <input type="text" ng-model="newPost.title">
    </label>
    <br>
    <br>
    <label>
      Cuerpo:
      <br>
      <textarea ng-model="newPost.body"></textarea>
    </label>
    <br>
    <br>
    <button ng-click="addPost()">Postear</button>
  </div>
  <div class="block block-2" ng-repeat="post in posts">
    <h3>{{ post.title }}</h3>
    <p>{{ post.body }}</p>
  </div>
</body>
</html>