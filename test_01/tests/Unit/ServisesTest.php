<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServisesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $app = $this->createApplication();
        $jsonResponseService = new \App\Services\JsonResponseService($app);

        

//        $this->assertInstanceOf()
//        $repositoryService->


    	$this->assertTrue(true);
    }
}
