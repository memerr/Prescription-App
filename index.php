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

    <span class="flex">DocuMed</span>
    <!-- <paper-fab icon="add"></paper-fab> -->
  </paper-toolbar>

  <div class="cta">
	  <paper-button raised><a href="doctor-dashboard.php">Doctor</a></paper-button>
	  <paper-button raised><a href="patient-dashboard.php">Patient</a></paper-button>
  </div>

<?php include 'includes/footer.php'; ?>