<div id="Content">
<?php

$lid = @$_REQUEST['lid'];


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
	  if(!empty($lid))
	  {
	  ?>
      <h3>Edit Loan</h3>
	  <?php
	  }
	  else
	  {
	  ?>
		<h3>Add Loan</h3>
      <?php		
	  }
	  ?>
	  </div>
	 </div>
<hr class="no_line" style="margin: 0 auto 10px;">

<div role="form" class="wpcf7" id="wpcf7-f2381-p16-o1" dir="ltr" lang="en-US">
<?php
if(isset($_POST['addloan']))
{
	//print_r($_POST);
	
	$empid = $_POST['empid'];
	$clientid = $_POST['clientid'];
	$loan_amt = $_POST['loan_amt'];
	$monthly_payment = $_POST['monthly_payment'];
	$bankid = $_POST['bankid'];
	$cbegindate = $_POST['cbegindate'];
	$curruser = $_SESSION['names'];
	
	if(empty($empid) || empty($clientid) || empty($loan_amt) || empty($monthly_payment) || empty($bankid) || empty($cbegindate))
	{
	  echo '<center><font size=4 color=red>*All fields are Mandatory</font></center>';
	}
	else
	{
	  if(!empty($lid))
	  {
		$update = updateuserloan($empid,$clientid,$loan_amt,$monthly_payment,$bankid,$cbegindate,$curruser,$lid);
	  }
	  else
	  {
	  $add = adduserloan($empid,$clientid,$loan_amt,$monthly_payment,$bankid,$cbegindate,$curruser);
	  }

      ?>
			<script type="text/javascript">
			<!--
			window.location = "loans.php?act=view-loans&pid=2"
			//-->
			</script>
			<?php	  
	}
	
	
	
}

error_reporting(0);

if(!empty($lid))
{
	$loans = get_loansInfo($lid);
}
?>
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">

<div class="column one">
	<span class="wpcf7-form-control-wrap number-902">
	
	<select name="empid" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required"  required="">
	  <?php
	if(!empty($lid))
	{
	 ?>
	  <option value="<?php echo $loans['lid'];?>"><?php echo get_employername($loans['lid']);?></option>
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
	<span class="wpcf7-form-control-wrap number-902">
	
	<select name="clientid" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required"  required="">
	    <?php
	if(!empty($lid))
	{
	 ?>
	  <option value="<?php echo $loans['clientid'];?>"><?php echo get_clientname($loans['clientid']);?></option>
	   <?php
	}
	else
	{
	?>
	<option value="">Select Client </option>
   <?php	
	}
	   
	   
	   $equery = mysql_query("select * from clients order by cnames asc") or die(mysql_error());
	   while($rows = mysql_fetch_array($equery))
	   {
	   ?>
		<option value='<?php echo $rows['cid'];?>'><?php echo $rows['cnames'];?></option>
		<?php
	   }
		?>
	  </select>
	</span> 
</div>

<div class="column one">
<span class="wpcf7-form-control-wrap your-subject">
<input name="loan_amt" value="<?php echo $loans['loan_amt'];?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Loan Amount" type="text"></span> 
</div>

<div class="column one">
<span class="wpcf7-form-control-wrap your-subject">
<input name="monthly_payment" value="<?php echo $loans['monthly_payment'];?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Monthly Payment" type="text"></span> 
</div>

<div class="column one">
	<span class="wpcf7-form-control-wrap number-902">
	
	<select name="bankid" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required"  required="">
	      <?php
		if(!empty($lid))
		{
		 ?>
		  <option value="<?php echo $loans['bankid'];?>"><?php echo get_bankname($loans['bankid']);?></option>
		   <?php
		}
		else
		{
		?>
		  <option value="">Select Bank/Institution </option>
	   <?php	
		}
	  
	   
	   $equery = mysql_query("select * from banks order by bankname asc") or die(mysql_error());
	   while($rows = mysql_fetch_array($equery))
	   {
	   ?>
		<option value='<?php echo $rows['bid'];?>'><?php echo $rows['bankname'];?></option>
		<?php
	   }
		?>
	  </select>
	</span> 
</div>

<div class="column one"><font color='#626266' size='2'>Completion Date:</font>
<span class="wpcf7-form-control-wrap your-subject">
<input name="cbegindate" value="<?php echo $loans['cbegindate'];?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Employment Date" type="date"></span> 
</div>
 <?php
if(!empty($lid))
{
?>
<div class="column one"><input value="Update Loan" name="addloan" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader"></div>
<?php
}
else
{
?>
<div class="column one"><input value="Add Loan" name="addloan" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader"></div>

<?php
}
?>
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