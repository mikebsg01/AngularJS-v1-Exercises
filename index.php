<!DOCTYPE html>
<html ng-app="FinalApp">
<head>
  <meta charset="utf-8">
  <title>Social App</title>
  <!-- Cascade Style Sheets included -->
  <link rel="stylesheet" type="text/css" href="assets/css/mdi/materialdesignicons.min.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="assets/css/lumx.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?=time()?>">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- JavaScript files included -->
  <script type="text/javascript" src="assets/js/jquery.min.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/angular.min.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/angular-resource.min.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/angular-route.min.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/velocity.min.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/moment-with-locales.min.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/lumx.min.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/app.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/services.js?v=<?=time()?>"></script>
  <script type="text/javascript" src="assets/js/controllers.js?v=<?=time()?>"></script>
</head>
<body>
  <nav>
    <div class="app-navbar bgc-white tc-pink-500 card" flex-container="row" flex-align="center center">
      <div flex-item="6">
        <h1 class="fs-display-2 display-block">Social App</h1>
      </div>
      <div flex-item="1">
        <a href="#!/">Home</a>
      </div>
      <div flex-item="1">
        <a href="#!/posts/new">Create Post</a>
      </div>
    </div>
  </nav>
  <div class="top-space" flex-container="row" flex-align="center">
    <div ng-view flex-item="8">
    </div>
  </div>
</body>
</html>