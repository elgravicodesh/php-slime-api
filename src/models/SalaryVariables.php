<?php
Class SalaryVariables {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select SalaryVariables.*, SalaryVariables.SalaryVariablesID as id, Employee.FirstName,PayrollPeriod.PayrollPeriod,SalaryComponents.SalaryComponent,Statuses.StatusName from salaryvariables SalaryVariables 
            left join employee Employee on SalaryVariables.EmployeeID = Employee.EmployeeID  
            left join payrollperiod PayrollPeriod on SalaryVariables.PayrollPeriodID = PayrollPeriod.PayrollPeriodID  
            left join salarycomponents SalaryComponents on SalaryVariables.SalaryComponentID = SalaryComponents.SalaryComponentID  
            left join statuses Statuses on SalaryVariables.StatusID = Statuses.StatusID ";
            
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
            $sql ="Insert into salaryvariables(Amount,DatePosted,EmployeeID,PayrollPeriodID,PostedBy,SalaryComponentID,StatusID,Tenor,VariableCategoryID,VariableTypeID) Values(?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Amount,@$data->DatePosted,@$data->EmployeeID,@$data->PayrollPeriodID,@$data->PostedBy,@$data->SalaryComponentID,@$data->StatusID,@$data->Tenor,@$data->VariableCategoryID,@$data->VariableTypeID]);
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
            $sql ="Update salaryvariables Set Amount=?,DatePosted=?,EmployeeID=?,PayrollPeriodID=?,PostedBy=?,SalaryComponentID=?,StatusID=?,Tenor=?,VariableCategoryID=?,VariableTypeID=? Where SalaryVariablesID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Amount,@$data->DatePosted,@$data->EmployeeID,@$data->PayrollPeriodID,@$data->PostedBy,@$data->SalaryComponentID,@$data->StatusID,@$data->Tenor,@$data->VariableCategoryID,@$data->VariableTypeID,$data->SalaryVariablesID]);
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
            $sql ="Select * from salaryvariables where SalaryVariablesID=?";
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
