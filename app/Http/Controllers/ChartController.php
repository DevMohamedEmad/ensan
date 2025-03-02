<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getChartData()
    {
        $data = [
            ['month' => 1, 'count' => 10],  // January
            ['month' => 2, 'count' => 15],  // February
            ['month' => 3, 'count' => 8],   // March
            ['month' => 4, 'count' => 20],  // April
            ['month' => 5, 'count' => 12],  // May
            ['month' => 6, 'count' => 18],  // June
        ];

        return response()->json($data);
    }
}
