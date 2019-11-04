<div id="Content">
<?php
$cid = @$_REQUEST['cid'];
?>

	<div class="content_wrapper clearfix">

		<!-- .sections_group -->
<div class="sections_group">
		
	<div class="entry-content" itemprop="mainContentOfPage">
			
	<div class="section mcb-section   " style="padding-top:10px; padding-bottom:50px; background-color:">
	<div class="section_wrapper mcb-section-inner">
	<div class="wrap mcb-wrap one-second  valign-top clearfix" style="padding:20px 2% 0 0">
	<div class="mcb-wrap-inner"><div class="column mcb-column one column_column  column-margin-20px">
	<div class="column_attr clearfix" style="">
	
	<div class="column mcb-column one column_column  column-margin-">
	  <div class="column_attr clearfix align_center animate"  data-anim-type="bounceInUp" style=" padding:0 12%;">
	  <?php
	  if(empty($cid))
	  {
	  ?>
      <h3>Add Client Information</h3>
	  <?php
	  }
	  else
	  {
	  ?>
	   <h3>Update Client Information</h3>
	  <?php
	  }
	  ?>
	
	  </div>
	 </div>
<hr class="no_line" style="margin: 0 auto 10px;">

<div role="form" class="wpcf7" id="wpcf7-f2381-p16-o1" dir="ltr" lang="en-US">
<?php

if(isset($_POST['addclientinfo']))
{
 	//print_r($_POST);
  $cnames = $_POST['cnames'];
  $cemail = $_POST['cemail'];
  $cidno = $_POST['cidno'];
  $cpin = $_POST['cpin'];
  $empid = $_POST['empid'];
  $cgrosssalary = $_POST['cgrosssalary'];
  $cbegindate = $_POST['cbegindate'];
  $cadditioninfo = $_POST['cadditioninfo'];
  $curruser = $_SESSION['names'];
  
  if(empty($cnames) || empty($cemail) || empty($cidno) || empty($cpin) || empty($empid) || empty($cgrosssalary) || empty($cbegindate))
  {
	  echo '<center><font size=4 color=red>*All fields are Mandatory</font></center>';
  }
  else
  {
	if(!empty($cid))
    {
	
		$update = update_clients_info($cnames,$cemail,$cidno,$cpin,$empid,$cgrosssalary,$cbegindate,$cadditioninfo,$curruser,$cid);
		?>
		<script type="text/javascript">
		<!--
		window.location = "loans.php?act=view-client-info&pid=1"
		//-->
		</script>
		<?php
	}
	else
	{
	  $check = check_client_exist($cemail);
	  if($check > 0)
		{
			echo "<center><font size=4 color=red>*Client already exist</font></center>";

		}
		else
		{
			$record = record_clients_info($cnames,$cemail,$cidno,$cpin,$empid,$cgrosssalary,$cbegindate,$cadditioninfo,$curruser);
			
			?>
			<script type="text/javascript">
			<!--
			window.location = "loans.php?act=view-client-info&pid=1"
			//-->
			</script>
			<?php
		}
	}
  }
}

if(!empty($cid))
{
$client = get_client_info($cid);
}
error_reporting(0);


?>
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">

<div class="column one-second">
<span class="wpcf7-form-control-wrap your-name">
<input name="cnames" required="" value="<?php echo $client['cnames'];?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Client Names" type="text"></span> 
</div>
<div class="column one-second">
<span class="wpcf7-form-control-wrap your-email">
<input name="cemail" value="<?php echo $client['cemail'];?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Cllient Email" type="email"></span> 
</div>
<div class="column one-second">
<span class="wpcf7-form-control-wrap your-idno">
<input name="cidno" required="" readonly value="<?php echo $client['cidno'];?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Client ID Number" type="text"></span> 
</div>
<div class="column one-second">
<span class="wpcf7-form-control-wrap your-pin">
<input name="cpin" value="<?php echo $client['cpin'];?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" placeholder="Client Pin Number" type="text"></span> 
</div>

<div class="column one"><b><font size=2>Employer:</font></b>
	<span class="wpcf7-form-control-wrap number-902">
	
	<select name="empid" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required"  required="">
	 <?php
	if(!empty($cid))
	{
	 ?>
	  <option value="<?php echo $client['cid'];?>"><?php echo get_employername($client['cid']);?></option>
	   <?php
	}
	else
	{
	?>
	<option value="">Select Employer </option>
   <?php	
	}
	   
	   $equery = mysql_query("select * from employers order by empname asc") or die(mysql_error());
	   while($rows = mysql_fetch_array($equery))
	   {
	   ?>
		<option value='<?php echo $rows['eid'];?>'><?php echo $rows['empname'];?></option>
		<?php
	   }
		?>
	  </select>
	</span> 
</div>
<div class="column one">
<span class="wpcf7-form-control-wrap your-subject">
<input name="cgrosssalary" value="<?php echo $client['cgrosssalary'];?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Gross Salary" type="text"></span> 
</div>

<div class="column one"><font color='#626266' size='2'>Employment Date:</font>
<span class="wpcf7-form-control-wrap your-subject">
<input name="cbegindate" value="<?php echo $client['cbegindate'];?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Employment Date" type="date"></span> 
</div>

<div class="column one">
<span class="wpcf7-form-control-wrap your-message">
<textarea name="cadditioninfo" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Additional Information"><?php echo $client['cadditioninfo'];?></textarea></span>
</div>
<div class="column one">
<?php
if(!empty($cid))
{
?>
<input value="Update Client Info" name="addclientinfo" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader">
<?php
}
else
{
?>
<input value="Add Client Info" name="addclientinfo" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader">

<?php
}
?>
</div>

<div class="wpcf7-response-output wpcf7-display-none"></div></form>


</div>
</div>
</div>

<div class="column mcb-column one column_divider "><hr class="" style="margin: 0 auto 40px;">
</div></div></div><div class="wrap mcb-wrap one-second  valign-top clearfix" style=""><div class="mcb-wrap-inner">

</div></div></div></div>
				
				<div class="section section-page-footer">
					<div class="section_wrapper clearfix">
					
						<div class="column one page-pager">
													</div>
						
					</div>
				</div>
				
			</div>
			
				
		</div>
		
		<!-- .four-columns - sidebar -->
		
	</div>
</div>