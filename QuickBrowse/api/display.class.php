<?php
	
class Display{
	
	//ALL FUNCTIONS FOR TEMPLATES.
	
	public function get_data_array($type){
		
		global $DATABASE;
		
		$data = $DATABASE->fetch_assoc($type);
		
		return $data;
		
	}
	
	public function create_data_array($array, $table){
		
		global $DATABASE;
		
		//Create a record in database without info
		$row = $DATABASE::create_single_record($table);
		
		
		//Insert new data into $row id
		
		$DATABASE::insert_table_array($array, $row, $table);

	}
	
	public function edit_data_array($array, $table, $id){
		
		global $DATABASE;
		
		$DATABASE::insert_table_array($array, $id, $table);
		
	}
	
	public function remove_data($table, $id){
		
		global $DATABASE;
		
		$DATABASE::drop_table_row($id, $table);
		
	}
	
}
	
?>