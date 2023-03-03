<?php
    use Picqer\Financials\Exact\Connection;

    $connection = new Connection();
    $connection->setRedirectUrl('http://localhost/callback.php');
    $connection->setExactClientId('rVcGoMCZbEpE');
    $connection->setExactClientSecret('19daa219-eb99-4c38-a067-e02ec801f29c');
    $connection->setExactAuthorizationCode('your_authorization_code');
