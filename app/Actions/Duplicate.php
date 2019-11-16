<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Duplicate extends AbstractAction
{
    public function getTitle()
    {
        return 'Duplicate';
    }

    public function getIcon()
    {
        return 'voyager-plus';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right mr-1',
        ];
    }

    public function getDefaultRoute()
    {
        return route('duplicate.store', [$this->dataType,$this->data->{$this->data->getKeyName()}]);
    }
}
