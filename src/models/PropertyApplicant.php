<?php
Class PropertyApplicant {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select PropertyApplicant.*, PropertyApplicant.PropertyApplicantID as id, City.CityCode,Gender.Gender,Lga.StateID, concat(ApplicantSurname, ' ', ApplicantFirstName, ' ',ApplicantMiddleName) fullname from propertyapplicant PropertyApplicant 
            left join city City on PropertyApplicant.CityID = City.CityID  
            left join gender Gender on PropertyApplicant.GenderID = Gender.GenderID  
            left join lga Lga on PropertyApplicant.LgaID = Lga.LgaID ";
            
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
            $sql ="Insert into propertyapplicant(ApplicantFirstName,ApplicantMiddleName,ApplicantPic,ApplicantSurname,CityID,CreatedBy,CurrentEmployer,DateCreated,DateofBirth,Email,EmployerAddress,EmployerName,GenderID,LgaID,NationalityID,PhoneNumber,SateofOriginID) Values(?,?,?,?,?,?,?,getdate(),?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ApplicantFirstName,@$data->ApplicantMiddleName,@$data->ApplicantPic,@$data->ApplicantSurname,@$data->CityID,$UserID,@$data->CurrentEmployer,@$data->DateofBirth,@$data->Email,@$data->EmployerAddress,@$data->EmployerName,@$data->GenderID,@$data->LgaID,@$data->NationalityID,@$data->PhoneNumber,@$data->SateofOriginID]);
            //Get Updated Records
            // $data = $this->getList();
            // get and return property_applicant_id
            $property_applicant_id = $db->lastInsertId();
            $result = array("status"=> 0, "message"=> "Record Successfully Created", "id"=>$property_applicant_id); 

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
            $sql ="Update propertyapplicant Set ApplicantFirstName=?,ApplicantMiddleName=?,ApplicantPic=?,ApplicantSurname=?,CityID=?,CurrentEmployer=?,DateModified=getdate(),DateofBirth=?,Email=?,EmployerAddress=?,EmployerName=?,GenderID=?,LgaID=?,ModifiedBy=?,NationalityID=?,PhoneNumber=?,SateofOriginID=? Where PropertyApplicantID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ApplicantFirstName,@$data->ApplicantMiddleName,@$data->ApplicantPic,@$data->ApplicantSurname,@$data->CityID,@$data->CurrentEmployer,@$data->DateofBirth,@$data->Email,@$data->EmployerAddress,@$data->EmployerName,@$data->GenderID,@$data->LgaID,$UserID,@$data->NationalityID,@$data->PhoneNumber,@$data->SateofOriginID,$data->PropertyApplicantID]);
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
            $sql ="Select * from propertyapplicant where PropertyApplicantID=?";
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
