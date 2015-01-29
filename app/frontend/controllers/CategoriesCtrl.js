var categoriesCtrl = app.controller('CategoriesCtrl', function($scope, $http, $location, loadCategories, arrayService){

  $scope.categories = loadCategories;
  $scope.categoriesChunked = arrayService.arrayChunk(loadCategories,3);

  $scope.categoryRoute = function (category) {
    $location.path("/categories/"+category);
  };

  $scope.subcategoryRoute = function (subcategory) {
    $location.path("/subcategories/"+subcategory);
  };

});

categoriesCtrl.loadCategories = function($http, $q){

  var defer = $q.defer();

  $http.get('api/categories').
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(status + data);
    });

  return defer.promise;
};