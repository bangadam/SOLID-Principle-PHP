<?php

class ProjectManagement {
    public function processCode(Workable $workable) {
        if ($workable->canCode()) {
            $workable->code();
        }
    }
}