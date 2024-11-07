<?php
	echo main_sidebar_dropdown([
		"name"=>"ProductCategories",
		"icon"=>"nav-icon fa fa-wrench",
		"links"=>[
			["route"=>"create-productcategories","text"=>"Create ProductCategories","icon"=>"far fa-circle nav-icon"],
			["route"=>"product_categoriess","text"=>"Manage ProductCategories","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>
