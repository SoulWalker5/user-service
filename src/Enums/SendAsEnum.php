<?php

namespace DiKay\Enums;

enum SendAsEnum: string
{
    case Json = 'asJson';
    case From = 'asForm';
}
