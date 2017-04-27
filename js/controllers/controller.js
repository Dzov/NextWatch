var app = angular.module('myApp', []);

app.controller('MainCtrl', function($scope, $http) {
  $http.get("model/model.php")
  .then(function(response) {
    $scope.myShows = response.data.shows;
  });

});

