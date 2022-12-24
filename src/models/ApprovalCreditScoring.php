<?php
Class ApprovalCreditScoring {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select ApprovalCreditScoring.*, ApprovalCreditScoring.ApprovalCreditScoringlD as id, ApprovalInstances.ApprovalStagesID,ApprovalProcessModule.ApprovalProcessModule from approvalcreditscoring ApprovalCreditScoring left join approvalinstances ApprovalInstances on ApprovalCreditScoring.ApprovalInstancesID = ApprovalInstances.ApprovalInstancesID  left join approvalprocessmodule ApprovalProcessModule on ApprovalCreditScoring.ApprovalProcessModuleID = ApprovalProcessModule.ApprovalProcessModuleID ";
            
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
            $sql ="Insert into approvalcreditscoring(ApprovalInstancesID,ApprovalProcessModuleID,ApprovedBy,Comment,NextApprovalID,RequestID) Values(?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ApprovalInstancesID,@$data->ApprovalProcessModuleID,@$data->ApprovedBy,@$data->Comment,@$data->NextApprovalID,@$data->RequestID]);
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
            $sql ="Update approvalcreditscoring Set ApprovalInstancesID=?,ApprovalProcessModuleID=?,ApprovedBy=?,Comment=?,NextApprovalID=?,RequestID=? Where ApprovalCreditScoringlD=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ApprovalInstancesID,@$data->ApprovalProcessModuleID,@$data->ApprovedBy,@$data->Comment,@$data->NextApprovalID,@$data->RequestID,$data->ApprovalCreditScoringlD]);
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
            $sql ="Select * from approvalcreditscoring where ApprovalCreditScoringlD=?";
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
