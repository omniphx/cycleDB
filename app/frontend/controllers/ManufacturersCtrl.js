var manufacturersCtrl = app.controller('ManufacturersCtrl', function($scope, $http, $location, loadManufacturers, arrayService){

  $scope.manufacturers = loadManufacturers;
  $scope.manufacturersChunked = arrayService.arrayChunk(loadManufacturers,4);

  $scope.categoryRoute = function (category) {
    $location.path("/categories/"+category);
  };

  $scope.subcategoryRoute = function (subcategory) {
    $location.path("/subcategories/"+subcategory);
  };

  $scope.manufacturerRoute = function(manufacturer) {
    $location.path("/manufacturers/"+manufacturer);
  };

});

manufacturersCtrl.loadManufacturers = function($http, $q){

  var defer = $q.defer();

  $http.get('api/manufacturers').
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(status + data);
    });

  return defer.promise;
};