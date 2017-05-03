var app = angular.module('app', []);

app.filter('randomFilter', function (randomFilter) {
  return function (items) {
    return items[0]; 
  };
});