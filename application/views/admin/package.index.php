<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
  <!-- BEGIN META SECTION -->
  <meta charset="utf-8">
  <title>Pixit - Responsive Boostrap3 Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description" />
  <meta content="themes-lab" name="author" />
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- END META SECTION -->
  <!-- angular js -->
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
  <script src="<?php echo base_url('web/angular/app.js')?>" type="text/javascript"></script>

  <!-- BEGIN MANDATORY STYLE -->
  <link href="<?php echo base_url('web/css/icons/icons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('web/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('web/css/plugins.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('web/css/style.min.css')?>" rel="stylesheet">

  <link href="#" rel="stylesheet" id="theme-color">
  <!-- END  MANDATORY STYLE -->
  <!-- BEGIN PAGE LEVEL STYLE -->
  <link rel="stylesheet" href="<?php echo base_url('web/plugins/datatables/dataTables.css')?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('web/tablesort/tablesort.css')?>">

  <!-- END PAGE LEVEL STYLE -->
  <script src="<?php echo base_url('web/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
</head>

<body data-page="tables_editable" ng-app="MyApp">
  <!-- BEGIN TOP MENU -->
  <?php include('header.php')?>
  <!-- END TOP MENU -->
  <!-- BEGIN WRAPPER -->
  <div id="wrapper">
    <!-- BEGIN MAIN SIDEBAR -->
    <?php include("sidebar.php") ?>
    <!-- END MAIN SIDEBAR -->

    <!-- BEGIN MAIN CONTENT -->
    <div id="main-content">
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><strong>Editable</strong> tables</h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading bg-red">
              <h3 class="panel-title"><strong>Editable </strong> example</h3>
            </div>
            <div  ng-controller="BookStore" class="panel-body">
              <div class="row">
                <div class="col-md-12 m-b-20">
                  <div class="btn-group">
                    <button class="btn btn-danger" ng-click="enableAdd();">Add</button>
                  </div>
                </div>
                <div  class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">


                  <div class="row"><div class="col-md-6"><div>
                    <label><input type="search" class="form-control" ng-model="search" placeholder="Search a product..."></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="DTTT_container">
                    <a class="btn btn-default DTTT_button DTTT_button_pdf" id="ToolTables_table-editable_0"><span>PDF</span>
                      <div style="position: absolute; left: 0px; top: 0px; width: 78px; height: 37px; z-index: 99;">
                        <embed id="ZeroClipboard_TableToolsMovie_1" src="assets/plugins/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="78" height="37" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=78&amp;height=37" wmode="transparent"></div></a>
                          <a class="btn btn-default DTTT_button DTTT_button_print" id="ToolTables_table-editable_1" title="View print view"><span>Print</span></a>
                          <a class="btn btn-default DTTT_button DTTT_button_xls" id="ToolTables_table-editable_2"><span>Excel</span><div style="position: absolute; left: 0px; top: 0px; width: 86px; height: 37px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_2" src="assets/plugins/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="86" height="37" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=86&amp;height=37" wmode="transparent"></div></a>
                          <a class="btn btn-default DTTT_button DTTT_button_csv" id="ToolTables_table-editable_3"><span>CSV</span><div style="position: absolute; left: 0px; top: 0px; width: 76px; height: 37px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_3" src="assets/plugins/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="76" height="37" name="ZeroClipboard_TableToolsMovie_3" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=76&amp;height=37" wmode="transparent"></div></a>
                        </div></div></div>
                        <br>

                        <table class="table table-striped table-hover" ts-wrapper id="">
                          <thead>
                            <tr>
                              <th ts-criteria="id_package">id </th>
                              <th ts-criteria="supplier_name">Supplier name </th>
                              <th ts-criteria="alias">Alias</th>
                              <th ts-criteria="width">Width</th>
                              <th ts-criteria="height">Height</th>

                              <th ts-criteria="depth">depth</th>
                              <th ts-criteria="max_weight">max_weight</th>
                              <th class="text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr ng-show="addEnable == true">
                              <td></td>
                              <td>
                               <input type="text" width="75px" class="form-control" ng-model="item.supplier_name">
                             </td>

                             <td>
                               <input type="text" width="75px" class="form-control"  ng-model="item.alias">
                             </td>

                             <td>
                              <input type="text" width="75px" class="form-control"  ng-model="item.width">
                            </td>
                            <td>
                              <input type="text" width="75px" class="form-control"  ng-model="item.height">
                            </td>
                            <td>
                             <input type="text" width="75px" class="form-control"  ng-model="item.depth">
                           </td>
                           <td>
                             <input type="text" width="75px" class="form-control"  ng-model="item.max_weight">
                           </td>

                           <td>

                             <span> <button type="save" class="edit btn btn-dark"  
                             ng-click="addItem(item);" ><i class="fa fa-pencil-square-o"></i> save</button></span>

                             <span> <button type="save" class="btn btn-danger"  ng-click="addCancel();" ><i class="fa fa-pencil-square-o"></i> Cancel</button></span>

                           </td>


                         </tr>

                         <tr role="row" ng-repeat="item in items | offset: currentPage*itemsPerPage |  limitTo: itemsPerPage | filter:search"  ts-repeat>

                          <td>
                            <span ng-hide="editMode">{{item.id_package}}</span>		                                    
                          </td>
                          <td>
                            <span ng-hide="editMode">{{item.supplier_name}}</span>
                            <input type="text" width="75px" class="form-control" ng-show="editMode" ng-model="item.supplier_name">
                          </td>
                          <td>
                            <span ng-hide="editMode">{{item.alias}}</span>
                            <input type="text" width="75px" class="form-control" ng-show="editMode" ng-model="item.alias">
                          </td>

                          <td>
                            <span ng-hide="editMode">{{item.width}}</span>
                            <input type="text" width="75px" class="form-control" ng-show="editMode" ng-model="item.width">
                          </td>



                          <td>
                            <span ng-hide="editMode">{{item.height}}</span>
                            <input type="text" width="75px" class="form-control" ng-show="editMode" ng-model="item.height">
                          </td>

                          <td>
                            <span ng-hide="editMode">{{item.depth}}</span>
                            <input type="text" width="75px" class="form-control" ng-show="editMode" ng-model="item.depth">
                          </td>

                          <td>
                            <span ng-hide="editMode">{{item.max_weight}}</span>
                            <input type="text" width="75px" class="form-control" ng-show="editMode" ng-model="item.max_weight">
                          </td>

                          <td class="text-center">
                            <span> <button type="submit" class="edit btn btn-dark" ng-hide="editMode" ng-click="editMode = true; editItem(item)" ><i class="fa fa-pencil-square-o"></i> Edit</button></span>
                            <span> <button type="submit" class="edit btn btn-success" ng-show="editMode" ng-click="editMode = false;saveItem(item)">Save</button></span>
                            <span> <button type="submit" class="edit btn btn-danger" ng-show="editMode" ng-click="editMode = false;">Cancel</button></span>
                            <span><button type="button" class="edit btn btn-danger"  ng-hide="editMode" value="Delete" ng-click="removeItem(item)" /><i class="fa fa-times-circle"></i>Delete</button></span>
                          </td>
                        </tr>

                      </tbody>

                      <tfoot>
                        <td colspan="3">
                          <div class="pagination">
                            <ul>
                              <li ng-class="prevPageDisabled()">
                                <a href ng-click="prevPage()">« Prev</a>
                              </li>
                              <li ng-repeat="n in range()"
                              ng-class="{active: n == currentPage}" ng-click="setPage(n)">
                              <a href="#">{{n+1}}</a>
                            </li>
                            <li ng-class="nextPageDisabled()">
                              <a href ng-click="nextPage()">Next »</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tfoot>



                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END MAIN CONTENT -->
  </div>
  <!-- END WRAPPER -->
  <!-- BEGIN CHAT MENU -->
  <nav id="menu-right">
    <ul>
      <li class="mm-label label-big">ONLINE</li>
      <li class="img no-arrow have-message">
        <span class="inside-chat">
          <i class="online"></i>
          <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
          <span class="chat-name">Alexa Johnson</span>
          <span class="pull-right badge badge-danger hide">3</span>
          <span>Los Angeles</span>
        </span>
        <ul class="chat-messages">
          <li class="img">
            <span>
              <span class="chat-detail">
                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                <span class="chat-bubble"><span class="bubble-inner">Hi you!</span></span>
              </span>
            </span>
          </li>
          <li class="img">
            <span>
              <span class="chat-detail">
                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                <span class="chat-bubble"><span class="bubble-inner">You there?</span></span>
              </span>
            </span>
          </li>
          <li class="img">
            <span>
              <span class="chat-detail">
                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                <span class="chat-bubble">
                  <span class="bubble-inner">Let me know when you come back</span>
                </span>
              </span>
            </span>
          </li>
          <li>
            <span class="chat-input">
              <input type="text" class="form-control send-message" placeholder="Type your message" />
            </span>
          </li>
        </ul>
      </li>
      <li class="img no-arrow">
        <span class="inside-chat">
          <i class="online"></i>
          <img src="assets/img/avatars/avatar2.png" alt="avatar 2"/>
          <span class="chat-name">Bobby Brown</span>
          <span>New York</span>
        </span>
        <ul class="chat-messages">
          <li>
            <span class="chat-input">
              <input type="text" class="form-control send-message" placeholder="Type your message" />
            </span>
          </li>
        </ul>
      </li>
      <li class="img no-arrow">
        <span class="inside-chat">
          <i class="busy"></i>
          <img src="assets/img/avatars/avatar13.png" alt="avatar 13"/>
          <span class="chat-name">Fred Smith</span>
          <span>Atlanta</span>
        </span>
        <ul class="chat-messages">
          <li>
            <span class="chat-input">
              <input type="text" class="form-control send-message" placeholder="Type your message" />
            </span>
          </li>
        </ul>
      </li>
      <li class="img no-arrow">
        <span class="inside-chat">
          <i class="away"></i>
          <img src="assets/img/avatars/avatar4.png" alt="avatar 4"/>
          <span class="chat-name">James Miller</span>
          <span>Seattle</span>
        </span>
        <ul class="chat-messages">
          <li>
            <span class="chat-input">
              <input type="text" class="form-control send-message" placeholder="Type your message" />
            </span>
          </li>
        </ul>
      </li>
      <li class="img no-arrow">
        <span class="inside-chat">
          <i class="online"></i>
          <img src="assets/img/avatars/avatar5.png" alt="avatar 5"/>
          <span class="chat-name">Jefferson Jackson</span>
          <span>Los Angeles</span>
        </span>
        <ul class="chat-messages">
          <li>
            <span class="chat-input">
              <input type="text" class="form-control send-message" placeholder="Type your message" />
            </span>
          </li>
        </ul>
      </li>
      <li class="mm-label label-big m-t-30">OFFLINE</li>

      <li class="img no-arrow">
        <span class="inside-chat">
          <i class="offline"></i>
          <img src="assets/img/avatars/avatar6.png" alt="avatar 6"/>
          <span class="chat-name">Jordan</span>
          <span>Savannah</span>
        </span>
        <ul class="chat-messages">
         <li>
          <span class="chat-input">
            <input type="text" class="form-control send-message" placeholder="Type your message" />
          </span>
        </li>
      </ul>
    </li>
    <li class="img no-arrow">
      <span class="inside-chat">
        <i class="offline"></i>
        <img src="assets/img/avatars/avatar7.png" alt="avatar 7"/>
        <span class="chat-name">Kim Addams</span>
        <span>Birmingham</span>
      </span>
      <ul class="chat-messages">
        <li>
          <span class="chat-input">
            <input type="text" class="form-control send-message" placeholder="Type your message" />
          </span>
        </li>
      </ul>
    </li>
    <li class="img no-arrow">
      <span class="inside-chat">
        <i class="offline"></i>
        <img src="assets/img/avatars/avatar8.png" alt="avatar 8"/>
        <span class="chat-name">Meagan Miller</span>
        <span>San Francisco</span>
      </span>
      <ul class="chat-messages">
        <li>
          <span class="chat-input">
            <input type="text" class="form-control send-message" placeholder="Type your message" />
          </span>
        </li>
      </ul>
    </li>
    <li class="img no-arrow">
      <span class="inside-chat">
        <i class="offline"></i>
        <img src="assets/img/avatars/avatar9.png" alt="avatar 9"/>
        <span class="chat-name">Melissa Johnson</span>
        <span>Austin</span>
      </span>
      <ul class="chat-messages">
        <li>
          <span class="chat-input">
            <input type="text" class="form-control send-message" placeholder="Type your message" />
          </span>
        </li>
      </ul>
    </li>
    <li class="img no-arrow">
      <span class="inside-chat">
        <i class="offline"></i>
        <img src="assets/img/avatars/avatar12.png" alt="avatar 12"/>
        <span class="chat-name">Nicole Smith</span>
        <span>San Diego</span>
      </span>
      <ul class="chat-messages">
        <li>
          <span class="chat-input">
            <input type="text" class="form-control send-message" placeholder="Type your message" />
          </span>
        </li>
      </ul>
    </li>
    <li class="img no-arrow">
      <span class="inside-chat">
        <i class="offline"></i>
        <img src="assets/img/avatars/avatar11.png" alt="avatar 11"/>
        <span class="chat-name">Samantha Harris</span>
        <span>Salt Lake City</span>
      </span>
      <ul class="chat-messages">
        <li>
          <span class="chat-input">
            <input type="text" class="form-control send-message" placeholder="Type your message" />
          </span>
        </li>
      </ul>
    </li>
    <li class="img no-arrow">
      <span class="inside-chat">
        <i class="offline"></i>
        <img src="assets/img/avatars/avatar10.png" alt="avatar 10"/>
        <span class="chat-name">Scott Thomson</span>
        <span>Los Angeles</span>
      </span>
      <ul class="chat-messages">
        <li>
          <span class="chat-input">
            <input type="text" class="form-control send-message" placeholder="Type your message" />
          </span>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- END CHAT MENU -->
