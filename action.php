<?php 
$con=mysqli_connect('localhost','root','','transport');
session_start();
if (isset($_POST['alogin'])) {
	$name=$_POST['uname'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM admin WHERE name='$name'AND psw='$psw'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==1) {
		$_SESSION['aname']=$name;
		header('location:../admin.php');
	}
	else
	{
		echo "Please enter valid Credentials";
	}
}
if (isset($_POST['signup'])) {
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$age=$_POST['age'];
	$pno=$_POST['pno'];
	$aidno=$_POST['aidno'];
	$psw=$_POST['psw'];
	$email=$_POST['email'];
	$sql="SELECT * FROM user_info WHERE uname='$uname'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4>USERNAME ALREADY EXIST PLEASE ENTER VALID USERNAME</h4>";
	}else{
		if (!preg_match('/^r19[0-9]{4}$/', $uname))
		{
		 	echo "UserName is not  Valid";
		}
		else if(!preg_match('/^19[0-9]{8}$/', $psw))
		{
			echo "Password should be as Hall Ticket No";
		}
		else
		{
			$sql="INSERT INTO `user_info` (`uid`, `name`, `uname`, `age`, `adhar_no`, `psw`, `email`)
			VALUES (NULL, '$name', '$uname', '$age', '$aidno', '$psw', '$email')";
			$run=mysqli_query($con,$sql);
			if($run){
				$_SESSION['uid']=mysqli_insert_id($con);
				$_SESSION['uname']=$uname;
				header('location:login.php');
			}
		}
	}
}
if (isset($_POST['login'])) {
   $name=$_POST['uname'];
   $psw=$_POST['psw'];
   $sql="SELECT * FROM user_info WHERE uname='$name'AND psw='$psw'";
   $run=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($run);
   if (mysqli_num_rows($run)==1) {
        $_SESSION['uid']=$row['uid'];
		$_SESSION['uname']=$name;
		header('location:../profile.php');
	}
	else
	{
		echo "User not found please click <a href='signup.php'>Sign up</a> to signup";
	}
}
if (isset($_POST['bus'])) {
	$bname=$_POST['bname'];
	$bno=$_POST['bno'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$time=$_POST['time'];
	$seat=$_POST['sno'];
	$type=$_POST['rad'];
	$fare=$_POST['fare'];
	$sql="SELECT * FROM bus_details WHERE bto='$to'AND bfrom='$from'";
    $run=mysqli_query($con,$sql);
    if (mysqli_num_rows($run)>0) {
		echo "<h4>STUDENT DETAILS ALREADY EXIST PLEASE ENTER VALID DETAILS.... THANKS</h4>";
	}else{
		if (!preg_match('/^r19[0-9]{4}$/', $from)) 
		{
		 	echo "UserName should be valid";
		}
		else
		{
			$sql="INSERT INTO `bus_details` (`bus_id`, `bname`, `bno`, `bfrom`, `bto`, `time`, `type`, `no_seat` ,`fare`) 
			VALUES (NULL, '$bname', '$bno', '$from', '$to','$time', '$type', '$seat' ,'$fare')";
			$run=mysqli_query($con,$sql);
			if ($run) {
				header('location:../admin.php');
			}
		}
	}
}
if (isset($_POST['search'])) {
	$from=$_POST['from'];
	$to=$_POST['to'];
	$date=$_POST['date'];
	$sql="SELECT * FROM booking_det WHERE jdate='$date'AND bfrom='$from'AND bto='$to'AND vacant>0";
	$run=mysqli_query($con,$sql);
    if (mysqli_num_rows($run)>0) {
		while ($row=mysqli_fetch_array($run)) {
			$bus_id=$row['bus_id'];
			$vacant=$row['vacant'];
			$sql1="SELECT * FROM bus_details WHERE bus_id='$bus_id'";
			$run1=mysqli_query($con,$sql1);
			$rows=mysqli_fetch_array($run1);
			  $bname=$rows['bname'];
			  $bno=$rows['bno'];
			  $time=$rows['time'];
			  $type=$rows['type'];
			  $fare=$rows['fare'];
			  echo " <div class='card'>
                   <div class='card-header bg-info'>
                       <h3 class='text-center'>$from</h3>
                       <h3 class='text-center'>$to</h3>
                       <h3 class='text-center'>$type</h3>
                   </div>
                  <div class='card-body bg-dark'>
                     <div class='row'>
                         <div class='col-md-6'>
                            <h5>WT  </h5>
                            <h5>COA </h5>
                            <h5>DSP </h5>
                            <h5>CD  </h5>
                            <h5>OR  </h5>
                            <h5>Seat available :</h5>
                         </div>
                         <div class='col-md-6'>
                            <h5>$bname</h5>
                            <h5>$bno</h5>                           
                            <h5>$time</h5>
                            
                            <h5>$fare</h5>
                         </div>
                     </div>
                  </div>
              
               </div>";
		}
	}else{
	$sql="SELECT * FROM bus_details WHERE bfrom='$from'AND bto='$to'";
	$run=mysqli_query($con,$sql);
	 if (mysqli_num_rows($run)>0) {
		while ($row=mysqli_fetch_array($run)) {
			  $bus_id=$row['bus_id'];
			  $bname=$row['bname'];
			  $bno=$row['bno'];
			  $time=$row['time'];
			  $type=$row['type'];
			  $fare=$row['fare'];
			  $seat=$row['no_seat'];
			  echo "<div class='card'>
                   <div class='card-header bg-info'>
                       <h3 class='text-center'>$from</h3>
                       <h3 class='text-center'>$to</h3>
                       <h3 class='text-center'>$type</h3>
                   </div>
                  <div class='card-body bg-dark'>
                     <div class='row'>
                         <div class='col-md-6'>
                            <h5>WT  :</h5>
                            <h5>DSP :</h5>
                            <h5>COA :</h5>
                            <h5>CD  :</h5>
                            <h5>OR  :</h5>
                         </div>
                         <div class='col-md-6'>
                            <h5>$bname</h5>
                            <h5>$bno</h5>
                            <h5>$time</h5>
                            <h5>$fare</h5>
                            <h5>$seat</h5>
                         </div>
                     </div>
                  </div> 
               </div>";
        }
     }else{
     	echo "<h1 class='text-dark text-center'>OOps no results found</h1>";
     }
    }
}
?> 