<?php

namespace App\Http\Controllers\Admin\Post;
use App\Service\PostService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
 
}
