var componentsCtrl = app.controller('ComponentsCtrl', ['$scope','$http', function($scope, $http, loadComponents){

  $scope.components = [];

  $scope.filters = [
    {column:"Manufacturer",criteria:"Trek"},
    {column:"Price",criteria:"$100"}
  ];

  $scope.removeFilter = function(filter){
    console.log($scope.filters.indexOf(filter));
    var index = $scope.filters.indexOf(filter);
    if (index > -1) {
        $scope.filters.splice(index, 1);
    }
  };

  $http.get('/api/components').
    success(function(data, status, headers, config) {
      $scope.components = data;
    }).
    error(function(data, status, headers, config) {
      console.log(data);
    });

}]);