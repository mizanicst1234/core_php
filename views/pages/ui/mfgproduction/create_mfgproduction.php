<?php
if(isset($_POST["btnCreate"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbBomId"])){
		$errors["bom_id"]="Invalid bom_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtQty"])){
		$errors["qty"]="Invalid qty";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtLaborCost"])){
		$errors["labor_cost"]="Invalid labor_cost";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbManagerId"])){
		$errors["manager_id"]="Invalid manager_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTotalCost"])){
		$errors["total_cost"]="Invalid total_cost";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbProductId"])){
		$errors["product_id"]="Invalid product_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbUomId"])){
		$errors["uom_id"]="Invalid uom_id";
	}

*/
	if(count($errors)==0){
		$mfgproduction=new MfgProduction();
		$mfgproduction->production_datetime=$now;
		$mfgproduction->bom_id=$_POST["cmbBomId"];
		$mfgproduction->qty=$_POST["txtQty"];
		$mfgproduction->labor_cost=$_POST["txtLaborCost"];
		$mfgproduction->manager_id=$_POST["cmbManagerId"];
		$mfgproduction->total_cost=$_POST["txtTotalCost"];
		$mfgproduction->product_id=$_POST["cmbProductId"];
		$mfgproduction->uom_id=$_POST["cmbUomId"];

		$mfgproduction->save();
	}else{
		 print_r($errors);
	}
}
?>
<div class="p-4">
<a class="btn btn-success" href="mfg_productions">Manage MfgProduction</a>
<?php echo form_wrap_open();?>
<form class='form-horizontal' action='create-mfgproduction' method='post' enctype='multipart/form-data'>
<?php
	$html="";
	$html.=select_field(["label"=>"Bom","name"=>"cmbBomId","table"=>"boms"]);
	$html.=input_field(["label"=>"Qty","type"=>"text","name"=>"txtQty"]);
	$html.=input_field(["label"=>"Labor Cost","type"=>"text","name"=>"txtLaborCost"]);
	$html.=select_field(["label"=>"Manager","name"=>"cmbManagerId","table"=>"managers"]);
	$html.=input_field(["label"=>"Total Cost","type"=>"text","name"=>"txtTotalCost"]);
	$html.=select_field(["label"=>"Product","name"=>"cmbProductId","table"=>"products"]);
	$html.=select_field(["label"=>"Uom","name"=>"cmbUomId","table"=>"uom"]);

	echo $html;
?>
<?php
	$html = input_button(["type"=>"submit", "name"=>"btnCreate", "value"=>"Create"]);
	echo $html;
?>
</form>
<?php echo form_wrap_close();?>
</div>
