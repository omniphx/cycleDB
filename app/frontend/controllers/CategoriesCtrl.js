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