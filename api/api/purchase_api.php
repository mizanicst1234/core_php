<?php
class PurchaseApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["purchases"=>Purchase::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["purchases"=>Purchase::pagination($page,$perpage),"total_records"=>Purchase::count()]);
	}
	function find($data){
		echo json_encode(["purchase"=>Purchase::find($data["id"])]);
	}
	function delete($data){
		Purchase::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$purchase=new Purchase();
		$purchase->supplier_id=$data["supplier_id"];
		$purchase->purchase_date=$data["purchase_date"];
		$purchase->delivery_date=$data["delivery_date"];
		$purchase->shipping_address=$data["shipping_address"];
		$purchase->purchase_total=$data["purchase_total"];
		$purchase->paid_amount=$data["paid_amount"];
		$purchase->remark=$data["remark"];
		$purchase->status_id=$data["status_id"];
		$purchase->discount=$data["discount"];
		$purchase->vat=$data["vat"];

		$purchase->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$purchase=new Purchase();
		$purchase->id=$data["id"];
		$purchase->supplier_id=$data["supplier_id"];
		$purchase->purchase_date=$data["purchase_date"];
		$purchase->delivery_date=$data["delivery_date"];
		$purchase->shipping_address=$data["shipping_address"];
		$purchase->purchase_total=$data["purchase_total"];
		$purchase->paid_amount=$data["paid_amount"];
		$purchase->remark=$data["remark"];
		$purchase->status_id=$data["status_id"];
		$purchase->discount=$data["discount"];
		$purchase->vat=$data["vat"];
		$purchase->updated_at=$now;

		$purchase->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
