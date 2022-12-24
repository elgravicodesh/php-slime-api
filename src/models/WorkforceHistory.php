<?php
Class WorkforceHistory {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select WorkforceHistory.*, WorkforceHistory.HistoryID as id, Employee.FirstName,GradeLevels.GradeLevelName,WorkforceOptions.WorkforceOption from workforcehistory WorkforceHistory 
            left join employee Employee on WorkforceHistory.EmployeeID = Employee.EmployeeID  
            left join gradelevels GradeLevels on WorkforceHistory.NewGradeLevelID = GradeLevels.GradeLevelID  
            left join gradelevels GradeLevels on WorkforceHistory.OldGradeLevelID = GradeLevels.GradeLevelID  
            left join workforceoptions WorkforceOptions on WorkforceHistory.WorkforceOptionID = WorkforceOptions.WorkforceOptionID ";
            
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
            $sql ="Insert into workforcehistory(Comments,EffectiveDate,EmployeeID,NewGradeLevelID,OldGradeLevelID,WorkforceOptionID) Values(?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Comments,@$data->EffectiveDate,@$data->EmployeeID,@$data->NewGradeLevelID,@$data->OldGradeLevelID,@$data->WorkforceOptionID]);
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
            $sql ="Update workforcehistory Set Comments=?,EffectiveDate=?,EmployeeID=?,NewGradeLevelID=?,OldGradeLevelID=?,WorkforceOptionID=? Where HistoryID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Comments,@$data->EffectiveDate,@$data->EmployeeID,@$data->NewGradeLevelID,@$data->OldGradeLevelID,@$data->WorkforceOptionID,$data->HistoryID]);
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
            $sql ="Select * from workforcehistory where HistoryID=?";
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
