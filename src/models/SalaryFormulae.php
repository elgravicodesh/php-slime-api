<?php
Class SalaryFormulae {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select SalaryFormulae.*, SalaryFormulae.SalaryFormulaeID as id, GradeLevels.GradeLevelName,PayrollCategory.PayrollCategory,SalaryComponents.SalaryComponent,SalaryTaxStatus.TaxStatusID,Statuses.StatusName from salaryformulae SalaryFormulae 
            left join gradelevels GradeLevels on SalaryFormulae.GradeLevelID = GradeLevels.GradeLevelID  
            left join payrollcategory PayrollCategory on SalaryFormulae.PayrollCategoryID = PayrollCategory.PayrollCategoryID  
            left join salarycomponents SalaryComponents on SalaryFormulae.SalaryComponentID = SalaryComponents.SalaryComponentID  
            left join salarytaxstatus SalaryTaxStatus on SalaryFormulae.SalaryTaxStatusID = SalaryTaxStatus.SalaryTaxStatusID  
            left join statuses Statuses on SalaryFormulae.StatusID = Statuses.StatusID ";
            
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
            $sql ="Insert into salaryformulae(GradeLevelID,PayrollCategoryID,Percentage,SalaryComponentID,SalaryTaxStatusID,StatusID,TaxStatusID) Values(?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->GradeLevelID,@$data->PayrollCategoryID,@$data->Percentage,@$data->SalaryComponentID,@$data->SalaryTaxStatusID,@$data->StatusID,@$data->TaxStatusID]);
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
            $sql ="Update salaryformulae Set GradeLevelID=?,PayrollCategoryID=?,Percentage=?,SalaryComponentID=?,SalaryTaxStatusID=?,StatusID=?,TaxStatusID=? Where SalaryFormulaeID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->GradeLevelID,@$data->PayrollCategoryID,@$data->Percentage,@$data->SalaryComponentID,@$data->SalaryTaxStatusID,@$data->StatusID,@$data->TaxStatusID,$data->SalaryFormulaeID]);
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
            $sql ="Select * from salaryformulae where SalaryFormulaeID=?";
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
