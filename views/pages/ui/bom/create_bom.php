<?php
if(isset($_POST["btnCreate"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCode"])){
		$errors["code"]="Invalid code";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbProductId"])){
		$errors["product_id"]="Invalid product_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtQty"])){
		$errors["qty"]="Invalid qty";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtLabourCost"])){
		$errors["labour_cost"]="Invalid labour_cost";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtRemark"])){
		$errors["remark"]="Invalid remark";
	}

*/
	if(count($errors)==0){
		$bom=new Bom();
		$bom->code=$_POST["txtCode"];
		$bom->name=$_POST["txtName"];
		$bom->product_id=$_POST["cmbProductId"];
		$bom->qty=$_POST["txtQty"];
		$bom->labour_cost=$_POST["txtLabourCost"];
		$bom->date=date("Y-m-d",strtotime($_POST["txtDate"]));
		$bom->remark=$_POST["txtRemark"];

		$bom->save();
	}else{
		 print_r($errors);
	}
}
?>
<div class="p-4">
<a class="btn btn-success" href="boms">Manage Bom</a>
<?php echo form_wrap_open();?>
<form class='form-horizontal' action='create-bom' method='post' enctype='multipart/form-data'>
<?php
	$html="";
	$html.=input_field(["label"=>"Code","type"=>"text","name"=>"txtCode"]);
	$html.=input_field(["label"=>"Name","type"=>"text","name"=>"txtName"]);
	$html.=select_field(["label"=>"Product","name"=>"cmbProductId","table"=>"products"]);
	$html.=input_field(["label"=>"Qty","type"=>"text","name"=>"txtQty"]);
	$html.=input_field(["label"=>"Labour Cost","type"=>"text","name"=>"txtLabourCost"]);
	$html.=input_field(["label"=>"Date","type"=>"text","name"=>"txtDate"]);
	$html.=input_field(["label"=>"Remark","type"=>"text","name"=>"txtRemark"]);

	echo $html;
?>
<?php
	$html = input_button(["type"=>"submit", "name"=>"btnCreate", "value"=>"Create"]);
	echo $html;
?>
</form>
<?php echo form_wrap_close();?>
</div>
