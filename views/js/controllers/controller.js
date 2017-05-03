var app = angular.module('myApp', []);

app.controller('MainCtrl', function($scope, $http) {
  $http.get("model/model.php")
  .then(function(response) {
    $scope.myShows = response.data.shows;
    // $scope.random = Math.floor(Math.random() * 15);
  });

});

