<!DOCTYPE html>
<html ng-app="CustomDirective">
<head>
  <meta charset="utf-8">
  <title>FirstController</title>
  <link rel="stylesheet" type="text/css" href="http://materializecss.com/css/ghpages-materialize.css">
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script type="text/javascript" src="angular.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="angular-local-storage.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="controllers.js?v=<?php echo time(); ?>"></script>
</head>
<body ng-controller="AppCtrl">
<div class="container">
  <div class="row">
    <div class="col s10 offset-s1" ng-cloak>
      <h1 ng-show="repos.length > 0">{{ repos.length > 0 ? repos[0].owner.login : null }}<span class="new badge" data-badge-caption="repos">{{ repos.length }}</span></h1>
      <h5>GitHub Repos</h5>
      <ul class="collection">
        <li ng-repeat="repo in repos" class="collection-item avatar">
          <a href="{{ repo.html_url }}">
            <img img-circle="{{ repo.owner.avatar_url }}">
          </a>
          <span class="title">{{ repo.name }}</span>
          <p>{{ repo.description }}</p>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
</body>
</html>