var componentsCtrl = app.controller('ComponentsCtrl', ['$scope','$http', function($scope, $http, loadComponents){

  $scope.components = [];

  $http.get('/api/components').
    success(function(data, status, headers, config) {
      $scope.components = data;
    }).
    error(function(data, status, headers, config) {
      console.log(data);
    });

}]);

componentsCtrl.loadComponents = function($http, $q){

  var defer = $q.defer();

  $http.get('api/components').
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(status + data);
    });

  return defer.promise;
};