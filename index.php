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
<body ng-controller="ToDoController">
<div class="block block-2" ng-repeat="activity in ToDoActivities">
  <p>{{ activity.description }}</p>
  <small>{{ activity.date | date: 'short' }}<small>
  <a href="#" ng-click="removeActivity(activity)">Delete</a>
</div>
<div class="block block-1">
  <form ng-submit="addActivity()">
    <label>Descripción</label>
    <br>
    <input type="text" ng-model="newActivity.description">
    <br>
    <br>
    <label>Fecha</label>
    <br>
    <input type="datetime-local" ng-model="newActivity.date">
    <br>
    <br>
    <input type="submit" value="Save Activity">
  </form>
  <br>
  <button ng-click="cleanActivities()">Limpiar</button>
</div>
</body>
</html>