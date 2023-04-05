<?php

require 'bootstrap.php';


$todos = $query->selectAll('todos', 'Todo');
$todos[0] -> makeItDone();

require 'views/index.view.php';

?>