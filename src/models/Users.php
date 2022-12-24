<?php
Class Users {
    private $db;

    public function __construct($connection)
    {
        $this->db= $connection;
    }

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select Users.*, Users.UsersID as id,Employee.FirstName,Statuses.StatusName from users Users left join employee Employee on Users.EmployeeID = Employee.EmployeeID  left join statuses Statuses on Users.StatusID = Statuses.StatusID ";
            
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
            $sql ="Insert into users(EmployeeID,Password,StatusID,UsersName) Values(?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->EmployeeID,md5(@$data->Password),@$data->StatusID,@$data->UsersName]);

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
            $sql ="Update users Set EmployeeID=?,Password=?,StatusID=?,UsersName=? Where UsersID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->EmployeeID,md5(@$data->Password),@$data->StatusID,@$data->UsersName,$data->UsersID]);
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
            $sql ="Select * from users where UsersID=?";
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

    public function validateUser($data)
    {
        //return 'y';
        $username = $data->username;
        $password = md5($data->password);
        
        $result =array();
        $returnArr = array();
        try{
            $sql ="Select IFNULL(staff.username , user.username) username, firstname, surname, IFNULL(othername,'') middlename, email, user_id as id, user.staff_id, user.Status  
                from user inner join staff on user.staff_id= staff.staff_id 
                where IFNULL(staff.username , user.username) = ? and IFNULL(staff.password, user.password) = ?";
            $sql =" Select UsersName username, firstname, surname lastname, IFNULL(MiddleName,'') middlename, email,
            users.UsersID as id, users.EmployeeID staff_id, users.statusId status  
                         from users inner join employee staff on users.EmployeeID= staff.EmployeeID 
                         where users.UsersName = ? and password = ? and users.statusId=1";
            $db = $this->db;
            $stmt = $db->prepare($sql);        
            $stmt->execute([$username,$password]);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
       // var_dump($result);
            if(count($result)>0)
            {
                $result=$result[0];
                if ($result->status == 'Inactive')
                {
                    $returnArr = array("status"=> 100, "message"=> "User has been disabled");   
                    //var_dump($returnArr);
                }
                // elseif($result->ResetStatusID == 1)
                // {
                //     $returnArr=  array("status"=> 100, "message"=> "You password has expired", "data"=> $result);
                // }
                else{        
                    $returnArr = array("status"=> 0, "message"=> "Login Successful", "data"=> $result);
                }
            }
            else
            {
                $returnArr = array("status"=> 100, "message"=> "Invalid Username or Password");   
            }
        }
        catch(PDOException $e) {
            //Return Variable Assignment (Error)
            $returnArr = array("status"=> 100, "message"=> $e->getMessage());
            //Logger    
        }
        return $returnArr;
    }

    public function resetpassword($data)
    {
	//$staff_id = $_SESSION["UserID"];
	//var_dump($staff_id);
	//var_dump($data);
        $result =array();
        try{
            $UserID =0;
            //Insert Query
            //$sql ="Update users Set Password=? Where UsersID=? AND Password=?";
            $sql ="Update users Set Password=? Where UsersID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
	    //$stmt->execute([md5(@$data->newPassword),@$data->UsersID,md5(@$data->oldPassword)]);	
            $stmt->execute([md5(@$data->newPassword),@$data->UsersID]);
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
}
