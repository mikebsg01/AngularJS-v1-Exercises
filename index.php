<!DOCTYPE html>
<html ng-app="mainModule">
<head>
  <meta charset="utf-8">
  <title>FirstController</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script type="text/javascript" src="angular.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="angular-local-storage.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="controllers.js?v=<?php echo time(); ?>"></script>
</head>
<body ng-controller="FirstController">
  <p>{{ name }}</p>
</body>
</html>