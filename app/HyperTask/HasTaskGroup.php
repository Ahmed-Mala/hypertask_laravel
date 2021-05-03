<?php


namespace App\HyperTask;


use App\Models\TaskGroup;

trait HasTaskGroup
{
    public function taskGroups(){

         return $this->morphMany(TaskGroup::class, 'groupable');
    }

}
