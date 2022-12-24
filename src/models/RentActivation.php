<?php
Class RentActivation {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select RentActivation.*, RentActivation.RentActivationID as id, Duration.Duration,EstateAgent.SurName,PurposeofAccommodation.PurposeofAccommodation,Suite.SuiteNumber,TenancyStatus.CreatedBy,TenantBid.TenantTypeID,VAT.VAT,WHT.WHT from rentactivation RentActivation 
            left join duration Duration on RentActivation.DurationID = Duration.DurationID  
            left join estateagent EstateAgent on RentActivation.EstateAgentID = EstateAgent.EstateAgentID  
            left join purposeofaccommodation PurposeofAccommodation on RentActivation.PurposeofAccommodationID = PurposeofAccommodation.PurposeofAccommodationID 
            left join suite Suite on RentActivation.SuiteID = Suite.SuiteID  
            left join tenancystatus TenancyStatus on RentActivation.TenancyStatusID = TenancyStatus.TenancyStatusID  
            left join tenantbid TenantBid on RentActivation.TenantBidID = TenantBid.TenantBidID  
            left join vat VAT on RentActivation.VATID = VAT.VATID  
            left join wht WHT on RentActivation.WHTID = WHT.WHTID ";
            
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
            $sql ="Insert into rentactivation(AccountantID,AmountPaid,Balance,CreatedBy,DateCreated,Discount,DurationID,EsateManagerID,EstateAgentID,LegalOfficerID,PurposeofAccommodationID,RefundableCautionFee,RentAmount,RentCommencementDate,RentDescription,RentTypeID,SuiteID,SuitID,TenancyStatusID,TenantBidID,VATID,WHTID) Values(?,?,?,?,getdate(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->AccountantID,@$data->AmountPaid,@$data->Balance,$UserID,@$data->Discount,@$data->DurationID,@$data->EsateManagerID,@$data->EstateAgentID,@$data->LegalOfficerID,@$data->PurposeofAccommodationID,@$data->RefundableCautionFee,@$data->RentAmount,@$data->RentCommencementDate,@$data->RentDescription,@$data->RentTypeID,@$data->SuiteID,@$data->SuitID,@$data->TenancyStatusID,@$data->TenantBidID,@$data->VATID,@$data->WHTID]);
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
            $sql ="Update rentactivation Set AccountantID=?,AmountPaid=?,Balance=?,DateModified=getdate(),Discount=?,DurationID=?,EsateManagerID=?,EstateAgentID=?,LegalOfficerID=?,ModifiedBy=?,PurposeofAccommodationID=?,RefundableCautionFee=?,RentAmount=?,RentCommencementDate=?,RentDescription=?,RentTypeID=?,SuiteID=?,SuitID=?,TenancyStatusID=?,TenantBidID=?,VATID=?,WHTID=? Where RentActivationID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->AccountantID,@$data->AmountPaid,@$data->Balance,@$data->Discount,@$data->DurationID,@$data->EsateManagerID,@$data->EstateAgentID,@$data->LegalOfficerID,$UserID,@$data->PurposeofAccommodationID,@$data->RefundableCautionFee,@$data->RentAmount,@$data->RentCommencementDate,@$data->RentDescription,@$data->RentTypeID,@$data->SuiteID,@$data->SuitID,@$data->TenancyStatusID,@$data->TenantBidID,@$data->VATID,@$data->WHTID,$data->RentActivationID]);
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
            $sql ="Select * from rentactivation where RentActivationID=?";
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
