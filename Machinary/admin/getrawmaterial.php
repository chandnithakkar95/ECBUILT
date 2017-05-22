<?php
include('config/config.php');
echo $_GET['id'];
$where = "Cate_ID=".$_GET['id'];
 $retObj = new stdClass();

 $result=$Admin->display_record('sub_category',$where); 
 

 ?>
  <option>--ok--</option>
  <?php
  while($display=mysql_fetch_array($result))
  {
  ?>
  <option value="<?php echo $display['Sub_Cate_ID']?>"> <?php echo $display['Sub_Cate_Name']; ?></option>
  <?php
  } ?>

  