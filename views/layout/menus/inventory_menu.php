<label style="color:#fff;font-size:15px;">Purceses Details</label>
<?php
	echo Menu::item([
		"name"=>"Inventroy",
		"icon"=>"nav-icon fa fa-cubes",
		"links"=>[
			["route"=>"create-purchase","text"=>"Create Purchase","icon"=>"far fa-circle nav-icon"],
			["route"=>"purchases","text"=>"Manage Purchase","icon"=>"far fa-circle nav-icon"],
			["route"=>"products","text"=>"Manage Products","icon"=>"far fa-circle nav-icon"],
			["route"=>"stocks","text"=>"Manage Stock","icon"=>"far fa-circle nav-icon"],
			["route"=>"sections","text"=>"Manage CategorySource","icon"=>"far fa-circle nav-icon"],
			["route"=>"product_categoriess","text"=>"Manage ProductCategory","icon"=>"far fa-circle nav-icon"],
			["route"=>"manufacturers","text"=>"Manage Manufacturers","icon"=>"far fa-circle nav-icon"],
			["route"=>"warehouses","text"=>"Manage Warehouses","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>

