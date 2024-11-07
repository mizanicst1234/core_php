<?php
echo Page::header(["title"=>"Manage Member"]);
echo Page::body_open();
echo Page::content_open(["title"=>""]);

//echo Table::manage("members");
echo Member::html_table();

echo Page::content_close();
echo Page::body_close();
?>