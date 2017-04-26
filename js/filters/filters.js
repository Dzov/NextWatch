var bddLength = myShows.length; 

myApp.filter('random', function() {
  return function () {
    var randNum = Math.floor((Math.random() * bddLength) + 1);
  }
}); 
