<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";

addTodoList("pangestu");
addTodoList("Brilian");
addTodoList("Anto");
addTodoList("Nico");
addTodoList("shaka");

showTodoList();
removeTodoList(3);
showTodoList();
