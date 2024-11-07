<?php
if(isset($_POST["btnDetails"])){
	$mfgproductiondetail=MfgProductionDetail::find($_POST["txtId"]);
}
?>
<div class="p-4">
<a class="btn btn-success" href="mfg_production_details">Manage MfgProductionDetail</a>
<?php echo table_wrap_open();?>
<table class='table'>
	<tr><th colspan='2'>MfgProductionDetail Details</th></tr>
<?php
	$html="";
		$html.="<tr><th>Id</th><td>$mfgproductiondetail->id</td></tr>";
		$html.="<tr><th>Production Id</th><td>$mfgproductiondetail->production_id</td></tr>";
		$html.="<tr><th>Product Id</th><td>$mfgproductiondetail->product_id</td></tr>";
		$html.="<tr><th>Qty</th><td>$mfgproductiondetail->qty</td></tr>";
		$html.="<tr><th>Uom Id</th><td>$mfgproductiondetail->uom_id</td></tr>";
		$html.="<tr><th>Cost</th><td>$mfgproductiondetail->cost</td></tr>";

	echo $html;
?>
</table>
<?php echo table_wrap_close();?>
</div>
