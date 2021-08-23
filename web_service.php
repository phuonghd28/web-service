<?php

$soap = new SoapClient('http://www.learnwebservices.com/services/hello?WSDL');

$name = $_POST['name'];
$response = $soap->SayHello(array(
    'HelloRequest' => array(
        'Name' => $name
    )
));
echo $response->HelloResponse->Message;