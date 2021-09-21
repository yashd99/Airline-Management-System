<?php
    session_start();
    if(empty($_SESSION['user_info'])){
        echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
    }
    $conn = mysqli_connect("localhost","root","yash99","airplanes");
    if(!$conn){
        echo "<script type='text/javascript'>alert('Database failed');</script>";
        die('Could not connect: '.mysqli_connect_error());
    }
    if (isset($_POST['submit']))
    {
        $source=$_POST['source'];
        $destination=$_POST['destination'];
        $sql = "SELECT * FROM flights WHERE f_src = '{$source}' AND f_dest='{$destination}';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $email=$_SESSION['user_info'];
        $f_no=$row['f_no'];
        $query="UPDATE passenger SET f_no='{$f_no}' WHERE email='{$email}';";
        $f_no=$row['f_no'];
        $s_month=$_POST['month_start'];
        $s_day=$_POST['day_start'];
        $s_year=$_POST['year_start'];
        $sql="INSERT INTO start_date VALUES('{$f_no}','{$s_month}','{$s_day}','{$s_year}');";
        $result = mysqli_query($conn, $sql);
        $sql1="Select * from tickets where f_no in (Select f_no from flights where f_no='{$f_no}');";
         $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $sql2="select * from passenger where f_no in (Select f_no='{$f_no}' from flights);";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        if(mysqli_query($conn, $query))
        {
            if(!empty($row)){
                $f_no=$row['f_no'];
                $message = "Flight booked successfully";
                
            }
            else{
                $message="Transaction failed";
            }
        }
        else {
            $message="Transaction failed";
        }
        echo "<script type='text/javascript'>alert('{$message}');</script>";
        
    }
    
    
    
    
    
    ?>
<html>
<style type="text/css">
html {
background: url(airline4.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

<body>
<?php
    session_start();
    include("nav.php")
    ?>



<center>
<font color="Cornsilk" size="5">
<label><?php echo "Flight Number=".$row['f_no'];?><br></label>
<label for="source">

<?php
    echo"Source=".$row['f_src'];
    
    
    ?>
<br>
<font color="Cornsilk" size="5">
</label>
<label for="dest"><?php echo"Destination=".$row['f_dest'];?>
<br>
</label>
<label for ="air"><?php echo "Airlines=".$row['f_name'];?><br></label>
<label ><?php echo "Price=".$row1['t_fare'];?></label>

</center>
</body>

</html>


