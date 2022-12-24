<?php
Class Payment {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select Payment.*, Payment.PaymentID as id, Company.Company,PaymentMethod.PaymentMethod,PaymentType.PaymentType,VAT.VAT,WHT.WHT from payment Payment 
            left join company Company on Payment.CompanyID = Company.CompanyID  
            left join paymentmethod PaymentMethod on Payment.PaymentMethodID = PaymentMethod.PaymentMethodID  
            left join paymenttype PaymentType on Payment.PaymentTypeID = PaymentType.PaymentTypeID  
            left join vat VAT on Payment.VATID = VAT.VATID  
            left join wht WHT on Payment.WHTID = WHT.WHTID ";
            
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
            $sql ="Insert into payment(ChequeNo,CompanyID,CreatedBy,DateCreated,PayeeID,PayingAccountID,PaymentDate,PaymentMethodID,PaymentTypeID,PVNumber,VATID,WHTID) Values(?,?,?,now(),?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ChequeNo,@$data->CompanyID,$UserID,@$data->PayeeID,@$data->PayingAccountID,@$data->PaymentDate,@$data->PaymentMethodID,@$data->PaymentTypeID,@$data->PVNumber,@$data->VATID,@$data->WHTID]);
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
            $sql ="Update payment Set ChequeNo=?,CompanyID=?,DateModified=now(),ModifiedBy=?,PayeeID=?,PayingAccountID=?,PaymentDate=?,PaymentMethodID=?,PaymentTypeID=?,PVNumber=?,VATID=?,WHTID=? Where PaymentID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ChequeNo,@$data->CompanyID,$UserID,@$data->PayeeID,@$data->PayingAccountID,@$data->PaymentDate,@$data->PaymentMethodID,@$data->PaymentTypeID,@$data->PVNumber,@$data->VATID,@$data->WHTID,$data->PaymentID]);
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
            $sql ="Select * from payment where PaymentID=?";
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
