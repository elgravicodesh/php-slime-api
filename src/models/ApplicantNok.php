<?php
Class ApplicantNok {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select ApplicantNok.*, ApplicantNok.ApplicantNokID as id, PropertyApplicant.ApplicantSurname from applicantnok ApplicantNok left join propertyapplicant PropertyApplicant on ApplicantNok.PropertyApplicantID = PropertyApplicant.PropertyApplicantID ";
            
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
            $sql ="Insert into applicantnok(Address,CreatedBy,DateCreated,Email,FirstName,MiddleName,PhoneNum,PropertyApplicantID,RelationshipID,Surname) Values(?,?,now(),?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Address,$UserID,@$data->Email,@$data->FirstName,@$data->MiddleName,@$data->PhoneNum,@$data->PropertyApplicantID,@$data->RelationshipID,@$data->Surname]);
            //Get Updated Records
            // $data = $this->getList();
            $applicant_nok_id = $db->lastInsertId();
            $result = array("status"=> 0, "message"=> "Record Successfully Created", "id"=>$applicant_nok_id); 

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
            $sql ="Update applicantnok Set Address=?,DateModified=now(),Email=?,FirstName=?,MiddleName=?,ModifiedBy=?,PhoneNum=?,PropertyApplicantID=?,RelationshipID=?,Surname=? Where ApplicantNokID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Address,@$data->Email,@$data->FirstName,@$data->MiddleName,$UserID,@$data->PhoneNum,@$data->PropertyApplicantID,@$data->RelationshipID,@$data->Surname,$data->ApplicantNokID]);
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
            $sql ="Select * from applicantnok where ApplicantNokID=?";
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
