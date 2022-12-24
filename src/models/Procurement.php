<?php
Class Procurement {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select Procurement.*, Procurement.ProcurementID as id, ApprovalStages.ApprovalStages, Items.ItemName, ItemCategory.ItemCategory,
            CONCAT(Employee.FirstName,' ', Employee.SurName) AS FullName
            from procurement Procurement 
            left join approvalstages ApprovalStages on Procurement.ApprovalStagesID = ApprovalStages.ApprovalStagesID 
            left join items on Procurement.ItemID = Items.ItemID
            left join itemcategory on Procurement.ItemCategoryID = ItemCategory.ItemCategoryID
            left join employee on Procurement.EmployeeID = Employee.EmployeeID";
            
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
            $sql ="Insert into procurement(ApprovalOfficerID,ApprovalStagesID,ProcurementDate,RequestBy,ItemID,ItemCategoryID,Reason,EmployeeID) Values(?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->EmployeeID,@$data->ApprovalOfficerID,@$data->ApprovalStagesID,@$data->ProcurementDate,@$data->RequestBy,@$data->ItemID,@$data->ItemCategoryID,@$data->Reason]);
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
            $sql ="Update procurement Set ApprovalOfficerID=?,ApprovalStagesID=?,ProcurementDate=?,RequestBy=?,ItemID=?,ItemCategoryID=?,Reason=?,EmployeeID=? Where ProcurementID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->EmployeeID,@$data->ApprovalOfficerID,@$data->ApprovalStagesID,@$data->ProcurementDate,@$data->RequestBy,$data->ProcurementID,@$data->ItemID,@$data->ItemCategoryID,@$data->Reason]);
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
            $sql ="Select * from procurement where ProcurementID=?";
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
