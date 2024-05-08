<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testLogging(): void
    {
        Log::debug('Hello Debug');
        Log::info('Hello Info');
        Log::notice('Hello Notice');
        Log::warning('Hello Warning');
        Log::error('Hello Error');
        Log::critical('Hello Critical');
        Log::alert('Hello Alert');
        Log::emergency('Hello Emergency');

        self::assertTrue(true);
    }

    public function testLoggingWithContext(): void
    {
        Log::withContext(['app_name' => env('APP_NAME', 'laravel')]);

        Log::warning('Hello Warning');
        self::assertTrue(true);
    }

    public function testSelectedChannel(): void
    {
        $slack = Log::channel('slack');
        $slack->warning('Notification for us.');

        self::assertTrue(true);
    }

    public function testFileLogging(): void
    {
        $fileLogger = Log::channel('filetest');
        $fileLogger->info('Running with file logger');
        $fileLogger->warning('Running with file logger');
        $fileLogger->error('Running with file logger');

        self::assertTrue(true);
    }
}
