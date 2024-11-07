<label style="color:#fff;font-size:15px;">Production Details</label>
<?php
	echo main_sidebar_dropdown([
		"name"=>"Production",
		"icon"=>"nav-icon fa fa-bar-chart",
		"links"=>[			
			["route"=>"boms","text"=>"Manage BoM","icon"=>"far fa-circle nav-icon"],
            // ["route"=>"production-orders","text"=>"Manage Order","icon"=>"far fa-circle nav-icon"],
			["route"=>"mfg_productions","text"=>"Manage MfgProduction","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>
