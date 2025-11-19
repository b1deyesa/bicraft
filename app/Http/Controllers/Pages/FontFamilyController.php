<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontFamilyController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'font-family',
            'prefix'    => 'font-family',
            'values'    => [
                [
                    'key'   => 'serif',
                    'value' => "'DM Serif Text', serif"
                ],
                [
                    'key'   => 'sans-serif',
                    'value' => "'Gantari', sans-serif"
                ],
                [
                    'key'   => 'mono',
                    'value' => "'Courier New', monospace"
                ],
                [
                    'key'   => 'script',
                    'value' => "'Brush Script MT', cursive"
                ],
                [
                    'key'   => 'round',
                    'value' => "'Outfit', sans-serif"
                ],
                [
                    'key'   => 'handwrite',
                    'value' => "'Dancing Script', cursive"
                ],
                [
                    'key'   => 'pixel',
                    'value' => "'Press Start 2P', monospace"
                ]
            ]
        ];
        
        return view('pages.font-family', [
            'tokens' => $tokens
        ]);
    }
}
