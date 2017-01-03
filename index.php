<!DOCTYPE html>
<html ng-app="ToDoList">
<head>
  <meta charset="utf-8">
  <title>To Do Controller</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script type="text/javascript" src="angular.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="angular-local-storage.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="controllers.js?v=<?php echo time(); ?>"></script>
</head>
<body ng-controller="ToDoController">
<div class="block block-2" ng-repeat="activity in all">
  <p>{{ activity.description }}</p>
  <small>{{ activity.date | date: 'short' }}<small>
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
  <button ng-click="cleanAll()">Limpiar</button>
</div>
</body>
</html>