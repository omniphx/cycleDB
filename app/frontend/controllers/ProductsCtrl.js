app.controller('ComponentsCtrl', ['$scope','$http', function($scope, $http){

  $scope.components = [];

  $http.get('/api/components').
    success(function(data, status, headers, config) {
      $scope.components = data;
    }).
    error(function(data, status, headers, config) {
      console.log(data);
    });

}]);