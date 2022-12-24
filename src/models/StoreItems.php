<?php
Class StoreItems {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select StoreItems.*, StoreItems.StoreItemID as id, Items.ItemCategoryID,ItemStatus.ItemStatus,MeasureUnit.MeasureUnitName,Stores.StoreName from storeitems StoreItems left join items Items on StoreItems.ItemID = Items.ItemID  left join itemstatus ItemStatus on StoreItems.ItemStatusID = ItemStatus.ItemStatusID  left join measureunit MeasureUnit on StoreItems.MeasureUnitID = MeasureUnit.MeasureUnitID  left join stores Stores on StoreItems.StoreID = Stores.StoreID ";
            
			if(count($data)>0)
            {
                $arr =array();
                foreach ($data as $key => $value) {
                    $arr[] = " $key ='$value' ";
                }    
                $sql .= " where ". implode(" and ", $arr);
            }
			$db = $this->db;
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $db = null;
        }
        catch(PDOException $e) {
        }
        
        return $result;
    }

    public function all($data=array())
    {
        //Return Variable Array
        $result =array();
        try{
            //Get all Data
            $data = $this->getList();
            //Return Variable Assignment (Success)
            $result = array("status"=> 0, "message"=> "Records Retrieved", "data"=>$data); 
            $db = null; //De-assigned Database Variable
        }
        catch(PDOException $e) {
            //Return Variable Assignment (Error)
            $result = array("status"=> 100, "message"=> $e->getMessage());
            //Logger    
        }
        return $result;

    }
    
    public function add($data)
    {
        $result =array();
        try{
            $UserID =0;
            //Insert Query
            $sql ="Insert into storeitems(CostPrice,ItemID,ItemStatusID,MeasureUnitID,OpenStock,ReorderLevel,SellingPrice,StoreID) Values(?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->CostPrice,@$data->ItemID,@$data->ItemStatusID,@$data->MeasureUnitID,@$data->OpenStock,@$data->ReorderLevel,@$data->SellingPrice,@$data->StoreID]);
            //Get Updated Records
            $data = $this->getList();
            $result = array("status"=> 0, "message"=> "Record Successfully Created", "data"=>$data); 

            $db = null;
        }
        catch(PDOException $e) {
            $result = array("status"=> 100, "message"=> $e->getMessage());
            //Logger    
        }
        
        return $result;
    }
    
    public function update($data)
    {
        $result =array();
        try{
            $UserID =0;
            //Insert Query
            $sql ="Update storeitems Set CostPrice=?,ItemID=?,ItemStatusID=?,MeasureUnitID=?,OpenStock=?,ReorderLevel=?,SellingPrice=?,StoreID=? Where StoreItemID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->CostPrice,@$data->ItemID,@$data->ItemStatusID,@$data->MeasureUnitID,@$data->OpenStock,@$data->ReorderLevel,@$data->SellingPrice,@$data->StoreID,$data->StoreItemID]);
            //Get Updated Records
            $data = $this->getList();
            $result = array("status"=> 0, "message"=> "Record Successfully Updated", "data"=>$data); 

            $db = null;
        }
        catch(PDOException $e) {
            $result = array("status"=> 100, "message"=> $e->getMessage());
            //Logger    
        }  
        return $result;
    }
    
    public function get($id)
    {
        //Return Variable Array
        $result =array();
        try{
            $sql ="Select * from storeitems where StoreItemID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            //Return Variable Assignment (Success)
            $result = array("status"=> 0, "message"=> "Records Retrieved", "data"=>$data); 
            $db = null; //De-assigned Database Variable
        }
        catch(PDOException $e) {
            //Return Variable Assignment (Error)
            $result = array("status"=> 100, "message"=> $e->getMessage());
            //Logger    
        }
        return $result;
    }
}
