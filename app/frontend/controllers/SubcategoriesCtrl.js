var subcategoriesCtrl = app.controller('SubcategoriesCtrl', function($scope, $http, $location, loadSubcategories, arrayService){

  $scope.subcategories = loadSubcategories;
  $scope.categoriesChunked = arrayService.arrayChunk(loadSubcategories,3);

  $scope.subcategoryRoute = function (subcategory) {
    $location.path("/subcategories/"+subcategory);
  };

});

subcategoriesCtrl.loadSubcategories = function($http, $q){

  var defer = $q.defer();

  $http.get('api/subcategories').
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(status + data);
    });

  return defer.promise;
};