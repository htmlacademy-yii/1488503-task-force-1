<?php

class Task
{
    public $status = TaskStatus::IN_WORK;
    public $executorId = TaskStatus::NEW;
    public $customerId = TaskStatus::DONE;

    public function getStatusList()
    {
        return [
            TaskStatus::NEW => 'Новая',
            TaskStatus::CANCELED => 'Отмена',
            TaskStatus::IN_WORK => 'В работе',
            TaskStatus::FAILED => 'Отказ',
            TaskStatus::DONE => 'Выполнено',
        ];
    }

    public function getActionList()
    {
        return [
            TaskAction::FAILED => "Провалено",
            TaskAction::CANCEL => "Отменить",
            TaskAction::IN_PROGRESS => "В работе",
            TaskAction::COMPLECTED => "Выполнить",
        ];
    }

    public function getStatusByAction($actionName)
    {
        if ($actionName == TaskAction::CANCEL) {
            return TaskStatus::CANCELED;
        }
        if ($actionName == TaskAction::IN_PROGRESS) {
            return TaskStatus::IN_WORK;
        }
        if ($actionName == TaskAction::COMPLECTED) {
            return TaskStatus::DONE;
        }
        if ($actionName == TaskAction::FAILED) {
            return TaskStatus::FAILED;
        }
    }

}
