<?php
require_once "../vendor/autoload.php";
use Symfony\Component\HttpFoundation\Response;
$response = new Response();
$response->setContent('<html><body><h1>Hello world!</h1></body></html>');
$response->setStatusCode(Response::HTTP_OK);
// sets a HTTP response header
$response->headers->set('Content-Type', 'text/html');
// prints the HTTP headers followed by the content
$response->send();