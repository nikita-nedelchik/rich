<?php

declare(strict_types = 1);

require_once 'vendor/autoload.php';

use App\Handler\FigureHandler;

$counter = new FigureHandler();

echo $counter->getShapeCornersCount('square', 'circle', 'triangle');
