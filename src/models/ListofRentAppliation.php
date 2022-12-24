<?php
Class ListofRentAppliation {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select ListofRentAppliation.*, ListofRentAppliation.RentActivationID as id from listofrentappliation ListofRentAppliation";
            
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
            $sql ="Insert into listofrentappliation(AccountantID,AmountPaid,ApprovalStage,Balance,BusinessName,CreatedBy,DateCreated,Discount,DurationID,EsateManagerID,EstateAgentID,EstateManager,LegalOfficerID,PurposeofAccommodation,RefundableCautionFee,RentAmount,RentCommencementDate,RentDescription,RentTypeID,Shops,SuitID,TenancyStatusID,Tenant,TenantBidID,VATID,WHTID) Values(?,?,?,?,?,?,now(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->AccountantID,@$data->AmountPaid,@$data->ApprovalStage,@$data->Balance,@$data->BusinessName,$UserID,@$data->Discount,@$data->DurationID,@$data->EsateManagerID,@$data->EstateAgentID,@$data->EstateManager,@$data->LegalOfficerID,@$data->PurposeofAccommodation,@$data->RefundableCautionFee,@$data->RentAmount,@$data->RentCommencementDate,@$data->RentDescription,@$data->RentTypeID,@$data->Shops,@$data->SuitID,@$data->TenancyStatusID,@$data->Tenant,@$data->TenantBidID,@$data->VATID,@$data->WHTID]);
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
            $sql ="Update listofrentappliation Set AccountantID=?,AmountPaid=?,ApprovalStage=?,Balance=?,BusinessName=?,DateModified=now(),Discount=?,DurationID=?,EsateManagerID=?,EstateAgentID=?,EstateManager=?,LegalOfficerID=?,ModifiedBy=?,PurposeofAccommodation=?,RefundableCautionFee=?,RentAmount=?,RentCommencementDate=?,RentDescription=?,RentTypeID=?,Shops=?,SuitID=?,TenancyStatusID=?,Tenant=?,TenantBidID=?,VATID=?,WHTID=? Where RentActivationID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->AccountantID,@$data->AmountPaid,@$data->ApprovalStage,@$data->Balance,@$data->BusinessName,@$data->Discount,@$data->DurationID,@$data->EsateManagerID,@$data->EstateAgentID,@$data->EstateManager,@$data->LegalOfficerID,$UserID,@$data->PurposeofAccommodation,@$data->RefundableCautionFee,@$data->RentAmount,@$data->RentCommencementDate,@$data->RentDescription,@$data->RentTypeID,@$data->Shops,@$data->SuitID,@$data->TenancyStatusID,@$data->Tenant,@$data->TenantBidID,@$data->VATID,@$data->WHTID,$data->RentActivationID]);
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
            $sql ="Select * from listofrentappliation where RentActivationID=?";
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
