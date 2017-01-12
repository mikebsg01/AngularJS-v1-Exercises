<!DOCTYPE html>
<html ng-app="MyFirstApp">
<head>
  <meta charset="utf-8">
  <title>FirstController</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script type="text/javascript" src="angular.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="angular-local-storage.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="controllers.js?v=<?php echo time(); ?>"></script>
</head>
<body ng-controller="FirstController">
<div ng-show="loading">Cargando...</div>
<div ng-show="!loading && posts.length <= 0">No se encontraron resultados...</div>
<div ng-show="posts.length > 0" class="animated">
  <div class="block block-2" ng-repeat="post in posts">
    <h3>{{ post.title }}</h3>
    <p>{{ post.body }}</p>
  </div>
</div>
</body>
</html>