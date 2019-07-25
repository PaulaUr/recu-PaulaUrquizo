<?php

namespace Paula\TestingProject\Exception;


class EmptyArrayException extends \RuntimeException
{

    protected $message = 'There are no any phrases in the array';
}