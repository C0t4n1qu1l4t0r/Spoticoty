<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
 * @OA\Info(title="Spoticoty",
 *     version="1.0.0",
 *     description="Spoticoty api"
 * )
 * @OA\Get(
 *     path="/",
 *     description="Route Spoticoty",
 *     @OA\Response(response="default", description="Welcome page")
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
