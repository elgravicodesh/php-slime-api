<?php
Class ListofTenant {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select ListofTenant.*, ListofTenant.TenantBidID as id from listoftenant ListofTenant";
            
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
            $sql ="Insert into listoftenant(Association,BusinessName,CityID,CreatedBy,DateCreated,DateofBirth,Email,EstateAgentID,FirstName,GenderID,LgaID,MaritalStatusID,MiddleName,MobileNumber,NationalityID,PermanentAddress,PostalCode,RCNumber,ResidentailAddress,SurName,TenancyStatusID,TenancyTypeID,TenantTypeID,Tribe) Values(?,?,?,?,now(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Association,@$data->BusinessName,@$data->CityID,$UserID,@$data->DateofBirth,@$data->Email,@$data->EstateAgentID,@$data->FirstName,@$data->GenderID,@$data->LgaID,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileNumber,@$data->NationalityID,@$data->PermanentAddress,@$data->PostalCode,@$data->RCNumber,@$data->ResidentailAddress,@$data->SurName,@$data->TenancyStatusID,@$data->TenancyTypeID,@$data->TenantTypeID,@$data->Tribe]);
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
            $sql ="Update listoftenant Set Association=?,BusinessName=?,CityID=?,DateModified=now(),DateofBirth=?,Email=?,EstateAgentID=?,FirstName=?,GenderID=?,LgaID=?,MaritalStatusID=?,MiddleName=?,MobileNumber=?,ModifiedBy=?,NationalityID=?,PermanentAddress=?,PostalCode=?,RCNumber=?,ResidentailAddress=?,SurName=?,TenancyStatusID=?,TenancyTypeID=?,TenantTypeID=?,Tribe=? Where TenantBidID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Association,@$data->BusinessName,@$data->CityID,@$data->DateofBirth,@$data->Email,@$data->EstateAgentID,@$data->FirstName,@$data->GenderID,@$data->LgaID,@$data->MaritalStatusID,@$data->MiddleName,@$data->MobileNumber,$UserID,@$data->NationalityID,@$data->PermanentAddress,@$data->PostalCode,@$data->RCNumber,@$data->ResidentailAddress,@$data->SurName,@$data->TenancyStatusID,@$data->TenancyTypeID,@$data->TenantTypeID,@$data->Tribe,$data->TenantBidID]);
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
            $sql ="Select * from listoftenant where TenantBidID=?";
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
