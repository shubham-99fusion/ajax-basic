<?php
   
	 if(isset($_POST['fname']) && isset($_POST['lname']) ){
	 	echo  json_encode($_POST);
	 }
	 else{
		 $data=array(
		'first'=>'firstdata'
		);
		echo json_encode($data);	 
	 }
	 

?>