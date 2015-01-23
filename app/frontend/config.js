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