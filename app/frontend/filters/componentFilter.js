app.filter('componentFilter', function(){
  return function(components, filters){
    var filtered = [];
    angular.forEach(filters, function(filter){
      angular.forEach(components, function(component){
        fieldName = filter.field;
        if(component[fieldName] !== null){
          if(component[fieldName].slug === filter.value){
            filtered.push(component);
          }
        }
      });
    });

    return filtered;

  };
});