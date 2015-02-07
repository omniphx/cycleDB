var subcategoriesCtrl = app.controller('SubcategoriesCtrl', function($scope, $http, $location, loadSubcategories, arrayService){

  $scope.subcategories = loadSubcategories;
  $scope.categoriesChunked = arrayService.arrayChunk(loadSubcategories,3);

  $scope.subcategoryRoute = function (subcategory) {
    $location.path("/subcategories/"+subcategory);
  };

});