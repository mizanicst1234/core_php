<?php
$arr=[
    "name"=>"OPD",
    "icon"=>"nav-icon fa fa-shopping-cart",
    "links"=>[
        ["route"=>"manage-consulant","text"=>"Manage Consultant","icon"=>"far fa-circle nav-icon"],
        ["route"=>"manage-patient","text"=>"Manage Patient","icon"=>"far fa-circle nav-icon"],
        ["route"=>"manage-medicine","text"=>"Manage Medicine","icon"=>"far fa-circle nav-icon"],
        ["route"=>"manage-prescription","text"=>"Manage Prescription","icon"=>"far fa-circle nav-icon"]
    ]
    ];

	echo main_sidebar_dropdown($arr);
?>
