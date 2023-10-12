<?php

namespace DiKay;

class UserService extends ApiService
{
    public function __construct(protected readonly string $endpoint)
    {
    }
}
