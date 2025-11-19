<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BorderWidthController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'border-width',
            'prefix'    => 'border',
            'values'    => [
                [
                    'key'   => '0',
                    'value' => '0em'
                ],
                [
                    'key'   => '1',
                    'value' => '0.05em'
                ],
                [
                    'key'   => '2',
                    'value' => '0.07em'
                ],
                [
                    'key'   => '3',
                    'value' => '0.125em'
                ],
                [
                    'key'   => '4',
                    'value' => '0.25em'
                ]
            ]
        ];
        
        return view('pages.border-width', [
            'tokens' => $tokens
        ]);
    }
}
