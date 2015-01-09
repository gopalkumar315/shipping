

app.controller("BookStore",function($scope)
{
  $scope.items = [
  {First:"5674789",Last: "Asp.Net MVC", Point: 560,Status: 20},

  ];
  $scope.editing = false;

  $scope.totalPrice = function(){
    var total = 0;
    for(count=0;count<$scope.items.length;count++){
      total += $scope.items[count].Price*$scope.items[count].Quantity;
    }
    return total;
  }

  $scope.removeItem = function(index){
    $scope.items.splice(index,1);
  }
  $scope.editItem = function(index){
    $scope.editing = $scope.items.indexOf(index);

  }
  $scope.saveField = function(index) {
    if ($scope.editing !== false) {
      $scope.editing = false;
    }
  };
}

);
