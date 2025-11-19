<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LineHeightController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'line-height',
            'prefix'    => 'line-height',
            'values'    => [
                [
                    'key'   => 'loose',
                    'value' => '1.8'
                ],
                [
                    'key'   => 'normal',
                    'value' => '1.2'
                ],
                [
                    'key'   => 'tight',
                    'value' => '1.0'
                ]
            ]
        ];
        
        return view('pages.line-height', [
            'tokens' => $tokens
        ]);
    }
}
