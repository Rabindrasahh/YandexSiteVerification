<?php

if (isset($_POST['name'])&& $_GET['action'] == 'add') {

	$conn = mysqli_connect("localhost","seefatte_apitest","zlkOaa[^9Tw{","seefatte_apitest");
	
	if(mysqli_connect_errno())
	{
	    echo "Failed to connect to MYSQL :" . mysqli_connect_errno();
	}
	
		$sms = array();
		$sql= "INSERT into aform(name, email, contact) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['contact']."')";
		$qry = mysqli_query($conn, $sql);
		
		if ($qry) {	
			$sms['success'] = 'created';
			echo json_encode($sms);
		}else{
			$sms['success'] = 'notcreted';
			echo json_encode($sms);
		}
	
	mysqli_close($conn);

}
//Get Data----------------------->
if (isset($_GET['action']) && $_GET['action'] == 'allrecords') {

	$conn = mysqli_connect("localhost","seefatte_apitest","zlkOaa[^9Tw{","seefatte_apitest");
	
	if(mysqli_connect_errno())
	{
	    echo "Failed to connect to MYSQL :" . mysqli_connect_errno();
	}
	
	$sql="select * from aform";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);

	if($count>0){
	   while($row=mysqli_fetch_assoc($res)){
	    $arr[]=$row;
	}
	 echo json_encode(['status' =>"true",'data'=>$arr]);
	}else{
	  echo json_encode(['status' =>"true",'data'=>'No data found']);
	}	
	
	mysqli_close($conn);

}

//edit GET userid----------------->
if (isset($_GET['edit']) && $_GET['edit'] == 'editrecords' && isset($_GET['editid'])) {

    	// $_GET['editid']
    	$conn = mysqli_connect("localhost","seefatte_apitest","zlkOaa[^9Tw{","seefatte_apitest");

    	// $sql="select * from aform where id=".$_GET['editid']."";
		$sql="select * from aform where id=".$_GET['editid']."";
		$res=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($res);

		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
		    $arr[]=$row;
		}
		 echo json_encode(['status' =>"true",'data'=>$arr]);
		}else{
		  echo json_encode(['status' =>"true",'data'=>'No data found']);
		}	
	
	mysqli_close($conn);

}
//-------------Post Updateid----------------->

if (isset($_POST['update']) && $_POST['update'] == 'updaterecord' && isset($_POST['updateid'])){
    $id = $_POST['updateid'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];

	$conn = mysqli_connect("localhost","seefatte_apitest","zlkOaa[^9Tw{","seefatte_apitest");
	$query = "UPDATE aform SET name='$name', email='$email', contact='$contact' where id = '$id'";
	$res = mysqli_query($conn, $query);

	print_r($query);die();
	$count=mysqli_num_rows($res);

		if($count>0){
		   while($row=mysqli_fetch_array($res)){
		    $arr[]=$row;
		}
		 echo json_encode(['status' =>"true",'data'=>$arr]);
		}else{
		  echo json_encode(['status' =>"true",'data'=>'No data found']);
		}	
	
	mysqli_close($conn);
}
