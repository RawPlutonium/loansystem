
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
      <h3>View Staff</h3>
	
	  </div>
	 </div>
<hr class="no_line" style="margin: 0 auto 10px;">

<div role="form" class="wpcf7" id="wpcf7-f2381-p16-o1" dir="ltr" lang="en-US">
<div class="screen-reader-response"></div>

<!--<div align="right"><div class="top_bar_right_wrapper"><a href="loans.php?act=add-client-info&pid=1" class="button button_theme button_js action_button "><span class="button_label">Add Client Info</span></a>
	</div></div>-->
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">

<table>
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Client Names</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">ID Number</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Pin</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">Salary</th>
<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;">PNum</th>
</tr></thead>
<tbody>

<?php

$db_host= "localhost";
$db_name= "pesamobieussd"; 
$db_username = "root"; 
$db_password = "90293269"; 

//open database connection
$con = mysqli_connect($db_host,$db_username,$db_password,$db_name);
	
$query = mysqli_query($con,"select * from registrations order by id desc") or die(mysql_error());
while($rows = mysqli_fetch_array($query))
{
?>

<tr role="row" class="odd">

	<td><?php echo $rows['salutation'].' '.$rows['surname'].' '.$rows['firstname'].' '.$rows['othernames']; ?></font></a></td>
	<td><?php echo $rows['idnumber']; ?></td>
	<td><?php echo $rows['pin']; ?></td>
	<td><?php echo number_format($rows['EarningAmount']); ?></td>
	<td><?php echo $rows['PNum']; ?></td>
	
</tr>
<?php
}
?>

</tbody>
</table>

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

