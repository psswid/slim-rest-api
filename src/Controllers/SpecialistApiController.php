<?php

namespace FaultWall\Controllers;

use FaultWall\Models\Specialist;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class SpecialistApiController{

  //API get all specialists
  public function all_specialists_api(Request $request, Response $response){
    $specialists = Specialist::all();

    return $specialists->toJson();
  }

  //API get single specialist
  public function single_specialist_api(Request $request, Response $response, $id){
    $specialist = Specialist::findOrFail($id);

    return $specialist->toJson();
  }

  //API add new specialist
  public function add_specialist_api(Request $request, Response $response){
    $specialist = new Specialist;
    $params = $request->getParsedBody();

    $specialist->email = $params['email'];
    $specialist->password = $params['password'];
    $specialist->first_name = $params['first_name'];
    $specialist->last_name = $params['last_name'];
    $specialist->street = $params['street'];
    $specialist->speciality = $params['speciality'];
    $specialist->city = $params['city'];
    $specialist->state = $params['state'];
    $specialist->zip = $params['zip'];
    $specialist->phone = $params['phone'];

    $specialist->save();
    echo '{"notice": {"text": "new specialist added"}';
  }

  //API update specialist
  public function update_specialist_api(Request $request, Response $response, $id){
    $specialist = Specialist::find($id);
    $params = $request->getParsedBody();

    $specialist->email = $params['email'];
    $specialist->password = $params['password'];
    $specialist->first_name = $params['first_name'];
    $specialist->last_name = $params['last_name'];
    $specialist->street = $params['street'];
    $specialist->speciality = $params['speciality'];
    $specialist->city = $params['city'];
    $specialist->state = $params['state'];
    $specialist->zip = $params['zip'];
    $specialist->phone = $params['phone'];

    $specialist->save();
    echo '{"notice": {"text": "specialist #id:'. $id . ' updated"}';
  }

  //API delete specialist
  public function delete_specialist_api(Request $request, Response $response, $id){
    $specialist = Specialist::find($id);

    $specialist->delete();

    echo '{"notice": {"text": "specialist #id:'. $id . ' deleted"}';
  }
}
