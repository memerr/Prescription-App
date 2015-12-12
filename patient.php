<?php 
  include_once 'dbconfig.php';
  include 'includes/header.php';
?>

  <paper-toolbar>
    <!-- <paper-icon-button icon="menu"></paper-icon-button> -->
    <span class="flex">Prescription App</span>
  </paper-toolbar>
  
  <input type="hidden" name="patientid" value="1" />

  <?php

  $sql_query="SELECT doctor.first_name, doctor.last_name, prescription.prescription, prescription.timestamp FROM prescription, patient, doctor WHERE prescription.patient_id = 1 ORDER BY prescription.prescription_id DESC LIMIT 20";
  $result_set=mysql_query($sql_query);
  if(mysql_num_rows($result_set) > 0)
  {
        while($row=mysql_fetch_row($result_set))
    {
    ?>
            <section align="center">
              <paper-card heading="Prescribed by: Dr. <?php echo $row[0]." ".$row[1]; ?>">
              <div class="card-content">since: <?php echo $row[3]; ?></div>
                <div class="card-content"><?php echo $row[2]; ?></div>
                <!-- <div class="card-actions">
                    <paper-button raised icon="done" title="done" class="green">Done</paper-button>
                </div> -->
              </paper-card>
            </section>
        <?php
    }
  }
  else
  {
    ?>
        <section align="center">
          <div>No Data Found!</div>
        </section>
        <?php
  }
  ?>

<?php include 'includes/footer.php'; ?>