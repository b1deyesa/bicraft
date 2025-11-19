<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhiteSpaceController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'white-space',
            'prefix'    => 'white-space',
            'values'    => [
                [
                    'key'   => 'normal',
                    'value' => 'normal'
                ],
                [
                    'key'   => 'nowrap',
                    'value' => 'nowrap'
                ],
                [
                    'key'   => 'wrap',
                    'value' => 'wrap'
                ],
                [
                    'key'   => 'pre',
                    'value' => 'pre'
                ]
            ]
        ];
        
        return view('pages.white-space', [
            'tokens' => $tokens
        ]);
    }
}
