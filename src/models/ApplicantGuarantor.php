<?php
Class ApplicantGuarantor {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select ApplicantGuarantor.*, ApplicantGuarantor.ApplicantGuarantorID as id, PropertyApplicant.ApplicantSurname from applicantguarantor ApplicantGuarantor left join propertyapplicant PropertyApplicant on ApplicantGuarantor.PropertyApplicantID = PropertyApplicant.PropertyApplicantID ";
            
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
            $sql ="Insert into applicantguarantor(Address,CreatedBy,DateCreated,Email,EmployeeAddress,EmployerName,GuiarantorFirstName,GuiarantorMiddleName,GuiarantorSurname,PhoneNum,PropertyApplicantID) Values(?,?,now(),?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Address,$UserID,@$data->Email,@$data->EmployeeAddress,@$data->EmployerName,@$data->GuiarantorFirstName,@$data->GuiarantorMiddleName,@$data->GuiarantorSurname,@$data->PhoneNum,@$data->PropertyApplicantID]);
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
            $sql ="Update applicantguarantor Set Address=?,DateModified=now(),Email=?,EmployeeAddress=?,EmployerName=?,GuiarantorFirstName=?,GuiarantorMiddleName=?,GuiarantorSurname=?,ModifiedBy=?,PhoneNum=?,PropertyApplicantID=? Where ApplicantGuarantorID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->Address,@$data->Email,@$data->EmployeeAddress,@$data->EmployerName,@$data->GuiarantorFirstName,@$data->GuiarantorMiddleName,@$data->GuiarantorSurname,$UserID,@$data->PhoneNum,@$data->PropertyApplicantID,$data->ApplicantGuarantorID]);
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
            $sql ="Select * from applicantguarantor where ApplicantGuarantorID=?";
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
