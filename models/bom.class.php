<?php
class Bom implements JsonSerializable{
	public $id;
	public $code;
	public $name;
	public $product_id;
	public $qty;
	public $labour_cost;
	public $date;
	public $remark;

	public function __construct(){
	}
	public function set($id,$code,$name,$product_id,$qty,$labour_cost,$date,$remark){
		$this->id=$id;
		$this->code=$code;
		$this->name=$name;
		$this->product_id=$product_id;
		$this->qty=$qty;
		$this->labour_cost=$labour_cost;
		$this->date=$date;
		$this->remark=$remark;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}boms(code,name,product_id,qty,labour_cost,date,remark)values('$this->code','$this->name','$this->product_id','$this->qty','$this->labour_cost','$this->date','$this->remark')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}boms set code='$this->code',name='$this->name',product_id='$this->product_id',qty='$this->qty',labour_cost='$this->labour_cost',date='$this->date',remark='$this->remark' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}boms where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,code,name,product_id,qty,labour_cost,date,remark from {$tx}boms");
		$data=[];
		while($bom=$result->fetch_object()){
			$data[]=$bom;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,code,name,product_id,qty,labour_cost,date,remark from {$tx}boms $criteria limit $top,$perpage");
		$data=[];
		while($bom=$result->fetch_object()){
			$data[]=$bom;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}boms $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,code,name,product_id,qty,labour_cost,date,remark from {$tx}boms where id='$id'");
		$bom=$result->fetch_object();
			return $bom;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}boms");
		$bom =$result->fetch_object();
		return $bom->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Code:$this->code<br> 
		Name:$this->name<br> 
		Product Id:$this->product_id<br> 
		Qty:$this->qty<br> 
		Labour Cost:$this->labour_cost<br> 
		Date:$this->date<br> 
		Remark:$this->remark<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbBom"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}boms");
		while($bom=$result->fetch_object()){
			$html.="<option value ='$bom->id'>$bom->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx;
		$count_result =$db->query("select count(*) total from {$tx}boms $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,code,name,product_id,qty,labour_cost,date,remark from {$tx}boms $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'><a class=\"btn btn-success\" href=\"create-bom\">New Bom</a></th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Code</th><th>Name</th><th>Product Id</th><th>Qty</th><th>Labour Cost</th><th>Date</th><th>Remark</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Code</th><th>Name</th><th>Product Id</th><th>Qty</th><th>Labour Cost</th><th>Date</th><th>Remark</th></tr>";
		}
		while($bom=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='clearfix' style='display:flex;'>";
				$action_buttons.= action_button(["id"=>$bom->id, "name"=>"Details", "value"=>"Details", "class"=>"info", "url"=>"details-bom"]);
				$action_buttons.= action_button(["id"=>$bom->id, "name"=>"Edit", "value"=>"Edit", "class"=>"primary", "url"=>"edit-bom"]);
				$action_buttons.= action_button(["id"=>$bom->id, "name"=>"Delete", "value"=>"Delete", "class"=>"danger", "url"=>"boms"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$bom->id</td><td>$bom->code</td><td>$bom->name</td><td>$bom->product_id</td><td>$bom->qty</td><td>$bom->labour_cost</td><td>$bom->date</td><td>$bom->remark</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx;
		$result =$db->query("select id,code,name,product_id,qty,labour_cost,date,remark from {$tx}boms where id={$id}");
		$bom=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Bom Details</th></tr>";
		$html.="<tr><th>Id</th><td>$bom->id</td></tr>";
		$html.="<tr><th>Code</th><td>$bom->code</td></tr>";
		$html.="<tr><th>Name</th><td>$bom->name</td></tr>";
		$html.="<tr><th>Product Id</th><td>$bom->product_id</td></tr>";
		$html.="<tr><th>Qty</th><td>$bom->qty</td></tr>";
		$html.="<tr><th>Labour Cost</th><td>$bom->labour_cost</td></tr>";
		$html.="<tr><th>Date</th><td>$bom->date</td></tr>";
		$html.="<tr><th>Remark</th><td>$bom->remark</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
