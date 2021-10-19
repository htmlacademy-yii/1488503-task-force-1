<?php
$getStatusList = getStatusList();

class Task
{
    const ACTION_CARD = 'card';
    const ACTION_RESPOND = 'respond';
    const ACTION_REFUSE = 'refuse';
    const ACTION_WRITE_MESSAGE = 'write message';

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
            TaskAction::EXECUTE => "Выполнять",
            TaskAction::REFUSE => "Отказаться",
            TaskAction::RESPOND => "отзываться",
        ];
    }
}
