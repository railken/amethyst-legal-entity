<?php

namespace Railken\LaraOre\Tests\LegalEntity;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__.'/../..', '.env');
        $dotenv->load();

        parent::setUp();

        $this->artisan('migrate:fresh');
        // $this->artisan('vendor:publish', ['--provider' => 'Railken\LaraOre\LegalEntityServiceProvider', '--force' => true]);
        $this->artisan('migrate');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Railken\LaraOre\LegalEntityServiceProvider::class,
        ];
    }
}
