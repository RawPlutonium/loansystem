<div id="Content">

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
      <h3>Compute Loan Amount</h3>
	
	  </div>
	 </div>
<hr class="no_line" style="margin: 0 auto 10px;">
<?php
if(isset($_POST['compute_loan']))
{
  //print_r($_POST);	
  
  $id_number = $_POST['id_number'];
  $gross_salary = $_POST['gross_salary'];
  $total_deductions = $_POST['total_deductions'];
  $net_salary = $_POST['net_salary'];
  
  if(empty($id_number) || empty($gross_salary) || empty($total_deductions) || empty($net_salary))
  {
	 echo '<center><font size=4 color=red>*All fields are Mandatory</font></center>'; 
  }
  else
  {
	 $gross_salary = (float) $gross_salary;
	 $total_deductions = (float) $total_deductions;
	 $net_salary = (float) $net_salary;
	 
	 $netSalo = $gross_salary -  $total_deductions;
	 
	 if ($net_salary != $netSalo)
	 {
		echo "<center><font size=4 color=red>Your Net salary of $net_salary does not match the gross salary less deductions</font></center>";  
		
	 }
	 else
	 {
		 $loanamt = ceil($net_salary/3);
		 
		 echo '<font size=4 color=green>Gross Salary: KES'.number_format($gross_salary).'</font><br>'; 
		 echo '<font size=4 color=green>Total Deductions: '.number_format($total_deductions).'</font><br>';
		 echo '<font size=4 color=green>Net Salary: '.number_format($net_salary).'</font><br><br>';
		 echo '<font size=4 color=green>Qualified Loan Amount: '.number_format($loanamt).'</font>';
	 }
  }
}

?>
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">


<div class="column one">
<span class="wpcf7-form-control-wrap your-subject">
<input name="id_number" value="<?php echo @$_POST['id_number']; ?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="ID Number" type="text" required="" ></span> 
</div>

<div class="column one">
<span class="wpcf7-form-control-wrap your-subject">
<input name="gross_salary" value="<?php echo @$_POST['gross_salary']; ?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Your Gross Salary" type="text"></span> 
</div>

<div class="column one">
<span class="wpcf7-form-control-wrap your-subject">
<input name="total_deductions" value="<?php echo @$_POST['total_deductions']; ?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Total Deductions" type="text"></span> 
</div>

<div class="column one">
<span class="wpcf7-form-control-wrap your-subject">
<input name="net_salary" value="<?php echo @$_POST['net_salary']; ?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Your Net Salary" type="text"></span> 
</div>


<div class="column one"><input value="Generate Your Loan Amount" name="compute_loan" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader"></div>

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