<?php

class Tester implements Workable {

    public function canCode()
    {
        return false;
    }

    public function test()
    {
        return 'testing in test server';
    }

    public function code()
    {
        throw new Exception('Opps ! I can not Code');
    }
}