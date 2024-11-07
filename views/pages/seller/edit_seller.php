<?php
if(isset($_POST["btnEdit"])){
	$seller=seller::find($_POST["txtId"]);
}
if(isset($_POST["btnUpdate"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCity"])){
		$errors["city"]="Invalid city";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtContact"])){
		$errors["contact"]="Invalid contact";
	}

*/
	if(count($errors)==0){
		$seller=new seller();
		$seller->id=$_POST["txtId"];
		$seller->name=$_POST["txtName"];
		$seller->city=$_POST["txtCity"];
		$seller->contact=$_POST["txtContact"];

		$seller->update();
	}else{
		 print_r($errors);
	}
}
?>
<div class="p-4">
<a class="btn btn-success" href="sellers">Manage seller</a>
<?php echo form_wrap_open();?>
<form class='form-horizontal' action='edit-seller' method='post' enctype='multipart/form-data'>
<?php
	$html="";
	$html.=input_field(["label"=>"Id","type"=>"hidden","name"=>"txtId","value"=>"$seller->id"]);
	$html.=input_field(["label"=>"Name","type"=>"text","name"=>"txtName","value"=>"$seller->name"]);
	$html.=input_field(["label"=>"City","type"=>"text","name"=>"txtCity","value"=>"$seller->city"]);
	$html.=input_field(["label"=>"Contact","type"=>"text","name"=>"txtContact","value"=>"$seller->contact"]);

	echo $html;
?>
<?php
	$html = input_button(["type"=>"submit", "name"=>"btnUpdate", "value"=>"Update"]);
	echo $html;
?>
</form>
<?php echo form_wrap_close();?>
</div>
