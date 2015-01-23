app.controller('CategoriesCtrl', function($scope, $http, $location){

  $scope.categories = [];
  $scope.categoriesChunked = [];

  $scope.categoryRoute = function (category) {
    $location.path("/categories/"+category);
  }


  $http.get('/api/categories').
    success(function(data, status, headers, config) {
      $scope.categories = data;
      var i,j,temp,chunk = 3;
      for (i=0,j=data.length; i<j; i+=chunk) {
          temp = data.slice(i,i+chunk);
          $scope.categoriesChunked.push(temp);
      }
    }).
    error(function(data, status, headers, config) {
      console.log(data);
    });

});