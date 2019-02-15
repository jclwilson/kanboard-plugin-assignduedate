<?php

namespace Kanboard\Plugin\AssignDueDate;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\AssignDueDate\Action\TaskAssignDueDateOnColumn;

class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TaskAssignDueDateOnColumn($this->container));
    }
    public function getPluginName()
    {
        return 'Assign Due Date';
    }
    public function getPluginAuthor()
    {
        return 'Jacob Charles Wilson';
    }
    public function getPluginVersion()
    {
        return '1.0.0';
    }
    public function getPluginDescription()
    {
        return 'Automatically set the due date relative to the current time when the task is moved to a specific column';
    }
    public function getPluginHomepage()
    {
        return 'https://github.com/jclwilson/kanboard-plugin-assignduedate';
    }
}

?>
