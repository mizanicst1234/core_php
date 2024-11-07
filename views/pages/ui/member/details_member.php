<?php
if(isset($_POST["btnDetails"])){
	$member=Member::find($_POST["txtId"]);
}
?>
<div class="p-4">
<a class="btn btn-success" href="members">Manage Member</a>
<?php echo table_wrap_open();?>
<table class='table'>
	<tr><th colspan='2'>Member Details</th></tr>
<?php
	$html="";
		$html.="<tr><th>Id</th><td>$member->id</td></tr>";
		$html.="<tr><th>Name</th><td>$member->name</td></tr>";
		$html.="<tr><th>Member Type Id</th><td>$member->member_type_id</td></tr>";
		$html.="<tr><th>Mobile</th><td>$member->mobile</td></tr>";
		$html.="<tr><th>Address</th><td>$member->address</td></tr>";
		$html.="<tr><th>Doj</th><td>$member->doj</td></tr>";
		$html.="<tr><th>Photo</th><td><img src='img/$member->photo' width='100' /></td></tr>";
		$html.="<tr><th>Created At</th><td>$member->created_at</td></tr>";

	echo $html;
?>
</table>
<?php echo table_wrap_close();?>
</div>
