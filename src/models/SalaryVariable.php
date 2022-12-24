<?php
Class SalaryVariable {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select SalaryVariable.*, SalaryVariable.SalaryVariableID as id, Employee.EmployeeTitleID,PayrollPeriod.PayrollPeriod,SalaryComponent.SalaryComponent from salaryvariable SalaryVariable 
            left join employee Employee on SalaryVariable.EmployeeID = Employee.EmployeeID  
            left join payrollperiod PayrollPeriod on SalaryVariable.PayrollPeriodID = PayrollPeriod.PayrollPeriodID  
            left join salarycomponent SalaryComponent on SalaryVariable.SalaryComponentID = SalaryComponent.SalaryComponentID ";
            
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
            $sql ="Insert into salaryvariable(Amount,CreatedBy,DateCreated,EmployeeID,PayrollPeriodID,SalaryComponentID,StatusID,Tenor,VariableTypeID) Values(?,?,getdate(),?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Amount,$UserID,@$data->EmployeeID,@$data->PayrollPeriodID,@$data->SalaryComponentID,@$data->StatusID,@$data->Tenor,@$data->VariableTypeID]);
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
            $sql ="Update salaryvariable Set Amount=?,DateModified=getdate(),EmployeeID=?,ModifiedBy=?,PayrollPeriodID=?,SalaryComponentID=?,StatusID=?,Tenor=?,VariableTypeID=? Where SalaryVariableID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Amount,@$data->EmployeeID,$UserID,@$data->PayrollPeriodID,@$data->SalaryComponentID,@$data->StatusID,@$data->Tenor,@$data->VariableTypeID,$data->SalaryVariableID]);
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
            $sql ="Select * from salaryvariable where SalaryVariableID=?";
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
