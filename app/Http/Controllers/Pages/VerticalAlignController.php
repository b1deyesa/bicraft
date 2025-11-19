<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerticalAlignController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'vertical-align',
            'prefix'    => 'vertical-align',
            'values'    => [
                [
                    'key'   => 'sub',
                    'value' => 'sub'
                ],
                [
                    'key'   => 'super',
                    'value' => 'super'
                ]
            ]
        ];
        
        return view('pages.vertical-align', [
            'tokens' => $tokens
        ]);
    }
}
