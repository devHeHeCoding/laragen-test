<?php
namespace App\Http\Controllers\GeneratedTraits\Api;

trait TestControllerTrait
{
    public function index()
    {
        return Users::paginated();
    }
}
