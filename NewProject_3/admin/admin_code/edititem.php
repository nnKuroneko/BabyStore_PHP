<html>
    <body>
<main role="main" class="container">

            <div class="starter-template">
                <h1>แก้ไขรายการข้อมูลหนังสือ</h1>
                <br><br>
                <?php
                
                 $mysqil=mysqli_connect("localhost","root","", "storebaby_db") or die(mysql_error());
                 if(isset($_GET['id']))
                     {
                      $sql = "Select * from product where product_id=".$_GET['id'];
                      $result = $mysqli->query($sql);
                       while($data = $result->fetch_object()){
                            $itemname = $data->product_name;
                            $price = $data->product_price;
                            $type_id = $data->product_type_id;
                            $id = $data->id;
                        ?>
                            <form method="post" action="EditDataBook.php">
                                <input type="hidden" id="id" name="id" value=<?php echo $id; ?>>
                                 <div class="form-group">
                               <label for="text">ชื่อหนังสือ</label>
                               <input type="text" class="form-control" name="name"  value=<?php echo $itemname; ?>>
                            </div>
                            <div class="form-group">
                                <label for="text">ราคา</label>
                                <input type="text" class="form-control" name="price" value=<?php echo $price; ?> >    
                            </div>
                                
                                
                                
                                
                                
                                
                            <?php
                                $sql = "Select * from category ";

                                $result = $mysqli->query($sql);
                        
                                echo '<select product_name="product_type_id" id="product_type_id" class="custom-select">';
                                while($data = $result->fetch_object()){
                                    $id = $data->id;
                                    $catname = $data->catagory_name;
                                    $str_select ='';
                                    if($Type_id==$id){
                                        $str_select = 'Selected';
                                    }
                                    echo ' <option value='.$id.' '.$str_select.'>'.$catname.'</option>';
                                }
                                echo ' </select>';
                         
                                mysqli_close($mysqli);

                    ?>    
                            <br><br>
                                <button type="submit" class="btn btn-primary">บันทึกรายการ</button>
                            </form>
                      <?php
                     } // while 
                     
                } //if
                      ?>    
            </div>

        </main><!-- /.container -->
        
    </body>
</html>