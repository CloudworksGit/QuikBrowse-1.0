<?php
	
class Database{
	
	private $DEBUG = false;
	
	private static $DB_SERVER;
	private static $DB_USER;
	private static $DB_PASS;
	private static $DB_DATABASE;

	function __construct(){
		
		global $CONFIG;
		
		self::$DB_USER = $CONFIG::get_dbsettings('DB_USER');
		self::$DB_SERVER = $CONFIG::get_dbsettings('DB_SERV');
		self::$DB_PASS = $CONFIG::get_dbsettings('DB_PASS');
		self::$DB_DATABASE = $CONFIG::get_dbsettings('DB_NAME');
		
	}
	
	public function connect(){
	
		$mysqli = new mysqli(self::$DB_SERVER, self::$DB_USER, self::$DB_PASS, self::$DB_DATABASE);
		
		if ($mysqli->connect_errno) {
		    printf("<center><h4>[ERROR] - Connect failed: %s\n</h4></center>", $mysqli->connect_error);
		}elseif($mysqli->connect_errno == false && $this->DEBUG == true){
			printf("<center><h4>[INFO] - Connected to Database. </h4><br></center>");
		}
		
		return $mysqli;
	
	}
	
	public function fetch_assoc($TYPE){
		
		global $CONNECTION;
		
		//Change this switch to table selection when you got the time.
		
		switch($TYPE){
			
			case 'DATA_WEBSITES_RAND_6':
				$sql = 'SELECT * FROM ( SELECT * FROM websites ORDER BY rand() LIMIT 6 ) T1 ORDER BY name ';
			break;
			
			default:
				$sql = 'SELECT * FROM ' . $TYPE . '';
			break;
			
		}
		
		$query = $CONNECTION->query($sql);
		
		if($query == false && $this->DEBUG == true){
			printf('<h4>[ERROR] - Failed doing query: <span style="color:green;">'. $sql . '</h4><br>');
			echo "<h4>[WARNING] - " . mysqli_error($CONNECTION) . "</h4>";
			return;
		}else{
			
			while($data = $query->fetch_array()){
				$ARRAY[] = $data;
			}
			
			return $ARRAY;
			
		}
		
	}
	
	public function edit_table($table, $table_array){
		
		global $DISPLAY;
		
		$array_length = count($DISPLAY::get_data_array($table));
		
		if($array_length >= count($table_array)){
			
			return false;
			
		}else{
			
			//update `table_name` set `column_name` ='value' where `unique_key` ='unique_value'
				
			//query->'UPDATE (' .  . ', ' .  . ')'();
			
			//een foreach loop op de input array, voor elke record een "'$table_array[i]'"
			
		}
		
	}
	
	public function create_single_record($table){
		
		//Create a new row in the $table
		
		global $CONNECTION;
		
		$sql = "INSERT INTO " . $table . " () VALUES()";
		
		$CONNECTION->query($sql);
		
		//Get the row id someway back, you could use $DISPLAY::fetch_assoc
		
		global $DISPLAY;
		
		$data = $DISPLAY::get_data_array($table);
		
		foreach($data as $row){
	
			$id = $row['id'];

		}
		
		$row_id = $id;
		
		return $row_id;
		
	}
	
	public function insert_table_array($array, $row_id, $table){
		
		//for each array key, do: $sql = "INSERT INTO " . $table . " (keycode(array[i])) VALUES(array[i])";
		//var_dump($array);
		
		global $CONNECTION;
		
		$keys = array_keys($array);
		foreach($keys as $key){
			
			$column_name = $key;
			$input = $array[$key];
			
			$sql = 'UPDATE ' . $table . ' SET ' . $column_name . ' = "' . mysqli_real_escape_string($CONNECTION, $input) . '" WHERE id = "' . $row_id . '"; ';
			
			if ($CONNECTION->query($sql) === FALSE) {
			    die("Connection failed: " . $CONNECTION->error);
			}
			
		}
	
	}
	
	public function drop_table_row($id, $table){
		
		global $CONNECTION;
		
		$sql = 'DELETE FROM ' . $table . ' WHERE id = ' . $id;
		
		if ($CONNECTION->query($sql) === FALSE) {
		    die("Connection failed: " . $CONNECTION->error);
		}
		
	}

}
	
?>