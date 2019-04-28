
<?php
function find_all_events(){
	global $db;

	$sql ="SELECT * FROM events ";
  	$sql .="ORDER BY `DATE` DESC";
  	//echo $sql;
  	$result= $db->query("SET NAMES 'utf8_general_ci'");
  	$result = mysqli_query($db,$sql);
  	confirm_result_set($result);
  	return $result;
}

function find_event_by_id($id){
	global $db;

	$sql ="SELECT * FROM events ";
	$sql.="WHERE ID=".$id;

	$result= $db->query("SET NAMES 'utf8_general_ci'");
  	$result = mysqli_query($db,$sql);
  	confirm_result_set($result);
  	$event = mysqli_fetch_assoc($result);
  	mysqli_free_result($result);
  	return $event;
}

function insert_event($event){
	global $db;

	$sql = "INSERT INTO EVENTS(`TITLE`,`DESCRIPTION`,`DATE`,`IMAGE`)";
	$sql .="VALUES(";
	$sql .="'".utf8_decode($event['titulo'])."', ";
	$sql .="'".utf8_decode($event['text'])."', ";
	$sql .="'".str_replace('T',' ', $event['fecha']).":00', ";
	$sql .="'".$event['image']."'";
	$sql .=")";

	$result=mysqli_query($db,$sql);
	if ($result) {
		return true;
	}else {
		echo mysqli_error($db);
			db_disconnect($db);
			exit;
	}

}

function update_event($event){
	global $db;

	$sql="UPDATE events SET ";
  	$sql.="TITLE='". utf8_decode($event['titulo']). "', ";
  	$sql.="DESCRIPTION='". utf8_decode($event['text']). "', ";
  	$sql.="DATE='".str_replace('T',' ', $event['fecha']).":00', ";
  	$sql.="IMAGE='". $event['image']. "' ";
  	$sql.="WHERE ID=" . $event['id'] ." ";
  	$sql.="LIMIT 1";

	$result=mysqli_query($db,$sql);
	if ($result) {
		return true;
	} else {
	    echo mysqli_error($db);
	    db_disconnect($db);
	    exit;
	}
}

function delete_event($id){
	global $db;
		
	$sql="DELETE FROM events ";
  	$sql.="WHERE ID=". $id ;
  	$sql.=" LIMIT 1";


  	$result =mysqli_query($db,$sql);


	if($result){
		redirect_to(url_for('/admin/index.php'));
	}else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}
?>