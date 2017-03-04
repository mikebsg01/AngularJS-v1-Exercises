<!DOCTYPE html>
<html ng-app="CustomDirective">
<head>
  <meta charset="utf-8">
  <title>FirstController</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script type="text/javascript" src="angular.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="autocomplete-jquery-ui.js?v=<?php echo time(); ?>"></script>
  <script type="text/javascript" src="controllers.js?v=<?php echo time(); ?>"></script>
</head>
<body ng-controller="AppCtrl">
<div class="container">
  <div class="row">
    <div class="col s12" ng-cloak>
      <h1 ng-show="repos.length > 0">{{ repos.length > 0 ? repos[0].owner.login : null }}<span class="new badge" data-badge-caption="repos">{{ repos.length }}</span></h1>
      <h5>GitHub Repos</h5>
      <div class="col offset-s8 s4">
        <form>
          <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input id="repo_search" type="text" my-autocomplete="repoNameList">
          <i ng-show="repoNameSearch" class="clear-input material-icons red-text" clear-input>close</i>
          <label for="repo_search">Buscar un repositorio</label>
        </div>
        </form>
      </div>
      <ul class="collection">
        <li ng-repeat="repo in repos" ng-show="!repoNameSearch || repoNameSearch == repo.name" class="collection-item avatar">
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