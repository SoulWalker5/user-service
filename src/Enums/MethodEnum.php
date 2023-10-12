<?php

namespace DiKay\Enums;

enum MethodEnum: string
{
    case Post = 'post';
    case Get = 'get';
    case Put = 'put';
    case Delete = 'delete';
}
