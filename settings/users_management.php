
<style>
table {
    border: 1px solid #d2d2d2;
    color: #000000;
    width: 100%;
    margin: 10px 0;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

td, th {
    vertical-align: middle;
}

td, th {
    border: 1px solid #AAAAAA;
    padding: 5px;
    font-size: 12px;
    line-height: 20px;
    color: #000;
}

th {
    background: #ccc;
    font-weight: bold;
}

</style>
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
      <h3>Users Management</h3>
	
	  </div>
	 </div>
<hr class="no_line" style="margin: 0 auto 10px;">
<?php
error_reporting(0);

$db_host= "localhost";
$db_name= "pesamobieussd"; 
$db_username = "root"; 
$db_password = "90293269"; 

//open database connection
$con = mysqli_connect($db_host,$db_username,$db_password,$db_name);

if(@$_REQUEST['do'] == 'edit')
{
	$rid= @$_REQUEST['rid'];
	$role = get_role_info($rid);
}

if(!empty($rid))
{	
?>
<h6>Edit User</h6>
<?php
}
else
{
?>
<h6>Add New User</h6>

<?php
}
?>
<div role="form" class="wpcf7" id="wpcf7-f2381-p16-o1" dir="ltr" lang="en-US">
<div class="screen-reader-response"></div>

				
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">

<div class="column one">
	<span class="wpcf7-form-control-wrap your-subject">
	<input name="username" value="<?php echo $users['username']?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Username" type="text" required=""></span> 
	</div>
<div class="column one">
	<span class="wpcf7-form-control-wrap your-subject">
	<input name="password" value="<?php echo $users['password']?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Password" type="password" required=""></span> 
	</div>

	<div class="column one">
	<span class="wpcf7-form-control-wrap your-subject">
	<input name="cpassword" value="<?php echo $users['cpassword']?>" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Confirm Password" type="password" required=""></span> 
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
<?php
if(!empty($rid))
{	
?>
<div class="column one"><input value="Edit User" name="addrole" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader"></div>
<?php
}
else
{
?>
<div class="column one"><input value="Add User" name="addrole" class="wpcf7-form-control wpcf7-submit" type="submit">&nbsp;<input value="Cancel" class="wpcf7-form-control wpcf7-submit" type="reset"><span class="ajax-loader"></div>

<?php
}
?>
<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>

<?php
if(@$_REQUEST['do'] == 'activate')
{
$eid = @$_REQUEST['rid'];
$query = mysqli_query($con,"update roles set status=1 where rid='$eid'");

?>
<script type="text/javascript">
<!--
window.location = "loans.php?act=roles-management&pid=5"
//-->
</script>
<?php
}

if(@$_REQUEST['do'] == 'deactivate')
{
	$eid = @$_REQUEST['rid'];
	$query = mysqli_query($con,"update roles set status=0 where rid='$eid'");
	
	?>
	<script type="text/javascript">
	<!--
	window.location = "loans.php?act=roles-management&pid=5"
	//-->
	</script>
<?php
}
	
if(isset($_POST['addrole']))
{	
	$role = $_POST['role'];
	$curruser = $_SESSION['names'];
	
	if(empty($role))
	{
		  echo '<center><font size=3 color=red>*Please enter role name</font></center>';
	}
	else
	{
	  
	}
}

?>
<h6>View System Users</h6>
<table>
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Username</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Names</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Email</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Phone</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Role</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">&nbsp;</th>

</tr></thead>
<tbody>
<?php
$query = mysqli_query($con,"select * from users");
while($rows = mysqli_fetch_array($query))
{
?>

<tr role="row" class="odd">

	<td><?php echo $rows['username']; ?></a></td>
	<td><?php echo $rows['names']; ?></td>
	<td><?php echo $rows['email']; ?></a></td>
	<td><?php echo $rows['phoneno']; ?></td>
	<td><?php echo $rows['roleid']; ?></a></td>
	
	
	<td><a href="#"><font color="#BE0000">View</font></a></td>
	
</tr>
<?php
}
?>


</tbody>
</table>

<div class="wpcf7-response-output wpcf7-display-none"></div>



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

