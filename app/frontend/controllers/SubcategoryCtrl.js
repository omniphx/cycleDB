var subcategoryCtrl = app.controller('SubcategoryCtrl', function($scope, loadSubcategory){

  $scope.subcategory = loadSubcategory;

  $scope.components = loadSubcategory.components;

});

categoryCtrl.loadSubcategory = function($http, $route, $q){

  var subcategory = $route.current.params.subcategory;
  var defer = $q.defer();
  $http.get('/api/subcategories/'+subcategory).
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(data);
    });

  return defer.promise;
};