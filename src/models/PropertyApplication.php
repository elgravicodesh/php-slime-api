<?php
Class PropertyApplication {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select PropertyApplication.*, PropertyApplication.PropertyApplicationID as id, concat(ApplicantSurname, ' ', ApplicantFirstName, ' ',ApplicantMiddleName) fullname,
            PaymentPlan.PaymentPlan,Property.PropertyName,PropertyApplicant.ApplicantSurname from propertyapplication PropertyApplication 
            left join paymentplan PaymentPlan on PropertyApplication.PaymentPlanID = PaymentPlan.PaymentPlanID  
            left join property Property on PropertyApplication.PropertyID = Property.PropertyID  
            left join propertyapplicant PropertyApplicant on PropertyApplication.PropertyApplicantID = PropertyApplicant.PropertyApplicantID ";
            
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
            $sql ="Insert into propertyapplication(CreatedBy,DateCreated,InitialDeposit,PaymentAmount,PaymentPlanID,PropertyApplicantID,PropertyID) Values(?,getdate(),?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([$UserID,@$data->InitialDeposit,@$data->PaymentAmount,@$data->PaymentPlanID,@$data->PropertyApplicantID,@$data->PropertyID]);
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
            $sql ="Update propertyapplication Set DateModified=getdate(),InitialDeposit=?,ModifiedBy=?,PaymentAmount=?,PaymentPlanID=?,PropertyApplicantID=?,PropertyID=? Where PropertyApplicationID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->InitialDeposit,$UserID,@$data->PaymentAmount,@$data->PaymentPlanID,@$data->PropertyApplicantID,@$data->PropertyID,$data->PropertyApplicationID]);
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
            $sql ="Select * from propertyapplication where PropertyApplicationID=?";
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
