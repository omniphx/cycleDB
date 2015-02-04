var manufacturerCtrl = app.controller('ManufacturerCtrl', function($scope, loadManufacturer){

  $scope.category = loadManufacturer;

  $scope.components = loadManufacturer.components;

  $scope.reverse = true;
  $scope.predicate = 'name';

});

manufacturerCtrl.loadManufacturer = function($http, $route, $q){

  var manufacturer = $route.current.params.manufacturer;
  var defer = $q.defer();
  $http.get('/api/manufacturers/'+manufacturer).
    success(function(data, status, headers, config) {
      defer.resolve(data);
    }).
    error(function(data, status, headers, config) {
      defer.reject(data);
    });

  return defer.promise;
};

app.directive('Caret', function(){
 return {
   restrict: "E",
   isolate: "@",
   templateUrl: "/assets/views/components/index.html",
   link: function(scope, elem, attr, controller){
    scope.caret = "Up";
   }
 };
});