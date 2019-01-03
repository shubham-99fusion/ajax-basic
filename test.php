<?php
   
	 if(isset($_POST['name']) && isset($_POST['text']) ){
	 	echo  json_encode($_POST);
	 }
	 else{
		 $data=array(
		'first'=>'firstdata'
		);
		echo json_encode($data);	 
	 }
	 

?>