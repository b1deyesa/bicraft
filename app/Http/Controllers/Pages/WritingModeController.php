<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WritingModeController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'writing-mode',
            'prefix'    => 'writing-mode',
            'values'    => [
                [
                    'key'   => 'horizontal',
                    'value' => 'horizontal-tb'
                ],
                [
                    'key'   => 'vertical',
                    'value' => 'vertical-rl'
                ]
            ]
        ];
        
        return view('pages.writing-mode', [
            'tokens' => $tokens
        ]);
    }
}
