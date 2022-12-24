<?php
Class ListofCourtCases {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select ListofCourtCases.*, ListofCourtCases.CourtCaseID as id from listofcourtcases ListofCourtCases";
            
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
            $sql ="Insert into listofcourtcases(CaseDescription,CompanyID,CourtID,CreatedBy,DateCreated,ExternalSolicitorID,LastSittingDate,LegalRemarks,LegalStatusID,LegalVerdict,NewRemarks,NewSittingDate,NextSittingDate,TenantID) Values(?,?,?,?,now(),?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->CaseDescription,@$data->CompanyID,@$data->CourtID,$UserID,@$data->ExternalSolicitorID,@$data->LastSittingDate,@$data->LegalRemarks,@$data->LegalStatusID,@$data->LegalVerdict,@$data->NewRemarks,@$data->NewSittingDate,@$data->NextSittingDate,@$data->TenantID]);
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
            $sql ="Update listofcourtcases Set CaseDescription=?,CompanyID=?,CourtID=?,DateModified=now(),ExternalSolicitorID=?,LastSittingDate=?,LegalRemarks=?,LegalStatusID=?,LegalVerdict=?,ModifiedBy=?,NewRemarks=?,NewSittingDate=?,NextSittingDate=?,TenantID=? Where CourtCaseID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->CaseDescription,@$data->CompanyID,@$data->CourtID,@$data->ExternalSolicitorID,@$data->LastSittingDate,@$data->LegalRemarks,@$data->LegalStatusID,@$data->LegalVerdict,$UserID,@$data->NewRemarks,@$data->NewSittingDate,@$data->NextSittingDate,@$data->TenantID,$data->CourtCaseID]);
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
            $sql ="Select * from listofcourtcases where CourtCaseID=?";
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
