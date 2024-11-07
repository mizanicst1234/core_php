<?php
if(isset($_POST["btnDelete"])){
	MfgBom::delete($_POST["txtId"]);
}
?>
<?php
echo Page::header(["title"=>"Manage BoM"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Manage BoM"]);
//echo table_wrap_open();

//$current_page=isset($_GET["page"])?$_GET["page"]:1;
//echo MfgBom::html_table($current_page,5);
echo Table::manage("uoms");

	//echo table_wrap_close();
echo Page::content_close();
echo Page::body_close();
?>

