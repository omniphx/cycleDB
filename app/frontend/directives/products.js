app.directive("products", function(){
 return {
   restrict: "E",
   templateUrl: "/assets/views/products.html",
   link: function(scope, elem, attr, controller){
    // this.products = attr.products;
   }
 };
});