var app = angular.module('cycleDB', ['lodash','ngRoute']);

app.config(['$routeProvider', '$locationProvider', function($routeProvider,$locationProvider) {
  $routeProvider.
    when('/', {
      templateUrl: '/assets/views/index.html',
      controller: 'CategoriesCtrl'
    }).
    when('/categories', {
      templateUrl: '/assets/views/index.html',
      controller: 'CategoriesCtrl'
    }).
    when('/categories/:category', {
      templateUrl: '/assets/views/categories/show.html',
      controller: 'CategoryCtrl',
      resolve: {
        loadData : categoryCtrl.loadData
      }
    }).
    otherwise({
      redirectTo: '/categories'
    });

    $locationProvider.html5Mode(true);
}]);

app.controller("AppCtrl", function ($rootScope) {
  $rootScope.$on("$routeChangeError", function (event, current, previous, rejection) {
    console.log(event);
  });
});

app.controller('ProductsCtrl', ['$scope','$http', function($scope, $http){

  $scope.products = [];

  $http.get('/api/products').
    success(function(data, status, headers, config) {
      $scope.products = data;
    }).
    error(function(data, status, headers, config) {
      console.log(data);
    });

}]);

app.controller('CategoriesCtrl', function($scope, $http, $location){

  $scope.categories = [];
  $scope.categoriesChunked = [];

  $scope.categoryRoute = function (category) {
    $location.path("/categories/"+category);
  }


  $http.get('/api/categories').
    success(function(data, status, headers, config) {
      $scope.categories = data;
      var i,j,temp,chunk = 3;
      for (i=0,j=data.length; i<j; i+=chunk) {
          temp = data.slice(i,i+chunk);
          $scope.categoriesChunked.push(temp);
      }
    }).
    error(function(data, status, headers, config) {
      console.log(data);
    });

});

var categoryCtrl = app.controller('CategoryCtrl', function($scope, loadData){

  $scope.category = loadData;

  $scope.products = loadData.products;

});

categoryCtrl.loadData = function($http, $route, $q){

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
}

app.directive("products", function(){
 return {
   restrict: "E",
   templateUrl: "/assets/views/products.html",
   link: function(scope, elem, attr, controller){
    // this.products = attr.products;
   }
 };
});