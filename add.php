<?php
include_once 'dbconfig.php';
if(isset($_POST['submit']))
{
	$patientid = $_POST['patientid'];
	$prescription = $_POST['prescription'];
	$doctorid = $_POST['doctorid'];
	
	$sql_query = "INSERT INTO prescription(prescription, patient_id, doctor_id) VALUES('$prescription','$patientid','$doctorid')";
	
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='doctor.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
}
?>