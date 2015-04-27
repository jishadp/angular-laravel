var anguApp = angular.module('anguApp', []);

anguApp.controller('clientList',function($scope,$http)
{

   $scope.clients=[];

   $http.get('ang').success(function (data, status) {
    $scope.clients = data;
    console.log(data);
   });
});