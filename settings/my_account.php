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
      <h3>My Account</h3>
	
	  </div>
	 </div>
<hr class="no_line" style="margin: 0 auto 10px;">

<div role="form" class="wpcf7" id="wpcf7-f2381-p16-o1" dir="ltr" lang="en-US">
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input name="_wpcf7" value="2381" type="hidden">
<input name="_wpcf7_version" value="4.9.2" type="hidden">
<input name="_wpcf7_locale" value="en_US" type="hidden">
<input name="_wpcf7_unit_tag" value="wpcf7-f2381-p16-o1" type="hidden">
<input name="_wpcf7_container_post" value="16" type="hidden">
</div>
<?php
$uid = $_SESSION['myid'];

 if(isset($_POST['adduser']))
 {

	 $username = @$_POST['username'];
	 $password = @$_POST['password'];
	 $names = @$_POST['names'];
	 $email = @$_POST['email'];
	 $phoneno = @$_POST['phoneno'];
	 $roleid = @$_POST['roleid'];
	 
	  $add = UpdateUserInfo($username,$password,$names,$email,$phoneno,$roleid,$uid);
	 ?>
	<script type="text/javascript">
	<!--
	window.location = "loans.php?act=account"
	//-->
	</script>
	<?php 
	 
 }


$users = get_users_information($uid);
?>

<div class="column one">
	<span class="wpcf7-form-control-wrap your-subject">
	<input name="username" value="<?php echo $users['username']?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Username" type="text" required=""></span> 
	</div>
	
<div class="column one">
	<span class="wpcf7-form-control-wrap your-subject">
	<input name="names" value="<?php echo $users['names']?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Names" type="text" required=""></span> 
	</div>
	
	<div class="column one">
	<span class="wpcf7-form-control-wrap your-subject">
	<input name="email" value="<?php echo $users['email']?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Email" type="text" required=""></span> 
	</div>
	
	<div class="column one">
	<span class="wpcf7-form-control-wrap your-subject">
	<input name="phoneno" value="<?php echo $users['phoneno']?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Phone Number" type="text" required=""></span> 
	</div>
	
	<div class="column one">
	<span class="wpcf7-form-control-wrap number-902">
	
	<select name="roleid" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required"  required="">
		<?php
		 if(empty($uid))
		 {
		?>
	  <option value="">Select Role </option>
	  <?php
		 }
		 else
		 {
	  ?>
	  <option value="<?php echo $users['roleid']?>"><?php echo get_rolename($users['roleid'])?> </option>
	   <?php
		 }
	   $equery = mysql_query("select * from roles order by rid asc") or die(mysql_error());
	   while($rows = mysql_fetch_array($equery))
	   {
	   ?>
		<option value='<?php echo $rows['rid'];?>'><?php echo $rows['role_name'];?></option>
		<?php
	   }
		?>
	  </select>
	</span> 
</div>


<div class="column one"><input value="Update Account Information" name="adduser" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader"></div>

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