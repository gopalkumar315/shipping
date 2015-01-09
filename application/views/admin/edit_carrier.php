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
    <!-- BEGIN MANDATORY STYLE -->
     

    <link href="<?php echo base_url();?>web/css/icons/icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>web/css/plugins.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>web/css/style.css" rel="stylesheet">

   
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="<?php echo base_url();?>web/plugins/wizard/wizard.css">
    <link rel="stylesheet" href="<?php echo base_url();?>web/plugins/jquery-steps/jquery.steps.css">
    <!-- END PAGE LEVEL STYLE -->
    <script src="<?php echo base_url();?>web/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body data-page="form_wizard" ng-app="MyApp">
    <!-- BEGIN TOP MENU -->
  <?php include('header.php')?>
  <!--END TOP MENU -->
  <!--BEGIN WRAPPER -->
  <div id="wrapper">
      <!-- BEGIN MAIN SIDEBAR -->
        <?php include("sidebar.php") ?>
        <!-- END MAIN SIDEBAR -->

        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" ng-controller="Career">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <!-- <h3><strong>Beautiful</strong> Form Wizard</h3> -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- <h3 class="panel-title"><strong>Wizard</strong></h3> -->
                        </div>
                        <div class="panel-body" >
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><strong>Add </strong> New Carrier</h3>
                                    <!-- <p>Here is an example of a complete wizard form in modal window.</p> -->
                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form class="form-wizard" ng-submit="submit()">
                                        <h1>General Setting</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="userName">Career Name *</label>
                                                <input id="userName" name="userName" ng-model="name" type="text" class="form-control required">                                            
                                            </div>

                                               <div class="form-group">
                                                <label for="confirm">Transit Time *</label>
                                                <input id="confirm"  ng-model="transit_time" type="text" class="form-control required">
                                            </div>

                                             <div class="form-group">
                                                <label for="confirm">Speed Grade *</label>
                                                <input id="confirm"  ng-model="speed_grade" type="text" class="form-control required">
                                            </div>

                                              <div class="form-group">
                                                <label for="confirm">URL *</label>
                                                <input id="confirm"  ng-model="url" type="url" class="form-control required">
                                            </div>   


                                              

                                           
                                            <p>(*) Mandatory</p>
                                        </section>

                                        <h1>Shipping Location and Costs</h1>
                                        <section>
                                               
                                            <div class="form-group">
                                                <label for="name">Add Handling Costs</label>
                                                  <select name="is_module" ng-model="add_handling_cost" class="form-control" required >
                                                    <option ng-selected="add_handling_cost == 1" value="1">Yes</option>
                                                    <option ng-selected="add_handling_cost == 0"  selected value="0">No</option>
                                                </select>


                                            </div> 

                                            <div class="form-group">
                                                <label for="name">Free Shipping</label>
                                                  <select name="is_module" ng-model="free_shipping" class="form-control" required >
                                                    <option ng-selected="free_shipping == 1" selected value="1">Yes</option>
                                                    <option ng-selected="free_shipping == 0" value="0">No</option>
                                                </select>
                                            </div> 


                                            <div class="form-group">
                                                <label for="name">Shipping Time</label>
                                                <input id="confirm"  ng-model="shipping_time" type="text" class="form-control">
                                            </div> 


                                            <div class="form-group">
                                                <label for="name">Type Of carrier</label>
                                                  <select name="is_module" ng-model="type_of_carrier" class="form-control" required >
                                                    <option ng-selected="type_of_carrier == 1" ng-click="volumetric = false; real = true;"  value="Volumetrical">Volumetrical</option>
                                                    <option ng-selected="type_of_carrier == 0"  ng-click="volumetric = true; real = false;" value="Real Weight">Real Weight</option>

                                                </select>                                                

                                            </div> 


                                            <div class="form-group" ng-hide="volumetric">
                                                <label for="confirm">Volumetrical *</label>
                                                <input id="confirm"  ng-model="volumetrical" type="text" class="form-control">
                                            </div>

                                            <div class="form-group" ng-hide="real">
                                                <label for="confirm">Real Weight *</label>
                                                <input id="confirm"  ng-model="real_weight" type="text" class="form-control">
                                            </div>




                                            <div class="form-group">
                                                <label for="name">Billing</label>                                               
                                              <label class="radio inline" for="radios-0">
                                              <input name="radios" id="radios-0" ng-model="billing" value="accoding to minimum price" type="radio">
                                              Accoding to minimum price
                                              </label>

                                              <label class="radio inline" for="radios-1">
                                               <input name="radios" id="radios-1" ng-model="billing" value="accoding to minimum weight" type="radio">
                                                 Accoding to minimum weight
                                               </label>                                                                          
                                                        
                                            </div> 


                                             <div class="form-group">
                                                <label for="name">Type of zone</label>
                                                  <select name="is_module" ng-model="type_of_zone" class="form-control" required >
                                                    <option ng-click="zone = false; country = true;" ng-selected="type_of_zone == 1"  value="By Zone">By Zone</option>
                                                    <option ng-click="zone = true; country = false;" ng-selected="type_of_zone == 0" value="By Country">By Country</option>
                                                </select>
                                            </div> 


                                            <div class="form-group" ng-hide="zone">
                                                <label for="confirm">By Zone *</label>
                                                <input id="confirm"  ng-model="by_zone" type="text" class="form-control">
                                            </div>

                                            <div class="form-group" ng-hide="country">
                                                <label for="confirm">By Country *</label>
                                                <input id="confirm"  ng-model="by_country" type="text" class="form-control">
                                            </div>
                                         </section>


                                        <h1>Size,Weight</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>

                                            <div class="form-group">
                                                <label for="name">Maximum Width *</label>
                                                <input id="name" name="name" ng-model="max_width" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname">Maximum Height *</label>
                                                <input id="surname" name="surname" ng-model="max_height" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Maximum Depth *</label>
                                                <input   ng-model="max_depth" type="text" class="form-control required ">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Maximum Weight</label>
                                                <input id="address" name="address" ng-model="max_weight" type="text" class="form-control required" >
                                            </div>
                                            
                                            <p>(*) Mandatory</p>
                                        </section>
                                       
                                        <h1>Finish</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <span>To save data, Click finish button</span>
                                            <div class="pos-rel p-l-30">
                                                
                                            </div>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->
                                </div>
                                <div class="col-md-4">
                                    <h3><strong>Modal</strong> Wizard Bootstrap</h3>
                                    <p>Here is an example of a complete wizard form in modal window.</p>
                                    <button id="open-wizard" class="btn btn-primary">Open wizard</button>
                                    <!-- BEGIN MODAL FORM WIZARD WITH VALIDATION -->
                                    <div class="wizard" id="satellite-wizard" data-title="Create Server">
                                        <!-- Step 1 Name & FQDN -->
                                        <div class="wizard-card" data-cardname="name">
                                            <h3>Name &amp; FQDN</h3>
                                            <div class="wizard-input-section">
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="label" name="label" placeholder="Server label" data-validate="validateServerLabel">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wizard-input-section">
                                                <p>
                                                    Full Qualified Domain Name
                                                </p>
                                                <div class="form-group">
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="fqdn" name="fqdn" placeholder="FQDN" data-validate="validateFQDN" data-is-valid="0" data-lookup="0" />
                                                            <span class="input-group-btn" id="btn-fqdn">
                                                                <button class="btn btn-default" type="button" onclick='lookup();'>
                                                                  Lookup
                                                                </button> 
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wizard-input-section">
                                                <p>
                                                    Server ip.
                                                </p>
                                                <div class="form-group">
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="ip" name="ip" placeholder="IP" data-serialize="1" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-card" data-cardname="group">
                                            <h3>Server Group</h3>
                                            <div class="wizard-input-section">
                                                <p>
                                                    Where would you like server <strong class="create-server-name"></strong>
                                                    to go?
                                                </p>
                                                <img class="wizard-group-list" src="assets/plugins/wizard/groups.png" alt="wizard"/>
                                            </div>
                                        </div>
                                        <div class="wizard-card wizard-card-overlay" data-cardname="services">
                                            <h3>Service Selection</h3>
                                            <div class="alert hide">
                                                It's recommended that you select at least one service, like ping.
                                            </div>
                                            <div class="wizard-input-section">
                                                <p>
                                                    Please choose the services you'd like Panopta to monitor. Any service you select will be given a default check frequency of 1 minute.
                                                </p>
                                                <select name="services" data-placeholder="Service List" style="width:350px;" class="chzn-select create-server-service-list form-control" multiple>
                                                    <option>&nbsp;</option>
                                                    <optgroup label="Basic">
                                                        <option selected value="icmp.ping">Ping</option>
                                                        <option selected value="tcp.ssh">SSH</option>
                                                        <option value="tcp.ftp">FTP</option>
                                                    </optgroup>
                                                    <optgroup label="Web">
                                                        <option selected value="tcp.http">HTTP</option>
                                                        <option value="tcp.https">HTTP (Secure)</option>
                                                        <option value="tcp.dns">DNS</option>
                                                    </optgroup>
                                                    <optgroup label="Email">
                                                        <option value="tcp.pop">POP</option>
                                                        <option value="tcp.imap">IMAP</option>
                                                        <option value="tcp.smtp">SMTP</option>
                                                        <option value="tcp.pops">POP (Secure)</option>
                                                        <option value="tcp.imaps">IMAP (Secure)</option>
                                                        <option value="tcp.smtps">SMTP (Secure)</option>
                                                        <option value="tcp.http.exchange">Microsoft Exchange</option>
                                                    </optgroup>
                                                    <optgroup label="Databases">
                                                        <option value="tcp.mysql">MySQL</option>
                                                        <option value="tcp.postgres">PostgreSQL</option>
                                                        <option value="tcp.mssql">Microsoft SQL Server</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="wizard-card wizard-card-overlay" data-cardname="location">
                                            <h3>Monitoring Location</h3>
                                            <div class="wizard-input-section">
                                                <p>
                                                    We determined <strong>Chicago</strong> to be the closest location to monitor
                                                    <strong class="create-server-name"></strong>
                                                    If you would like to change this, or you think this is incorrect, please select a different monitoring location.
                                                </p>
                                                <select name="location" data-placeholder="Monitor nodes" style="width:350px;" class="chzn-select form-control">
                                                    <option value="">&nbsp;</option>
                                                    <optgroup label="North America">
                                                        <option>Atlanta</option>
                                                        <option selected>Chicago</option>
                                                        <option>Dallas</option>
                                                        <option>Denver</option>
                                                        <option>Fremont, CA</option>
                                                        <option>Los Angeles</option>
                                                        <option>Miami</option>
                                                        <option>Newark, NJ</option>
                                                        <option>Phoenix</option>
                                                        <option>Seattle</option>
                                                        <option>Washington, DC</option>
                                                    </optgroup>
                                                    <optgroup label="Europe">
                                                        <option>Amsterdam, NL</option>
                                                        <option>Berlin</option>
                                                        <option>London</option>
                                                        <option>Milan, Italy</option>
                                                        <option>Nurnberg, Germany</option>
                                                        <option>Paris</option>
                                                        <option>Stockholm</option>
                                                        <option>Vienna</option>
                                                    </optgroup>
                                                    <optgroup label="Asia/Africa">
                                                        <option>Cairo</option>
                                                        <option>Jakarta</option>
                                                        <option>Johannesburg</option>
                                                        <option>Hong Kong</option>
                                                        <option>Singapore</option>
                                                        <option>Sydney</option>
                                                        <option>Tokyo</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="wizard-card wizard-card-overlay">
                                            <h3>Notification Schedule</h3>
                                            <div class="wizard-input-section">
                                                <p>
                                                    Select the notification schedule to be used for outages.
                                                </p>
                                                <select name="notification" class="wizard-ns-select chzn-select form-control" data-placeholder="Notification schedule" style="width:350px;">
                                                    <option value="">&nbsp;</option>
                                                    <option>ALIS Production</option>
                                                    <option>ALIS Development &amp; Staging</option>
                                                    <option>Panopta Development &amp; Staging</option>
                                                    <option>Jira</option>
                                                    <option>QSC Enterprise Production</option>
                                                    <option>QSC Enterprise Development &amp; Staging</option>
                                                    <option>Panopta Production</option>
                                                    <option>Panopta Monitoring Nodes</option>
                                                    <option>Common</option>
                                                </select>
                                            </div>
                                            <div class="wizard-ns-detail hide">
                                                Also using <strong>ALIS Production</strong>:
                                                <ul id="wizard-ns-detail-servers">
                                                    <li>
                                                        <img src="assets/plugins/wizard/folder.png" alt="folder"/>Corporate sites</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/folder.png"  alt="folder"/>dt01.sat.medtelligent.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="server new"/>alisonline.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="server new"/>circa-db04.sat.medtelligent.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="server new"/>circa-services01.sat.medtelligent.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="folserver newder"/>circa-web01.sat.medtelligent.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="server new"/>heartbeat.alisonline.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="server new"/>medtelligent.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="server new"/>dt02.fre.medtelligent.com</li>
                                                    <li>
                                                        <img src="assets/plugins/wizard/server_new.png" alt="server new"/>dev03.lin.medtelligent.com</li>
                                                </ul>img</div>
                                        </div>
                                        <div class="wizard-card">
                                            <h3>Agent Setup</h3>
                                            <div class="wizard-input-section">
                                                <p>The <a target="_blank" href="http://www.panopta.com/support/knowledgebase/support-questions/how-do-i-install-the-panopta-monitoring-agent/">Panopta Agent</a> allows you to monitor local resources (disk usage,
                                                    cpu usage, etc). If you would like to set that up now, please download and follow the <a target="_blank" href="http://www.panopta.com/support/knowledgebase/support-questions/how-do-i-install-the-panopta-monitoring-agent/">install instructions.</a>
                                                </p>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Download<span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">.rpm</a>
                                                        </li>
                                                        <li><a href="#">.deb</a>
                                                        </li>
                                                        <li><a href="#">.tar.gz</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="wizard-input-section">
                                                <p>You will be given a server key after you install the Agent on <strong class="create-server-name"></strong>. If you know your server key now, please enter it below.
                                                </p>
                                                <div class="form-group">
                                                    <input type="text" class="create-server-agent-key form-control" placeholder="Server key (optional)" data-validate="">
                                                </div>
                                            </div>
                                            <div class="wizard-error">
                                                <div class="alert alert-error">
                                                    <strong>There was a problem</strong> with your submission. Please correct the errors and re-submit.
                                                </div>
                                            </div>
                                            <div class="wizard-failure">
                                                <div class="alert alert-error">
                                                    <strong>There was a problem</strong> submitting the form. Please try again in a minute.
                                                </div>
                                            </div>
                                            <div class="wizard-success">
                                                <div class="alert alert-success">
                                                    <span class="create-server-name"></span>Server Created <strong>Successfully.</strong>
                                                </div>
                                                <a class="btn btn-default create-another-server">Create another server</a>
                                                <span style="padding:0 10px">or</span>
                                                <a class="btn btn-success im-done">Done</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL FORM WIZARD WITH VALIDATION -->
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
    <script src="<?php echo base_url();?>web/plugins/jquery-1.11.js"></script>
    <script src="<?php echo base_url();?>web/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="<?php echo base_url();?>web/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url();?>web/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="<?php echo base_url();?>web/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>web/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php //echo base_url();?>web/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="<?php echo base_url();?>web/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url();?>web/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="<?php echo base_url();?>web/plugins/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url();?>web/plugins/charts-sparkline/sparkline.min.js"></script>
    <script src="<?php echo base_url();?>web/plugins/breakpoints/breakpoints.js"></script>
    <script src="<?php echo base_url();?>web/plugins/numerator/jquery-numerator.js"></script>
    <script src="<?php echo base_url();?>web/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url();?>web/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>web/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="<?php echo base_url();?>web/plugins/wizard/wizard.js"></script>
    <script src="<?php echo base_url();?>web/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo base_url();?>web/js/form_wizard.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>web/js/application.js"></script>

    <!-- //angular script -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script>
        var app=angular.module('MyApp',[]);

         app.controller("Career",function($scope, $http){

            
            
            $http.get('<?php echo site_url('admin/carrier/edit_carrier/'.$id); ?>').
            success(function(data){
                console.log(data);
                $scope.items=data;

                $scope.id_carrier=$scope.items.id_carrier;
                $scope.name=$scope.items.name;
                $scope.speed_grade=$scope.items.speed_grade;
                $scope.url=$scope.items.url;  
                $scope.transit_time=$scope.items.transit_time;  
                $scope.add_handling_cost=$scope.items.add_handling_cost;  
                $scope.free_shipping=$scope.items.free_shipping;  
                $scope.free_shipping=$scope.items.free_shipping;
                $scope.type_of_zone=$scope.items.type_of_zone;  
                
                $scope.billing=$scope.items.billing;

                if($scope.items.type_of_zone=="By Zone"){
                    $scope.by_zone=$scope.items.type_of_zone_value;
                } else {
                    $scope.by_country=$scope.items.type_of_zone_value;
                }

                if($scope.items.type_of_carrier=="Volumetrical"){
                    $scope.volumetrical=$scope.items.type_of_carrier_value;
                } else {
                    $scope.real_weight=$scope.items.type_of_carrier_value;
                }

                $scope.type_of_carrier=$scope.items.type_of_carrier;  
                
                $scope.shipping_time=$scope.items.shipping_time;  
                $scope.max_weight=$scope.items.max_weight;
                $scope.max_depth=$scope.items.max_depth;
                $scope.max_height=$scope.items.max_height;
                $scope.max_width=$scope.items.max_width;              

            });



            

            $scope.volumetric=true;
            $scope.real=true;
            $scope.zone=true;
            $scope.country=true;



            $scope.submit=function(){
                

                if($scope.type_of_zone=="By Zone"){
                    $scope.type_of_zone_value=$scope.by_zone;
                } else {
                    $scope.type_of_zone_value=$scope.by_country;
                }

                if($scope.type_of_carrier=="Volumetrical"){
                    $scope.type_of_carrier_value=$scope.volumetrical;
                } else {
                    $scope.type_of_carrier_value=$scope.real_weight;
                }



                var request = $http({
                method: "post",
                url: "<?php echo site_url('admin/carrier/edit_done');?>",
                data: {

                  'id_carrier':$scope.id_carrier, 
                  'name':$scope.name,
                  'speed_grade':$scope.speed_grade,
                  'url':$scope.url,
                  'transit_time':$scope.transit_time,
                  'add_handling_cost':$scope.add_handling_cost,
                  'free_shipping':$scope.free_shipping,
                  'type_of_zone':$scope.type_of_zone,
                  'type_of_zone_value':$scope.type_of_zone_value,
                  'billing':$scope.billing,
                  'type_of_carrier':$scope.type_of_carrier,
                  'type_of_carrier_value':$scope.type_of_carrier_value,
                  'shipping_time':$scope.shipping_time,

                                  
                  'max_weight':$scope.max_weight,
                  'max_depth':$scope.max_depth,
                  'max_height':$scope.max_height,
                  'max_width':$scope.max_width,     
                  

                }
              });

              request.success(function(response){
                console.log(response);
                window.location.replace('<?php echo site_url('admin/carrier/')?>');
                
              })  

              request.error(function(response){
                alert(response);
              });


                
            }

        });
    </script>

    <style type="text/css">
        .wizard-inline > .content > .body {
        position: static !important;
    }
    </style>


</body>

</html>