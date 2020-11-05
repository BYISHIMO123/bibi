
<?php 
  $db = mysqli_connect('localhost', 'root', '', 'skl');
  $age = "";
                        if(isset($_POST['add'])){//1st starts
                            $id = $_POST['id'];
        $age = $_POST['age'];
        $category = $_POST['category'];
        
  	$sql_u = "select * from hello where age='$age'";
  	$res_u = mysqli_query($db, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
         echo 'Sorry... age already Added!';
	

  	}else{
           $query = "INSERT INTO hello(id,age,category)  
      VALUES ('$id','$age','$category')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           exit();
  	}
  }
?>
<?php
mysql_connect("localhost","root","") or die("failed to connect to the database");
mysql_select_db("skl") or die("failed")
?>


<?php
                        if(isset($_POST['update'])){
                            $id = $_POST['id'];
                            $age = $_POST['age'];
                            $category = $_POST['category'];

                            $query = mysql_query("UPDATE `hello` SET `age`='$age',`category`='$category' where `id`='$id' ");
                            if($query)
                            {
                                ?>
                                <script>
                                    alert("Changes was Successfully Saved");
                                    document.location = "index.php";
                                </script>
                                <?php
                            }
                            else{
                                ?>
                                <script>
                                    alert("Change has Failed to be saved");
                                    // document.location = "index.php";
                                </script>
                                <?php
                            }
                        }
                    ?>
