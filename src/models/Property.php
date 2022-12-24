<?php
Class Property {
	private $db;

	public function __construct($connection)
	{
		$this->db= $connection;
	}

    public function getList($data=array())
    {
        $result =array();
        try{
            $sql ="Select Property.*, Property.PropertyID as id, City.CityCode,Lga.StateID,PropertyOwner.PropertyOwner,PropertySubType.PropertySubType,PropertyType.PropertyType,State.State from property Property 
            left join city City on Property.CityID = City.CityID  
            left join lga Lga on Property.LgaID = Lga.LgaID  
            left join propertyowner PropertyOwner on Property.PropertyOwnerID = PropertyOwner.PropertyOwnerID  
            left join propertysubtype PropertySubType on Property.PropertySubTypeID = PropertySubType.PropertySubTypeID  
            left join propertytype PropertyType on Property.PropertyTypeID = PropertyType.PropertyTypeID  
            left join state State on Property.StateID = State.StateID ";
            
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
            $sql ="Insert into property(CityID,CreatedBy,DateCreated,LgaID,PhysicalAddress,Plot,PropertyDescription,PropertyName,PropertyOwnerID,PropertySubTypeID,PropertyTypeID,StateID) Values(?,?,getdate(),?,?,?,?,?,?,?,?,?)";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->CityID,$UserID,@$data->LgaID,@$data->PhysicalAddress,@$data->Plot,@$data->PropertyDescription,@$data->PropertyName,@$data->PropertyOwnerID,@$data->PropertySubTypeID,@$data->PropertyTypeID,@$data->StateID]);
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
            $sql ="Update property Set CityID=?,DateModified=getdate(),LgaID=?,ModifiedBy=?,PhysicalAddress=?,Plot=?,PropertyDescription=?,PropertyName=?,PropertyOwnerID=?,PropertySubTypeID=?,PropertyTypeID=?,StateID=? Where PropertyID=?";
            $db = $this->db;
            $stmt = $db->prepare($sql);
            //Parameter Placeholder Assigment
            $stmt->execute([@$data->CityID,@$data->LgaID,$UserID,@$data->PhysicalAddress,@$data->Plot,@$data->PropertyDescription,@$data->PropertyName,@$data->PropertyOwnerID,@$data->PropertySubTypeID,@$data->PropertyTypeID,@$data->StateID,$data->PropertyID]);
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
            $sql ="Select * from property where PropertyID=?";
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
