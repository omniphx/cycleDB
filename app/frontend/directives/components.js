app.directive("components", function(){
 return {
   restrict: "E",
   templateUrl: "/assets/views/components.html",
   link: function(scope, elem, attr, controller){
    // this.components = attr.components;
   }
 };
});