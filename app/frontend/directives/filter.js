app.directive("filter", function(){
 return {
   restrict: "E",
   scope: {
    filters: "=",
    remove: "&"
   },
   templateUrl: "/assets/views/directives/filter.html",
 };
});