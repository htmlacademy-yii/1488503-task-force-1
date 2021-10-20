<?php
include 'Task.php';
include 'TaskAction.php';
include 'TaskStatus.php';
assert(getStatusByAction('отменить') == TaskAction::CANCEL);
