<?php
Class StaffTask {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select StaffTask.*, StaffTask.StaffTaskID as id, Employee.EmployeeTitleID,TaskPriority.TaskPriority,TaskStatus.TaskStatus from stafftask StaffTask 
            left join employee Employee on StaffTask.EmployeeID = Employee.EmployeeID  
            left join taskpriority TaskPriority on StaffTask.TaskPriorityID = TaskPriority.TaskPriorityID  
            left join taskstatus TaskStatus on StaffTask.TaskStatusID = TaskStatus.TaskStatusID ";
            
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
            $sql ="Insert into stafftask(Comment,CreatedBy,DateCreated,EmployeeID,TaskDescription,TaskDueDate,TaskPriorityID,TaskStatusID,TaskTitle) Values(?,?,getdate(),?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Comment,$UserID,@$data->EmployeeID,@$data->TaskDescription,@$data->TaskDueDate,@$data->TaskPriorityID,@$data->TaskStatusID,@$data->TaskTitle]);
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
            $sql ="Update stafftask Set Comment=?,DateModified=getdate(),EmployeeID=?,ModifiedBy=?,TaskDescription=?,TaskDueDate=?,TaskPriorityID=?,TaskStatusID=?,TaskTitle=? Where StaffTaskID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Comment,@$data->EmployeeID,$UserID,@$data->TaskDescription,@$data->TaskDueDate,@$data->TaskPriorityID,@$data->TaskStatusID,@$data->TaskTitle,$data->StaffTaskID]);
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
            $sql ="Select * from stafftask where StaffTaskID=?";
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
