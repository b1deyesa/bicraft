<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontWeightController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'font-weight',
            'prefix'    => 'font-weight',
            'values'    => [
                [
                    'key'   => 'thin',
                    'value' => '200'
                ],
                [
                    'key'   => 'regular',
                    'value' => '300'
                ],
                [
                    'key'   => 'semi-bold',
                    'value' => '500'
                ],
                [
                    'key'   => 'bold',
                    'value' => '700'
                ],
                [
                    'key'   => 'black',
                    'value' => '900'
                ]
            ]
        ];
        
        return view('pages.font-weight', [
            'tokens' => $tokens
        ]);
    }
}
