<?php

class Programmer implements Codeable, Testable {

    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'Test in localhost';
    }
}