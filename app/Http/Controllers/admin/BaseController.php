<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $manager;

    public function __construct () {
    	$this->manager = adminSessionGet('managerData');
	}
}
