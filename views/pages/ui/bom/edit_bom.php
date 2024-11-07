<?php
if(isset($_POST["btnEdit"])){
	$bom=Bom::find($_POST["txtId"]);
}
if(isset($_POST["btnUpdate"])){
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
		$bom->id=$_POST["txtId"];
		$bom->code=$_POST["txtCode"];
		$bom->name=$_POST["txtName"];
		$bom->product_id=$_POST["cmbProductId"];
		$bom->qty=$_POST["txtQty"];
		$bom->labour_cost=$_POST["txtLabourCost"];
		$bom->date=date("Y-m-d",strtotime($_POST["txtDate"]));
		$bom->remark=$_POST["txtRemark"];

		$bom->update();
	}else{
		 print_r($errors);
	}
}
?>
<div class="p-4">
<a class="btn btn-success" href="boms">Manage Bom</a>
<?php echo form_wrap_open();?>
<form class='form-horizontal' action='edit-bom' method='post' enctype='multipart/form-data'>
<?php
	$html="";
	$html.=input_field(["label"=>"Id","type"=>"hidden","name"=>"txtId","value"=>"$bom->id"]);
	$html.=input_field(["label"=>"Code","type"=>"text","name"=>"txtCode","value"=>"$bom->code"]);
	$html.=input_field(["label"=>"Name","type"=>"text","name"=>"txtName","value"=>"$bom->name"]);
	$html.=select_field(["label"=>"Product","name"=>"cmbProductId","table"=>"products","value"=>"$bom->product_id"]);
	$html.=input_field(["label"=>"Qty","type"=>"text","name"=>"txtQty","value"=>"$bom->qty"]);
	$html.=input_field(["label"=>"Labour Cost","type"=>"text","name"=>"txtLabourCost","value"=>"$bom->labour_cost"]);
	$html.=input_field(["label"=>"Date","type"=>"text","name"=>"txtDate","value"=>"$bom->date"]);
	$html.=input_field(["label"=>"Remark","type"=>"text","name"=>"txtRemark","value"=>"$bom->remark"]);

	echo $html;
?>
<?php
	$html = input_button(["type"=>"submit", "name"=>"btnUpdate", "value"=>"Update"]);
	echo $html;
?>
</form>
<?php echo form_wrap_close();?>
</div>
