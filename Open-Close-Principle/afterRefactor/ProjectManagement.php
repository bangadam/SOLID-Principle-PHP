<?php

class ProjectManagement
{
    public function process(WorkableInterface $workable) {
        return $workable->work();
    }
}