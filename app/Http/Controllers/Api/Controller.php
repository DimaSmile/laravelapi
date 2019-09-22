<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as AppController;

/**
* @OA\Info(
*    title="Swagger Open API first project",
*    version="1.0.0",
*    @OA\Contact(
*        email="test@gmail.com"
*    )
* )
* 
* @OA\Tag(
*    name="Pages",
*    description="some example pages"
* )
* 
* @OA\Server(
*    url="http://127.0.0.1:8000/api/v1"
* )
* 
* @OA\SecurityScheme(
*    securityScheme="api_key",
*    type="apiKey",
*    in="header",
*    name="x-api-key",
* )
*/
class Controller extends AppController
{
    
}