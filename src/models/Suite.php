<?php
Class Suite {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select Suite.*, Suite.SuiteID as id, Block.PropertyID,PropertyFloor.PropertyFloor,SuiteCategory.SuiteCategory,SuiteStatus.SuiteStatus from suite Suite 
            left join block Block on Suite.BlockID = Block.BlockID  
            left join propertyfloor PropertyFloor on Suite.PropertyFloorID = PropertyFloor.PropertyFloorID  
            left join suitecategory SuiteCategory on Suite.SuiteCategoryID = SuiteCategory.SuiteCategoryID  
            left join suitestatus SuiteStatus on Suite.SuiteStatusID = SuiteStatus.SuiteStatusID ";
            
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
            $sql ="Insert into suite(BlockID,CreatedBy,DateCreated,PropertyFloorID,SuitCharge,SuiteCategoryID,SuiteNumber,SuiteSize,SuiteStatusID) Values(?,?,getdate(),?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BlockID,$UserID,@$data->PropertyFloorID,@$data->SuitCharge,@$data->SuiteCategoryID,@$data->SuiteNumber,@$data->SuiteSize,@$data->SuiteStatusID]);
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
            $sql ="Update suite Set BlockID=?,DateModified=getdate(),ModifiedBy=?,PropertyFloorID=?,SuitCharge=?,SuiteCategoryID=?,SuiteNumber=?,SuiteSize=?,SuiteStatusID=? Where SuiteID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BlockID,$UserID,@$data->PropertyFloorID,@$data->SuitCharge,@$data->SuiteCategoryID,@$data->SuiteNumber,@$data->SuiteSize,@$data->SuiteStatusID,$data->SuiteID]);
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
            $sql ="Select * from suite where SuiteID=?";
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
