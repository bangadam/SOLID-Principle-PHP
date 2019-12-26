<?php

$projectManagement = new ProjectManagement();

$programmer = new Programmer();

$tester = new Tester();

$projectManagement->process($programmer);
$projectManagement->process($tester);