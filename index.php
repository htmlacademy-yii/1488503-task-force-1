<?php
include 'Task.php';
include 'TaskAction.php';
include 'TaskStatus.php';

$examination = new Task();

$examination->getStatusByAction(TaskAction::CANCEL);
assert($examination ->getStatusByAction(TaskAction::CANCEL) == TaskStatus::CANCELED);
assert($examination ->getStatusByAction(TaskAction::IN_PROGRESS) == TaskStatus::IN_WORK);
assert($examination ->getStatusByAction(TaskAction::COMPLECTED) == TaskStatus::DONE);
assert($examination ->getStatusByAction(TaskAction::FAILED) == TaskStatus::FAILED);
assert($examination ->status == TaskStatus::IN_WORK);
assert($examination ->customerId == TaskStatus::DONE);
assert($examination ->executorId == TaskStatus::NEW);


