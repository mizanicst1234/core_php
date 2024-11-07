<label style="color:#fff;font-size:15px;">Sales Details</label>
<?php
	echo main_sidebar_dropdown([
		"name"=>"Sales",
		"icon"=>"nav-icon fa fa-bar-chart",
		"links"=>[
			["route"=>"create-order","text"=>"Create Order","icon"=>"nav-icon fa fa-shopping-cart"],
			["route"=>"orders","text"=>"Manage Order","icon"=>"far fa-circle nav-icon"],			
            ["route"=>"customers","text"=>"Manage Customer","icon"=>"far fa-circle nav-icon"],
			["route"=>"contacts","text"=>" CRM ","icon"=>"far fa-circle nav-icon"],
			["route"=>"mr","text"=>"Create Money Receipt","icon"=>"far fa-circle nav-icon"],
			// ["route"=>"manage-mr","text"=>"Manage Money Receipt","icon"=>"far fa-circle nav-icon"],
			["route"=>"daily-sales-report","text"=>"Daily Sales Report","icon"=>"far fa-circle nav-icon"]
		]
	]);
?>
