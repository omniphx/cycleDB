app.directive("comps", function(){
 return {
   restrict: "E",
   templateUrl: "/assets/views/components/index.html",
   link: function(scope, elem, attr, controller){
    // this.components = attr.components;
   }
 };
});