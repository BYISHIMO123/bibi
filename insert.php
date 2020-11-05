





<?php
$con=mysqli_connect("localhost","root","","skl");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//escape variable for security here or problem
      
        $age = $_POST['age'];
        $category = $_POST['category'];
        

//we are using mysql_query function. it returns a resource on true else False on error
       $sql="insert into hello set
                    age = '$age',
                    category = '$category'";  

 



if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>

<?php
//To delete:
if(isset($_POST["delete"])){
$age=$_POST["age"];
$delete=mysqli_query("delete from hello where age='$_POST[age]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"index.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"index.php\"
	</script>";
}
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "index.php";
					</script>
        