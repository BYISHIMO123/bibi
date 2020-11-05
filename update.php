<?php
                        if(isset($_GET['update'])){
                            $id = $_GET['id'];
                            $update_pname = $_GET['update_pname'];
                            $update_brand = $_GET['update_brand'];
                            $update_rate = $_GET['update_rate'];
                            $update_quantity = $_GET['update_quantity'];
                            $update_category = $_GET['update_category'];
                            $update_status = $_GET['update_status'];

                            $query = mysql_query("UPDATE `hods` SET `hods_names`='$update_pname',`hods_type`='$update_brand',`hods_email`='$update_rate',`hods_phone`='$update_quantity',`hods_username`='$update_category',`hods_pwd`='$update_status' WHERE `hods_id`='$id' ");
                            if($query)
                            {
                                ?>
                                <script>
                                    alert("Changes was Successfully Saved");
                                    document.location = "product.php";
                                </script>
                                <?php
                            }
                            else{
                                ?>
                                <script>
                                    alert("Change has Failed to be saved");
                                    // document.location = "register_product.php";
                                </script>
                                <?php
                            }
                        }
                    ?>