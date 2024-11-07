<?php
if(isset($_POST["btnCreate"])){
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
		$mfgproductiondetail->production_id=$_POST["cmbProductionId"];
		$mfgproductiondetail->product_id=$_POST["cmbProductId"];
		$mfgproductiondetail->qty=$_POST["txtQty"];
		$mfgproductiondetail->uom_id=$_POST["cmbUomId"];
		$mfgproductiondetail->cost=$_POST["txtCost"];

		$mfgproductiondetail->save();
	}else{
		 print_r($errors);
	}
}
?>
<div class="p-4">
<a class="btn btn-success" href="mfg_production_details">Manage MfgProductionDetail</a>
<?php echo form_wrap_open();?>
<form class='form-horizontal' action='create-mfgproductiondetail' method='post' enctype='multipart/form-data'>
<?php
	$html="";
	$html.=select_field(["label"=>"Production","name"=>"cmbProductionId","table"=>"productions"]);
	$html.=select_field(["label"=>"Product","name"=>"cmbProductId","table"=>"products"]);
	$html.=input_field(["label"=>"Qty","type"=>"text","name"=>"txtQty"]);
	$html.=select_field(["label"=>"Uom","name"=>"cmbUomId","table"=>"uom"]);
	$html.=input_field(["label"=>"Cost","type"=>"text","name"=>"txtCost"]);

	echo $html;
?>
<?php
	$html = input_button(["type"=>"submit", "name"=>"btnCreate", "value"=>"Create"]);
	echo $html;
?>
</form>
<?php echo form_wrap_close();?>
</div>
