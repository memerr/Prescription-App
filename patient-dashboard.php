<?php
  include_once 'dbconfig.php';
  include 'includes/header.php';
?>

  <paper-toolbar>

  	<paper-menu-button>
  	  <paper-icon-button icon="menu" class="dropdown-trigger"></paper-icon-button>
  	  <paper-menu class="dropdown-content">
  	    <a href="index.php"><paper-item>Home</paper-item></a>
  	    <a href="doctor-dashboard.php"><paper-item>Doctor</paper-item></a>
  	    <a href="patient-dashboard.php"><paper-item>Patient</paper-item></a>
  	  </paper-menu>
  	</paper-menu-button>

    <span class="flex">Patient's Dashboard</span>
  </paper-toolbar>

  <div class="patient-dashboard">
	<a href="#!"><paper-button class="dashboard-btn" raised>View Profile</paper-button></a>
	<a href="patient.php"><paper-button class="dashboard-btn" raised>View Prescriptions</paper-button></a>
	<a href="#!"><paper-button class="dashboard-btn" raised>View Calendar</paper-button></a>
  </div>

<?php include 'includes/footer.php'; ?>
