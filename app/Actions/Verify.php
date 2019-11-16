<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Support\Facades\DB;

class Verify extends AbstractAction
{
    public function getTitle()
    {
        return 'Verify';
    }

    public function getIcon()
    {
        return 'voyager-check';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-info pull-right mr-1',
        ];
    }

    public function getDefaultRoute()
    {
        return route('verify.update', [$this->dataType,$this->data->{$this->data->getKeyName()}]);
    }

    public function shouldActionDisplayOnDataType()
    {
        $row = DB::table($this->dataType->name)->where('id', $this->data->id)->first();

        return $this->dataType->slug == 'reviews' and $row->active == 0 ;
    }
}
