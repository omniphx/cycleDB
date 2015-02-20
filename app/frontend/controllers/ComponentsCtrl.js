var componentsCtrl = app.controller('ComponentsCtrl', ['$scope','$http', '$route', 'loadComponents', function($scope, $http, $route, loadComponents){

  $scope.filters = [];

  $scope.params = $route.current.params;
  $scope.components = loadComponents;

  console.log($scope.components);

  $scope.gridOptions = { 
    data: 'components',
    columnDefs: [
      {field:'name', displayName:'Name'},
        {field:'msrp', displayName:'MSRP'},
      {field:'rating', displayName:'Rating'}]
  };

  $scope.showFilter = false;

  $scope.fields = ["rating","msrp","year","manufacturer","category","subcategory"];

  $scope.criteria = [
    {label:"Equal to",value:"="},
    {label:"Greater than",value:">"},
    {label:"Less than",value:"<"},
    {label:"Greater than or equal",value:">="},
    {label:"Less than or equal",value:">="},
    {label:"Contains",value:"//"}
  ];

  $scope.addFilter = function(filter){
    console.log("add:"+filter);
    $scope.filters.push(filter);
    $scope.showFilter = false;
    $scope.filter = {};
  };

  $scope.removeFilter = function(filter){
    console.log($scope.filters.indexOf(filter));
    var index = $scope.filters.indexOf(filter);
    if (index > -1) {
        $scope.filters.splice(index, 1);
    }
  };

  $scope.updateFilters = function(){
    
  }

  (function(){
    angular.forEach($scope.params, function(key, value){
      var filter = {
        field:value,
        criterion: {value:"="},
        value:key
      };
      $scope.addFilter(filter);
    });
  })();

}]);