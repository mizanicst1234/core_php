<?php
if(isset($_POST["btnDetails"])){
	$bom=Bom::find($_POST["txtId"]);
}
?>
<div class="p-4">
<a class="btn btn-success" href="boms">Manage Bom</a>
<?php echo table_wrap_open();?>
<table class='table'>
	<tr><th colspan='2'>Bom Details</th></tr>
<?php
	$html="";
		$html.="<tr><th>Id</th><td>$bom->id</td></tr>";
		$html.="<tr><th>Code</th><td>$bom->code</td></tr>";
		$html.="<tr><th>Name</th><td>$bom->name</td></tr>";
		$html.="<tr><th>Product Id</th><td>$bom->product_id</td></tr>";
		$html.="<tr><th>Qty</th><td>$bom->qty</td></tr>";
		$html.="<tr><th>Labour Cost</th><td>$bom->labour_cost</td></tr>";
		$html.="<tr><th>Date</th><td>$bom->date</td></tr>";
		$html.="<tr><th>Remark</th><td>$bom->remark</td></tr>";

	echo $html;
?>
</table>
<?php echo table_wrap_close();?>
</div>
