<label style="color:#fff;font-size:15px;">Supplier Details</label>
<?php
	echo main_sidebar_dropdown([
		"name"=>"Supplier",
		"icon"=>"nav-icon fa fa-wrench",
		"links"=>[
			["route"=>"create-supplier","text"=>"Create Supplier","icon"=>"far fa-circle nav-icon"],
			["route"=>"suppliers","text"=>"Manage Supplier","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>
