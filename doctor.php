<?php 
  include_once 'dbconfig.php';
  include 'includes/header.php';
?>
  
  <paper-toolbar>
    <span class="flex">Prescription App</span>
  </paper-toolbar>

  <section>
    <form id="form" method="post" action="add.php" >
      <input type="hidden" name="doctorid" value="1" readonly/>
      <paper-input error-message="Please enter a valid ID!" label="Patient ID" name="patientid" required></paper-input>
      <paper-input error-message="Please enter a valid prescription!" label="Prescription" name="prescription" required></paper-input>
      <!-- <paper-button raised name="submit" onclick="submitHandler(event)">Submit</paper-button> -->
      <input type="submit" name="submit" 
      style="border:none;width:120px;height:40px;font-size:18px;-webkit-box-shadow: 1px 3px 5px 0px rgba(150,148,150,1);
            -moz-box-shadow: 1px 3px 5px 0px rgba(150,148,150,1);
            box-shadow: 1px 3px 5px 0px rgba(150,148,150,1);"
      />
    </form>
  </section>

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
