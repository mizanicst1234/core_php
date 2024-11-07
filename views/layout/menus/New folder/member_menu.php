<?php
	// echo main_sidebar_dropdown([
	// 	"name"=>"Membership",
	// 	"icon"=>"nav-icon fa fa-users",
	// 	"links"=>[
	// 		["route"=>"create-member","text"=>"Create Member","icon"=>"fa fa-user-plus nav-icon"],
	// 		["route"=>"members","text"=>"Manage Member","icon"=>"fa fa-id-card-o nav-icon"],
	// 	]
	// ]);

 echo Menu::item([
	"name"=>"Membership",		
	"icon"=>"nav-icon fa fa-users",
	"links"=>[
		["route"=>"create-member","text"=>"Create Member"],
		["route"=>"members","text"=>"Manage Member","icon"=>"fa fa-id-card-o nav-icon"],
	]
]);

?>
