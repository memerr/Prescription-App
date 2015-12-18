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

    <span class="flex">Doctor's Dashboard</span>
  </paper-toolbar>

  <div class="doctor-dashboard">

      <a href="#!"><paper-button class="dashboard-btn" raised>View Profile</paper-button></a>
      <a href="doctor.php"><paper-button class="dashboard-btn" raised>Add Prescription</paper-button></a>
      <a href="#!"><paper-button class="dashboard-btn" raised>View Calendar</paper-button></a>

  </div>

<?php include 'includes/footer.php'; ?>
