<?php
	echo main_sidebar_dropdown([
		"name"=>"MoneyReceipt",
		"icon"=>"nav-icon fa fa-wrench",
		"links"=>[
			["route"=>"create-moneyreceipt","text"=>"Create MoneyReceipt","icon"=>"far fa-circle nav-icon"],
			["route"=>"money_receipts","text"=>"Manage MoneyReceipt","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>
