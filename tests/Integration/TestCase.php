<?php

namespace Kordy\Ticketit\Tests\Integration;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testsql');
        $app['config']->set('database.connections.testsql', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

	/**
	 * Load the package service provider.
	 *
	 * @param  \Illuminate\Foundation\Application  $app
	 * @return array
	 */
	protected function getPackageProviders($app)
	{
		return ['Kordy\Ticketit\TicketitServiceProvider'];
	}
}