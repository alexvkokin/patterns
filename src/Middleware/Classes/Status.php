<?php
namespace Alexvkokin\Patterns\Middleware\Classes;

enum Status: string
{
    case OK = 'OK';
    case BAD_REQUEST = 'BAD_REQUEST';
}
