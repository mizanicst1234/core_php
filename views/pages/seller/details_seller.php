<?php
if(isset($_POST["btnDetails"])){
	$seller=seller::find($_POST["txtId"]);
}
?>
<div class="p-4">
<a class="btn btn-success" href="sellers">Manage seller</a>
<?php echo table_wrap_open();?>
<table class='table'>
	<tr><th colspan='2'>seller Details</th></tr>
<?php
	$html="";
		$html.="<tr><th>Id</th><td>$seller->id</td></tr>";
		$html.="<tr><th>Name</th><td>$seller->name</td></tr>";
		$html.="<tr><th>City</th><td>$seller->city</td></tr>";
		$html.="<tr><th>Contact</th><td>$seller->contact</td></tr>";

	echo $html;
?>
</table>
<?php echo table_wrap_close();?>
</div>
