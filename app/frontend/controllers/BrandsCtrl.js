var brandsCtrl = app.controller('BrandsCtrl', function($scope, $http, $location, loadBrands, arrayService){

  $scope.brands = loadBrands;
  $scope.brandsChunked = arrayService.arrayChunk(loadBrands,4);

  $scope.categoryRoute = function (category) {
    $location.path("/categories/"+category);
  };

  $scope.subcategoryRoute = function (subcategory) {
    $location.path("/subcategories/"+subcategory);
  };

  $scope.brandRoute = function(brand) {
    $location.path("/brands/"+brand);
  };

});

brandsCtrl.loadBrands = function($http, $q){

  var defer = $q.defer();

  $http.get('api/brands').
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(status + data);
    });

  return defer.promise;
};