<!-- BEGIN MANDATORY SCRIPTS -->
<script src="<?php echo base_url('web/plugins/jquery-1.11.js')?>"></script>
<script src="<?php echo base_url('web/plugins/jquery-migrate-1.2.1.js')?>"></script>
<script src="<?php echo base_url('web/plugins/jquery-ui/jquery-ui-1.10.4.min.js')?>"></script>
<script src="<?php echo base_url('web/plugins/jquery-mobile/jquery.mobile-1.4.2.js')?>"></script>
<script src="<?php echo base_url('web/plugins/bootstrap/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('web/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/bootstrap-select/bootstrap-select.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/mmenu/js/jquery.mmenu.min.all.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/nprogress/nprogress.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/charts-sparkline/sparkline.min.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/breakpoints/breakpoints.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/numerator/jquery-numerator.js'); ?>"></script>
<script src="<?php echo base_url('web/plugins/jquery.cookie.min.js'); ?>" type="text/javascript"></script>
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('web/plugins/datatables/dynamic/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('web/plugins/datatables/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('web/plugins/datatables/dataTables.tableTools.js')?>"></script>
<script src="<?php echo base_url('web/js/table_editable.js')?>"></script>

<!-- <script src="<?php echo base_url('web/angular/maincontroller.js')?>" type="text/javascript"></script>-->
<script src="<?php echo base_url('web/tablesort/angular-tablesort.js')?>"></script>    

<script>
  var app = angular.module('MyApp',['tableSort']);
  app.controller("BookStore",function($scope, $http)
  {  
    $scope.item = {};
    $scope.items=[];
    $scope.editing = false;
    $scope.addEnable=false;

    $http.get('<?php echo site_url('admin/package/show'); ?>').
    success(function(data, status, headers, config) {
      $scope.items=data;
    }).
    error(function(data, status, headers, config) {});
    


    $scope.addItem=function(item){
      if(typeof item == 'undefined')
      {
        alert('Please enter data before submit');
        return false;
      }
      
      if(typeof item.supplier_name !== 'undefined' && item.supplier_name != '')
      {
        $scope.items.push(item);
         $scope.addEnable=false;
         var request = $http({
           method: "post",
           url: "<?php echo site_url('admin/package/add'); ?>",
           data:item
         });

          request.success(function(data){
          $scope.items=data;
          $scope.addEnable=false;
          $scope.item = {};
        });
        
      }
      else
      {
        alert("please enter supplier name");
        $scope.addEnable= true;
        return false;
      }
      

     
   }

   

   $scope.addCancel=function(){
    $scope.
     $scope.addEnable=false;
   }


   $scope.enableAdd=function(){    
    $scope.addEnable = !$scope.addEnable;
   };



   $scope.removeItem = function(item){

    var check =confirm('Confirm,You Really want to delete this item...');
    if(check==true)
    {
      var index= $scope.items.indexOf(item);
      var request = $http({
        method: "post",
        url: "<?php echo site_url('admin/package/delete'); ?>",
        data: item
      });

      $scope.items.splice(index,1);
    }

  }


    //Edit item

    $scope.editItem = function(index){
      $scope.editing = $scope.items.indexOf(index);
    }

    //save item for edition
    $scope.saveItem = function(item){

      var index=$scope.items.indexOf(item);
      var request = $http({
        method: "post",
        url: "<?php echo site_url('admin/package/edit'); ?>",
        data:item
      });

      request.success(function(data){
        $scope.items=data;
      });

      request.error(function(response){
        alert(response);
      });


    }


    
    $scope.changeSorting = function(column) {

      if ($scope.sort.column == column) {
        $scope.sort.descending = $scope.sort.descending;
      } else {
        $scope.sort.column = column;
        $scope.sort.descending = false;
      }
    };

    //pagination

    $scope.itemsPerPage = 40;
    $scope.currentPage = 0;

    $scope.range = function() {
      var rangeSize = 40;
      var ret = [];
      var start;

      start = $scope.currentPage;
      if ( start > $scope.pageCount()-rangeSize ) {
        start = ($scope.pageCount()-rangeSize)+1;
      }



      for (var i=start; i<start+rangeSize; i++) {

        if(i>=0)
        {
          ret.push(i);
        }


      }
      return ret;
    };



    $scope.prevPage = function() {
      if ($scope.currentPage > 0) {
        $scope.currentPage--;
      }
    };

    $scope.prevPageDisabled = function() {
      return $scope.currentPage === 0 ? "disabled" : "";
    };

    $scope.pageCount = function() {
      return Math.ceil($scope.items.length/$scope.itemsPerPage)-1;
    };

    $scope.nextPage = function() {
      if ($scope.currentPage < $scope.pageCount()) {
        $scope.currentPage++;
      }
    };

    $scope.nextPageDisabled = function() {
      return $scope.currentPage === $scope.pageCount() ? "disabled" : "";
    };

    $scope.setPage = function(n) {
      $scope.currentPage = n;
    };




    $scope.saveField = function(index) {
      if ($scope.editing !== false) {
        $scope.editing = false;
      }
    };
  }

  );

app.filter('offset', function() {
  return function(input, start) {
    start = parseInt(start, 10);
    return input.slice(start);
  };
});
</script>


<!-- END  PAGE LEVEL SCRIPTS -->
<script src="assets/js/application.js"></script>
</body>

</html>
