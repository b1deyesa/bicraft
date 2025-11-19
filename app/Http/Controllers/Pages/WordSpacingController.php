<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WordSpacingController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'word-spacing',
            'prefix'    => 'word-spacing',
            'values'    => [
                [
                    'key'   => 'normal',
                    'value' => '0em'
                ],
                [
                    'key'   => 'loose',
                    'value' => '0.05em'
                ],
                [
                    'key'   => 'extra-loose',
                    'value' => '0.1em'
                ]
            ]
        ];
        
        return view('pages.word-spacing', [
            'tokens' => $tokens
        ]);
    }
}
