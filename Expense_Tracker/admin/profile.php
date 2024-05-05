<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['detsadminid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $aid=$_SESSION['detsadminid'];
    $adminname=$_POST['adminname'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];

     $query=mysqli_query($con, "update tbladmin set AdminName ='$adminname', MobileNumber='$mobno', Email='$email' where ID='$aid'");
    if ($query) {
    
    echo "<script>alert('Admin profile has been updated');</script>";
  }
  else
    {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SPENDWISE || User Profile</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Profile</div>
					<div class="panel-body">
					
						<div class="col-md-12">
							<?php
$adminid=$_SESSION['detsadminid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							<form role="form" method="post" action="">
								<div class="form-group">
									<label>Admin Name</label>
									<input name='adminname' id="adminname" class="form-control" value="<?php  echo $row['AdminName'];?>">
								</div>
								<div class="form-group">
									<label>User Name</label>
<input type="text" class="form-control" name="username" readonly="true" value="<?php  echo $row['UserName'];?>">
								</div>
								
								<div class="form-group">
									<label>Mobile Number</label>
									<input type="text" class="form-control" name="mobilenumber" required="true"value="<?php  echo $row['MobileNumber'];?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" required="true" value="<?php  echo $row['Email'];?>">
								</div>
								<div class="form-group">
									<label>Registration Date</label>
									<input type="text" class="form-control" name="adminrd" readonly="true" value="<?php  echo $row['AdminRegdate'];?>">
								</div>
								
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Update</button>
								</div>
								
								
								</div>
								<?php } ?>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	
</body>
</html>
<?php }  ?>