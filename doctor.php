<?php
  include_once 'dbconfig.php';
  include 'includes/header.php';
?>

  <paper-toolbar>
    <a class="arrow-back color-white" href="doctor-dashboard.php"><paper-icon-button icon="arrow-back"></paper-icon-button></a>
    <span class="flex">Add Prescription</span>
  </paper-toolbar>

  <div class="add-form">
  <paper-card heading="Add Prescription" class="doctor-form">
    <section>
      <form id="form" method="post" action="add.php" >
        <input type="hidden" name="doctorid" value="1" readonly/>
        <paper-input error-message="Please enter a valid ID!" label="Patient ID" name="patientid" required></paper-input>
        <paper-input error-message="Please enter a valid prescription!" label="Prescription" name="prescription" required></paper-input>
        <!-- <paper-button raised name="submit" onclick="submitHandler(event)">Submit</paper-button> -->
        <input class="add-submit-btn" type="submit" name="submit" />
      </form>
    </section>
  </paper-card>
  </div>

  <script>
    document.getElementById('form').addEventListener('iron-form-submit', display);

    function display(event) {
      window.location.href = 'add.php';
    }

    function submitHandler(event) {
      Polymer.dom(event).localTarget.parentElement.submit();
    }
    function resetHandler(event) {
      Polymer.dom(event).localTarget.parentElement.reset();
    }
  </script>

<?php include 'includes/footer.php'; ?>
