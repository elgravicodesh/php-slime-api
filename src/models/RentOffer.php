<?php
Class RentOffer {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select RentOffer.*, RentOffer.RentOfferID as id, Duration.Duration,EstateAgent.SurName,VAT.VAT,WHT.WHT from rentoffer RentOffer 
            left join duration Duration on RentOffer.DurationID = Duration.DurationID  
            left join estateagent EstateAgent on RentOffer.EstateAgentID = EstateAgent.EstateAgentID  
            left join vat VAT on RentOffer.VATID = VAT.VATID  
            left join wht WHT on RentOffer.WHTID = WHT.WHTID ";
            
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
            $sql ="Insert into rentoffer(AccountantID,Address,CreatedBy,DateCreated,DescriptionofAccommodation,Discount,DurationID,Email,EstateAgentID,EstateManagerID,LegalOfficerID,ProspectivePhoneNum,ProspectiveTenantName,PurposeofAccommodation,RefundableCautionFee,RentOfferDate,VATID,WHTID) Values(?,?,?,getdate(),?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->AccountantID,@$data->Address,$UserID,@$data->DescriptionofAccommodation,@$data->Discount,@$data->DurationID,@$data->Email,@$data->EstateAgentID,@$data->EstateManagerID,@$data->LegalOfficerID,@$data->ProspectivePhoneNum,@$data->ProspectiveTenantName,@$data->PurposeofAccommodation,@$data->RefundableCautionFee,@$data->RentOfferDate,@$data->VATID,@$data->WHTID]);
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
            $sql ="Update rentoffer Set AccountantID=?,Address=?,DateModified=getdate(),DescriptionofAccommodation=?,Discount=?,DurationID=?,Email=?,EstateAgentID=?,EstateManagerID=?,LegalOfficerID=?,ModifiedBy=?,ProspectivePhoneNum=?,ProspectiveTenantName=?,PurposeofAccommodation=?,RefundableCautionFee=?,RentOfferDate=?,VATID=?,WHTID=? Where RentOfferID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->AccountantID,@$data->Address,@$data->DescriptionofAccommodation,@$data->Discount,@$data->DurationID,@$data->Email,@$data->EstateAgentID,@$data->EstateManagerID,@$data->LegalOfficerID,$UserID,@$data->ProspectivePhoneNum,@$data->ProspectiveTenantName,@$data->PurposeofAccommodation,@$data->RefundableCautionFee,@$data->RentOfferDate,@$data->VATID,@$data->WHTID,$data->RentOfferID]);
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
            $sql ="Select * from rentoffer where RentOfferID=?";
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
