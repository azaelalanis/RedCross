<?php
function mysql_insert($table, $inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);

    return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
}

function mysql_update($table, $inserts, $matricula) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);
   	$sql = "UPDATE $table SET ";
   	for ($i = 0; $i < count($keys); $i++) {
    	$sql = $sql . " " . $keys[$i] . "='" . $values[$i] ."'";
    	if($i < count($keys)-1){
    		$sql = $sql . ", ";
    	}
	}
	$sql = $sql . " WHERE id_" . $table . "=" . $matricula;
<<<<<<< HEAD

=======
>>>>>>> f08ba97b2b5490d3b07fce722aef5a45d7bd0aa6
    return mysql_query($sql);
}
?>
