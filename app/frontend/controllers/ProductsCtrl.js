app.controller('ProductsCtrl', ['$scope','$http', function($scope, $http){

  $scope.products = [];

  $http.get('/api/products').
    success(function(data, status, headers, config) {
      $scope.products = data;
    }).
    error(function(data, status, headers, config) {
      console.log(data);
    });

}]);