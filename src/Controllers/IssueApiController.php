<?php

namespace FaultWall\Controllers;

use FaultWall\Models\Issue;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class IssueApiController{

  //API get all issues
  public function all_issues_api(Request $request, Response $response){
    $issues = Issue::all();

    return $issues->toJson();
  }

  //API get single issue
  public function single_issue_api(Request $request, Response $response, $id){
    $issue = Issue::findOrFail($id);

    return $issue->toJson();
  }

  //API add new issue
  public function add_issue_api(Request $request, Response $response){
    $issue = new Issue;


    $params = $request->getParsedBody();

    $issue->title = $params['title'];
    $issue->category = $params['category'];
    $issue->description = $params['description'];

    //powiązanie z customer_id dodac

    $issue->save();
    echo '{"notice": {"text": "new issue added"}';
  }

  //API update issue    - przetestowac
  public function update_issue_api(Request $request, Response $response, $id){
    $issue = Issue::find($id);

    // return $issue->toJson();
    // die();

    $params = $request->getParsedBody();

    $issue->title = $params['title'];
    $issue->category = $params['category'];
    $issue->description = $params['description'];

    //tutaj powinienem dodac jeszcze 2 ify, do is_picked i is_solved
    //powiązanie z customer_id i specialist_id

    $issue->save();
    echo '{"notice": {"text": "issue #id:'. $id . ' updated"}';
  }

  //API delete issue
  public function delete_issue_api(Request $request, Response $response, $id){
    $issue = Issue::find($id);

    $issue->delete();

    echo '{"notice": {"text": "issue #id:'. $id . ' deleted"}';
  }
}
