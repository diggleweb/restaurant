<?php

namespace App\Http\Controllers\Admin;

/**
 * Description of DashboardController
 *
 * @author hkdhanera7@gmail.com
 */
class DashboardController
{
    public function index()
    {
        return view('admin.dashboard');
    }

}
