<!DOCTYPE html>
<html ng-app>
<head>
  <meta charset="utf-8">
  <title>FirstController</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script type="text/javascript" src="angular.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="angular-local-storage.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="controllers.js?v=<?php echo time(); ?>"></script>
<style type="text/css">
.hover {
  background-color: rgb(250, 50, 50); 
}

.border {
  border: 3px solid rgb(250, 250, 50);
}

.no-hover {
  background-color: rgb(50, 250, 50);
}

.bg-blue {
  background-color: rgb(50, 50, 250);
}

</style>
</head>
<body>
  <button ng-click="bgBlue = !bgBlue" ng-mouseover="flag = true" ng-mouseout="flag = false" ng-class="{ 'hover border': flag, 'no-hover': !flag, 'bg-blue': bgBlue }">
    Hover me
  </button>
  <span ng-show="flag">&lt; Click me</span>
  <p>{{ flag | json }}</p>
</div>
</body>
</html>