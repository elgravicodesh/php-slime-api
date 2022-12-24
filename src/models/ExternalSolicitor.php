<?php
Class ExternalSolicitor {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select ExternalSolicitor.*, ExternalSolicitor.ExternalSolicitorID as id, ExternalSolicitorType.ExternalSolicitorType,Gender.Gender,MaritalStatus.MaritalStatus,Religion.Religion 
            from externalsolicitor ExternalSolicitor 
            left join externalsolicitortype ExternalSolicitorType on ExternalSolicitor.ExternalSolicitorTypeID = ExternalSolicitorType.ExternalSolicitorTypeID  
            left join gender Gender on ExternalSolicitor.GenderID = Gender.GenderID  
            left join maritalstatus MaritalStatus on ExternalSolicitor.MaritalStatusID = MaritalStatus.MaritalStatusID  
            left join religion Religion on ExternalSolicitor.ReligionID = Religion.ReligionID ";
            
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
            $sql ="Insert into externalsolicitor(Chamber,CreatedBy,DateCreated,DateofBirth,DateofRetainership,Email,ExternalSolicitorTypeID,FirstName,GenderID,HomeLine,LegalNumber,MaritalStatusID,MiddleName,MobileLine,NationalityID,ReligionID,ResidentialAddress,RetainershipTerminationDate,StateofOriginID,Surname,YearsofPractice) Values(?,?,now(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Chamber,$UserID,@$data->DateofBirth,@$data->DateofRetainership,@$data->Email,@$data->ExternalSolicitorTypeID,@$data->FirstName,@$data->GenderID,@$data->HomeLine,@$data->LegalNumber,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileLine,@$data->NationalityID,@$data->ReligionID,@$data->ResidentialAddress,@$data->RetainershipTerminationDate,@$data->StateofOriginID,@$data->Surname,@$data->YearsofPractice]);
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
            $sql ="Update externalsolicitor Set Chamber=?,DateModified=now(),DateofBirth=?,DateofRetainership=?,Email=?,ExternalSolicitorTypeID=?,FirstName=?,GenderID=?,HomeLine=?,LegalNumber=?,MaritalStatusID=?,MiddleName=?,MobileLine=?,ModifiedBy=?,NationalityID=?,ReligionID=?,ResidentialAddress=?,RetainershipTerminationDate=?,StateofOriginID=?,Surname=?,YearsofPractice=? Where ExternalSolicitorID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Chamber,@$data->DateofBirth,@$data->DateofRetainership,@$data->Email,@$data->ExternalSolicitorTypeID,@$data->FirstName,@$data->GenderID,@$data->HomeLine,@$data->LegalNumber,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileLine,$UserID,@$data->NationalityID,@$data->ReligionID,@$data->ResidentialAddress,@$data->RetainershipTerminationDate,@$data->StateofOriginID,@$data->Surname,@$data->YearsofPractice,$data->ExternalSolicitorID]);
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
            $sql ="Select * from externalsolicitor where ExternalSolicitorID=?";
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
