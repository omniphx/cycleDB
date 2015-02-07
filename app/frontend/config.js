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
    when('/categories/:category', {
      templateUrl: '/assets/views/categories/show.html',
      controller: 'CategoryCtrl',
      resolve: {
        loadCategory : function(apiService, $route) {
          var category = $route.current.params.category;
          return apiService.get('api/categories/'+category);
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
    when('/subcategories/:subcategory', {
      templateUrl: '/assets/views/subcategories/show.html',
      controller: 'SubcategoryCtrl',
      resolve: {
        loadSubcategory : function(apiService, $route) {
          var subcategory = $route.current.params.subcategory;
          return apiService.get('api/subcategories/'+subcategory);
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
    when('/manufacturers/:manufacturer', {
      templateUrl: '/assets/views/manufacturers/show.html',
      controller: 'ManufacturerCtrl',
      resolve: {
        loadManufacturer : function(apiService, $route) {
          var manufacturer = $route.current.params.manufacturer;
          return apiService.get('api/manufacturers/'+manufacturer);
        }
      }
    }).
    when('/components', {
      templateUrl: '/assets/views/components/index.html',
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