<?php

use Slim\Http\Request;
use Slim\Http\Response;
use \Firebase\JWT\JWT;

// Routes
//include 'models/Users.php';
function getStatus($idx)
{
    $status = array(0=> 200, 100 =>500, 1 =>500, 101 => 500 );
    return $status[$idx];
}
//$_SESSION["userId"]="0";

$app->post("/login", function(Request $request, Response $response, array $args){

	  //var_dump($data);
	  $data = json_decode($request->getBody());
  	$user = new Users($this->db);
  	$val = $user->validateUser($data);

  	$status = getStatus($val["status"]);
  	if($val["status"]>0)
  	{
  	   $this->logger->addInfo("Something interesting happened ". $val["message"] );
  	}elseif ($val["status"]==0)
  	{
		// Create token
  		$token = array(
	    "iss" => "http://femi.com",
	    "aud" => "http://thirdparty.com",
	    "iat" => 1356999524,
	    "data" => array("id" => $val["data"]->id,
	    				"user_id" => $val["data"]->staff_id
	    				//"role_id" => $val["json"]->role_id
	    			)
		);
		$jwt = JWT::encode($token, $this->jwt["key"]);
		$val["token"] = $jwt ;
  	}
  	$response = $response->withJson($val, $status);
    return $response;
});

$app->post('/menu', function (Request $request, Response $response) {
	//$jwt = $request->getAttribute("jwt");
	$assessment = new Menu($this->db);
	$subjects = $assessment->getMenuList();
	// $response = $response->withJson($subjects, getStatus($subjects["status"]));
	$response = $response->withJson($subjects);
  return $response;
})->add($auth);

include 'routes/allroutes.php';
