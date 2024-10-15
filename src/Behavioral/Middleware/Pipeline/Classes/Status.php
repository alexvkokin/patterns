<?php
namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes;

enum Status: string
{
    case OK = 'OK';
    case BAD_REQUEST = 'BAD_REQUEST';
}
