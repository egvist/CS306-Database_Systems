<?php
    include "config2.php";
?>

<!DOCTYPE html>

<html>

  <p><font face = "courier" size = "2" color = "#000000">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

</html>






<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>  
<body>
  <style>

    

      table {
      border-collapse: separate;
      border-spacing: 3;
      color: #4a4a4d;
      font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    th,
    td {
      padding: 20px 30px;
      vertical-align: middle;
    }
    thead {
      background: #395870;
      color: #fff;
    }
    th:first-child {
      text-align: center;
    }
    tbody tr:nth-child(even) {
      background: #d6eaf8;
    }
    td {
      border-bottom: 1px solid #cecfd5;
      border-right: 1px solid #cecfd5;
    }
    td:first-child {
      border-left: 1px solid #cecfd5;
    }
    .book-title {
      color: #395870;
      display: block;
    }
    .item-id {
      text-align: center;
    }
    .item-name {
      text-align: center;
    }
    .item-plays {
      text-align: center;
    }
    .item-rate {
      text-align: center;
    }
    .item-genre {
      text-align: center;
    }
    .item-date {
      text-align: right;
    }
    .item-multiple {
      display: block;
    }
    tfoot {
      text-align: center;
    }
    tfoot tr:last-child {
      background: #f0f0f2;
    }



  </style>  
  <body>
  <div class="content">
  <style>
  body {
            margin: 0;
              
            font-family: "Source Sans Pro", sans-serif ;
            min-height: 100vh;
            display: grid;
            place-content: center;
            text-align: center;
            background: #d6eaf8;
          }
          
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      /* Change the link color to #111 (black) on hover */
      li a:hover {
        background-color: #111;
      }

      .active {
        background-color: #3887FF;
      }



      .content {
        max-width: 1200px;
        margin: auto;
        background: #D6EAF8;
        padding: auto;
      }
      button {
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
            } 
        .button1 {
        background-color: white; 
        color: #3887FF; 
        border: 2px solid #3887FF;
      }

      .button1:hover {
        background-color: #95BFFF;
        color: #3887FF;
      }
      




      h1 {

        
      font-size: clamp(1rem, 3vw + 1rem, 4rem);

      position: relative;
      font-family: "Source Code Pro", monospace;
      background: black;
      -webkit-text-fill-color: transparent;
      -webkit-background-clip: text;
      position: relative;
      width: max-content;
      }

      h1::before,

      h1::after{
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left:0;

      }

      h1::before{
        background: #d6eaf8;
        animation: typewriter 6s steps(11) 1s forwards;

      }

      h1::after{
        width: 0.070em;
        background: black;
        animation: 
        typewriter 6s steps(11) 1s forwards,
        blink 750ms steps(11) infinite;

      }

      @keyframes typewriter {
      to{
        left: 100%;
      }}



      @keyframes blink {
      to{
        background: transparent;
      }}
      </style>

  <center>
  <h1 class="text"> biblioteque</h1>
  
  <ul>
    
  <li><a href="admin.php">Music</a></li>
    <li><a href="admin_artist.php">Artist</a></li>
    <li><a href="admin_album.php">Album</a></li>
    <li><a href="admin_producer.php">Producer</a></li>
    <li><a href="admin_playlist.php">Playlist</a></li>
    <li><a href="admin_publisher.php">Publisher</a></li>
    <li><a href="admin_platform.php">Platform</a></li>
    <li><a href="relation_creates.php">Creates Relation</a></li>
    <li><a href="relation_have.php">Have Relation</a></li>
    <li><a href="relation_produces.php">Produces Relation</a></li>
    <li><a href="relation_contains.php">Contains Relation</a></li>
    <li><a href="relation_liston.php">Relation List on</a></li>
    <li><a href="relation_bargains.php">Relation Bargains</a></li>
    <li><a href="relation_publishes.php">Relation Publishes</a></li>
    <li><a href="relation_contracts.php">Relation Contracts</a></li>
    <li style="float:right"  ><a class="active" href="login.php">Log out</a></li>
    <li style="float:right"><a class="active" href="support.php">Support</a></li>
  </ul>
  <br>
  <div class="container">  
    <div class="table-responsive" ng-app="liveApp" ng-controller="liveController" ng-init="fetchData()">
      <div class="alert alert-success alert-dismissible" ng-show="success" >
          <a href="#" class="close" data-dismiss="alert" ng-click="closeMsg()" aria-label="close">&times;</a>
          {{successMessage}}
      </div>
      <form name="testform" ng-submit="insertData()">
      <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col"> Music Name  </th>
            <th scope="col">Album Name  </th>

            <th scope="col"> </th>

            <br>
        </tr>
    </thead>
    <tbody>
    <tr>
          <td><input type="text" ng-model="addData.music_id" class="form-control" placeholder="Enter the music ID" ng-required="true" /></td>
          <td><input type="text" ng-model="addData.album_id" class="form-control" placeholder="Enter the album ID" ng-required="true" /></td>

          

          <td><button style="background-color: green; border-color:blue; color:white" type="submit" class="btn btn-success btn-sm" ng-disabled="testform.$invalid">Add</button></td>
      </tr>
      <tr ng-repeat="data in namesData" ng-include="getTemplate(data)">
      </tr>
      </tbody>
      </table>
      </form>
      <script type="text/ng-template" id="display">
                    <td>{{data.music_name}}</td>
                    <td>{{data.album_name}}</td>

                    <td>
                        <button type="button" class="btn btn-danger btn-sm" ng-click="deleteData(data.music_id)">Delete</button>
                    </td>
                </script>
                </div>  
  </div>
  </body> 
  </html>
  <script>
    var app = angular.module('liveApp', []);

app.controller('liveController', function($scope, $http){

    $scope.formData = {};
    $scope.addData = {};
    $scope.success = false;

    $scope.getTemplate = function(data){
        if (data.music_id === $scope.formData.music_id)
        {
            return 'edit';
        }
        else
        {
            return 'display';
        }
    };

    $scope.fetchData = function(){
        $http.get('relation_contains_select.php').success(function(data){
            $scope.namesData = data;
        });
    };

    $scope.insertData = function(){
        $http({
            method:"POST",
            url:"relation_contains_insert.php",
            data:$scope.addData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.addData = {};
        });
    };

    $scope.showEdit = function(data) {
        $scope.formData = angular.copy(data);
    };

    $scope.editData = function(){
        $http({
            method:"POST",
            url:"relation_contains_edit.php",
            data:$scope.formData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.formData = {};
        });
    };

    $scope.reset = function(){
        $scope.formData = {};
    };

    $scope.closeMsg = function(){
        $scope.success = false;
    };

    $scope.deleteData = function(music_id){
        if(confirm("Are you sure you want to remove it?"))
        {
            $http({
                method:"POST",
                url:"relation_contains_delete.php",
                data:{'music_id':music_id}
            }).success(function(data){
                $scope.success = true;
                $scope.successMessage = data.message;
                $scope.fetchData();
            }); 
        }
    };

});

</script>
