var subcategoryCtrl = app.controller('SubcategoryCtrl', function($scope, loadSubcategory){

  $scope.subcategory = loadSubcategory;

  $scope.components = loadSubcategory.components;

});