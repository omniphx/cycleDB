var categoriesCtrl = app.controller('CategoriesCtrl', function($scope, $http, $location, loadCategories, arrayService){

  $scope.categories = loadCategories;
  $scope.categoriesChunked = arrayService.arrayChunk(loadCategories,3);

  $scope.categoryRoute = function (category) {
    $location.path("/components");
    $location.search('category',category);
  };

  $scope.subcategoryRoute = function (subcategory) {
    $location.path("/components");
    $location.search('subcategory',subcategory);
  };

});