<?php
class ProductCategories implements JsonSerializable{
	public $id;
	public $name;
	public $section_id;
	public $created_at;
	public $updated_at;

	public function __construct(){
	}
	public function set($id,$name,$section_id,$created_at,$updated_at){
		$this->id=$id;
		$this->name=$name;
		$this->section_id=$section_id;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}product_categoriess(name,section_id,created_at,updated_at)values('$this->name','$this->section_id','$this->created_at','$this->updated_at')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}product_categoriess set name='$this->name',section_id='$this->section_id',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}product_categoriess where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name,section_id,created_at,updated_at from {$tx}product_categoriess");
		$data=[];
		while($productcategories=$result->fetch_object()){
			$data[]=$productcategories;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,name,section_id,created_at,updated_at from {$tx}product_categoriess $criteria limit $top,$perpage");
		$data=[];
		while($productcategories=$result->fetch_object()){
			$data[]=$productcategories;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}product_categoriess $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name,section_id,created_at,updated_at from {$tx}product_categoriess where id='$id'");
		$productcategories=$result->fetch_object();
			return $productcategories;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}product_categoriess");
		$productcategories =$result->fetch_object();
		return $productcategories->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Section Id:$this->section_id<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbProductCategories"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}product_categoriess");
		while($productcategories=$result->fetch_object()){
			$html.="<option value ='$productcategories->id'>$productcategories->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx;
		$count_result =$db->query("select count(*) total from {$tx}product_categoriess $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name,section_id,created_at,updated_at from {$tx}product_categoriess $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'><a class=\"btn btn-success\" href=\"create-productcategories\">New ProductCategories</a></th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Section Id</th><th>Created At</th><th>Updated At</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th><th>Section Id</th><th>Created At</th><th>Updated At</th></tr>";
		}
		while($productcategories=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='clearfix' style='display:flex;'>";
				$action_buttons.= action_button(["id"=>$productcategories->id, "name"=>"Details", "value"=>"Details", "class"=>"info", "url"=>"details-productcategories"]);
				$action_buttons.= action_button(["id"=>$productcategories->id, "name"=>"Edit", "value"=>"Edit", "class"=>"primary", "url"=>"edit-productcategories"]);
				$action_buttons.= action_button(["id"=>$productcategories->id, "name"=>"Delete", "value"=>"Delete", "class"=>"danger", "url"=>"product_categoriess"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$productcategories->id</td><td>$productcategories->name</td><td>$productcategories->section_id</td><td>$productcategories->created_at</td><td>$productcategories->updated_at</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx;
		$result =$db->query("select id,name,section_id,created_at,updated_at from {$tx}product_categoriess where id={$id}");
		$productcategories=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">ProductCategories Details</th></tr>";
		$html.="<tr><th>Id</th><td>$productcategories->id</td></tr>";
		$html.="<tr><th>Name</th><td>$productcategories->name</td></tr>";
		$html.="<tr><th>Section Id</th><td>$productcategories->section_id</td></tr>";
		$html.="<tr><th>Created At</th><td>$productcategories->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$productcategories->updated_at</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
