<?php

require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";

addTodoList("brilian");
addTodoList("pangestu");
addTodoList("budi");
addTodoList("ando");

viewAddTodoList();

showTodoList();
