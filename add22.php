

<?php
    if (isset($_POST['t1'])) 
    {
        $con=mysql_connect("localhost","root","");
        if($con==false)
        {
            die("error in database connection");
        }
      
        $n=$_POST["t1"];
        $p=$_POST["t2"];
        $d=$_POST["t3"];
      
        $img=$_FILES['img']['name'];
        $timg=$_FILES['img']['tmp_name'];
        $folder='img/'.$img;
        move_uploaded_file($timg, $folder);    
        mysql_select_db("project");
       
        $k=mysql_query("insert into add3 values('','$n',$p,'$d','$folder')");
            if($k==true)
            {
                echo("success");
                // header("Location:contact_order.php");
            }
            else
            {
                echo("not success");
            }
        
        mysql_close($con);
    }
    

    ?>
    
   
                               