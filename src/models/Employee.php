<?php
Class Employee {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="SELECT
    *,
    Employee.EmployeeID AS id,
    Bank.BankName,
    Branches.BranchName,
    City.LgaID,
    Company.CompanyName,
    Country.CountryNameCode,
    Departments.DepartmentName,
    Designations.DesignationName,
    CONCAT(Employee.FirstName,' ', Employee.SurName) AS FullName,
    Employee.FirstName,
    EmployeeTitle.EmployeeTitle,
    EmployeeType.EmployeeType,
    Gender.Gender,
    GradeLevels.GradeLevelName,
    Grades.GradeName,
    Lga.StateID,
    MaritalStatus.MaritalStatus,
    PensionProvider.PensionProvider,
    Religion.Religion,
    States.StateName,
    Statuses.StatusName,
    Units.UnitName
FROM
    employee Employee
LEFT JOIN bank Bank ON
    Employee.BankID = Bank.BankID
LEFT JOIN branches Branches ON Employee.BranchID = Branches.BranchID
LEFT JOIN city City ON
    Employee.CItyID = City.CityID
LEFT JOIN company Company ON Employee.CompanyID = Company.CompanyID
LEFT JOIN country Country ON
    Employee.NationalityID = Country.CountryID
LEFT JOIN departments Departments ON
    Employee.DepartmentID = Departments.DepartmentID
LEFT JOIN designations Designations ON
    Employee.DesignationID = Designations.DesignationID
LEFT JOIN employee e ON
    Employee.EmployeeID = e.EmployeeID
LEFT JOIN employeetitle EmployeeTitle ON
    Employee.EmployeeTitleID = EmployeeTitle.EmployeeTitleID
LEFT JOIN employeetype EmployeeType ON
    Employee.EmployeeTypeID = EmployeeType.EmployeeTypeID
LEFT JOIN gender Gender ON
    Employee.GenderID = Gender.GenderID
LEFT JOIN gradelevels GradeLevels ON
    Employee.GradeLevelID = GradeLevels.GradeLevelID
LEFT JOIN grades Grades ON
    Employee.GradeID = Grades.GradeID
LEFT JOIN lga Lga ON
    Employee.LgaID = Lga.LgaID
LEFT JOIN maritalstatus MaritalStatus ON
    Employee.MaritalStatusID = MaritalStatus.MaritalStatusID
LEFT JOIN pensionprovider PensionProvider ON
    Employee.PensionProviderID = PensionProvider.PensionProviderID
LEFT JOIN religion Religion ON
    Employee.ReligionID = Religion.ReligionID
LEFT JOIN states States ON
    Employee.StateID = States.StateID
LEFT JOIN states s ON
    Employee.StateofOriginID = s.StateID
LEFT JOIN statuses Statuses ON
    Employee.StatusID = Statuses.StatusID
LEFT JOIN units Units ON
    Employee.UnitID = Units.UnitID";
            
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
            $sql ="Insert into employee(BankAccountNo,BankID,BranchID,CItyID,CompanyID,CreatedBy,DateCreated,DateOfBirth,DepartmentID,DesignationID,Email,EmployeeNumber,EmployeeStatusID,EmployeeTitleID,EmployeeTypeID,FirstName,FullName,GenderID,GradeID,GradeLevelID,Hobbies,HomeNum,LgaID,MaritalStatusID,MiddleName,MobileNum,NationalityID,NHFNo,PensionProviderID,ReligionID,ResidentialAddress,StateID,StateofOriginID,StatusID,SurName,Tribe,UnitID,PensionPin) Values(?,?,?,?,?,?,?,now(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BankAccountNo,@$data->BankID,@$data->BranchID,@$data->CItyID,@$data->CompanyID,$UserID,@$data->DateOfBirth,@$data->DepartmentID,@$data->DesignationID,@$data->Email,@$data->EmployeeNumber,@$data->EmployeeStatusID,@$data->EmployeeTitleID,@$data->EmployeeTypeID,@$data->FirstName,@$data->FullName,@$data->GenderID,@$data->GradeID,@$data->GradeLevelID,@$data->Hobbies,@$data->HomeNum,@$data->LgaID,@$data->PensionPin,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileNum,@$data->NationalityID,@$data->NHFNo,@$data->PensionProviderID,@$data->ReligionID,@$data->ResidentialAddress,@$data->StateID,@$data->StateofOriginID,@$data->StatusID,@$data->SurName,@$data->Tribe,@$data->UnitID]);
            //Get Updated Records
            $id = $db->lastInsertId();;
            $result = array("status"=> 0, "message"=> "Record Successfully Created", "data"=>$id); 

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
            $sql ="Update employee Set BankAccountNo=?,BankID=?,BranchID=?,CItyID=?,CompanyID=?,DateModified=now(),DateOfBirth=?,DepartmentID=?,DesignationID=?,Email=?,EmployeeNumber=?,EmployeeStatusID=?,EmployeeTitleID=?,EmployeeTypeID=?,FirstName=?,FullName=?,GenderID=?,GradeID=?,GradeLevelID=?,Hobbies=?,HomeNum=?,LgaID=?,MaritalStatusID=?,MiddleName=?,MobileNum=?,ModifiedBy=?,NationalityID=?,NHFNo=?,PensionProviderID=?,ReligionID=?,PensionPin=?,ResidentialAddress=?,StateID=?,StateofOriginID=?,StatusID=?,SurName=?,Tribe=?,UnitID=? Where EmployeeID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->BankAccountNo,@$data->BankID,@$data->BranchID,@$data->CItyID,@$data->CompanyID,@$data->DateOfBirth,@$data->DepartmentID,@$data->DesignationID,@$data->Email,@$data->EmployeeNumber,@$data->EmployeeStatusID,@$data->EmployeeTitleID,@$data->EmployeeTypeID,@$data->FirstName,@$data->FullName,@$data->GenderID,@$data->GradeID,@$data->GradeLevelID,@$data->Hobbies,@$data->HomeNum,@$data->LgaID,@$data->PensionPin,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileNum,$UserID,@$data->NationalityID,@$data->NHFNo,@$data->PensionProviderID,@$data->ReligionID,@$data->ResidentialAddress,@$data->StateID,@$data->StateofOriginID,@$data->StatusID,@$data->SurName,@$data->Tribe,@$data->UnitID,$data->EmployeeID]);
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
            $sql ="Select * from employee where EmployeeID=?";
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
