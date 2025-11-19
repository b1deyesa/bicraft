<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BorderStyleController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'border-style',
            'prefix'    => 'border-style',
            'values'    => [
                [
                    'key'   => 'solid',
                    'value' => 'solid'
                ],
                [
                    'key'   => 'dashed',
                    'value' => 'dashed'
                ],
                [
                    'key'   => 'dotted',
                    'value' => 'dotted'
                ],
                [
                    'key'   => 'double',
                    'value' => 'double'
                ],
                [
                    'key'   => 'groove',
                    'value' => 'groove'
                ],
                [
                    'key'   => 'ridege',
                    'value' => 'ridege'
                ]
            ]
        ];
        
        return view('pages.border-style', [
            'tokens' => $tokens
        ]);
    }
}
