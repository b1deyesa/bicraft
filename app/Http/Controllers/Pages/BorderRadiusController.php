<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BorderRadiusController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'border-radius',
            'prefix'    => 'rounded',
            'values'    => [
                [
                    'key'   => 'none',
                    'value' => '0em'
                ],
                [
                    'key'   => 'xs',
                    'value' => '0.25em'
                ],
                [
                    'key'   => 'sm',
                    'value' => '0.5em'
                ],
                [
                    'key'   => 'md',
                    'value' => '0.75em'
                ],
                [
                    'key'   => 'lg',
                    'value' => '1em'
                ],
                [
                    'key'   => 'full',
                    'value' => '500em'
                ]
            ]
        ];
        
        return view('pages.border-radius', [
            'tokens' => $tokens
        ]);
    }
}
