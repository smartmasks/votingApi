<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->post('/voteUpdate', function (Request $request, Response $response, array $args) {
    // Sample log message
    // $this->logger->info("Slim-Skeleton '/' route");
    
    $allPostPutVars = $request->getParsedBody();
    $name = $allPostPutVars['name'];
    $id = $allPostPutVars['id'];
    $role = $allPostPutVars['role'];
    $std = $allPostPutVars['std'];
    $vote = $allPostPutVars['vote'];

    $sth = $this->db->prepare("UPDATE votes   SET vote = vote + 1 WHERE id = :id");
    $sth->bindParam("id", $id);
    $sth->execute();
    // $votes = $sth->fetchAll();
    // return $this->response->withJson("{
    //     'status' : 'success',
    //     'msg' : 'Voted Successfully'
    // }");

    

    // Render index view
    // return $this->renderer->render($response, 'index.phtml', $args);
    echo "Voted Successfully";
});


$app->get('/result', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT * FROM votes ORDER BY id");
   $sth->execute();
   $votes = $sth->fetchAll();
   return $this->response->withJson($votes);
});