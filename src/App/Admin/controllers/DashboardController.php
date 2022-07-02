<?php
namespace App\Admin\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Dashboard/Index');
    }
}
