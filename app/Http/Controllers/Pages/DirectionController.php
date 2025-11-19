<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'direction',
            'prefix'    => 'direction',
            'values'    => [
                [
                    'key'   => 'ltr',
                    'value' => 'ltr'
                ],
                [
                    'key'   => 'rtl',
                    'value' => 'rtl'
                ]
            ]
        ];
        
        return view('pages.direction', [
            'tokens' => $tokens
        ]);
    }
}
