<?php
if(isset($_POST["btnCreate"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["cmbSectionId"])){
		$errors["section_id"]="Invalid section_id";
	}

*/
	if(count($errors)==0){
		$productcategories=new ProductCategories();
		$productcategories->name=$_POST["txtName"];
		$productcategories->section_id=$_POST["cmbSectionId"];
		$productcategories->created_at=$now;
		$productcategories->updated_at=$now;
		$productcategories->updated_at=$now;

		$productcategories->save();
	}else{
		 print_r($errors);
	}
}
?>
<div class="p-4">
<a class="btn btn-success" href="product_categoriess">Manage ProductCategories</a>
<?php echo form_wrap_open();?>
<form class='form-horizontal' action='create-productcategories' method='post' enctype='multipart/form-data'>
<?php
	$html="";
	$html.=input_field(["label"=>"Name","type"=>"text","name"=>"txtName"]);
	$html.=select_field(["label"=>"Section","name"=>"cmbSectionId","table"=>"sections"]);

	echo $html;
?>
<?php
	$html = input_button(["type"=>"submit", "name"=>"btnCreate", "value"=>"Create"]);
	echo $html;
?>
</form>
<?php echo form_wrap_close();?>
</div>
