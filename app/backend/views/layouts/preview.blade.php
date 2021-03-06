<div ng-controller="ProductsCtrl"> 
  <!-- Blog entry -->
  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-search"></i>
    </div>
    <input type="text" class="form-control" placeholder="Search" ng-model="searchText">
  </div>

  <br />

  <table class="table table-bordered">
    <tr>
      <th>Name</th>
      <th>Brand</th>
      <th>Subcategory</th>
      <th>Price</th>
      <th>Rating</th>
    </tr>
      <tr ng-repeat="product in products | filter:searchText | orderBy:name">
        <td>@{{ product.name }}</td>
        <td>@{{ product.brand.name }}</td>
        <td>@{{ product.subcategory.name }}</td>
        <td>$@{{ product.msrp }}</td>
        <td>@{{ product.rating }}</td>
      </tr>
    <!-- End of product entry for @{{ product.name }} -->
  </table>