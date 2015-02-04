var categoryCtrl = app.controller('CategoryCtrl', function($scope, loadCategory){

  $scope.category = loadCategory;

  $scope.components = loadCategory.components;

});