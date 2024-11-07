<?php
echo Page::header(["title"=>"Manage Cattle"]);
echo Page::body_open();
echo Page::context_open();
//echo Table::manage("cattles",$columns=["*"],$route="");
echo Cattle::html_table();
echo Page::context_close();
echo Page::body_close();

?>