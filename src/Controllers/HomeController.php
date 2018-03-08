<?php

namespace FaultWall\Controllers;

use FaultWall\Models\Issue;
use Slim\Views\Twig;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController{

  public function index(Request $request, Response $response, Twig $view, Issue $issue){

    $issues = $issue->get();

    var_dump($issues->first()->title);
    die();

    return $view->render($response, 'home.twig');
  }


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
    echo '{"notice": {"text": "issue #id:'. $id . 'updated"}';
  }
}
