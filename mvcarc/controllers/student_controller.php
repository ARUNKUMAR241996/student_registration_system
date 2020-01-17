<?php
include_once '../models/student_model.php';

	
	 class student_controller{
	public function save_data($fname,$lname,$gender,$ph,$dep,$course,$sem,$year,$user,$pass)
	{
	    echo "student";
	    $obj = new student_model();
	    $obj->insert($fname,$lname,$gender,$ph,$dep,$course,$sem,$year,$user,$pass);
	}
	public function update_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
	    echo "student edit";
	    $obj = new student_model();
	    $obj->update($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
	}
	
    public function login($user1,$pass1,$usertype)
	{
	    echo "student login";
	    $obj = new student_model();
	    $obj->login($user1,$pass1,$usertype);
	}
  }	 

?>