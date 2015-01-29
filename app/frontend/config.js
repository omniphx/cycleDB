app.config(['$routeProvider', '$locationProvider', function($routeProvider,$locationProvider) {
  $routeProvider.
    when('/', {
      templateUrl: '/assets/views/index.html',
      controller: 'CategoriesCtrl',
      resolve: {
        loadCategories : categoriesCtrl.loadCategories
      }
    }).
    when('/categories', {
      templateUrl: '/assets/views/index.html',
      controller: 'CategoriesCtrl',
      resolve: {
        loadCategories : categoriesCtrl.loadCategories
      }
    }).
    when('/categories/:category', {
      templateUrl: '/assets/views/categories/show.html',
      controller: 'CategoryCtrl',
      resolve: {
        loadCategory : categoryCtrl.loadCategory
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
    when('/brands', {
      templateUrl: '/assets/views/brands/index.html',
      controller: 'BrandsCtrl',
      resolve: {
        loadBrands : brandsCtrl.loadBrands
      }
    }).
    when('/brands/:brand', {
      templateUrl: '/assets/views/brands/show.html',
      controller: 'BrandCtrl',
      resolve: {
        loadBrand : brandCtrl.loadBrand
      }
    }).
    otherwise({
      redirectTo: '/categories'
    });

    $locationProvider.html5Mode(true);
}]);