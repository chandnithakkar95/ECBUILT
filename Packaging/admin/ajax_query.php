-<?php
include('config/config.php');


if(isset($_GET['action']) && $_GET['action'] =="delete_record")
{
	$table = $_GET['table1'];
	$where =" ".$_GET['rowname']."=".$_GET['id1'];
	//echo $table;
	//exit();
	$Admin->delete_record($table,$where);
}
if(isset($_GET['action']) && $_GET['action'] == "change_status")
{

	$field = ucwords($_GET['table'])."status";
	$table = $_GET['table'];
	$where = "ID ='".$_GET['id']."'";
	$result = $Admin->display_status($field,$table,$where);
	$status = mysql_fetch_row($result);
	//echo $status[0];

	if($status[0] == 1)
	{
		$status = 0 ;
	}
	else
	{
		$status = 1;
	}
	$data = $table.'status='.$status;
	$Admin->update_status($table,$data,$where);
	$result1 = $Admin->display_status($field,$table,$where);
	$status1 = mysql_fetch_row($result1);
	echo $status1[0];
}

if(isset($_GET['action']) && $_GET['action'] == "order_status")
{

	$field = ucwords($_GET['table'])."Status";
	$table = $_GET['table'];
	$where = "ID ='".$_GET['id']."'";
	$result = $Admin->display_status($field,$table,$where);
	$status = mysql_fetch_row($result);


	if($status[0] == 0)
	{
		$status = 1 ;
	}
	else if($status[0] == 1)
	{
		$status = 2;
	}
	else if($status[0] == 2)
	{
		$status = 2;
	}


	$data = $table.'Status='.$status;
	$Admin->update_status($table,$data,$where);


	$result1 = $Admin->display_status($field,$table,$where);
	$status1 = mysql_fetch_row($result1);

	echo $status1[0];

}

if(isset($_GET['action']) && $_GET['action'] == "fetch_sub_category")
{
	$table = "subcategory";
	$where = "CategoryID = '".$_GET['id']."'";
	$result = $Admin->display_record($table,$where);
	?>
    <option value="">Select</option>
    <?php
	while($display = mysql_fetch_array($result))
	{?>
		<option value="<?php echo $display['ID']; ?>"><?php echo $display['Subcategoryname']; ?></option>
	<?php }
}
if(isset($_GET['action']) && $_GET['action'] == "fetch_brand")
{
	$table = "productbrand";
	$where = "CategoryID = '".$_GET['id']."'";
	$result = $Admin->display_record($table,$where);
	?>
    <option value="">Select</option>
    <?php
	while($display = mysql_fetch_array($result))
	{?>
		<option value="<?php echo $display['BrandName']; ?>"><?php echo $display['BrandName']; ?></option>
	<?php }
}
?>
