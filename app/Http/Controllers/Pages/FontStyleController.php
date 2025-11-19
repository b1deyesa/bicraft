<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontStyleController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'font-style',
            'prefix'    => 'font-style',
            'values'    => [
                [
                    'key'   => 'normal',
                    'value' => 'normal'
                ],
                [
                    'key'   => 'italic',
                    'value' => 'italic'
                ],
                [
                    'key'   => 'oblique',
                    'value' => 'oblique'
                ]
            ]
        ];
        
        return view('pages.font-style', [
            'tokens' => $tokens
        ]);
    }
}
