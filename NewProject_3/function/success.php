

<?php

if (isset($_POST['success'])) {
    $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $postcode = $_POST['postcode'];
//$tran_image = $_POST['tran_image'];
    $banking = $_POST['postcode'];
    $id = $_POST['transaction_id'];

    $code = rand(0, 98987787866533499);

    $name = $code . $_FILES["tran_image"] ["name"];
    $type = $_FILES["tran_image"] ["type"];
    $size = $_FILES["tran_image"] ["size"];
    $temp = $_FILES["tran_image"] ["tmp_name"];
    $error = $_FILES["tran_image"] ["error"];

    if ($error > 0) {
        die("Error uploading file! Code $error.");
    } else {
        if ($size > 30000000000) { //conditions for the file
            die("Format is not allowed or file size is too big!");
        } else {
            move_uploaded_file($temp, "../tranimage/" . $name);


           $t_sql = "UPDATE transaction SET firstname=$firstname , lastname=$lastname ,telephone=$telephone , address=$address , town=$town "
                   . ",postcode=$postcode , tran_image=$name ,Banking=$banking WHERE transaction_id = '$id'";
           $t_result = mysqli_query($mysqli,$t_sql); 

           $t_sql = "UPDATE transaction SET firstname=$firstname , lastname=$lastname ,telephone=$telephone , address=$address , town=$town "
                   . ",postcode=$postcode , tran_image=$name ,Banking=$banking WHERE transaction_id = '$id'";
           $t_result = mysqli_query($mysqli,$t_sql); 
            //exit(header( "refresh: 1; url=/NewProject_3/admin/listitem.php" ));
           
           $result = $mysqli->query($t_sql);
           
           
           
           
              
           $q1 = mysqli_query($mysqli, "INSERT INTO transaction ( transaction_id,firstname,lastname, telephone, address, town,  postcode ,tran_image ,Banking )
				VALUES ('$id','$firstname','$lastname','$telephone','$address', '$town','$postcode' , '$name','$banking') WHERE transaction_id = '$id'");
				

        if (!$result) {

            echo "<script>alert('บันทึกรายการผิดพลาด')</script>";
            echo $t_sql;
            //header( "refresh: 1; url=/NewProject_3/admin/listitem.php" );
        } else {

            echo "<script>alert('บันทึกรายการเรียบร้อย')</script>";

            // header( "refresh: 1; url=/NewProject_3/admin/listitem.php" );
            //exit(0);
        }
           
           
        }
    }
}
?>
















































