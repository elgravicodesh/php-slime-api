<?php
Class EmployeeEducation {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select EmployeeEducation.*, EmployeeEducation.EducationID as id, Employee.FirstName,ProgrammeTypes.ProgrammeType,QualificationGrade.QualificationGradeName,Qualifications.QualificationName,SchoolTypes.SchoolType from employeeeducation EmployeeEducation 
            left join employee Employee on EmployeeEducation.EmployeeID = Employee.EmployeeID  
            left join programmetypes ProgrammeTypes on EmployeeEducation.ProgrammeTypeID = ProgrammeTypes.ProgrammeTypeID  
            left join qualificationgrade QualificationGrade on EmployeeEducation.QualificationGradeID = QualificationGrade.QualificationGradeID  
            left join qualifications Qualifications on EmployeeEducation.QualificationID = Qualifications.QualificationID  
            left join schooltypes SchoolTypes on EmployeeEducation.SchoolTypeID = SchoolTypes.SchoolTypeID ";
            
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
            $sql ="Insert into employeeeducation(Description,EmployeeID,EndDate,ProgrammeTypeID,QualificationGradeID,QualificationID,SchoolName,SchoolTypeID,StartDate) Values(?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Description,@$data->EmployeeID,@$data->EndDate,@$data->ProgrammeTypeID,@$data->QualificationGradeID,@$data->QualificationID,@$data->SchoolName,@$data->SchoolTypeID,@$data->StartDate]);
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
            $sql ="Update employeeeducation Set Description=?,EmployeeID=?,EndDate=?,ProgrammeTypeID=?,QualificationGradeID=?,QualificationID=?,SchoolName=?,SchoolTypeID=?,StartDate=? Where EducationID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Description,@$data->EmployeeID,@$data->EndDate,@$data->ProgrammeTypeID,@$data->QualificationGradeID,@$data->QualificationID,@$data->SchoolName,@$data->SchoolTypeID,@$data->StartDate,$data->EducationID]);
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
            $sql ="Select * from employeeeducation where EducationID=?";
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
