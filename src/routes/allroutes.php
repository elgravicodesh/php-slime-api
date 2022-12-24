<?php
use Slim\Http\Request;
use Slim\Http\Response;

$app->group("/angularsettings", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new angularsettings($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new angularsettings($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new angularsettings($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new angularsettings($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/approval", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Approval($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Approval($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Approval($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Approval($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/approvalinstances", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalInstances($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalInstances($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApprovalInstances($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApprovalInstances($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/approvalprocessflow", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalProcessFlow($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalProcessFlow($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApprovalProcessFlow($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApprovalProcessFlow($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/approvalprocessmodule", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalProcessModule($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalProcessModule($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApprovalProcessModule($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApprovalProcessModule($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/approvalprocesstype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalProcessType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalProcessType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApprovalProcessType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApprovalProcessType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/approvalstages", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalStages($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalStages($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApprovalStages($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApprovalStages($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/approvaltype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApprovalType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApprovalType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApprovalType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/itemcategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ItemCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ItemCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ItemCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ItemCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/items", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Items($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Items($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Items($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Items($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/itemstatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ItemStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ItemStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ItemStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ItemStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/itemtype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ItemType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ItemType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ItemType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ItemType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/measureunit", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MeasureUnit($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MeasureUnit($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new MeasureUnit($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new MeasureUnit($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});


$app->group("/menutype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MenuType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MenuType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new MenuType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new MenuType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/procurement", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Procurement($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Procurement($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Procurement($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Procurement($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/procurementdetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcurementDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcurementDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProcurementDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProcurementDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/procurementvendor", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcurementVendor($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcurementVendor($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProcurementVendor($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProcurementVendor($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/purchase", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Purchase($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Purchase($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Purchase($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Purchase($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/purchasedetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PurchaseDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PurchaseDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PurchaseDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PurchaseDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/purchasetype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PurchaseType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PurchaseType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PurchaseType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PurchaseType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/receivedetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReceiveDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReceiveDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ReceiveDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ReceiveDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/receiveorders", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReceiveOrders($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReceiveOrders($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ReceiveOrders($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ReceiveOrders($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/releasedetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReleaseDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReleaseDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ReleaseDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ReleaseDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/releases", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Releases($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Releases($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Releases($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Releases($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/requisition", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Requisition($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Requisition($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Requisition($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Requisition($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/requisitiondetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new RequisitionDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new RequisitionDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new RequisitionDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new RequisitionDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/returndetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReturnDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ReturnDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ReturnDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ReturnDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/returns", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Returns($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Returns($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Returns($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Returns($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/status", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Status($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Status($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Status($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Status($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/stocktransfer", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StockTransfer($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StockTransfer($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new StockTransfer($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new StockTransfer($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/stocktransferdetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StockTransferDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StockTransferDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new StockTransferDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new StockTransferDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/storeitems", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StoreItems($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StoreItems($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new StoreItems($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new StoreItems($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/stores", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Stores($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Stores($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Stores($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Stores($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/vendorcategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new VendorCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new VendorCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new VendorCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new VendorCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/vendors", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Vendors($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Vendors($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Vendors($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Vendors($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});


$app->group("/account", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Account($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Account($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Account($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Account($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/accountgroup", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AccountGroup($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AccountGroup($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new AccountGroup($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new AccountGroup($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/accountssubtype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AccountsSubType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AccountsSubType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new AccountsSubType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new AccountsSubType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/accounttype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AccountType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AccountType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new AccountType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new AccountType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/aplicantnok", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AplicantNOK($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new AplicantNOK($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new AplicantNOK($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new AplicantNOK($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/applicantguarantor", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApplicantGuarantor($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApplicantGuarantor($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApplicantGuarantor($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApplicantGuarantor($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/applicantnok", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApplicantNok($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ApplicantNok($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ApplicantNok($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ApplicantNok($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/block", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Block($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Block($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Block($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Block($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/branch", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Branch($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Branch($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Branch($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Branch($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/casestatustype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CaseStatusType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CaseStatusType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new CaseStatusType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new CaseStatusType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/chartofaccount", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ChartofAccount($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ChartofAccount($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ChartofAccount($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ChartofAccount($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/city", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new City($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new City($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new City($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new City($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/company", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Company($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Company($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Company($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Company($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/correspondence", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Correspondence($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Correspondence($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Correspondence($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Correspondence($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/correspondencecategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CorrespondenceCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CorrespondenceCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new CorrespondenceCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new CorrespondenceCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/correspondencetype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CorrespondenceType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CorrespondenceType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new CorrespondenceType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new CorrespondenceType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/country", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Country($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Country($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Country($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Country($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/court", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Court($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Court($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Court($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Court($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/courtcase", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CourtCase($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CourtCase($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new CourtCase($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new CourtCase($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/deactivateemployee", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DeactivateEmployee($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DeactivateEmployee($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new DeactivateEmployee($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new DeactivateEmployee($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/department", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Department($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Department($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Department($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Department($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/designationcategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DesignationCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DesignationCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new DesignationCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new DesignationCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/duration", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Duration($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Duration($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Duration($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Duration($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employee", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Employee($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Employee($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Employee($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Employee($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeedeployment", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeDeployment($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeDeployment($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeDeployment($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeDeployment($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeedesignation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeDesignation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeDesignation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeDesignation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeDesignation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeereward", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeReward($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeReward($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeReward($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeReward($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeesanction", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeSanction($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeSanction($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeSanction($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeSanction($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeetitle", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeTitle($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeTitle($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeTitle($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeTitle($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeetype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/estateagent", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EstateAgent($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EstateAgent($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EstateAgent($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EstateAgent($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/externalsolicitor", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExternalSolicitor($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExternalSolicitor($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ExternalSolicitor($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ExternalSolicitor($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/externalsolicitortype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExternalSolicitorType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExternalSolicitorType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ExternalSolicitorType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ExternalSolicitorType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/gender", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Gender($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Gender($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Gender($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Gender($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/grade", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Grade($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Grade($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Grade($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Grade($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/gradelevel", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new GradeLevel($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new GradeLevel($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new GradeLevel($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new GradeLevel($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/journal", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Journal($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Journal($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Journal($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Journal($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/leaveapplication", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveApplication($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveApplication($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LeaveApplication($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LeaveApplication($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/leavetype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LeaveType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LeaveType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/legalstatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LegalStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LegalStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LegalStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LegalStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/legalverdict", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LegalVerdict($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LegalVerdict($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LegalVerdict($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LegalVerdict($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/lga", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Lga($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Lga($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Lga($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Lga($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/listofcourtcases", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofCourtCases($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofCourtCases($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ListofCourtCases($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ListofCourtCases($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/listofrentappliation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofRentAppliation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofRentAppliation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ListofRentAppliation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ListofRentAppliation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/listofrentoffer", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofRentOffer($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofRentOffer($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ListofRentOffer($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ListofRentOffer($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/listoftenant", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofTenant($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ListofTenant($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ListofTenant($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ListofTenant($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/maritalstatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MaritalStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MaritalStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new MaritalStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new MaritalStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/menu", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Menu($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Menu($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Menu($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Menu($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/menuauthorization", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MenuAuthorization($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MenuAuthorization($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new MenuAuthorization($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new MenuAuthorization($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});//->add($auth);

$app->group("/notice", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Notice($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Notice($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Notice($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Notice($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/offence", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Offence($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Offence($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Offence($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Offence($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/ownershiptype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new OwnershipType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new OwnershipType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new OwnershipType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new OwnershipType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payment", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Payment($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Payment($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Payment($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Payment($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/paymentmethod", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentMethod($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentMethod($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PaymentMethod($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PaymentMethod($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/paymenttype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PaymentType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PaymentType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollcategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollgenerated", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollGenerated($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollGenerated($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollGenerated($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollGenerated($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollgenerateddetail", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollGeneratedDetail($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollGeneratedDetail($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollGeneratedDetail($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollGeneratedDetail($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollinstance", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstances($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstances($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollInstances($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollInstances($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollinstancetype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollledger", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollLedger($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollLedger($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollLedger($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollLedger($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollperiod", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollPeriod($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollPeriod($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollPeriod($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollPeriod($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollreport", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollReport($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollReport($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollReport($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollReport($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollyear", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollYear($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollYear($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollYear($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollYear($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/processpayroll", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcessPayroll($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcessPayroll($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProcessPayroll($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProcessPayroll($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/processtype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcessType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProcessType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProcessType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProcessType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/product", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Product($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Product($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Product($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Product($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/productcategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProductCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProductCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProductCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProductCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/producttype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProductType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProductType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProductType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProductType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/property", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Property($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Property($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Property($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Property($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertyallocation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyAllocation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyAllocation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyAllocation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyAllocation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertyapplicant", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyApplicant($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyApplicant($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyApplicant($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyApplicant($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertyapplication", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyApplication($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyApplication($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyApplication($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyApplication($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertyfloor", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyFloor($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyFloor($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyFloor($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyFloor($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertygroup", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyGroup($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyGroup($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyGroup($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyGroup($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertyinspection", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyInspection($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyInspection($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyInspection($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyInspection($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertyowner", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyOwner($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyOwner($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyOwner($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyOwner($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertysubtype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertySubType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertySubType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertySubType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertySubType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/propertytype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PropertyType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PropertyType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PropertyType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/purposeofaccommodation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PurposeofAccommodation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PurposeofAccommodation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PurposeofAccommodation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PurposeofAccommodation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/receipt", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Receipt($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Receipt($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Receipt($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Receipt($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/relationship", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Relationship($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Relationship($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Relationship($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Relationship($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/religion", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Religion($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Religion($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Religion($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Religion($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/rentactivation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new RentActivation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new RentActivation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new RentActivation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new RentActivation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/rentoffer", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new RentOffer($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new RentOffer($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new RentOffer($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new RentOffer($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/report", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Report($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Report($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Report($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Report($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/reward", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Reward($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Reward($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Reward($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Reward($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salarycomponent", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryComponent($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryComponent($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryComponent($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryComponent($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salaryformulae", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryFormulae($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryFormulae($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryFormulae($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryFormulae($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salarytaxstatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryTaxStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryTaxStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryTaxStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryTaxStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salarytype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salaryvariable", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariable($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariable($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryVariable($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryVariable($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salaryvariablecategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariableCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariableCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryVariableCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryVariableCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salaryvariabletype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariableType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariableType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryVariableType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryVariableType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/sanction", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Sanction($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Sanction($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Sanction($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Sanction($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/stafftask", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StaffTask($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new StaffTask($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new StaffTask($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new StaffTask($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/states", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new States($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new States($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new States($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new States($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/suite", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Suite($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Suite($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Suite($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Suite($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/suitecategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SuiteCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SuiteCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SuiteCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SuiteCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/suitesize", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SuiteSize($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SuiteSize($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SuiteSize($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SuiteSize($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/suitestatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SuiteStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SuiteStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SuiteStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SuiteStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/taskpriority", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TaskPriority($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TaskPriority($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TaskPriority($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TaskPriority($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/taskstatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TaskStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TaskStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TaskStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TaskStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tenancyinformation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenancyInformation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenancyInformation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TenancyInformation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TenancyInformation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tenancystatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenancyStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenancyStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TenancyStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TenancyStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tenancytype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenancyType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenancyType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TenancyType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TenancyType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tenantbid", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantBid($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantBid($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TenantBid($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TenantBid($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tenantcomplaint", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantComplaint($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantComplaint($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TenantComplaint($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TenantComplaint($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tenanttype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TenantType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TenantType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tenantvacation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantVacation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TenantVacation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TenantVacation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TenantVacation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/unit", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Unit($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Unit($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Unit($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Unit($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/usergroup", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new UserGroup($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new UserGroup($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new UserGroup($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new UserGroup($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/users", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Users($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Users($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

   $app->post("/resetpassword", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Users($this->db);
        $result = $table->resetpassword($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Users($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Users($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/vat", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new VAT($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new VAT($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new VAT($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new VAT($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/vendor", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Vendor($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Vendor($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Vendor($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Vendor($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});


$app->group("/vendortype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new VendorType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new VendorType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new VendorType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new VendorType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/wht", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new WHT($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new WHT($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new WHT($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new WHT($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/customer", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Customer($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Customer($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Customer($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Customer($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/customersubtype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CustomerSubType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CustomerSubType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new CustomerSubType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new CustomerSubType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/customertype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CustomerType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new CustomerType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new CustomerType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new CustomerType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/documenttype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DocumentType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DocumentType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new DocumentType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new DocumentType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/equipment", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Equipment($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Equipment($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Equipment($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Equipment($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/expensecategory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExpenseCategory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExpenseCategory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ExpenseCategory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ExpenseCategory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/expenseline", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExpenseLine($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ExpenseLine($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ExpenseLine($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ExpenseLine($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/milestonemonitoring", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MilestoneMonitoring($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new MilestoneMonitoring($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new MilestoneMonitoring($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new MilestoneMonitoring($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/paymentplan", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentPlan($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentPlan($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PaymentPlan($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PaymentPlan($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/paymenttranche", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentTranche($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PaymentTranche($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PaymentTranche($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PaymentTranche($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/priority", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Priority($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Priority($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Priority($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Priority($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/project", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Project($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Project($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Project($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Project($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectdocumentupload", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectDocumentUpload($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectDocumentUpload($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectDocumentUpload($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectDocumentUpload($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectexpense", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectExpense($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectExpense($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectExpense($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectExpense($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectmanager", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectManager($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectManager($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectManager($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectManager($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectmilestone", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectMilestone($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectMilestone($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectMilestone($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectMilestone($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectreview", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectReview($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectReview($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectReview($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectReview($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectreviewplan", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectReviewPlan($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectReviewPlan($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectReviewPlan($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectReviewPlan($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectrisk", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectRisk($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectRisk($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectRisk($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectRisk($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectstatus", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectStatus($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectStatus($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectStatus($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectStatus($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectsubtype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectSubType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectSubType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectSubType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectSubType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projecttask", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectTask($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectTask($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectTask($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectTask($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projectteam", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectTeam($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectTeam($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectTeam($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectTeam($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projecttool", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectTool($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectTool($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectTool($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectTool($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/projecttype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProjectType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProjectType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProjectType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/risk", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Risk($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Risk($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Risk($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Risk($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/score", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Score($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Score($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Score($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Score($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/taskdelegation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TaskDelegation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new TaskDelegation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new TaskDelegation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new TaskDelegation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/tool", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Tool($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Tool($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Tool($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Tool($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});


$app->group("/bank", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Bank($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Bank($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Bank($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Bank($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/branches", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Branches($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Branches($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Branches($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Branches($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/branchtypes", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new BranchTypes($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new BranchTypes($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new BranchTypes($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new BranchTypes($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/departmentgroup", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DepartmentGroup($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new DepartmentGroup($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new DepartmentGroup($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new DepartmentGroup($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/departments", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Departments($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Departments($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Departments($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Departments($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/designations", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Designations($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Designations($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Designations($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Designations($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/divisions", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Divisions($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Divisions($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Divisions($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Divisions($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeeeducation", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeEducation($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeEducation($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeEducation($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeEducation($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeefamily", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeFamily($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeFamily($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeFamily($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeFamily($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/employeeguarantor", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeGuarantor($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new EmployeeGuarantor($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new EmployeeGuarantor($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new EmployeeGuarantor($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/gradelevels", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new GradeLevels($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new GradeLevels($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new GradeLevels($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new GradeLevels($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/grades", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Grades($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Grades($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Grades($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Grades($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/holidays", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Holidays($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Holidays($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Holidays($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Holidays($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/leaveapplicationsetup", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveApplicationSetup($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveApplicationSetup($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LeaveApplicationSetup($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LeaveApplicationSetup($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/leaveapproval", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveApproval($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveApproval($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LeaveApproval($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LeaveApproval($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/leaveemployeeapplication", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveEmployeeApplication($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveEmployeeApplication($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LeaveEmployeeApplication($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LeaveEmployeeApplication($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/leaveplanner", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeavePlanner($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeavePlanner($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LeavePlanner($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LeavePlanner($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/leaveresumption", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveResumption($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LeaveResumption($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LeaveResumption($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LeaveResumption($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/loanapplication", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanApplication($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanApplication($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LoanApplication($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LoanApplication($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/loanapproval", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanApproval($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanApproval($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LoanApproval($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LoanApproval($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/loanrepayment", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanRepayment($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanRepayment($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LoanRepayment($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LoanRepayment($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/loanrepaymentsource", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanRepaymentSource($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanRepaymentSource($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LoanRepaymentSource($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LoanRepaymentSource($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/loanrepaymenttype", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanRepaymentType($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanRepaymentType($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LoanRepaymentType($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LoanRepaymentType($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/loantypes", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanTypes($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new LoanTypes($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new LoanTypes($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new LoanTypes($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollinstances", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstances($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstances($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollInstances($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollInstances($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/payrollinstancetypes", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PayrollInstanceTypes($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/pensionprovider", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PensionProvider($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PensionProvider($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PensionProvider($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PensionProvider($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/policydocument", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PolicyDocument($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PolicyDocument($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PolicyDocument($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PolicyDocument($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/privileges", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Privileges($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Privileges($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Privileges($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Privileges($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});


$app->group("/privilegesheader", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesHeader($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesHeader($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PrivilegesHeader($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->post("/staff-available", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesHeader($this->db);
        $result = $table->staffAvailable($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PrivilegesHeader($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});


$app->group("/privilegesactivity", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesActivity($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesActivity($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PrivilegesActivity($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PrivilegesActivity($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/privilegesactivitymapping", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesActivityMapping($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesActivityMapping($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PrivilegesActivityMapping($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PrivilegesActivityMapping($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/privilegesassignment", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesAssignment($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesAssignment($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PrivilegesAssignment($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PrivilegesAssignment($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/privilegesassignmentdetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesAssignmentDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesAssignmentDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PrivilegesAssignmentDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PrivilegesAssignmentDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/privilegesdetails", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesDetails($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesDetails($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PrivilegesDetails($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PrivilegesDetails($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/privilegesclass", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesClass($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new PrivilegesClass($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new PrivilegesClass($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new PrivilegesClass($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/programmetypes", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProgrammeTypes($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new ProgrammeTypes($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new ProgrammeTypes($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new ProgrammeTypes($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/qualificationgrade", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new QualificationGrade($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new QualificationGrade($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new QualificationGrade($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new QualificationGrade($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/qualifications", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Qualifications($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Qualifications($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Qualifications($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Qualifications($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});
$app->group("/salarycomponents", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryComponents($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryComponents($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryComponents($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryComponents($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/salaryvariables", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariables($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SalaryVariables($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SalaryVariables($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SalaryVariables($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/schooltypes", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SchoolTypes($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SchoolTypes($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SchoolTypes($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SchoolTypes($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/statuses", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Statuses($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Statuses($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Statuses($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Statuses($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/supervisortypes", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SupervisorTypes($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new SupervisorTypes($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new SupervisorTypes($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new SupervisorTypes($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/units", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Units($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Units($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Units($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Units($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/workforce", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Workforce($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Workforce($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Workforce($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Workforce($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/workforcehistory", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new WorkforceHistory($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new WorkforceHistory($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new WorkforceHistory($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new WorkforceHistory($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/workforceoptions", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new WorkforceOptions($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new WorkforceOptions($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new WorkforceOptions($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new WorkforceOptions($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});

$app->group("/year", function () use ($app) {

    $app->post("/add", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Year($this->db);
        $result = $table->add($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->post("/update", function(Request $request, Response $response, array $args){
        $data = json_decode($request->getBody());
        $table = new Year($this->db);
        $result = $table->update($data);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });
    $app->get("/list", function(Request $request, Response $response, array $args){
    // $data = json_decode($request->getBody());
        $table = new Year($this->db);
        $result = $table->all(array());
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

    $app->get("/get/{id}", function(Request $request, Response $response, array $args){
        $route = $request->getAttribute("route");
        $id = $route->getArgument("id");
        $table = new Year($this->db);
        $result = $table->get($id);
        $status = getStatus($result["status"]);
        $response = $response->withJson($result, $status);
        return $response;
    });

});



