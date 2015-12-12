<?php 
  include_once 'dbconfig.php';
  include 'includes/header.php';
?>

  <paper-toolbar>
    <paper-icon-button icon="menu"></paper-icon-button>
    <span class="flex">Prescription App</span>
    <paper-fab icon="add"></paper-fab>
  </paper-toolbar>
  
  <a href="doctor.php">Doctor</a>
  <a href="patient.php">Patient</a>

<?php include 'includes/footer.php'; ?>