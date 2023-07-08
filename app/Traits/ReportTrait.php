<?php

namespace App\Traits;

trait ReportTrait
{
    public function saveReport($event)
    {
        $msg = trans('reports.event', ['name' => auth()->guard('admin')->user()->name,  'event' => $event]);
        $this->reports()->create(['msg' => $msg]);
    }
}
