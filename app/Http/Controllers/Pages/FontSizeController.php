<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontSizeController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'font-size',
            'prefix'    => 'font-size',
            'values'    => [
                [
                    'key'   => '4xl',
                    'value' => '3.2em'
                ],
                [
                    'key'   => '3xl',
                    'value' => '2.5em'
                ],
                [
                    'key'   => '2xl',
                    'value' => '2em'
                ],
                [
                    'key'   => 'xl',
                    'value' => '1.6em'
                ],
                [
                    'key'   => 'lg',
                    'value' => '1.3em'
                ],
                [
                    'key'   => 'md',
                    'value' => '1em'
                ],
                [
                    'key'   => 'sm',
                    'value' => '.9em'
                ],
                [
                    'key'   => 'xs',
                    'value' => '.75em'
                ]
            ]
        ];
        
        return view('pages.font-size', [
            'tokens' => $tokens
        ]);
    }
}
