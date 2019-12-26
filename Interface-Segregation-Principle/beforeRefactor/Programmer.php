<?php

class Programmer implements Workable {

    public function canCode()
    {
        return true;
    }

    public function test()
    {
        return 'testing in localhost';
    }

    public function code()
    {
        return 'coding';
    }
}