<?php
Class Menu {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select Menu.*, Menu.MenuID as id from menu Menu";
            
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
            // $External = 0;
            //Insert Query
            // $sql ="Insert into Menu(ParentID, MenuTitle, MenuUrl, Icon, DashBoardUrl, External, OrderBy) Values(?,?,?,?,?, ?, ?)";
            $sql ="Insert into menu(ParentID, MenuTitle, MenuUrl, Icon, DashBoardUrl, OrderBy,StatusID) Values(?,?,?,?,?, ?, ?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->ParentID, @$data->MenuTitle, @$data->MenuUrl, @$data->Icon,@$data->DashBoardUrl,@$data->OrderBy, @$data->OrderBy]);
            //Get Updated Records
            // $data = $this->getList();
            $data = $db->lastInsertId();
            $result = array("status"=> 0, "message"=> "Record Successfully Created", "data"=>$data); 

            $db = null;
        }
        catch(PDOException $e) {
            // var_dump($e);
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
            $sql ="Update menu Set DashBoardUrl=?,Icon=?,MenuTitle=?,MenuUrl=?,OrderBy=?,StatusID=? Where MenuID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->DashBoardUrl,@$data->Icon,@$data->MenuTitle,@$data->MenuUrl,@$data->OrderBy,$data->MenuID,$data->StatusID]);
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
            $sql ="Select * from menu where MenuID=?";
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

    public function getMenuList2()
    {
        // try {
        //     $db = $this->db;
        //     $sql = "select MenuID id, ParentID parent, MenuTitle title, MenuUrl link, Icon, OrderBy from Menu where ActiveID = 1 order by OrderBy";

        //     $stmt = $db->prepare($sql);
        //     $stmt->execute();
        //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     $result = array("status"=> 0, "message"=> "Records Retrieved", "data"=>$data); 
        //     $db = null;
        // }catch(PDOException $e) {
        //     $result = array("status"=> 100, "message"=> $e->getMessage());
        // }
        // return $result;

        $staff_id = 1;
        try 
        {
            $db = $this->db;
            $sql="Select MenuID from menuauthorization MenuAuthorization where MenuID is not null order by 1";
            $stmt = $db->prepare($sql);
            $stmt->execute();
 
            if($stmt->rowCount() > 0)
            {
                // $sql = "select MenuID id, ParentID parent, MenuTitle title, MenuUrl link, Icon,OrderBy from Menu where  MenuID in (select MenuID from MenuAuthorization  where ".
                // "PrivilegesID in (select distinct PrivilegesID from vprivilegedetails where PrivilegesClassID = 1 and StatusID = 1 and EmployeeID=?) or PrivilegesID is null) ".
                // " and ActiveID = 1 order by OrderBy";
                $sql = "select MenuID id, ParentID parent, MenuTitle title, MenuUrl link, Icon,OrderBy,StatusID from menu Menu where MenuID in (select MenuID from menuauthorization MenuAuthorization  where PrivilegesID in (select distinct PrivilegesID from vprivilegedetails where PrivilegesClassID = 1 and StatusID = 1 and EmployeeID=1) or PrivilegesID is null) and ActiveID = 1 and ModuleId=1 order by OrderBy";

                echo'this is the first condition';
            }
            else
            {
                $sql = "select MenuID id, ParentID parent, MenuTitle title, MenuUrl link, Icon, OrderBy from Menu where  StatusID = 1  and ModuleId=1 order by OrderBy";

                echo'this is the first else condition';
            }

            $stmt2 = $db->prepare($sql);      
            $stmt2->execute(array($staff_id));
            $count  = $stmt2->rowCount();
            echo $count;      
            $returnArr = array();
            if($count >0)
            {
                $result = $stmt2->fetchAll(PDO::FETCH_OBJ);
                /*$items = array();
                $ref = array();
                
                // loop over the result
                foreach($result as $key => $data ) {
                    // Assign by reference 
                    $thisRef = &$ref[$data->id];
                    // add the menu parent
                    $thisRef['parent'] = $data->parent_menu_id;
                    $thisRef['title'] = $data->menu_title;
                    $thisRef['link'] = $data->menu_href;
                    $thisRef['icon'] = $data->menu_img;
                    
                    // if there is no parent push it into items array()
                    if($data->parent_menu_id == 0) {
                        $items[$data->id] = &$thisRef;
                    } else {
                        $ref[$data->parent_menu_id]['sublinks'][$data->id] = &$thisRef;
                    }
                }
                echo json_encode(self::array_values_recursive($items));*/
                
                $returnArr=  array("status"=> 0, "message"=> "Menu Generated", "data"=> $result);
                    //var_dump($returnArr);   
            }
            else
            {
                $returnArr = array("status"=> 0, "message"=> "No Menu Found Ojo", "data"=> array());   
                //var_dump($returnArr);
            }
            $db = null;
        } 
        catch(PDOException $e) {
            $returnArr = array("status"=> 100, "message"=> $e->getMessage());   
        }
        return $returnArr;
    }

    public function getMenuList()
    {
         $staff_id = $_SESSION["userId"];
        //  var_dump($staff_id);
        try 
        {
            $db = $this->db;
            $sql="Select MenuID from menuauthorization MenuAuthorization where MenuID is not null order by 1";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
 
            // if($stmt->rowCount() > 0)
            if(count($result) > 0 )
            {
                // var_dump($result);
                $sql = "select MenuID id, ParentID parent, MenuTitle title, MenuUrl link, Icon,OrderBy, ModuleId FROM menu WHERE  MenuID IN (SELECT MenuID FROM menuauthorization  WHERE PrivilegesID IN (SELECT DISTINCT PrivilegeID 
                FROM vprivilegedetails WHERE PrivilegeClassID = 1 AND StatusID = 1 AND employee_id=?) OR PrivilegesID IS NULL) 
                ORDER BY MenuTitle ASC";
            }
            else
            {
                $sql = "select MenuID id, ParentID parent, MenuTitle title, MenuUrl link, Icon, OrderBy, ModuleId
                from menu Menu where  StatusID = 1  order by OrderBy";
            }
            ////echo $sql;
            //echo $staff_id;

            $stmt2 = $db->prepare($sql);      
            $stmt2->execute(array($staff_id));
            $count  = $stmt2->rowCount();
            //var_dump($count);
            //echo $count;      
            $returnArr = array();
            $result = $stmt2->fetchAll(PDO::FETCH_OBJ);
            if(count($result)>0)
            {
                
                $returnArr=  array("status"=> 0, "message"=> "Menu Generated", "data"=> $result);
            }
            else
            {
                $returnArr = array("status"=> 0, "message"=> "No Menu Found Ayay", "data"=> array());   
            }
            $db = null;
        } 
        catch(PDOException $e) {
            $returnArr = array("status"=> 100, "message"=> $e->getMessage());   
        }
        return $returnArr;
    }
}


