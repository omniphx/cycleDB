var brandCtrl = app.controller('BrandCtrl', function($scope, loadBrand){

  $scope.category = loadBrand;

  $scope.components = loadBrand.components;

});

brandCtrl.loadBrand = function($http, $route, $q){

  var brand = $route.current.params.brand;
  var defer = $q.defer();
  $http.get('/api/brands/'+brand).
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(data);
    });

  return defer.promise;
};