<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>JPIA | Activity List</title>

		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<meta name="viewport" content="width=device-width" />

		<!-- Bootstrap core CSS     -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

		<!--  Material Dashboard CSS    -->
		<link href="assets/css/material-dashboard.css" rel="stylesheet" />

    <!-- Bootstrap-Table CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-table.min.css">

		<!-- Datepicker CSS -->
		<link href="assets/css/bootstrap-datepicker.css" rel="stylesheet" />

		<!-- Font Awesome :-) -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/cso_table.css">
		<link rel="stylesheet" href="assets/css/cso_page.css">
		<style media="screen">
			.dos, .datePended{
				font-weight: bold;
				font-style: normal;
			}
			.list-process{
				font-weight: bold;
			}
			#sortFieldTxt{
				width: auto !important;
			}
		</style>

		<!--     Fonts and icons     -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css">
	</head>

	<body>

		<div class="wrapper">
			<div class="sidebar" data-color="green" data-image="">

				<div class="logo text-center">
					<!-- Logo image test -->
					<img src="assets/img/logos/JPIA.png" alt="" width="150px" class=" text-center">
					<a href="#" class="simple-text">
					JPIA
					</a>
				</div>

				<div class="sidebar-wrapper">
					<ul class="nav">
						<li>
							<a href="org_create_activity.html">
								<i class="fa fa-file-text"></i>
								<p>New Activity</p>
							</a>
						</li>
						<li class="active">
							<a href="org_activity_list.html">
								<i class="fa fa-list"></i>
								<p>View Activities</p>
							</a>
						</li>
						<li >
							<a href="org_profile.html">
								<i class="fa fa-users"></i>
								<p>Org Profile</p>
							</a>
						</li>
					</ul>
				</div>

			</div>

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
						<!-- Table Actions -->
            <div class="table-toolbar pull-right">
              <!-- Sort Dropdown -->
              <div class="dropdown" data-toggle="tooltip" data-placement="top" title="Sort by Field">
                <a href="#" class="btn btn-white dropdown-toggle sort-toggle" data-toggle="dropdown" id="sortFieldTxt">
                  Title
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="sortFieldBtn" data-field="list-title">Title</a></li>
                  <li><a href="#" class="sortFieldBtn" data-field="list-process">Process</a></li>
                  <li><a href="#" class="sortFieldBtn" data-field="list-dos">Date Submitted</a></li>
                  <li><a href="#" class="sortFieldBtn" data-field="list-datePended">Date Pended</a></li>
									<li><a href="#" class="sortFieldBtn" data-field="list-status">Status</a></li>
                </ul>
              </div>
							<!-- Sort Asc/Des -->
              <div class="sortAsc" data-toggle="tooltip" data-placement="top" title="Sort Up/Down">
                <button class="btn btn-white" id="sortOrderBtn">
                  <i class="fa fa-long-arrow-down" id="sortOrderIcon"></i>
                </button>
              </div>
            </div>
            <!-- Main Table -->
            <table class="table table-hover table-responsive"
            id="activityTable"
            data-toggle="table"
						data-show-header="false">
              <thead>
                <tr>
                  <th data-field="list-title" data-align="left" data-sortable="true">Title</th>
									<th data-field="list-process" data-align="left" data-sortable="true">Process</th>
                  <th data-field="list-dos" data-align="right" data-sortable="true">Date Submmited</th>
                  <th data-field="list-datePended" data-align="right" data-sortable="true">Date Pended</th>
                  <th data-field="list-status" data-align="center" data-sortable="true">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="">
                    <span class="list-title">Fund Raising Activity </span>
                    <span class="list-desc">A fundraising event in Vito Cruz</span>
                  </td>
									<td class="list-process">Cash Advance</td>
                  <td class="list-dos">
										Date Submitted:
                    <span class="dos">10/01/16</span>
                  </td>
                  <td class="list-datePended">
										Date Pended:
                    <span class="datePended">10/03/16 21:18</span>
                  </td>
                  <td class="list-status">
                    <span class="label label-warning">Pending</span>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <span class="list-title">Battle of the Band </span>
                    <span class="list-desc">Battle of the bands event in Yuchenco Hall</span>
                  </td>
									<td class="list-process">Down Payment</td>
                  <td class="list-dos">
										Date Submitted:
                    <span class="dos">10/01/17</span>
                  </td>
                  <td class="list-datePended">
										Date Pended:
                    <span class="datePended">10/26/16 06:18</span>
                  </td>
                  <td class="list-status">
                    <span class="label label-warning">Pending</span>
                  </td>
                </tr>
                <tr>
                  <td class="">
                    <span class="list-title">MySQL Workshop </span>
                    <span class="list-desc">A MySQL Workshop in Gokonwei Lobby</span>
                  </td>
									<td class="list-process">Cash Advance</td>
                  <td class="list-dos">
										Date Submitted:
                    <span class="dos">07/12/16</span>
                  </td>
                  <td class="list-datePended">
										Date Pended:
                    <span class="datePended">07/15/16 13:05</span>
                  </td>
                  <td class="list-status">
                    <span class="label label-warning">Pending</span>
                  </td>
                </tr>

              </tbody>
            </table>
					</div>
				</div>
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul>
								<li>
									<a href="#">
                      View Acitivities
                    </a>
								</li>
							</ul>
						</nav>
						<p class="copyright pull-right">
							&copy;
							<script>
								document.write(new Date().getFullYear())
							</script> <a href="http://www.creative-tim.com">CSO</a> | College of Student Organizations
						</p>
					</div>
				</footer>
			</div>

		</div>
		<!-- Sort Inputs -->
    <input type="text" value="desc" id="sortOrder" style="display: none">
    <input type="text" value="list-date" id="sortField" style="display: none">
	</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
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
	<script src="assets/js/org_table.js"></script>


  <script type="text/javascript">
    var $table = $('#activityTable');
    $table.bootstrapTable({
      pagination: true,
      onlyInfoPagination: false,
			search: true,
			toolbar: '.table-toolbar',
			toolbarAlign: 'right',
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
