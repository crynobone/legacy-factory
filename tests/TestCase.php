<?php

namespace Tests;

use Illuminate\Database\Eloquent\Factory as ModelFactory;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate')->run();

        $this->app->make(ModelFactory::class)->load(__DIR__.'/../database/legacy-factories');
    }
}
