<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextTransformController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'text-transform',
            'prefix'    => 'text-transform',
            'values'    => [
                [
                    'key'   => 'none',
                    'value' => 'none'
                ],
                [
                    'key'   => 'uppercase',
                    'value' => 'uppercase'
                ],
                [
                    'key'   => 'lowercase',
                    'value' => 'lowercase'
                ],
                [
                    'key'   => 'capitalize',
                    'value' => 'capitalize'
                ]
            ]
        ];
        
        return view('pages.text-transform', [
            'tokens' => $tokens
        ]);
    }
}
