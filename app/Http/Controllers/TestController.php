<?php

namespace App\Http\Controllers;

use App\Service\TestService;

class TestController extends Controller
{
    public function __construct(
        private readonly TestService $testService
    ) {
    }
    public function Data() {
        return $this->testService->Data();
    }
}
