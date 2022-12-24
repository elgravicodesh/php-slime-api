<?php


Class PrivilegesHeader {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select *, PrivHeaderID as id from privilege_header";
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
            $data = $this->getList($data);
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
            $UserID = 1;
            // $UserID =$_SESSION["userId"];
            //Insert Query
            // var_dump($data); die;
            

	$sql ="Insert into privilege_header(PrivilegeID,PrivilegeClassID) 
            Values(?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->PrivilegesID,@$data->PrivilegesClassID]);
            //Get Updated Records
            $PrivilegesHeaderID = $db->lastInsertId();
            
            //Parameter Placeholder Assigment
            $sql ="Insert into privilege_details(EmployeeID,PrivHeaderID) Values(?,?)";
            $stmt = $db->prepare($sql);
            $data1 = $data->detail;
            //Parameter Placeholder Assigment
            foreach ($data1 as $key => $data) {
                $stmt->execute([@$data,$PrivilegesHeaderID]);
            }
		//$stmt->execute([@$data->EmployeeID,$PrivilegesHeaderID]);
	//var_dump($PrivilegesHeaderID);

            $sql ="call Activate_Privilege(?) ";
            $stmt = $db->prepare($sql);
            $stmt->execute([$PrivilegesHeaderID]);


        
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
	      $UserID = 1;
		//var_dump($data); die;
		
            //$UserID =$_SESSION["userId"];
            //Insert Query
            $sql ="Update privilege_header Set PrivilegeID=?,PrivilegeClassID=?, CreatedBy=?, DateCreated=?, ModifiedBy=?, Datemodified=? Where PrivHeaderID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->PrivilegeID,@$data->PrivilegeClassID,@$data->CreatedBy, @$data->DateCreated, @$data->ModifiedBy, @$data->Datemodified,$PrivilegesHeaderID]);
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
            $sql ="Select * from privilegesheader where PrivilegesHeaderID=?";
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

    public function staffAvailable($data=array())
    {
        // var_dump($data); die;
        //Return Variable Array
        $result =array();
        try{
            $sql = "SELECT EmployeeID, CONCAT(SurName,' ',FirstName,' ') AS staff_name FROM employee ";

            
            $PrivID = $data->PrivilegesID;
            $PrivClassID = $data->PrivilegesClassID;
            
            if ($PrivClassID  == 1){
                $sql .= " Where EmployeeID not in (select employee_id from vprivilegedetails where  PrivilegeClassID = 1 and statusID =1 and PrivilegeID = ?)";
            }
            elseif ($PrivClassID == 2) {
                $sql .= " Where  EmployeeID in (select employee_id from vprivilegedetails where PrivilegeClassID = 1 and statusID =1 and PrivilegeID = ?)";
            }
            $sql.=" order by SurName, FirstName";

            $db = $this->db;
            $stmt = $db->prepare($sql);
            $stmt->execute([$PrivID]);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
