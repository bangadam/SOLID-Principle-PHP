<?php

class ProjectManagement
{
    public function process($member) {
        if ($member instanceof Programmer) {
            $member->code();
        } else if ($member instanceof Tester) {
            $member->test();
        }

        Throw new Exception('Invalid input member');
    }
}