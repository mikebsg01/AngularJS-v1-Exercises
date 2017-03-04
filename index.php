<!DOCTYPE html>
<html ng-app="CustomDirective">
<head>
  <meta charset="utf-8">
  <title>@mikebsg01 | GitHub Repos</title>
  <!-- Cascade Style Sheets included -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?= time(); ?>">
  <!-- JavaScript included -->
  <script src="//code.angularjs.org/1.6.1/angular.js"></script>
  <script src="//code.angularjs.org/1.6.1/angular-route.js"></script>
  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="assets/js/autocomplete-jquery-ui.js"></script>
  <script src="assets/js/app.js?v=<?= time(); ?>"></script>
  <script src="assets/js/directives.js?v=<?= time(); ?>"></script>
  <script src="assets/js/controllers.js?v=<?= time(); ?>"></script>
</head>
<body>
<div class="container" ng-cloak>
  <div class="row">
    <div class="col s12">
      <div ng-view></div>
    </div>
  </div>
</div>
</body>
</html>