<?php

namespace Sam\Router\Tests\Fictures;

/**
 *
 */
class HomeController
{
    public function index(string $index): string
    {
        return $index;
    }

}