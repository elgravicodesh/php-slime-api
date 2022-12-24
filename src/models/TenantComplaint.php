<?php
Class TenantComplaint {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select TenantComplaint.*, TenantComplaint.TenantComplaintID as id, Block.PropertyID,Property.PropertyName,Suite.SuiteNumber from tenantcomplaint TenantComplaint 
            left join block Block on TenantComplaint.BlockID = Block.BlockID  
            left join property Property on TenantComplaint.PropertyID = Property.PropertyID  
            left join suite Suite on TenantComplaint.SuiteID = Suite.SuiteID ";
            
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
            $sql ="Insert into tenantcomplaint(BlockID,Complain,ComplaintDate,ComplaintStatusID,CreatedBy,DateCreated,EstateManagerID,PropertyID,SuiteID,TenantID) Values(?,?,?,?,?,getdate(),?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BlockID,@$data->Complain,@$data->ComplaintDate,@$data->ComplaintStatusID,$UserID,@$data->EstateManagerID,@$data->PropertyID,@$data->SuiteID,@$data->TenantID]);
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
            $sql ="Update tenantcomplaint Set BlockID=?,Complain=?,ComplaintDate=?,ComplaintStatusID=?,DateModified=getdate(),EstateManagerID=?,ModifiedBy=?,PropertyID=?,SuiteID=?,TenantID=? Where TenantComplaintID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BlockID,@$data->Complain,@$data->ComplaintDate,@$data->ComplaintStatusID,@$data->EstateManagerID,$UserID,@$data->PropertyID,@$data->SuiteID,@$data->TenantID,$data->TenantComplaintID]);
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
            $sql ="Select * from tenantcomplaint where TenantComplaintID=?";
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
