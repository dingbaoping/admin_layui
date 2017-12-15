<?php  

/*
*共用的方法
*/

function show($status,$message,$data = array()){
	$result=array(
		'status' => $status,
		'message' =>$message,
		"data" => $data
	);

	exit(json_encode($result));
}

function getMd5Paw($paw){
	return md5($paw);
}