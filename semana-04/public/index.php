<?php

use MicroHis\Presentation\WardBedView;

$controller = require __DIR__ . '/../config/bootstrap.php';

require_once __DIR__
    . '/../src/Presentation/WardBedView.php';

$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $controller->store($_POST);
}

echo WardBedView::render($result);