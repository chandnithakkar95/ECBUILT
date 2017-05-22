<?php
include('config/config.php');
$where = "Sub_Cate_ID=".$_POST['suppid'];
 $result=$Admin->display_record('sub_category',$where); ?>

  <option>--Select--</option>
  <?php
  while($display=mysql_fetch_array($result))
  {
  ?>
  <option value="<?php echo $display['Sub_Cate_ID']?>"> <?php echo $display['Sub_Cate_Name']; ?></option>
  <?php
  } ?>

  