<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function showTable()
    {
        $data = [
            ['time' => '10:00', 'status' => 'Відключено'],
            ['time' => '11:00', 'status' => 'Відключено'],
            // Додайте інші дані для таблиці
        ];

        return view('table', compact('data'));
    }

}
