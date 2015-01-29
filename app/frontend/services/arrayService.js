app.service('arrayService', function () {

  this.arrayChunk = function(array,chunkSize){
    if(chunkSize > 0){
      var i,j,temp;
      var result = [];
      for (i=0,j=array.length; i<j; i+=chunkSize) {
          temp = array.slice(i,i+chunkSize);
          result.push(temp);
      }
      return result;
    }

  };

});