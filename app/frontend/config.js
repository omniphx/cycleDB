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
        loadSubcategories : subcategoriesCtrl.loadSubcategories
      }
    }).
    when('/subcategories/:subcategory', {
      templateUrl: '/assets/views/subcategories/show.html',
      controller: 'SubcategoryCtrl',
      resolve: {
        loadSubcategory : subcategoryCtrl.loadSubcategory
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
        loadManufacturer : manufacturerCtrl.loadManufacturer
      }
    }).
    when('/components', {
      templateUrl: '/assets/views/components/index.html',
      controller: 'ComponentCtrl',
      resolve: {
        loadComponents : componentsCtrl.loadComponents
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