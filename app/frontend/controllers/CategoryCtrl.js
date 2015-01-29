var categoryCtrl = app.controller('CategoryCtrl', function($scope, loadCategory){

  $scope.category = loadCategory;

  $scope.components = loadCategory.components;

});

categoryCtrl.loadCategory = function($http, $route, $q){

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
};