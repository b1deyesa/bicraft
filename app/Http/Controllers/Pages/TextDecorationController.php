<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextDecorationController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'text-decoration',
            'prefix'    => 'text-decoration',
            'values'    => [
                [
                    'key'   => 'none',
                    'value' => 'none'
                ],
                [
                    'key'   => 'underline',
                    'value' => 'underline'
                ],
                [
                    'key'   => 'line-through',
                    'value' => 'line-through'
                ],
                [
                    'key'   => 'overline',
                    'value' => 'overline'
                ]
            ]
        ];
        
        return view('pages.text-decoration', [
            'tokens' => $tokens
        ]);
    }
}
