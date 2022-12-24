<?php
Class LeaveApplication {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select LeaveApplication.*, LeaveApplication.LeaveApplicationID as id, Employee.FirstName,LeaveType.LeaveType,Year.YearName from leaveapplication LeaveApplication 
            left join employee Employee on LeaveApplication.EmployeeID = Employee.EmployeeID  
            left join leavetype LeaveType on LeaveApplication.LeaveTypeID = LeaveType.LeaveTypeID  
            left join year Year on LeaveApplication.YearID = Year.YearID ";
            
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
            $sql ="Insert into leaveapplication(ApprovalOfficerID,ApprovalStageID,DateBack,DateFrom,DepartmentID,EmployeeID,LeaveTypeID,NoDayApplied,PayLeaveGrant,RelieveOfficerID,YearID) Values(?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ApprovalOfficerID,@$data->ApprovalStageID,@$data->DateBack,@$data->DateFrom,@$data->DepartmentID,@$data->EmployeeID,@$data->LeaveTypeID,@$data->NoDayApplied,@$data->PayLeaveGrant,@$data->RelieveOfficerID,@$data->YearID]);
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
            $sql ="Update leaveapplication Set ApprovalOfficerID=?,ApprovalStageID=?,DateBack=?,DateFrom=?,DepartmentID=?,EmployeeID=?,LeaveTypeID=?,NoDayApplied=?,PayLeaveGrant=?,RelieveOfficerID=?,YearID=? Where LeaveApplicationID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ApprovalOfficerID,@$data->ApprovalStageID,@$data->DateBack,@$data->DateFrom,@$data->DepartmentID,@$data->EmployeeID,@$data->LeaveTypeID,@$data->NoDayApplied,@$data->PayLeaveGrant,@$data->RelieveOfficerID,@$data->YearID,$data->LeaveApplicationID]);
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
            $sql ="Select * from leaveapplication where LeaveApplicationID=?";
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
