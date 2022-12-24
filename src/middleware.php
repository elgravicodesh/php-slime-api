<?php
use \Firebase\JWT\JWT;
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
			->withHeader('Access-Control-Allow-Origin', '*')
			// ->withHeader('Access-Control-Allow-Origin', 'https://domainname.com') 
			// ->withHeader('Access-Control-Allow-Origin', 'http://localhost:4201')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, token')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});

$auth = function ($request, $response, $next) {
	if ($request->hasHeader('token')) 
	{
    	try
    	{
            $jwt = $request->getHeader('token');
			$decoded = JWT::decode($jwt[0], $this->jwt["key"], $this->jwt["alg"]);
			// var_dump($decoded);
			$_SESSION["userId"]=$decoded->data->id;
    		$response = $next($request, $response);
    	}
    	catch(Exception $ex)
    	{
         $val = array('status' => 1,'message' =>"Autentication is Invalid.". $ex->GetMessage());
         //$logger->
        $response = $response->withJson($val, 500);
    	}
	}
	else
	{
		$val = array('status' => 1, "message"=>"Autentication Missing");
		$response = $response->withJson($val, 500);
	}
  return $response;
};
