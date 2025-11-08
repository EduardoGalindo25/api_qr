<?php

namespace app\Middlewares;

interface Middlewares
{
    public static function handle($requestHeaders, $next);
}