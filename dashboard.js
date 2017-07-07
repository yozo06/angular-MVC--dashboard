var app=angular.module("dash",["easypiechart"]);
  app.controller("row1-col1",function($scope,$http){
    
    $http.get("branch_name.php").then(function (response) {
        $scope.project_name = response.data;
    });
    $http.get("release.php").then(function (response) {
        $scope.release = response.data;
    });
    // $scope.start_date="2 Feb 2017";
    // $scope.exp_date="31 Dec 2017";
    // $scope.b_version="1.0.3.1";
  });
  app.controller("row1-col2",function($scope,$http){
    $http.get("total_files.php").then(function (response) {
        $scope.tf = response.data;
    });
        $http.get("wip.php").then(function (response) {
        $scope.wip = response.data;
    });
    $http.get("multiple.php").then(function (response) {
        $scope.mu = response.data;
    });

  });
    app.controller("row3-col1",function($scope){
      $scope.prod_env="git";
      $scope.dev_env="";
  });
    app.controller("row3-col2",function($scope){

  });
    app.controller('chartCtrl', ['$scope','$http', function ($scope,$http) {
      var percent;
       $http.get("pie.php").then(function (response) {
        $scope.percentages = response.data;
      });
     

        //$scope.percentages = [['70',"file1.java"],['50',"file2.java"],['66',"file3.java"],[33,"file4.java"]];
    }]);



