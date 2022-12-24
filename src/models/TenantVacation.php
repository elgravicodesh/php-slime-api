<?php
Class TenantVacation {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select TenantVacation.*, TenantVacation.TenantVacationID as id, Block.PropertyID,Property.PropertyName,Unit.Unit from tenantvacation TenantVacation 
            left join block Block on TenantVacation.BlockID = Block.BlockID  
            left join property Property on TenantVacation.PropertyID = Property.PropertyID  
            left join unit Unit on TenantVacation.UnitID = Unit.UnitID ";
            
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
            $sql ="Insert into tenantvacation(BlockID,CondiotionofSuite,CreatedBy,DateCreated,DateofVacation,EstateManagerID,OutstandingDebt,PropertyID,ReasonforVacation,Remarks,TenancyPeriod,TenantID,UnitID) Values(?,?,?,getdate(),?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BlockID,@$data->CondiotionofSuite,$UserID,@$data->DateofVacation,@$data->EstateManagerID,@$data->OutstandingDebt,@$data->PropertyID,@$data->ReasonforVacation,@$data->Remarks,@$data->TenancyPeriod,@$data->TenantID,@$data->UnitID]);
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
            $sql ="Update tenantvacation Set BlockID=?,CondiotionofSuite=?,DateModified=getdate(),DateofVacation=?,EstateManagerID=?,ModifiedBy=?,OutstandingDebt=?,PropertyID=?,ReasonforVacation=?,Remarks=?,TenancyPeriod=?,TenantID=?,UnitID=? Where TenantVacationID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BlockID,@$data->CondiotionofSuite,@$data->DateofVacation,@$data->EstateManagerID,$UserID,@$data->OutstandingDebt,@$data->PropertyID,@$data->ReasonforVacation,@$data->Remarks,@$data->TenancyPeriod,@$data->TenantID,@$data->UnitID,$data->TenantVacationID]);
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
            $sql ="Select * from tenantvacation where TenantVacationID=?";
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
