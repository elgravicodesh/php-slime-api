<?php
Class EstateAgent {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select EstateAgent.*, EstateAgent.EstateAgentID as id, Gender.Gender,MaritalStatus.MaritalStatus,Religion.Religion 
            from estateagent EstateAgent 
            left join gender Gender on EstateAgent.GenderID = Gender.GenderID  
            left join maritalstatus MaritalStatus on EstateAgent.MaritalStatusID = MaritalStatus.MaritalStatusID  
            left join religion Religion on EstateAgent.ReligionID = Religion.ReligionID ";
            
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
            $sql ="Insert into estateagent(CreatedBy,DateCreated,DateofBirth,Email,EmergencyContactPerson,EmmergencyContactPhone,FirstName,GenderID,HomeLine,MaritalStatusID,MiddleName,MobileLine,ReligionID,ResidentailAddress,SurName) Values(?,now(),?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([$UserID,@$data->DateofBirth,@$data->Email,@$data->EmergencyContactPerson,@$data->EmmergencyContactPhone,@$data->FirstName,@$data->GenderID,@$data->HomeLine,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileLine,@$data->ReligionID,@$data->ResidentailAddress,@$data->SurName]);
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
            $sql ="Update estateagent Set DateModified=now(),DateofBirth=?,Email=?,EmergencyContactPerson=?,EmmergencyContactPhone=?,FirstName=?,GenderID=?,HomeLine=?,MaritalStatusID=?,MiddleName=?,MobileLine=?,ModifiedBy=?,ReligionID=?,ResidentailAddress=?,SurName=? Where EstateAgentID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->DateofBirth,@$data->Email,@$data->EmergencyContactPerson,@$data->EmmergencyContactPhone,@$data->FirstName,@$data->GenderID,@$data->HomeLine,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileLine,$UserID,@$data->ReligionID,@$data->ResidentailAddress,@$data->SurName,$data->EstateAgentID]);
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
            $sql ="Select * from estateagent where EstateAgentID=?";
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
