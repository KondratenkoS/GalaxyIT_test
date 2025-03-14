<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class DeleteController extends Controller
{
    public function __invoke(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('drivers.index');
    }
}
