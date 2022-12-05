<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";

addTodoList("brilian");
addTodoList("pangestu");

var_dump($todoList);
