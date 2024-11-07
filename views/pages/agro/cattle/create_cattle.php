<!--Save-->
<?php
  print_r($_POST);
?>
<!--UI Interface-->
<?php
echo Page::title(["title"=>"Create Cattle"]);
echo Page::body_open();
echo Page::context_open();

//FormOpen
echo Form::open(["route"=>"create-cattle"]);
echo Form::select(["label"=>"Cattle Name","name"=>"category","table"=>"cattle_categories"]);
echo Form::text(["label"=>"Cattle Name","name"=>"name","type"=>"text"]);
echo Form::text(["label"=>"Photo","name"=>"photo","type"=>"file"]);
echo Form::text(["label"=>"Remark","name"=>"remark","type"=>"textarea"]);
echo Form::button(["name"=>"btn","value"=>"Save","type"=>"submit"]);
echo Form::close();
//FormClose

echo Page::context_close();
echo Page::body_close();

?>