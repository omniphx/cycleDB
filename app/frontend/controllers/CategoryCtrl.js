var categoryCtrl = app.controller('CategoryCtrl', function($scope, loadData){

  $scope.category = loadData;

  $scope.products = loadData.products;

});

categoryCtrl.loadData = function($http, $route, $q){

  var category = $route.current.params.category;
  var defer = $q.defer();

  $http.get('/api/categories/'+category).
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(data);
    });

  return defer.promise;
}