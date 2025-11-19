<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextAlignController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'text-align',
            'prefix'    => 'text-align',
            'values'    => [
                [
                    'key'   => 'left',
                    'value' => 'left'
                ],
                [
                    'key'   => 'right',
                    'value' => 'right'
                ],
                [
                    'key'   => 'center',
                    'value' => 'center'
                ],
                [
                    'key'   => 'justify',
                    'value' => 'justify'
                ]
            ]
        ];
        
        return view('pages.text-align', [
            'tokens' => $tokens
        ]);
    }
}
