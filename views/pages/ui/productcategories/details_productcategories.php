<?php
if(isset($_POST["btnDetails"])){
	$productcategories=ProductCategories::find($_POST["txtId"]);
}
?>
<div class="p-4">
<a class="btn btn-success" href="product_categoriess">Manage ProductCategories</a>
<?php echo table_wrap_open();?>
<table class='table'>
	<tr><th colspan='2'>ProductCategories Details</th></tr>
<?php
	$html="";
		$html.="<tr><th>Id</th><td>$productcategories->id</td></tr>";
		$html.="<tr><th>Name</th><td>$productcategories->name</td></tr>";
		$html.="<tr><th>Section Id</th><td>$productcategories->section_id</td></tr>";
		$html.="<tr><th>Created At</th><td>$productcategories->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$productcategories->updated_at</td></tr>";

	echo $html;
?>
</table>
<?php echo table_wrap_close();?>
</div>
