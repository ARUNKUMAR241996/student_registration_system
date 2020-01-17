<?php
include("nav.php");
include_once "../controllers/student_controller.php";

if (isset($_POST['submit']))
{ 
	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$ph=$_POST['ph'];
$dep=$_POST['dep'];
$course=$_POST['course'];
$sem=$_POST['sem'];
$year=$_POST['join'];
$user=$_POST['username'];
$pass=$_POST['cpass'];
$con=new student_controller();
    $con->save_data($fname,$lname,$gender,$ph,$dep,$course,$sem,$year,$user,$pass);
  }
 ?>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/regstyle.css">
	</head>

	<body style="background-color:#414141">
		 <script>
	function validate()
		{
			var name=document.forms["reg"]["name"].value;
			

    			if(name=="")
					{
						alert("Name can't be blank");
						document.forms["reg"]["name"].focus();
						return false;
					}
		}
	</script>


		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/h1.jpg" alt="">
				</div>
			<form onsubmit="return validate()" action="" method="POST" name="reg">
					<h3>Registration Form</h3>
				  <!--   <div class="form-group">
						<input type="text" placeholder="First Name" class="form-control">
						<input type="text" placeholder="Last Name" class="form-control">
					</div> -->
					<div >
						<input type="text" placeholder="First Name" class="form-control" name="fname">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div>
						<input type="text" placeholder="Last Name" class="form-control" name="lname">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div >
						<select name="gender" class="form-control">
							<option value="0" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div>
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div >
						<input type="tel" placeholder="10 digit mobile number" pattern="^\d{10}$" required class="form-control" name="ph">
					</div>
					<div >
						<select name="dep" id="" class="form-control">
							<option value="" disabled selected>Department</option>
							<option value="JSD">JSD</option>
							<option value="UI">UI</option>
							<option value="ED">ED</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div>
						<select name="course" id="" class="form-control">
							<option value="" disabled selected>Course</option>
							<option value="CSE">CSE</option>
							<option value="EC">EC</option>
							<option value="MSE">MES</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div>
						<select name="sem" id="" class="form-control">
							<option value="" disabled selected>Semester</option>
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div >
						<input type="date" placeholder="joining date" class="form-control" name="join">
						<i class="zmdi zmdi-account"></i>
                    </div>
					<div>
						<input type="text" placeholder="username" class="form-control" name="username">
						<i class="zmdi zmdi-account"></i>
                    </div>
					<div>
						<input type="password" placeholder="Password" class="form-control" name="pass">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div >
						<input type="password" placeholder="Confirm Password" class="form-control" name="cpass">
						<i class="zmdi zmdi-lock"></i>
					</div>
					
					<input type="submit" name="submit">
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html><br><br><br><br><br><br>
<?php
 include("nav1.php");
?>