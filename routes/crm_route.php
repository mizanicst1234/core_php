<?php


if($page=="create-contact"){
	$found=include("views/pages/crm/create_contact.php");
}elseif($page=="edit-contacts"){
	$found=include("views/pages/crm/edit_contacts.php");
}elseif($page=="productions"){	     
	$found=include("views/pages/crm/manage_contacts.php");
   
}elseif($page=="details-contacts"){
	$found=include("views/pages/crm/details_contacts.php");
}elseif($page=="view-contacts"){
	$found=include("views/pages/crm/view_contacts.php");
}
?>