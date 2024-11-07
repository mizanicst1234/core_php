<?php
if(isset($_POST["btnEdit"])){
	$mfgproductiondetail=MfgProductionDetail::find($_POST["txtId"]);
}
if(isset($_POST["btnUpdate"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbProductionId"])){
		$errors["production_id"]="Invalid production_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbProductId"])){
		$errors["product_id"]="Invalid product_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtQty"])){
		$errors["qty"]="Invalid qty";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbUomId"])){
		$errors["uom_id"]="Invalid uom_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCost"])){
		$errors["cost"]="Invalid cost";
	}

*/
	if(count($errors)==0){
		$mfgproductiondetail=new MfgProductionDetail();
		$mfgproductiondetail->id=$_POST["txtId"];
		$mfgproductiondetail->production_id=$_POST["cmbProductionId"];
		$mfgproductiondetail->product_id=$_POST["cmbProductId"];
		$mfgproductiondetail->qty=$_POST["txtQty"];
		$mfgproductiondetail->uom_id=$_POST["cmbUomId"];
		$mfgproductiondetail->cost=$_POST["txtCost"];

		$mfgproductiondetail->update();
	}else{
		 print_r($errors);
	}
}
?>
<div class="p-4">
<a class="btn btn-success" href="mfg_production_details">Manage MfgProductionDetail</a>
<?php echo form_wrap_open();?>
<form class='form-horizontal' action='edit-mfgproductiondetail' method='post' enctype='multipart/form-data'>
<?php
	$html="";
	$html.=input_field(["label"=>"Id","type"=>"hidden","name"=>"txtId","value"=>"$mfgproductiondetail->id"]);
	$html.=select_field(["label"=>"Production","name"=>"cmbProductionId","table"=>"productions","value"=>"$mfgproductiondetail->production_id"]);
	$html.=select_field(["label"=>"Product","name"=>"cmbProductId","table"=>"products","value"=>"$mfgproductiondetail->product_id"]);
	$html.=input_field(["label"=>"Qty","type"=>"text","name"=>"txtQty","value"=>"$mfgproductiondetail->qty"]);
	$html.=select_field(["label"=>"Uom","name"=>"cmbUomId","table"=>"uom","value"=>"$mfgproductiondetail->uom_id"]);
	$html.=input_field(["label"=>"Cost","type"=>"text","name"=>"txtCost","value"=>"$mfgproductiondetail->cost"]);

	echo $html;
?>
<?php
	$html = input_button(["type"=>"submit", "name"=>"btnUpdate", "value"=>"Update"]);
	echo $html;
?>
</form>
<?php echo form_wrap_close();?>
</div>
