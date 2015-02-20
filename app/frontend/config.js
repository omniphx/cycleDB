app.config(['$routeProvider', '$locationProvider', function($routeProvider,$locationProvider) {
  $routeProvider.
    when('/', {
      templateUrl: '/assets/views/index.html',
      controller: 'CategoriesCtrl',
      resolve: {
        loadCategories : function(apiService) {
          return apiService.get('api/categories');
        }
      }
    }).
    when('/categories', {
      templateUrl: '/assets/views/index.html',
      controller: 'CategoriesCtrl',
      resolve: {
        loadCategories : function(apiService) {
          return apiService.get('api/categories');
        }
      }
    }).
    when('/subcategories', {
      templateUrl: '/assets/views/subcategories/index.html',
      controller: 'SubcategoriesCtrl',
      resolve: {
        loadSubcategories : function(apiService) {
          return apiService.get('api/subcategories');
        }
      }
    }).
    when('/manufacturers', {
      templateUrl: '/assets/views/manufacturers/index.html',
      controller: 'ManufacturersCtrl',
      resolve: {
        loadManufacturers : manufacturersCtrl.loadManufacturers
      }
    }).
    when('/components', {
      templateUrl: '/assets/views/components/show.html',
      controller: 'ComponentsCtrl',
      resolve: {
        loadComponents :  function(apiService) {
          return apiService.get('api/components');
        }
      }
    }).
    when('/components/:component', {
      templateUrl: '/assets/views/components/show.html',
      controller: 'ComponentCtrl',
      resolve: {
        loadComponents :  function(apiService, $route) {
          var component = $route.current.params.component;
          return apiService.get('api/components/'+component);
        }
      }
    }).
    otherwise({
      templateUrl: '/assets/views/index.html',
      controller: 'CategoriesCtrl',
      resolve: {
        loadCategories : categoriesCtrl.loadCategories
      }
    });

    $locationProvider.html5Mode(true);
}]);