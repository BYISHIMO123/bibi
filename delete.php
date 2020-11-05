<?php
//To delete:
if(isset($_POST["delete"])){
$id=$_POST["National_id"];
$delete=mysql_query("delete from transfer where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
}
?>