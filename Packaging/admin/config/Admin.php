<?php

class Admin
{
	public $db;
	
	function __construct() 
	{
		require_once('Database.php');
		$this->db = new Database;
		
	}
	
	function login($table,$where)
	{
		$qry = "select * from $table where $where";
		$sql = $this->db->query($qry);
		$result = $this->db->fetch_array($sql);
		return $result;	
	}
	function count_row($table,$where)
	{
		$qry = "select count(*) from $table where $where";
		$sql = mysql_query($qry);
		$result = mysql_fetch_row($sql);
		return $result;
	}
	
	function display_record($table,$where)
	{	
		
		$qry = "select * from $table where $where";
		
		$result = mysql_query($qry);
		return $result;
	}
	
	function insert_record($table,$data)
	{
		$res = $this->db->query_insert($table,$data);
		return $res;
	}
	
	function update_record($table,$data,$where)
	{
		$res = $this->db->query_update($table,$data,$where);
		return $res;
	}
	
	function delete_record($table,$where)
	{
		$qry = "delete from $table where $where";
		mysql_query($qry);
	}
	
	function display_status($field,$table,$where)
	{
		$qry = "select $field from $table where $where";
		$result = mysql_query($qry);
		return $result;
	}
	
	function update_status($table,$data,$where)
	{
		$qry = "update $table set $data where $where";
		mysql_query($qry);
	}
	
	
}

?>