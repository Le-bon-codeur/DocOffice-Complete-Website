<?php

require('../model/modelEmployees.php');

$table1 = getDoctors();
$table2 = getNurses();
$table3 = getStaffMembers();

require('../view/seeEmployees.php');