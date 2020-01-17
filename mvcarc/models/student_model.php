<?php


	include_once "../views/header.php";
	include_once "../controllers/student_controller.php";
 	
	
    
	class student_model
	{

	     public function insert($fname,$lname,$gender,$ph,$dep,$course,$sem,$year,$user,$pass)
		 {
		 include('../config/connection.php');
		 $connection = new PDO($dsn, $username, $password, $options);
	     echo $sql="INSERT INTO students (fname, lname, gender, email, ph, course, sem,joindate,username, cpass)
              VALUES ('$fname','$lname','$gender','$ph','$dep','$course','$sem','$year','$user','$pass')";

	     $connection->exec($sql);
	     echo $sql;
         echo "New record created successfully";
	    }

	    public function update($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	    {
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    echo $sql = "UPDATE student SET reg_no='$reg_no', fname='$fname', lname='$lname', mobile='$mobile', email='$email', dept_name='$dept', course_name='$course', sem_no='$sem', username='$uname', password='$psw'";
	    $stmt = $connection->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully";
    }

    public function login($user1,$pass1,$usertype)
	    {
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    $stmt = $connection->prepare("SELECT * FROM login WHERE username='$user1' AND password='$pass1' AND user_type='$usertype'"); 
            $stmt->execute();
            echo "Welcome".$user1;
            header("Location:profile.php");
        }
	
	}	
/*	
catch(PDOException $e)
    {
    echo $sql . "<br> errorrrrrrrr" . $e->getMessage();
    }

     
    
*/
?>
