<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CSO | Activity Page</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet" />


    <!-- Font Awesome :-) -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/cso_table.css">
    <link rel="stylesheet" href="assets/css/cso_page.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="wrapper">
      <!-- The Sidebar  -->
      <div class="sidebar" data-color="green" data-image="">

        <!-- LOGO Image and Name -->
        <div class="logo text-center">
          <img src="assets/img/cso_logo.png" alt="" width="150px" class=" text-center">
          <a href="#" class="simple-text logo-name">
  					CSO
  				</a>
        </div>
        <!-- Sidebar Navigation! -->
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="active">
              <a href="cso_org_activity_list.html">
                <i class="fa fa-file-text"></i>
                <p>New Activitiy</p>
              </a>
            </li>
            <li>
              <a href="cso_org_activity_list.html">
                <i class="fa fa-list"></i>
                <p>CSO Activities</p>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="cso_org_activity_list.html">
                <i class="fa fa-list"></i>
                <p>ORG Activities</p>
              </a>
            </li>
            <li>
              <a href="cso_archive_list.html">
                <i class="fa fa-archive"></i>
                <p>Archive</p>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bar-chart"></i>
                <p>Statistics</p>
              </a>
            </li>
            <li>
              <a href="cso_org_list.html">
                <i class="fa fa-users"></i>
                <p>Organizations</p>
              </a>
            </li>
          </ul>
        </div>

      </div>

      <!-- The Main Panel -->
      <div class="main-panel">

        <!-- Main Navigation (Notification & Logout) -->
        <nav class="navbar navbar-transparent navbar-absolute">
          <div class="container-fluid">
            <!-- Navbar UX -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
            <!-- Navbar Title -->
						</button>
              <a class="navbar-brand nav-title" href="#">
                <i class="fa fa-list"></i> Activity List
              </a>
            </div>

            <div class="collapse navbar-collapse">
              <!-- Navbar Items (Right) -->
              <ul class="nav navbar-nav navbar-right">

                <!-- Notification -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle btn btn-white" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="notification">2</span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Revision Issue at Activity.</a></li>
                    <li><a href="#">Your Activity has been approved!</a></li>
                  </ul>
                </li>

                <!-- Logout -->
                <li>
                  <a href="" class="btn btn-white">
                    Logout
                    <i class="fa fa-sign-out"></i>
                  </a>
                </li>

              </ul>
            </div>

          </div>
        </nav>

        <div class="content">
          <div class="container-fluid">
              <!-- Page toolbar (back, status) -->
              <div class="page-toolbar">
                <!-- Back Button -->
                <a href="" class="btn btn-white" data-toggle="tooltip" data-placement="right" title="Back to List">
                  <li class="fa fa-chevron-left"></li>
                </a>
                <!-- Status -->
                <h3 style="display: inline-block" class="pull-right">
                  <label class="label label-warning">
                    Pending
                  </label>
                </h3>
              </div>
              <!-- Main page -->
              <div class="activity-page">
                <div class="card card-nav-tabs">

                  <div class="card-header" data-background-color="purple">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                          <li class="active">
                            <a href="#details" data-toggle="tab">
                              <i class="material-icons">description</i>
                              Activity Details
                              <div class="ripple-container"></div>
                            </a>
                          </li>
                          <li>
                            <a href="#remarks" data-toggle="tab">
                              <i class="material-icons">mode_edit</i>
                              Remarks
                              <div class="ripple-container"></div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="card-content">
                    <div class="clearfix page-head">
                      <h3 class="pull-left">
                        <span class="org-name">JPIA - </span>
                        <span class="activity-title">Fund Raising Event</span>
                      </h3>
                      <h3 class="pull-right">
                        <span class="activity-date">Sep 26, 2016</span>
                      </h3>
                    </div>
                    <div class="tab-content">
                      <div class="tab-pane active" id="details">
                          <!-- PRS, Process, and Budget -->
                          <div class="row">

                            <div class="col-sm-3">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-bank"></i>
                                  </span>
                                  <label for="processType" class="control-label">Process Type</label>
                                  <input id="processType" name="processType" type="text" class="form-control" placeholder="Process Type (e.g. Cash Advance, Direct Payment)" />
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-credit-card"></i>
                                  </span>
                                  <label for="PRSno" class="control-label">PRS Number</label>
                                  <input id="PRSno" name="PRSno" type="number" class="form-control"
                                  placeholder="Enter PRS number here." />

                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-rub fa-2x" aria-hidden="true"></i>
                                  </span>
                                  <label for="budget" class="control-label">Budget</label>
                                  <input id="budget" name="budget" type="number" class="form-control" placeholder="Amount" step="any" min="0"/>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-credit-card" aria-hidden="true"></i>
                                  </span>
                                  <label for="FRAnum" class="control-label">FRA Number</label>
                                  <input id="FRAnum" name="FRAnum" type="number" class="form-control" placeholder="FRA number" step="any" min="0"/>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-cart-arrow-down"></i>
                                  </span>
                                  <label for="particular" class="control-label">Particulars</label>
                                  <input id="particular" name="particular" type="text" class="form-control" placeholder="Enter the Particulars here."/>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-user-circle"></i>
                                  </span>
                                  <label for="payTo" class="control-label">Payable To:</label>
                                  <input id="payTo" name="payTo" type="text" class="form-control" placeholder="Payable To:"/>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-file-text fa-2x"></i>
                                  </span>
                                  <label for="PCVno" class="control-label">Petty Cash Voucher Number</label>
                                  <input id="PCVno" name="PCVno" type="number" step="any" class="form-control" placeholder="Petty Cash Voucher Number (Required for PCR)"/>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-file-text fa-2x"></i>
                                  </span>
                                  <label for="DORno" class="control-label">Deposit Official Receipt Number</label>
                                  <input id="DORno" name="DORno" type="number" step="any" class="form-control" placeholder="Deposit Official Receipt Number(Required for LQ)"/>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-bar-chart"></i>
                                  </span>
                                  <label for="actualRevenue" class="control-label">Actual Revenue</label>
                                  <input id="actualRevenue" name="actualRevenue" type="number" step="any" class="form-control" placeholder="Revenue"/>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-bar-chart"></i>
                                  </span>
                                  <label for="netIncome" class="control-label">Net income</label>
                                  <input id="netIncome" name="netIncome" type="number" step="any" class="form-control" placeholder="Income"/>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-usd"></i>
                                  </span>
                                  <label for="expRevenue" class="control-label">Expenses from Revenue</label>
                                  <input id="expRevenue" name="expRevenue" type="number" step="any" class="form-control" placeholder="Expenses"/>
                                </div>
                              </div>
                            </div>
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-2x fa-usd"></i>
                                    </span>
                                    <label for="expDisburse" class="control-label">Expenses from Disbursements</label>
                                    <input id="expDisburse" name="expDisburse" type="number" step="any" class="form-control" placeholder="Expenses"/>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-4 col-sm-offset-4">
                              <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                  <span class="input-group-addon">
                                    <i class="fa fa-2x fa-user"></i>
                                  </span>
                                  <label for="submittedBy" class="control-label">Submitted By</label>
                                  <input id="submittedBy" name="submittedBy" class="form-control" placeholder="Submitted By"/>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <div class="row">
                              <div class="text-right">
                                <button class="btn btn-info">Edit</button>
                                <button class="btn btn-danger">Remark</button>
                                <button class="btn btn-success">Approve</button>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="remarks">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">CSO</h3>
                          </div>
                          <div class="panel-body">
                            <div class="row">

                              <!-- Date Pended by CSO -->
                              <div class="col-sm-4">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-2x fa-calendar"></i>
                                    </span>
                                    <label for="datePendedCSO" class="control-label">Date Pended by CSO</label>
                                    <input id="datePendedCSO" name="datePendedCSO" type="text" class="form-control" placeholder="Date Pended by CSO Finance" />
                                  </div>
                                </div>
                              </div>
                              <!-- Status -->
                              <div class="col-sm-4">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-2x fa-map-pin"></i>
                                    </span>
                                    <label for="statusCSO" class="control-label">Status</label>
                                    <input id="statusCSO" name="statusCSO" type="number" class="form-control"
                                    placeholder="Status" />
                                  </div>
                                </div>
                              </div>
                              <!-- Revisions -->
                              <div class="col-sm-4">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="revisionsCSO" class="control-label">Revisions</label>
                                    <input id="revisionsCSO" name="revisionsCSO" type="number" class="form-control" placeholder="Revisions" step="any" min="0"/>
                                  </div>
                                </div>
                              </div>

                            </div>
                            <!-- Audited(Date, by) -->
                            <div class="row">
                              <!-- Date Audited -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="dateAudited" class="control-label">Date Audited</label>
                                    <input id="dateAudited" name="dateAudited" type="text" class="form-control" placeholder=" Date Audited"/>
                                  </div>
                                </div>
                              </div>
                              <!-- Audited By -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="auditedBy" class="control-label">Audited By</label>
                                    <input id="auditedBy" name="auditedBy" type="text" class="form-control" placeholder="Audited By"/>
                                  </div>
                                </div>
                              </div>

                            </div>

                            <!-- Encoded(Date,by) -->
                            <div class="row">

                              <!-- Date Encoded -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="dateEncoded" class="control-label">Date Encoded</label>
                                    <input id="dateEncoded" name="dateEncoded" type="text" class="form-control" placeholder="Date Encoded"/>
                                  </div>
                                </div>
                              </div>

                              <!-- Encoded By -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="encodedBy" class="control-label">Encoded By</label>
                                    <input id="encodedBy" name="encodedBy" type="text" class="form-control" placeholder="Encoded By"/>
                                  </div>
                                </div>
                              </div>

                            </div>

                            <!-- CSO Remarks -->
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-bookmark fa-2x"></i>
                                    </span>

                                    <label for="CSOremarks" class="control-label">CSO Remarks</label>
                                    <textarea class="form-control" rows="4" id="CSOremarks" name="CSOremarks" placeholder="Enter Remarks here."></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <div class="panel panel-warning">
                          <div class="panel-heading">
                            <h3 class="panel-title">SLIFE</h3>
                          </div>
                          <div class="panel-body">
                            <!-- SLIFE Date -->
                            <div class="row">
                              <!-- Date Recieved by SLIFE -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="dateReceivedSLIFE" class="control-label">Date Received by SLIFE</label>
                                    <input id="dateReceivedSLIFE" name="dateReceivedSLIFE" type="text" class="form-control" placeholder="Date Received by SLIFE"/>
                                  </div>
                                </div>
                              </div>
                              <!-- Date Pended by SLIFE -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="datePendedSLIFE" class="control-label">Date Pended by SLIFE</label>
                                    <input id="datePendedSLIFE" name="datePendedSLIFE" type="text" class="form-control" placeholder="Date Pended by SLIFE"/>
                                  </div>
                                </div>
                              </div>

                            </div>

                            <!-- SLIFE Remarks -->
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-bookmark fa-2x"></i>
                                    </span>

                                    <label for="SLIFEremarks" class="control-label">SLIFE Remarks</label>
                                    <textarea class="form-control" rows="4" id="SLIFEremarks" name="SLIFEremarks" placeholder="Enter Remarks here."></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <h3 class="panel-title">Accounting Office</h3>
                          </div>
                          <div class="panel-body">
                            <!-- Accounting Office Dates -->
                            <div class="row">
                              <!-- Date Recieved by Accounting Office -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="dateReceivedAcc" class="control-label">Date Received by Accounting Office</label>
                                    <input id="dateReceivedAcc" name="dateReceivedAcc" type="text" class="form-control" placeholder="Date Received by Accounting Office"/>
                                  </div>
                                </div>
                              </div>
                              <!-- Date Pended by Accounting Office -->
                              <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <label for="datePendedAcc" class="control-label">Date Pended by Accounting Office</label>
                                    <input id="datePendedAcc" name="datePendedAcc" type="text" class="form-control" placeholder="Date Pended by Accounting Office"/>
                                  </div>
                                </div>
                              </div>

                            </div>

                            <!-- Accounting Office Remarks -->
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-bookmark fa-2x"></i>
                                    </span>
                                    <label for="Accremarks" class="control-label">Accounting Office Remarks</label>
                                    <textarea class="form-control" rows="4" id="Accremarks" name="Accremarks" placeholder="Enter Remarks here."></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Other Remarks -->
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group has-feedback">
                                  <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                                      <i class="fa fa-bookmark fa-2x"></i>
                                    </span>

                                    <label for="notes" class="control-label">SLIFE Resubmission/Notes</label>
                                    <textarea class="form-control" rows="4" id="notes" name="notes" placeholder="Enter Remarks here."></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="text-right">

                          <button class="btn btn-info" id="submitRemarkBtn">Submit Remark</button>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Sort Inputs -->
    <input type="text" value="desc" id="sortOrder" style="display: none">
    <input type="text" value="list-date" id="sortField" style="display: none">
  </body>
  <!--   Core JS Files   -->
  <script src="assets/js/jquery.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap-table.min.js" type="text/javascript"></script>
  <script src="assets/js/material.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>

  <!-- Material Dashboard javascript methods -->
  <script src="assets/js/material-dashboard.js"></script>

  <!-- Moment JS -->
  <script src="assets/js/moment.js"></script>

  <script src="assets/js/cso_table.js"></script>

  <script type="text/javascript">
    var $table = $('#activityTable');
    $table.bootstrapTable({
      pagination: true,
      onlyInfoPagination: false,
      pageSize: 12,
      formatShowingRows: function(pageFrom, pageTo, totalRows) {

      },
      formatRecordsPerPage: function(pageNumber) {

      },
      formatDetailPagination: function(totalRows) {
        return ;
      },
      onClickRow: function(row, $element){
      }
    });
  </script>

</html>
