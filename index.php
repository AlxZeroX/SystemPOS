<?php

require_once 'controller/template.controller.php';
require_once 'controller/users.controller.php';
require_once 'controller/categories.controller.php';
require_once 'controller/products.controller.php';
require_once 'controller/customers.controller.php';
require_once 'controller/sales.controller.php';


require_once 'models/users.model.php';
require_once 'models/categories.model.php';
require_once 'models/products.model.php';
require_once 'models/customers.model.php';
require_once 'models/sales.model.php';


$template = new controllerTemplate();
$template -> ctrTemplate();