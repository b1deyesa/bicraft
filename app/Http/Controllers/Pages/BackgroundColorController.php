<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackgroundColorController extends Controller
{
    public function index()
    {
        $tokens = [
            'attribute' => 'background-color',
            'prefix'    => 'bg',
            'values'    => [
                'red' => [
                    [
                        'key' => 'red-50',
                        'value' => '#FBEBEB'
                    ],
                    [
                        'key' => 'red-50-10',
                        'value' => 'rgba(251, 235, 235, 0.1)'
                    ],
                    [
                        'key' => 'red-50-20',
                        'value' => 'rgba(251, 235, 235, 0.2)'
                    ],
                    [
                        'key' => 'red-50-30',
                        'value' => 'rgba(251, 235, 235, 0.3)'
                    ],
                    [
                        'key' => 'red-50-40',
                        'value' => 'rgba(251, 235, 235, 0.4)'
                    ],
                    [
                        'key' => 'red-50-50',
                        'value' => 'rgba(251, 235, 235, 0.5)'
                    ],
                    [
                        'key' => 'red-50-60',
                        'value' => 'rgba(251, 235, 235, 0.6)'
                    ],
                    [
                        'key' => 'red-50-70',
                        'value' => 'rgba(251, 235, 235, 0.7)'
                    ],
                    [
                        'key' => 'red-50-80',
                        'value' => 'rgba(251, 235, 235, 0.8)'
                    ],
                    [
                        'key' => 'red-50-90',
                        'value' => 'rgba(251, 235, 235, 0.9)'
                    ],
                    [
                        'key' => 'red-50-100',
                        'value' => 'rgba(251, 235, 235, 1.0)'
                    ],
                    [
                        'key' => 'red-100',
                        'value' => '#F3C4C4'
                    ],
                    [
                        'key' => 'red-100-10',
                        'value' => 'rgba(243, 196, 196, 0.1)'
                    ],
                    [
                        'key' => 'red-100-20',
                        'value' => 'rgba(243, 196, 196, 0.2)'
                    ],
                    [
                        'key' => 'red-100-30',
                        'value' => 'rgba(243, 196, 196, 0.3)'
                    ],
                    [
                        'key' => 'red-100-40',
                        'value' => 'rgba(243, 196, 196, 0.4)'
                    ],
                    [
                        'key' => 'red-100-50',
                        'value' => 'rgba(243, 196, 196, 0.5)'
                    ],
                    [
                        'key' => 'red-100-60',
                        'value' => 'rgba(243, 196, 196, 0.6)'
                    ],
                    [
                        'key' => 'red-100-70',
                        'value' => 'rgba(243, 196, 196, 0.7)'
                    ],
                    [
                        'key' => 'red-100-80',
                        'value' => 'rgba(243, 196, 196, 0.8)'
                    ],
                    [
                        'key' => 'red-100-90',
                        'value' => 'rgba(243, 196, 196, 0.9)'
                    ],
                    [
                        'key' => 'red-100-100',
                        'value' => 'rgba(243, 196, 196, 1.0)'
                    ],
                    [
                        'key' => 'red-200',
                        'value' => '#EC9D9D'
                    ],
                    [
                        'key' => 'red-200-10',
                        'value' => 'rgba(236, 157, 157, 0.1)'
                    ],
                    [
                        'key' => 'red-200-20',
                        'value' => 'rgba(236, 157, 157, 0.2)'
                    ],
                    [
                        'key' => 'red-200-30',
                        'value' => 'rgba(236, 157, 157, 0.3)'
                    ],
                    [
                        'key' => 'red-200-40',
                        'value' => 'rgba(236, 157, 157, 0.4)'
                    ],
                    [
                        'key' => 'red-200-50',
                        'value' => 'rgba(236, 157, 157, 0.5)'
                    ],
                    [
                        'key' => 'red-200-60',
                        'value' => 'rgba(236, 157, 157, 0.6)'
                    ],
                    [
                        'key' => 'red-200-70',
                        'value' => 'rgba(236, 157, 157, 0.7)'
                    ],
                    [
                        'key' => 'red-200-80',
                        'value' => 'rgba(236, 157, 157, 0.8)'
                    ],
                    [
                        'key' => 'red-200-90',
                        'value' => 'rgba(236, 157, 157, 0.9)'
                    ],
                    [
                        'key' => 'red-200-100',
                        'value' => 'rgba(236, 157, 157, 1.0)'
                    ],
                    [
                        'key' => 'red-300',
                        'value' => '#E47676'
                    ],
                    [
                        'key' => 'red-300-10',
                        'value' => 'rgba(228, 118, 118, 0.1)'
                    ],
                    [
                        'key' => 'red-300-20',
                        'value' => 'rgba(228, 118, 118, 0.2)'
                    ],
                    [
                        'key' => 'red-300-30',
                        'value' => 'rgba(228, 118, 118, 0.3)'
                    ],
                    [
                        'key' => 'red-300-40',
                        'value' => 'rgba(228, 118, 118, 0.4)'
                    ],
                    [
                        'key' => 'red-300-50',
                        'value' => 'rgba(228, 118, 118, 0.5)'
                    ],
                    [
                        'key' => 'red-300-60',
                        'value' => 'rgba(228, 118, 118, 0.6)'
                    ],
                    [
                        'key' => 'red-300-70',
                        'value' => 'rgba(228, 118, 118, 0.7)'
                    ],
                    [
                        'key' => 'red-300-80',
                        'value' => 'rgba(228, 118, 118, 0.8)'
                    ],
                    [
                        'key' => 'red-300-90',
                        'value' => 'rgba(228, 118, 118, 0.9)'
                    ],
                    [
                        'key' => 'red-300-100',
                        'value' => 'rgba(228, 118, 118, 1.0)'
                    ],
                    [
                        'key' => 'red-400',
                        'value' => '#DD4F4F'
                    ],
                    [
                        'key' => 'red-400-10',
                        'value' => 'rgba(221, 79, 79, 0.1)'
                    ],
                    [
                        'key' => 'red-400-20',
                        'value' => 'rgba(221, 79, 79, 0.2)'
                    ],
                    [
                        'key' => 'red-400-30',
                        'value' => 'rgba(221, 79, 79, 0.3)'
                    ],
                    [
                        'key' => 'red-400-40',
                        'value' => 'rgba(221, 79, 79, 0.4)'
                    ],
                    [
                        'key' => 'red-400-50',
                        'value' => 'rgba(221, 79, 79, 0.5)'
                    ],
                    [
                        'key' => 'red-400-60',
                        'value' => 'rgba(221, 79, 79, 0.6)'
                    ],
                    [
                        'key' => 'red-400-70',
                        'value' => 'rgba(221, 79, 79, 0.7)'
                    ],
                    [
                        'key' => 'red-400-80',
                        'value' => 'rgba(221, 79, 79, 0.8)'
                    ],
                    [
                        'key' => 'red-400-90',
                        'value' => 'rgba(221, 79, 79, 0.9)'
                    ],
                    [
                        'key' => 'red-400-100',
                        'value' => 'rgba(221, 79, 79, 1.0)'
                    ],
                    [
                        'key' => 'red-500',
                        'value' => '#D62929'
                    ],
                    [
                        'key' => 'red-500-10',
                        'value' => 'rgba(214, 41, 41, 0.1)'
                    ],
                    [
                        'key' => 'red-500-20',
                        'value' => 'rgba(214, 41, 41, 0.2)'
                    ],
                    [
                        'key' => 'red-500-30',
                        'value' => 'rgba(214, 41, 41, 0.3)'
                    ],
                    [
                        'key' => 'red-500-40',
                        'value' => 'rgba(214, 41, 41, 0.4)'
                    ],
                    [
                        'key' => 'red-500-50',
                        'value' => 'rgba(214, 41, 41, 0.5)'
                    ],
                    [
                        'key' => 'red-500-60',
                        'value' => 'rgba(214, 41, 41, 0.6)'
                    ],
                    [
                        'key' => 'red-500-70',
                        'value' => 'rgba(214, 41, 41, 0.7)'
                    ],
                    [
                        'key' => 'red-500-80',
                        'value' => 'rgba(214, 41, 41, 0.8)'
                    ],
                    [
                        'key' => 'red-500-90',
                        'value' => 'rgba(214, 41, 41, 0.9)'
                    ],
                    [
                        'key' => 'red-500-100',
                        'value' => 'rgba(214, 41, 41, 1.0)'
                    ],
                    [
                        'key' => 'red-600',
                        'value' => '#AF2121'
                    ],
                    [
                        'key' => 'red-600-10',
                        'value' => 'rgba(175, 33, 33, 0.1)'
                    ],
                    [
                        'key' => 'red-600-20',
                        'value' => 'rgba(175, 33, 33, 0.2)'
                    ],
                    [
                        'key' => 'red-600-30',
                        'value' => 'rgba(175, 33, 33, 0.3)'
                    ],
                    [
                        'key' => 'red-600-40',
                        'value' => 'rgba(175, 33, 33, 0.4)'
                    ],
                    [
                        'key' => 'red-600-50',
                        'value' => 'rgba(175, 33, 33, 0.5)'
                    ],
                    [
                        'key' => 'red-600-60',
                        'value' => 'rgba(175, 33, 33, 0.6)'
                    ],
                    [
                        'key' => 'red-600-70',
                        'value' => 'rgba(175, 33, 33, 0.7)'
                    ],
                    [
                        'key' => 'red-600-80',
                        'value' => 'rgba(175, 33, 33, 0.8)'
                    ],
                    [
                        'key' => 'red-600-90',
                        'value' => 'rgba(175, 33, 33, 0.9)'
                    ],
                    [
                        'key' => 'red-600-100',
                        'value' => 'rgba(175, 33, 33, 1.0)'
                    ],
                    [
                        'key' => 'red-700',
                        'value' => '#881A1A'
                    ],
                    [
                        'key' => 'red-700-10',
                        'value' => 'rgba(136, 26, 26, 0.1)'
                    ],
                    [
                        'key' => 'red-700-20',
                        'value' => 'rgba(136, 26, 26, 0.2)'
                    ],
                    [
                        'key' => 'red-700-30',
                        'value' => 'rgba(136, 26, 26, 0.3)'
                    ],
                    [
                        'key' => 'red-700-40',
                        'value' => 'rgba(136, 26, 26, 0.4)'
                    ],
                    [
                        'key' => 'red-700-50',
                        'value' => 'rgba(136, 26, 26, 0.5)'
                    ],
                    [
                        'key' => 'red-700-60',
                        'value' => 'rgba(136, 26, 26, 0.6)'
                    ],
                    [
                        'key' => 'red-700-70',
                        'value' => 'rgba(136, 26, 26, 0.7)'
                    ],
                    [
                        'key' => 'red-700-80',
                        'value' => 'rgba(136, 26, 26, 0.8)'
                    ],
                    [
                        'key' => 'red-700-90',
                        'value' => 'rgba(136, 26, 26, 0.9)'
                    ],
                    [
                        'key' => 'red-700-100',
                        'value' => 'rgba(136, 26, 26, 1.0)'
                    ],
                    [
                        'key' => 'red-800',
                        'value' => '#611212'
                    ],
                    [
                        'key' => 'red-800-10',
                        'value' => 'rgba(97, 18, 18, 0.1)'
                    ],
                    [
                        'key' => 'red-800-20',
                        'value' => 'rgba(97, 18, 18, 0.2)'
                    ],
                    [
                        'key' => 'red-800-30',
                        'value' => 'rgba(97, 18, 18, 0.3)'
                    ],
                    [
                        'key' => 'red-800-40',
                        'value' => 'rgba(97, 18, 18, 0.4)'
                    ],
                    [
                        'key' => 'red-800-50',
                        'value' => 'rgba(97, 18, 18, 0.5)'
                    ],
                    [
                        'key' => 'red-800-60',
                        'value' => 'rgba(97, 18, 18, 0.6)'
                    ],
                    [
                        'key' => 'red-800-70',
                        'value' => 'rgba(97, 18, 18, 0.7)'
                    ],
                    [
                        'key' => 'red-800-80',
                        'value' => 'rgba(97, 18, 18, 0.8)'
                    ],
                    [
                        'key' => 'red-800-90',
                        'value' => 'rgba(97, 18, 18, 0.9)'
                    ],
                    [
                        'key' => 'red-800-100',
                        'value' => 'rgba(97, 18, 18, 1.0)'
                    ],
                    [
                        'key' => 'red-900',
                        'value' => '#3A0B0B'
                    ],
                    [
                        'key' => 'red-900-10',
                        'value' => 'rgba(58, 11, 11, 0.1)'
                    ],
                    [
                        'key' => 'red-900-20',
                        'value' => 'rgba(58, 11, 11, 0.2)'
                    ],
                    [
                        'key' => 'red-900-30',
                        'value' => 'rgba(58, 11, 11, 0.3)'
                    ],
                    [
                        'key' => 'red-900-40',
                        'value' => 'rgba(58, 11, 11, 0.4)'
                    ],
                    [
                        'key' => 'red-900-50',
                        'value' => 'rgba(58, 11, 11, 0.5)'
                    ],
                    [
                        'key' => 'red-900-60',
                        'value' => 'rgba(58, 11, 11, 0.6)'
                    ],
                    [
                        'key' => 'red-900-70',
                        'value' => 'rgba(58, 11, 11, 0.7)'
                    ],
                    [
                        'key' => 'red-900-80',
                        'value' => 'rgba(58, 11, 11, 0.8)'
                    ],
                    [
                        'key' => 'red-900-90',
                        'value' => 'rgba(58, 11, 11, 0.9)'
                    ],
                    [
                        'key' => 'red-900-100',
                        'value' => 'rgba(58, 11, 11, 1.0)'
                    ],
                    [
                        'key' => 'red-950',
                        'value' => '#130303'
                    ],
                    [
                        'key' => 'red-950-10',
                        'value' => 'rgba(19, 3, 3, 0.1)'
                    ],
                    [
                        'key' => 'red-950-20',
                        'value' => 'rgba(19, 3, 3, 0.2)'
                    ],
                    [
                        'key' => 'red-950-30',
                        'value' => 'rgba(19, 3, 3, 0.3)'
                    ],
                    [
                        'key' => 'red-950-40',
                        'value' => 'rgba(19, 3, 3, 0.4)'
                    ],
                    [
                        'key' => 'red-950-50',
                        'value' => 'rgba(19, 3, 3, 0.5)'
                    ],
                    [
                        'key' => 'red-950-60',
                        'value' => 'rgba(19, 3, 3, 0.6)'
                    ],
                    [
                        'key' => 'red-950-70',
                        'value' => 'rgba(19, 3, 3, 0.7)'
                    ],
                    [
                        'key' => 'red-950-80',
                        'value' => 'rgba(19, 3, 3, 0.8)'
                    ],
                    [
                        'key' => 'red-950-90',
                        'value' => 'rgba(19, 3, 3, 0.9)'
                    ],
                    [
                        'key' => 'red-950-100',
                        'value' => 'rgba(19, 3, 3, 1.0)'
                    ]
                ],
                'orange' => [
                    [
                        'key' => 'orange-50',
                        'value' => '#FFF3E7'
                    ],
                    [
                        'key' => 'orange-50-10',
                        'value' => 'rgba(255, 243, 231, 0.1)'
                    ],
                    [
                        'key' => 'orange-50-20',
                        'value' => 'rgba(255, 243, 231, 0.2)'
                    ],
                    [
                        'key' => 'orange-50-30',
                        'value' => 'rgba(255, 243, 231, 0.3)'
                    ],
                    [
                        'key' => 'orange-50-40',
                        'value' => 'rgba(255, 243, 231, 0.4)'
                    ],
                    [
                        'key' => 'orange-50-50',
                        'value' => 'rgba(255, 243, 231, 0.5)'
                    ],
                    [
                        'key' => 'orange-50-60',
                        'value' => 'rgba(255, 243, 231, 0.6)'
                    ],
                    [
                        'key' => 'orange-50-70',
                        'value' => 'rgba(255, 243, 231, 0.7)'
                    ],
                    [
                        'key' => 'orange-50-80',
                        'value' => 'rgba(255, 243, 231, 0.8)'
                    ],
                    [
                        'key' => 'orange-50-90',
                        'value' => 'rgba(255, 243, 231, 0.9)'
                    ],
                    [
                        'key' => 'orange-50-100',
                        'value' => 'rgba(255, 243, 231, 1.0)'
                    ],
                    [
                        'key' => 'orange-100',
                        'value' => '#FFDCB9'
                    ],
                    [
                        'key' => 'orange-100-10',
                        'value' => 'rgba(255, 220, 185, 0.1)'
                    ],
                    [
                        'key' => 'orange-100-20',
                        'value' => 'rgba(255, 220, 185, 0.2)'
                    ],
                    [
                        'key' => 'orange-100-30',
                        'value' => 'rgba(255, 220, 185, 0.3)'
                    ],
                    [
                        'key' => 'orange-100-40',
                        'value' => 'rgba(255, 220, 185, 0.4)'
                    ],
                    [
                        'key' => 'orange-100-50',
                        'value' => 'rgba(255, 220, 185, 0.5)'
                    ],
                    [
                        'key' => 'orange-100-60',
                        'value' => 'rgba(255, 220, 185, 0.6)'
                    ],
                    [
                        'key' => 'orange-100-70',
                        'value' => 'rgba(255, 220, 185, 0.7)'
                    ],
                    [
                        'key' => 'orange-100-80',
                        'value' => 'rgba(255, 220, 185, 0.8)'
                    ],
                    [
                        'key' => 'orange-100-90',
                        'value' => 'rgba(255, 220, 185, 0.9)'
                    ],
                    [
                        'key' => 'orange-100-100',
                        'value' => 'rgba(255, 220, 185, 1.0)'
                    ],
                    [
                        'key' => 'orange-200',
                        'value' => '#FFC48B'
                    ],
                    [
                        'key' => 'orange-200-10',
                        'value' => 'rgba(255, 196, 139, 0.1)'
                    ],
                    [
                        'key' => 'orange-200-20',
                        'value' => 'rgba(255, 196, 139, 0.2)'
                    ],
                    [
                        'key' => 'orange-200-30',
                        'value' => 'rgba(255, 196, 139, 0.3)'
                    ],
                    [
                        'key' => 'orange-200-40',
                        'value' => 'rgba(255, 196, 139, 0.4)'
                    ],
                    [
                        'key' => 'orange-200-50',
                        'value' => 'rgba(255, 196, 139, 0.5)'
                    ],
                    [
                        'key' => 'orange-200-60',
                        'value' => 'rgba(255, 196, 139, 0.6)'
                    ],
                    [
                        'key' => 'orange-200-70',
                        'value' => 'rgba(255, 196, 139, 0.7)'
                    ],
                    [
                        'key' => 'orange-200-80',
                        'value' => 'rgba(255, 196, 139, 0.8)'
                    ],
                    [
                        'key' => 'orange-200-90',
                        'value' => 'rgba(255, 196, 139, 0.9)'
                    ],
                    [
                        'key' => 'orange-200-100',
                        'value' => 'rgba(255, 196, 139, 1.0)'
                    ],
                    [
                        'key' => 'orange-300',
                        'value' => '#FFAD5C'
                    ],
                    [
                        'key' => 'orange-300-10',
                        'value' => 'rgba(255, 173, 92, 0.1)'
                    ],
                    [
                        'key' => 'orange-300-20',
                        'value' => 'rgba(255, 173, 92, 0.2)'
                    ],
                    [
                        'key' => 'orange-300-30',
                        'value' => 'rgba(255, 173, 92, 0.3)'
                    ],
                    [
                        'key' => 'orange-300-40',
                        'value' => 'rgba(255, 173, 92, 0.4)'
                    ],
                    [
                        'key' => 'orange-300-50',
                        'value' => 'rgba(255, 173, 92, 0.5)'
                    ],
                    [
                        'key' => 'orange-300-60',
                        'value' => 'rgba(255, 173, 92, 0.6)'
                    ],
                    [
                        'key' => 'orange-300-70',
                        'value' => 'rgba(255, 173, 92, 0.7)'
                    ],
                    [
                        'key' => 'orange-300-80',
                        'value' => 'rgba(255, 173, 92, 0.8)'
                    ],
                    [
                        'key' => 'orange-300-90',
                        'value' => 'rgba(255, 173, 92, 0.9)'
                    ],
                    [
                        'key' => 'orange-300-100',
                        'value' => 'rgba(255, 173, 92, 1.0)'
                    ],
                    [
                        'key' => 'orange-400',
                        'value' => '#FE962E'
                    ],
                    [
                        'key' => 'orange-400-10',
                        'value' => 'rgba(254, 150, 46, 0.1)'
                    ],
                    [
                        'key' => 'orange-400-20',
                        'value' => 'rgba(254, 150, 46, 0.2)'
                    ],
                    [
                        'key' => 'orange-400-30',
                        'value' => 'rgba(254, 150, 46, 0.3)'
                    ],
                    [
                        'key' => 'orange-400-40',
                        'value' => 'rgba(254, 150, 46, 0.4)'
                    ],
                    [
                        'key' => 'orange-400-50',
                        'value' => 'rgba(254, 150, 46, 0.5)'
                    ],
                    [
                        'key' => 'orange-400-60',
                        'value' => 'rgba(254, 150, 46, 0.6)'
                    ],
                    [
                        'key' => 'orange-400-70',
                        'value' => 'rgba(254, 150, 46, 0.7)'
                    ],
                    [
                        'key' => 'orange-400-80',
                        'value' => 'rgba(254, 150, 46, 0.8)'
                    ],
                    [
                        'key' => 'orange-400-90',
                        'value' => 'rgba(254, 150, 46, 0.9)'
                    ],
                    [
                        'key' => 'orange-400-100',
                        'value' => 'rgba(254, 150, 46, 1.0)'
                    ],
                    [
                        'key' => 'orange-500',
                        'value' => '#FF7F00'
                    ],
                    [
                        'key' => 'orange-500-10',
                        'value' => 'rgba(255, 127, 0, 0.1)'
                    ],
                    [
                        'key' => 'orange-500-20',
                        'value' => 'rgba(255, 127, 0, 0.2)'
                    ],
                    [
                        'key' => 'orange-500-30',
                        'value' => 'rgba(255, 127, 0, 0.3)'
                    ],
                    [
                        'key' => 'orange-500-40',
                        'value' => 'rgba(255, 127, 0, 0.4)'
                    ],
                    [
                        'key' => 'orange-500-50',
                        'value' => 'rgba(255, 127, 0, 0.5)'
                    ],
                    [
                        'key' => 'orange-500-60',
                        'value' => 'rgba(255, 127, 0, 0.6)'
                    ],
                    [
                        'key' => 'orange-500-70',
                        'value' => 'rgba(255, 127, 0, 0.7)'
                    ],
                    [
                        'key' => 'orange-500-80',
                        'value' => 'rgba(255, 127, 0, 0.8)'
                    ],
                    [
                        'key' => 'orange-500-90',
                        'value' => 'rgba(255, 127, 0, 0.9)'
                    ],
                    [
                        'key' => 'orange-500-100',
                        'value' => 'rgba(255, 127, 0, 1.0)'
                    ],
                    [
                        'key' => 'orange-600',
                        'value' => '#D06700'
                    ],
                    [
                        'key' => 'orange-600-10',
                        'value' => 'rgba(208, 103, 0, 0.1)'
                    ],
                    [
                        'key' => 'orange-600-20',
                        'value' => 'rgba(208, 103, 0, 0.2)'
                    ],
                    [
                        'key' => 'orange-600-30',
                        'value' => 'rgba(208, 103, 0, 0.3)'
                    ],
                    [
                        'key' => 'orange-600-40',
                        'value' => 'rgba(208, 103, 0, 0.4)'
                    ],
                    [
                        'key' => 'orange-600-50',
                        'value' => 'rgba(208, 103, 0, 0.5)'
                    ],
                    [
                        'key' => 'orange-600-60',
                        'value' => 'rgba(208, 103, 0, 0.6)'
                    ],
                    [
                        'key' => 'orange-600-70',
                        'value' => 'rgba(208, 103, 0, 0.7)'
                    ],
                    [
                        'key' => 'orange-600-80',
                        'value' => 'rgba(208, 103, 0, 0.8)'
                    ],
                    [
                        'key' => 'orange-600-90',
                        'value' => 'rgba(208, 103, 0, 0.9)'
                    ],
                    [
                        'key' => 'orange-600-100',
                        'value' => 'rgba(208, 103, 0, 1.0)'
                    ],
                    [
                        'key' => 'orange-700',
                        'value' => '#A25000'
                    ],
                    [
                        'key' => 'orange-700-10',
                        'value' => 'rgba(162, 80, 0, 0.1)'
                    ],
                    [
                        'key' => 'orange-700-20',
                        'value' => 'rgba(162, 80, 0, 0.2)'
                    ],
                    [
                        'key' => 'orange-700-30',
                        'value' => 'rgba(162, 80, 0, 0.3)'
                    ],
                    [
                        'key' => 'orange-700-40',
                        'value' => 'rgba(162, 80, 0, 0.4)'
                    ],
                    [
                        'key' => 'orange-700-50',
                        'value' => 'rgba(162, 80, 0, 0.5)'
                    ],
                    [
                        'key' => 'orange-700-60',
                        'value' => 'rgba(162, 80, 0, 0.6)'
                    ],
                    [
                        'key' => 'orange-700-70',
                        'value' => 'rgba(162, 80, 0, 0.7)'
                    ],
                    [
                        'key' => 'orange-700-80',
                        'value' => 'rgba(162, 80, 0, 0.8)'
                    ],
                    [
                        'key' => 'orange-700-90',
                        'value' => 'rgba(162, 80, 0, 0.9)'
                    ],
                    [
                        'key' => 'orange-700-100',
                        'value' => 'rgba(162, 80, 0, 1.0)'
                    ],
                    [
                        'key' => 'orange-800',
                        'value' => '#733900'
                    ],
                    [
                        'key' => 'orange-800-10',
                        'value' => 'rgba(115, 57, 0, 0.1)'
                    ],
                    [
                        'key' => 'orange-800-20',
                        'value' => 'rgba(115, 57, 0, 0.2)'
                    ],
                    [
                        'key' => 'orange-800-30',
                        'value' => 'rgba(115, 57, 0, 0.3)'
                    ],
                    [
                        'key' => 'orange-800-40',
                        'value' => 'rgba(115, 57, 0, 0.4)'
                    ],
                    [
                        'key' => 'orange-800-50',
                        'value' => 'rgba(115, 57, 0, 0.5)'
                    ],
                    [
                        'key' => 'orange-800-60',
                        'value' => 'rgba(115, 57, 0, 0.6)'
                    ],
                    [
                        'key' => 'orange-800-70',
                        'value' => 'rgba(115, 57, 0, 0.7)'
                    ],
                    [
                        'key' => 'orange-800-80',
                        'value' => 'rgba(115, 57, 0, 0.8)'
                    ],
                    [
                        'key' => 'orange-800-90',
                        'value' => 'rgba(115, 57, 0, 0.9)'
                    ],
                    [
                        'key' => 'orange-800-100',
                        'value' => 'rgba(115, 57, 0, 1.0)'
                    ],
                    [
                        'key' => 'orange-900',
                        'value' => '#452200'
                    ],
                    [
                        'key' => 'orange-900-10',
                        'value' => 'rgba(69, 34, 0, 0.1)'
                    ],
                    [
                        'key' => 'orange-900-20',
                        'value' => 'rgba(69, 34, 0, 0.2)'
                    ],
                    [
                        'key' => 'orange-900-30',
                        'value' => 'rgba(69, 34, 0, 0.3)'
                    ],
                    [
                        'key' => 'orange-900-40',
                        'value' => 'rgba(69, 34, 0, 0.4)'
                    ],
                    [
                        'key' => 'orange-900-50',
                        'value' => 'rgba(69, 34, 0, 0.5)'
                    ],
                    [
                        'key' => 'orange-900-60',
                        'value' => 'rgba(69, 34, 0, 0.6)'
                    ],
                    [
                        'key' => 'orange-900-70',
                        'value' => 'rgba(69, 34, 0, 0.7)'
                    ],
                    [
                        'key' => 'orange-900-80',
                        'value' => 'rgba(69, 34, 0, 0.8)'
                    ],
                    [
                        'key' => 'orange-900-90',
                        'value' => 'rgba(69, 34, 0, 0.9)'
                    ],
                    [
                        'key' => 'orange-900-100',
                        'value' => 'rgba(69, 34, 0, 1.0)'
                    ],
                    [
                        'key' => 'orange-950',
                        'value' => '#170B00'
                    ],
                    [
                        'key' => 'orange-950-10',
                        'value' => 'rgba(23, 11, 0, 0.1)'
                    ],
                    [
                        'key' => 'orange-950-20',
                        'value' => 'rgba(23, 11, 0, 0.2)'
                    ],
                    [
                        'key' => 'orange-950-30',
                        'value' => 'rgba(23, 11, 0, 0.3)'
                    ],
                    [
                        'key' => 'orange-950-40',
                        'value' => 'rgba(23, 11, 0, 0.4)'
                    ],
                    [
                        'key' => 'orange-950-50',
                        'value' => 'rgba(23, 11, 0, 0.5)'
                    ],
                    [
                        'key' => 'orange-950-60',
                        'value' => 'rgba(23, 11, 0, 0.6)'
                    ],
                    [
                        'key' => 'orange-950-70',
                        'value' => 'rgba(23, 11, 0, 0.7)'
                    ],
                    [
                        'key' => 'orange-950-80',
                        'value' => 'rgba(23, 11, 0, 0.8)'
                    ],
                    [
                        'key' => 'orange-950-90',
                        'value' => 'rgba(23, 11, 0, 0.9)'
                    ],
                    [
                        'key' => 'orange-950-100',
                        'value' => 'rgba(23, 11, 0, 1.0)'
                    ]
                ],
                'sunset' => [
                    [
                        'key' => 'sunset-50',
                        'value' => '#FFF7E7'
                    ],
                    [
                        'key' => 'sunset-50-10',
                        'value' => 'rgba(255, 247, 231, 0.1)'
                    ],
                    [
                        'key' => 'sunset-50-20',
                        'value' => 'rgba(255, 247, 231, 0.2)'
                    ],
                    [
                        'key' => 'sunset-50-30',
                        'value' => 'rgba(255, 247, 231, 0.3)'
                    ],
                    [
                        'key' => 'sunset-50-40',
                        'value' => 'rgba(255, 247, 231, 0.4)'
                    ],
                    [
                        'key' => 'sunset-50-50',
                        'value' => 'rgba(255, 247, 231, 0.5)'
                    ],
                    [
                        'key' => 'sunset-50-60',
                        'value' => 'rgba(255, 247, 231, 0.6)'
                    ],
                    [
                        'key' => 'sunset-50-70',
                        'value' => 'rgba(255, 247, 231, 0.7)'
                    ],
                    [
                        'key' => 'sunset-50-80',
                        'value' => 'rgba(255, 247, 231, 0.8)'
                    ],
                    [
                        'key' => 'sunset-50-90',
                        'value' => 'rgba(255, 247, 231, 0.9)'
                    ],
                    [
                        'key' => 'sunset-50-100',
                        'value' => 'rgba(255, 247, 231, 1.0)'
                    ],
                    [
                        'key' => 'sunset-100',
                        'value' => '#FFE9B9'
                    ],
                    [
                        'key' => 'sunset-100-10',
                        'value' => 'rgba(255, 233, 185, 0.1)'
                    ],
                    [
                        'key' => 'sunset-100-20',
                        'value' => 'rgba(255, 233, 185, 0.2)'
                    ],
                    [
                        'key' => 'sunset-100-30',
                        'value' => 'rgba(255, 233, 185, 0.3)'
                    ],
                    [
                        'key' => 'sunset-100-40',
                        'value' => 'rgba(255, 233, 185, 0.4)'
                    ],
                    [
                        'key' => 'sunset-100-50',
                        'value' => 'rgba(255, 233, 185, 0.5)'
                    ],
                    [
                        'key' => 'sunset-100-60',
                        'value' => 'rgba(255, 233, 185, 0.6)'
                    ],
                    [
                        'key' => 'sunset-100-70',
                        'value' => 'rgba(255, 233, 185, 0.7)'
                    ],
                    [
                        'key' => 'sunset-100-80',
                        'value' => 'rgba(255, 233, 185, 0.8)'
                    ],
                    [
                        'key' => 'sunset-100-90',
                        'value' => 'rgba(255, 233, 185, 0.9)'
                    ],
                    [
                        'key' => 'sunset-100-100',
                        'value' => 'rgba(255, 233, 185, 1.0)'
                    ],
                    [
                        'key' => 'sunset-200',
                        'value' => '#FFDB8B'
                    ],
                    [
                        'key' => 'sunset-200-10',
                        'value' => 'rgba(255, 219, 139, 0.1)'
                    ],
                    [
                        'key' => 'sunset-200-20',
                        'value' => 'rgba(255, 219, 139, 0.2)'
                    ],
                    [
                        'key' => 'sunset-200-30',
                        'value' => 'rgba(255, 219, 139, 0.3)'
                    ],
                    [
                        'key' => 'sunset-200-40',
                        'value' => 'rgba(255, 219, 139, 0.4)'
                    ],
                    [
                        'key' => 'sunset-200-50',
                        'value' => 'rgba(255, 219, 139, 0.5)'
                    ],
                    [
                        'key' => 'sunset-200-60',
                        'value' => 'rgba(255, 219, 139, 0.6)'
                    ],
                    [
                        'key' => 'sunset-200-70',
                        'value' => 'rgba(255, 219, 139, 0.7)'
                    ],
                    [
                        'key' => 'sunset-200-80',
                        'value' => 'rgba(255, 219, 139, 0.8)'
                    ],
                    [
                        'key' => 'sunset-200-90',
                        'value' => 'rgba(255, 219, 139, 0.9)'
                    ],
                    [
                        'key' => 'sunset-200-100',
                        'value' => 'rgba(255, 219, 139, 1.0)'
                    ],
                    [
                        'key' => 'sunset-300',
                        'value' => '#FFCC5C'
                    ],
                    [
                        'key' => 'sunset-300-10',
                        'value' => 'rgba(255, 204, 92, 0.1)'
                    ],
                    [
                        'key' => 'sunset-300-20',
                        'value' => 'rgba(255, 204, 92, 0.2)'
                    ],
                    [
                        'key' => 'sunset-300-30',
                        'value' => 'rgba(255, 204, 92, 0.3)'
                    ],
                    [
                        'key' => 'sunset-300-40',
                        'value' => 'rgba(255, 204, 92, 0.4)'
                    ],
                    [
                        'key' => 'sunset-300-50',
                        'value' => 'rgba(255, 204, 92, 0.5)'
                    ],
                    [
                        'key' => 'sunset-300-60',
                        'value' => 'rgba(255, 204, 92, 0.6)'
                    ],
                    [
                        'key' => 'sunset-300-70',
                        'value' => 'rgba(255, 204, 92, 0.7)'
                    ],
                    [
                        'key' => 'sunset-300-80',
                        'value' => 'rgba(255, 204, 92, 0.8)'
                    ],
                    [
                        'key' => 'sunset-300-90',
                        'value' => 'rgba(255, 204, 92, 0.9)'
                    ],
                    [
                        'key' => 'sunset-300-100',
                        'value' => 'rgba(255, 204, 92, 1.0)'
                    ],
                    [
                        'key' => 'sunset-400',
                        'value' => '#FEBE2E'
                    ],
                    [
                        'key' => 'sunset-400-10',
                        'value' => 'rgba(254, 190, 46, 0.1)'
                    ],
                    [
                        'key' => 'sunset-400-20',
                        'value' => 'rgba(254, 190, 46, 0.2)'
                    ],
                    [
                        'key' => 'sunset-400-30',
                        'value' => 'rgba(254, 190, 46, 0.3)'
                    ],
                    [
                        'key' => 'sunset-400-40',
                        'value' => 'rgba(254, 190, 46, 0.4)'
                    ],
                    [
                        'key' => 'sunset-400-50',
                        'value' => 'rgba(254, 190, 46, 0.5)'
                    ],
                    [
                        'key' => 'sunset-400-60',
                        'value' => 'rgba(254, 190, 46, 0.6)'
                    ],
                    [
                        'key' => 'sunset-400-70',
                        'value' => 'rgba(254, 190, 46, 0.7)'
                    ],
                    [
                        'key' => 'sunset-400-80',
                        'value' => 'rgba(254, 190, 46, 0.8)'
                    ],
                    [
                        'key' => 'sunset-400-90',
                        'value' => 'rgba(254, 190, 46, 0.9)'
                    ],
                    [
                        'key' => 'sunset-400-100',
                        'value' => 'rgba(254, 190, 46, 1.0)'
                    ],
                    [
                        'key' => 'sunset-500',
                        'value' => '#FFB000'
                    ],
                    [
                        'key' => 'sunset-500-10',
                        'value' => 'rgba(255, 176, 0, 0.1)'
                    ],
                    [
                        'key' => 'sunset-500-20',
                        'value' => 'rgba(255, 176, 0, 0.2)'
                    ],
                    [
                        'key' => 'sunset-500-30',
                        'value' => 'rgba(255, 176, 0, 0.3)'
                    ],
                    [
                        'key' => 'sunset-500-40',
                        'value' => 'rgba(255, 176, 0, 0.4)'
                    ],
                    [
                        'key' => 'sunset-500-50',
                        'value' => 'rgba(255, 176, 0, 0.5)'
                    ],
                    [
                        'key' => 'sunset-500-60',
                        'value' => 'rgba(255, 176, 0, 0.6)'
                    ],
                    [
                        'key' => 'sunset-500-70',
                        'value' => 'rgba(255, 176, 0, 0.7)'
                    ],
                    [
                        'key' => 'sunset-500-80',
                        'value' => 'rgba(255, 176, 0, 0.8)'
                    ],
                    [
                        'key' => 'sunset-500-90',
                        'value' => 'rgba(255, 176, 0, 0.9)'
                    ],
                    [
                        'key' => 'sunset-500-100',
                        'value' => 'rgba(255, 176, 0, 1.0)'
                    ],
                    [
                        'key' => 'sunset-600',
                        'value' => '#D08F00'
                    ],
                    [
                        'key' => 'sunset-600-10',
                        'value' => 'rgba(208, 143, 0, 0.1)'
                    ],
                    [
                        'key' => 'sunset-600-20',
                        'value' => 'rgba(208, 143, 0, 0.2)'
                    ],
                    [
                        'key' => 'sunset-600-30',
                        'value' => 'rgba(208, 143, 0, 0.3)'
                    ],
                    [
                        'key' => 'sunset-600-40',
                        'value' => 'rgba(208, 143, 0, 0.4)'
                    ],
                    [
                        'key' => 'sunset-600-50',
                        'value' => 'rgba(208, 143, 0, 0.5)'
                    ],
                    [
                        'key' => 'sunset-600-60',
                        'value' => 'rgba(208, 143, 0, 0.6)'
                    ],
                    [
                        'key' => 'sunset-600-70',
                        'value' => 'rgba(208, 143, 0, 0.7)'
                    ],
                    [
                        'key' => 'sunset-600-80',
                        'value' => 'rgba(208, 143, 0, 0.8)'
                    ],
                    [
                        'key' => 'sunset-600-90',
                        'value' => 'rgba(208, 143, 0, 0.9)'
                    ],
                    [
                        'key' => 'sunset-600-100',
                        'value' => 'rgba(208, 143, 0, 1.0)'
                    ],
                    [
                        'key' => 'sunset-700',
                        'value' => '#A26F00'
                    ],
                    [
                        'key' => 'sunset-700-10',
                        'value' => 'rgba(162, 111, 0, 0.1)'
                    ],
                    [
                        'key' => 'sunset-700-20',
                        'value' => 'rgba(162, 111, 0, 0.2)'
                    ],
                    [
                        'key' => 'sunset-700-30',
                        'value' => 'rgba(162, 111, 0, 0.3)'
                    ],
                    [
                        'key' => 'sunset-700-40',
                        'value' => 'rgba(162, 111, 0, 0.4)'
                    ],
                    [
                        'key' => 'sunset-700-50',
                        'value' => 'rgba(162, 111, 0, 0.5)'
                    ],
                    [
                        'key' => 'sunset-700-60',
                        'value' => 'rgba(162, 111, 0, 0.6)'
                    ],
                    [
                        'key' => 'sunset-700-70',
                        'value' => 'rgba(162, 111, 0, 0.7)'
                    ],
                    [
                        'key' => 'sunset-700-80',
                        'value' => 'rgba(162, 111, 0, 0.8)'
                    ],
                    [
                        'key' => 'sunset-700-90',
                        'value' => 'rgba(162, 111, 0, 0.9)'
                    ],
                    [
                        'key' => 'sunset-700-100',
                        'value' => 'rgba(162, 111, 0, 1.0)'
                    ],
                    [
                        'key' => 'sunset-800',
                        'value' => '#735000'
                    ],
                    [
                        'key' => 'sunset-800-10',
                        'value' => 'rgba(115, 80, 0, 0.1)'
                    ],
                    [
                        'key' => 'sunset-800-20',
                        'value' => 'rgba(115, 80, 0, 0.2)'
                    ],
                    [
                        'key' => 'sunset-800-30',
                        'value' => 'rgba(115, 80, 0, 0.3)'
                    ],
                    [
                        'key' => 'sunset-800-40',
                        'value' => 'rgba(115, 80, 0, 0.4)'
                    ],
                    [
                        'key' => 'sunset-800-50',
                        'value' => 'rgba(115, 80, 0, 0.5)'
                    ],
                    [
                        'key' => 'sunset-800-60',
                        'value' => 'rgba(115, 80, 0, 0.6)'
                    ],
                    [
                        'key' => 'sunset-800-70',
                        'value' => 'rgba(115, 80, 0, 0.7)'
                    ],
                    [
                        'key' => 'sunset-800-80',
                        'value' => 'rgba(115, 80, 0, 0.8)'
                    ],
                    [
                        'key' => 'sunset-800-90',
                        'value' => 'rgba(115, 80, 0, 0.9)'
                    ],
                    [
                        'key' => 'sunset-800-100',
                        'value' => 'rgba(115, 80, 0, 1.0)'
                    ],
                    [
                        'key' => 'sunset-900',
                        'value' => '#452F00'
                    ],
                    [
                        'key' => 'sunset-900-10',
                        'value' => 'rgba(69, 47, 0, 0.1)'
                    ],
                    [
                        'key' => 'sunset-900-20',
                        'value' => 'rgba(69, 47, 0, 0.2)'
                    ],
                    [
                        'key' => 'sunset-900-30',
                        'value' => 'rgba(69, 47, 0, 0.3)'
                    ],
                    [
                        'key' => 'sunset-900-40',
                        'value' => 'rgba(69, 47, 0, 0.4)'
                    ],
                    [
                        'key' => 'sunset-900-50',
                        'value' => 'rgba(69, 47, 0, 0.5)'
                    ],
                    [
                        'key' => 'sunset-900-60',
                        'value' => 'rgba(69, 47, 0, 0.6)'
                    ],
                    [
                        'key' => 'sunset-900-70',
                        'value' => 'rgba(69, 47, 0, 0.7)'
                    ],
                    [
                        'key' => 'sunset-900-80',
                        'value' => 'rgba(69, 47, 0, 0.8)'
                    ],
                    [
                        'key' => 'sunset-900-90',
                        'value' => 'rgba(69, 47, 0, 0.9)'
                    ],
                    [
                        'key' => 'sunset-900-100',
                        'value' => 'rgba(69, 47, 0, 1.0)'
                    ],
                    [
                        'key' => 'sunset-950',
                        'value' => '#171000'
                    ],
                    [
                        'key' => 'sunset-950-10',
                        'value' => 'rgba(23, 16, 0, 0.1)'
                    ],
                    [
                        'key' => 'sunset-950-20',
                        'value' => 'rgba(23, 16, 0, 0.2)'
                    ],
                    [
                        'key' => 'sunset-950-30',
                        'value' => 'rgba(23, 16, 0, 0.3)'
                    ],
                    [
                        'key' => 'sunset-950-40',
                        'value' => 'rgba(23, 16, 0, 0.4)'
                    ],
                    [
                        'key' => 'sunset-950-50',
                        'value' => 'rgba(23, 16, 0, 0.5)'
                    ],
                    [
                        'key' => 'sunset-950-60',
                        'value' => 'rgba(23, 16, 0, 0.6)'
                    ],
                    [
                        'key' => 'sunset-950-70',
                        'value' => 'rgba(23, 16, 0, 0.7)'
                    ],
                    [
                        'key' => 'sunset-950-80',
                        'value' => 'rgba(23, 16, 0, 0.8)'
                    ],
                    [
                        'key' => 'sunset-950-90',
                        'value' => 'rgba(23, 16, 0, 0.9)'
                    ],
                    [
                        'key' => 'sunset-950-100',
                        'value' => 'rgba(23, 16, 0, 1.0)'
                    ]
                ],
                'yellow' => [
                    [
                        'key' => 'yellow-50',
                        'value' => '#FFFDE7'
                    ],
                    [
                        'key' => 'yellow-50-10',
                        'value' => 'rgba(255, 253, 231, 0.1)'
                    ],
                    [
                        'key' => 'yellow-50-20',
                        'value' => 'rgba(255, 253, 231, 0.2)'
                    ],
                    [
                        'key' => 'yellow-50-30',
                        'value' => 'rgba(255, 253, 231, 0.3)'
                    ],
                    [
                        'key' => 'yellow-50-40',
                        'value' => 'rgba(255, 253, 231, 0.4)'
                    ],
                    [
                        'key' => 'yellow-50-50',
                        'value' => 'rgba(255, 253, 231, 0.5)'
                    ],
                    [
                        'key' => 'yellow-50-60',
                        'value' => 'rgba(255, 253, 231, 0.6)'
                    ],
                    [
                        'key' => 'yellow-50-70',
                        'value' => 'rgba(255, 253, 231, 0.7)'
                    ],
                    [
                        'key' => 'yellow-50-80',
                        'value' => 'rgba(255, 253, 231, 0.8)'
                    ],
                    [
                        'key' => 'yellow-50-90',
                        'value' => 'rgba(255, 253, 231, 0.9)'
                    ],
                    [
                        'key' => 'yellow-50-100',
                        'value' => 'rgba(255, 253, 231, 1.0)'
                    ],
                    [
                        'key' => 'yellow-100',
                        'value' => '#FFF9B9'
                    ],
                    [
                        'key' => 'yellow-100-10',
                        'value' => 'rgba(255, 249, 185, 0.1)'
                    ],
                    [
                        'key' => 'yellow-100-20',
                        'value' => 'rgba(255, 249, 185, 0.2)'
                    ],
                    [
                        'key' => 'yellow-100-30',
                        'value' => 'rgba(255, 249, 185, 0.3)'
                    ],
                    [
                        'key' => 'yellow-100-40',
                        'value' => 'rgba(255, 249, 185, 0.4)'
                    ],
                    [
                        'key' => 'yellow-100-50',
                        'value' => 'rgba(255, 249, 185, 0.5)'
                    ],
                    [
                        'key' => 'yellow-100-60',
                        'value' => 'rgba(255, 249, 185, 0.6)'
                    ],
                    [
                        'key' => 'yellow-100-70',
                        'value' => 'rgba(255, 249, 185, 0.7)'
                    ],
                    [
                        'key' => 'yellow-100-80',
                        'value' => 'rgba(255, 249, 185, 0.8)'
                    ],
                    [
                        'key' => 'yellow-100-90',
                        'value' => 'rgba(255, 249, 185, 0.9)'
                    ],
                    [
                        'key' => 'yellow-100-100',
                        'value' => 'rgba(255, 249, 185, 1.0)'
                    ],
                    [
                        'key' => 'yellow-200',
                        'value' => '#FFF58B'
                    ],
                    [
                        'key' => 'yellow-200-10',
                        'value' => 'rgba(255, 245, 139, 0.1)'
                    ],
                    [
                        'key' => 'yellow-200-20',
                        'value' => 'rgba(255, 245, 139, 0.2)'
                    ],
                    [
                        'key' => 'yellow-200-30',
                        'value' => 'rgba(255, 245, 139, 0.3)'
                    ],
                    [
                        'key' => 'yellow-200-40',
                        'value' => 'rgba(255, 245, 139, 0.4)'
                    ],
                    [
                        'key' => 'yellow-200-50',
                        'value' => 'rgba(255, 245, 139, 0.5)'
                    ],
                    [
                        'key' => 'yellow-200-60',
                        'value' => 'rgba(255, 245, 139, 0.6)'
                    ],
                    [
                        'key' => 'yellow-200-70',
                        'value' => 'rgba(255, 245, 139, 0.7)'
                    ],
                    [
                        'key' => 'yellow-200-80',
                        'value' => 'rgba(255, 245, 139, 0.8)'
                    ],
                    [
                        'key' => 'yellow-200-90',
                        'value' => 'rgba(255, 245, 139, 0.9)'
                    ],
                    [
                        'key' => 'yellow-200-100',
                        'value' => 'rgba(255, 245, 139, 1.0)'
                    ],
                    [
                        'key' => 'yellow-300',
                        'value' => '#FFF15C'
                    ],
                    [
                        'key' => 'yellow-300-10',
                        'value' => 'rgba(255, 241, 92, 0.1)'
                    ],
                    [
                        'key' => 'yellow-300-20',
                        'value' => 'rgba(255, 241, 92, 0.2)'
                    ],
                    [
                        'key' => 'yellow-300-30',
                        'value' => 'rgba(255, 241, 92, 0.3)'
                    ],
                    [
                        'key' => 'yellow-300-40',
                        'value' => 'rgba(255, 241, 92, 0.4)'
                    ],
                    [
                        'key' => 'yellow-300-50',
                        'value' => 'rgba(255, 241, 92, 0.5)'
                    ],
                    [
                        'key' => 'yellow-300-60',
                        'value' => 'rgba(255, 241, 92, 0.6)'
                    ],
                    [
                        'key' => 'yellow-300-70',
                        'value' => 'rgba(255, 241, 92, 0.7)'
                    ],
                    [
                        'key' => 'yellow-300-80',
                        'value' => 'rgba(255, 241, 92, 0.8)'
                    ],
                    [
                        'key' => 'yellow-300-90',
                        'value' => 'rgba(255, 241, 92, 0.9)'
                    ],
                    [
                        'key' => 'yellow-300-100',
                        'value' => 'rgba(255, 241, 92, 1.0)'
                    ],
                    [
                        'key' => 'yellow-400',
                        'value' => '#FEED2E'
                    ],
                    [
                        'key' => 'yellow-400-10',
                        'value' => 'rgba(254, 237, 46, 0.1)'
                    ],
                    [
                        'key' => 'yellow-400-20',
                        'value' => 'rgba(254, 237, 46, 0.2)'
                    ],
                    [
                        'key' => 'yellow-400-30',
                        'value' => 'rgba(254, 237, 46, 0.3)'
                    ],
                    [
                        'key' => 'yellow-400-40',
                        'value' => 'rgba(254, 237, 46, 0.4)'
                    ],
                    [
                        'key' => 'yellow-400-50',
                        'value' => 'rgba(254, 237, 46, 0.5)'
                    ],
                    [
                        'key' => 'yellow-400-60',
                        'value' => 'rgba(254, 237, 46, 0.6)'
                    ],
                    [
                        'key' => 'yellow-400-70',
                        'value' => 'rgba(254, 237, 46, 0.7)'
                    ],
                    [
                        'key' => 'yellow-400-80',
                        'value' => 'rgba(254, 237, 46, 0.8)'
                    ],
                    [
                        'key' => 'yellow-400-90',
                        'value' => 'rgba(254, 237, 46, 0.9)'
                    ],
                    [
                        'key' => 'yellow-400-100',
                        'value' => 'rgba(254, 237, 46, 1.0)'
                    ],
                    [
                        'key' => 'yellow-500',
                        'value' => '#FFEA00'
                    ],
                    [
                        'key' => 'yellow-500-10',
                        'value' => 'rgba(255, 234, 0, 0.1)'
                    ],
                    [
                        'key' => 'yellow-500-20',
                        'value' => 'rgba(255, 234, 0, 0.2)'
                    ],
                    [
                        'key' => 'yellow-500-30',
                        'value' => 'rgba(255, 234, 0, 0.3)'
                    ],
                    [
                        'key' => 'yellow-500-40',
                        'value' => 'rgba(255, 234, 0, 0.4)'
                    ],
                    [
                        'key' => 'yellow-500-50',
                        'value' => 'rgba(255, 234, 0, 0.5)'
                    ],
                    [
                        'key' => 'yellow-500-60',
                        'value' => 'rgba(255, 234, 0, 0.6)'
                    ],
                    [
                        'key' => 'yellow-500-70',
                        'value' => 'rgba(255, 234, 0, 0.7)'
                    ],
                    [
                        'key' => 'yellow-500-80',
                        'value' => 'rgba(255, 234, 0, 0.8)'
                    ],
                    [
                        'key' => 'yellow-500-90',
                        'value' => 'rgba(255, 234, 0, 0.9)'
                    ],
                    [
                        'key' => 'yellow-500-100',
                        'value' => 'rgba(255, 234, 0, 1.0)'
                    ],
                    [
                        'key' => 'yellow-600',
                        'value' => '#D0BF00'
                    ],
                    [
                        'key' => 'yellow-600-10',
                        'value' => 'rgba(208, 191, 0, 0.1)'
                    ],
                    [
                        'key' => 'yellow-600-20',
                        'value' => 'rgba(208, 191, 0, 0.2)'
                    ],
                    [
                        'key' => 'yellow-600-30',
                        'value' => 'rgba(208, 191, 0, 0.3)'
                    ],
                    [
                        'key' => 'yellow-600-40',
                        'value' => 'rgba(208, 191, 0, 0.4)'
                    ],
                    [
                        'key' => 'yellow-600-50',
                        'value' => 'rgba(208, 191, 0, 0.5)'
                    ],
                    [
                        'key' => 'yellow-600-60',
                        'value' => 'rgba(208, 191, 0, 0.6)'
                    ],
                    [
                        'key' => 'yellow-600-70',
                        'value' => 'rgba(208, 191, 0, 0.7)'
                    ],
                    [
                        'key' => 'yellow-600-80',
                        'value' => 'rgba(208, 191, 0, 0.8)'
                    ],
                    [
                        'key' => 'yellow-600-90',
                        'value' => 'rgba(208, 191, 0, 0.9)'
                    ],
                    [
                        'key' => 'yellow-600-100',
                        'value' => 'rgba(208, 191, 0, 1.0)'
                    ],
                    [
                        'key' => 'yellow-700',
                        'value' => '#A29400'
                    ],
                    [
                        'key' => 'yellow-700-10',
                        'value' => 'rgba(162, 148, 0, 0.1)'
                    ],
                    [
                        'key' => 'yellow-700-20',
                        'value' => 'rgba(162, 148, 0, 0.2)'
                    ],
                    [
                        'key' => 'yellow-700-30',
                        'value' => 'rgba(162, 148, 0, 0.3)'
                    ],
                    [
                        'key' => 'yellow-700-40',
                        'value' => 'rgba(162, 148, 0, 0.4)'
                    ],
                    [
                        'key' => 'yellow-700-50',
                        'value' => 'rgba(162, 148, 0, 0.5)'
                    ],
                    [
                        'key' => 'yellow-700-60',
                        'value' => 'rgba(162, 148, 0, 0.6)'
                    ],
                    [
                        'key' => 'yellow-700-70',
                        'value' => 'rgba(162, 148, 0, 0.7)'
                    ],
                    [
                        'key' => 'yellow-700-80',
                        'value' => 'rgba(162, 148, 0, 0.8)'
                    ],
                    [
                        'key' => 'yellow-700-90',
                        'value' => 'rgba(162, 148, 0, 0.9)'
                    ],
                    [
                        'key' => 'yellow-700-100',
                        'value' => 'rgba(162, 148, 0, 1.0)'
                    ],
                    [
                        'key' => 'yellow-800',
                        'value' => '#736A00'
                    ],
                    [
                        'key' => 'yellow-800-10',
                        'value' => 'rgba(115, 106, 0, 0.1)'
                    ],
                    [
                        'key' => 'yellow-800-20',
                        'value' => 'rgba(115, 106, 0, 0.2)'
                    ],
                    [
                        'key' => 'yellow-800-30',
                        'value' => 'rgba(115, 106, 0, 0.3)'
                    ],
                    [
                        'key' => 'yellow-800-40',
                        'value' => 'rgba(115, 106, 0, 0.4)'
                    ],
                    [
                        'key' => 'yellow-800-50',
                        'value' => 'rgba(115, 106, 0, 0.5)'
                    ],
                    [
                        'key' => 'yellow-800-60',
                        'value' => 'rgba(115, 106, 0, 0.6)'
                    ],
                    [
                        'key' => 'yellow-800-70',
                        'value' => 'rgba(115, 106, 0, 0.7)'
                    ],
                    [
                        'key' => 'yellow-800-80',
                        'value' => 'rgba(115, 106, 0, 0.8)'
                    ],
                    [
                        'key' => 'yellow-800-90',
                        'value' => 'rgba(115, 106, 0, 0.9)'
                    ],
                    [
                        'key' => 'yellow-800-100',
                        'value' => 'rgba(115, 106, 0, 1.0)'
                    ],
                    [
                        'key' => 'yellow-900',
                        'value' => '#453F00'
                    ],
                    [
                        'key' => 'yellow-900-10',
                        'value' => 'rgba(69, 63, 0, 0.1)'
                    ],
                    [
                        'key' => 'yellow-900-20',
                        'value' => 'rgba(69, 63, 0, 0.2)'
                    ],
                    [
                        'key' => 'yellow-900-30',
                        'value' => 'rgba(69, 63, 0, 0.3)'
                    ],
                    [
                        'key' => 'yellow-900-40',
                        'value' => 'rgba(69, 63, 0, 0.4)'
                    ],
                    [
                        'key' => 'yellow-900-50',
                        'value' => 'rgba(69, 63, 0, 0.5)'
                    ],
                    [
                        'key' => 'yellow-900-60',
                        'value' => 'rgba(69, 63, 0, 0.6)'
                    ],
                    [
                        'key' => 'yellow-900-70',
                        'value' => 'rgba(69, 63, 0, 0.7)'
                    ],
                    [
                        'key' => 'yellow-900-80',
                        'value' => 'rgba(69, 63, 0, 0.8)'
                    ],
                    [
                        'key' => 'yellow-900-90',
                        'value' => 'rgba(69, 63, 0, 0.9)'
                    ],
                    [
                        'key' => 'yellow-900-100',
                        'value' => 'rgba(69, 63, 0, 1.0)'
                    ],
                    [
                        'key' => 'yellow-950',
                        'value' => '#171500'
                    ],
                    [
                        'key' => 'yellow-950-10',
                        'value' => 'rgba(23, 21, 0, 0.1)'
                    ],
                    [
                        'key' => 'yellow-950-20',
                        'value' => 'rgba(23, 21, 0, 0.2)'
                    ],
                    [
                        'key' => 'yellow-950-30',
                        'value' => 'rgba(23, 21, 0, 0.3)'
                    ],
                    [
                        'key' => 'yellow-950-40',
                        'value' => 'rgba(23, 21, 0, 0.4)'
                    ],
                    [
                        'key' => 'yellow-950-50',
                        'value' => 'rgba(23, 21, 0, 0.5)'
                    ],
                    [
                        'key' => 'yellow-950-60',
                        'value' => 'rgba(23, 21, 0, 0.6)'
                    ],
                    [
                        'key' => 'yellow-950-70',
                        'value' => 'rgba(23, 21, 0, 0.7)'
                    ],
                    [
                        'key' => 'yellow-950-80',
                        'value' => 'rgba(23, 21, 0, 0.8)'
                    ],
                    [
                        'key' => 'yellow-950-90',
                        'value' => 'rgba(23, 21, 0, 0.9)'
                    ],
                    [
                        'key' => 'yellow-950-100',
                        'value' => 'rgba(23, 21, 0, 1.0)'
                    ]
                ],
                'lime' => [
                    [
                        'key' => 'lime-50',
                        'value' => '#FBFFE7'
                    ],
                    [
                        'key' => 'lime-50-10',
                        'value' => 'rgba(251, 255, 231, 0.1)'
                    ],
                    [
                        'key' => 'lime-50-20',
                        'value' => 'rgba(251, 255, 231, 0.2)'
                    ],
                    [
                        'key' => 'lime-50-30',
                        'value' => 'rgba(251, 255, 231, 0.3)'
                    ],
                    [
                        'key' => 'lime-50-40',
                        'value' => 'rgba(251, 255, 231, 0.4)'
                    ],
                    [
                        'key' => 'lime-50-50',
                        'value' => 'rgba(251, 255, 231, 0.5)'
                    ],
                    [
                        'key' => 'lime-50-60',
                        'value' => 'rgba(251, 255, 231, 0.6)'
                    ],
                    [
                        'key' => 'lime-50-70',
                        'value' => 'rgba(251, 255, 231, 0.7)'
                    ],
                    [
                        'key' => 'lime-50-80',
                        'value' => 'rgba(251, 255, 231, 0.8)'
                    ],
                    [
                        'key' => 'lime-50-90',
                        'value' => 'rgba(251, 255, 231, 0.9)'
                    ],
                    [
                        'key' => 'lime-50-100',
                        'value' => 'rgba(251, 255, 231, 1.0)'
                    ],
                    [
                        'key' => 'lime-100',
                        'value' => '#F4FFB9'
                    ],
                    [
                        'key' => 'lime-100-10',
                        'value' => 'rgba(244, 255, 185, 0.1)'
                    ],
                    [
                        'key' => 'lime-100-20',
                        'value' => 'rgba(244, 255, 185, 0.2)'
                    ],
                    [
                        'key' => 'lime-100-30',
                        'value' => 'rgba(244, 255, 185, 0.3)'
                    ],
                    [
                        'key' => 'lime-100-40',
                        'value' => 'rgba(244, 255, 185, 0.4)'
                    ],
                    [
                        'key' => 'lime-100-50',
                        'value' => 'rgba(244, 255, 185, 0.5)'
                    ],
                    [
                        'key' => 'lime-100-60',
                        'value' => 'rgba(244, 255, 185, 0.6)'
                    ],
                    [
                        'key' => 'lime-100-70',
                        'value' => 'rgba(244, 255, 185, 0.7)'
                    ],
                    [
                        'key' => 'lime-100-80',
                        'value' => 'rgba(244, 255, 185, 0.8)'
                    ],
                    [
                        'key' => 'lime-100-90',
                        'value' => 'rgba(244, 255, 185, 0.9)'
                    ],
                    [
                        'key' => 'lime-100-100',
                        'value' => 'rgba(244, 255, 185, 1.0)'
                    ],
                    [
                        'key' => 'lime-200',
                        'value' => '#EDFF8B'
                    ],
                    [
                        'key' => 'lime-200-10',
                        'value' => 'rgba(237, 255, 139, 0.1)'
                    ],
                    [
                        'key' => 'lime-200-20',
                        'value' => 'rgba(237, 255, 139, 0.2)'
                    ],
                    [
                        'key' => 'lime-200-30',
                        'value' => 'rgba(237, 255, 139, 0.3)'
                    ],
                    [
                        'key' => 'lime-200-40',
                        'value' => 'rgba(237, 255, 139, 0.4)'
                    ],
                    [
                        'key' => 'lime-200-50',
                        'value' => 'rgba(237, 255, 139, 0.5)'
                    ],
                    [
                        'key' => 'lime-200-60',
                        'value' => 'rgba(237, 255, 139, 0.6)'
                    ],
                    [
                        'key' => 'lime-200-70',
                        'value' => 'rgba(237, 255, 139, 0.7)'
                    ],
                    [
                        'key' => 'lime-200-80',
                        'value' => 'rgba(237, 255, 139, 0.8)'
                    ],
                    [
                        'key' => 'lime-200-90',
                        'value' => 'rgba(237, 255, 139, 0.9)'
                    ],
                    [
                        'key' => 'lime-200-100',
                        'value' => 'rgba(237, 255, 139, 1.0)'
                    ],
                    [
                        'key' => 'lime-300',
                        'value' => '#E6FF5C'
                    ],
                    [
                        'key' => 'lime-300-10',
                        'value' => 'rgba(230, 255, 92, 0.1)'
                    ],
                    [
                        'key' => 'lime-300-20',
                        'value' => 'rgba(230, 255, 92, 0.2)'
                    ],
                    [
                        'key' => 'lime-300-30',
                        'value' => 'rgba(230, 255, 92, 0.3)'
                    ],
                    [
                        'key' => 'lime-300-40',
                        'value' => 'rgba(230, 255, 92, 0.4)'
                    ],
                    [
                        'key' => 'lime-300-50',
                        'value' => 'rgba(230, 255, 92, 0.5)'
                    ],
                    [
                        'key' => 'lime-300-60',
                        'value' => 'rgba(230, 255, 92, 0.6)'
                    ],
                    [
                        'key' => 'lime-300-70',
                        'value' => 'rgba(230, 255, 92, 0.7)'
                    ],
                    [
                        'key' => 'lime-300-80',
                        'value' => 'rgba(230, 255, 92, 0.8)'
                    ],
                    [
                        'key' => 'lime-300-90',
                        'value' => 'rgba(230, 255, 92, 0.9)'
                    ],
                    [
                        'key' => 'lime-300-100',
                        'value' => 'rgba(230, 255, 92, 1.0)'
                    ],
                    [
                        'key' => 'lime-400',
                        'value' => '#DFFE2E'
                    ],
                    [
                        'key' => 'lime-400-10',
                        'value' => 'rgba(223, 254, 46, 0.1)'
                    ],
                    [
                        'key' => 'lime-400-20',
                        'value' => 'rgba(223, 254, 46, 0.2)'
                    ],
                    [
                        'key' => 'lime-400-30',
                        'value' => 'rgba(223, 254, 46, 0.3)'
                    ],
                    [
                        'key' => 'lime-400-40',
                        'value' => 'rgba(223, 254, 46, 0.4)'
                    ],
                    [
                        'key' => 'lime-400-50',
                        'value' => 'rgba(223, 254, 46, 0.5)'
                    ],
                    [
                        'key' => 'lime-400-60',
                        'value' => 'rgba(223, 254, 46, 0.6)'
                    ],
                    [
                        'key' => 'lime-400-70',
                        'value' => 'rgba(223, 254, 46, 0.7)'
                    ],
                    [
                        'key' => 'lime-400-80',
                        'value' => 'rgba(223, 254, 46, 0.8)'
                    ],
                    [
                        'key' => 'lime-400-90',
                        'value' => 'rgba(223, 254, 46, 0.9)'
                    ],
                    [
                        'key' => 'lime-400-100',
                        'value' => 'rgba(223, 254, 46, 1.0)'
                    ],
                    [
                        'key' => 'lime-500',
                        'value' => '#D9FF00'
                    ],
                    [
                        'key' => 'lime-500-10',
                        'value' => 'rgba(217, 255, 0, 0.1)'
                    ],
                    [
                        'key' => 'lime-500-20',
                        'value' => 'rgba(217, 255, 0, 0.2)'
                    ],
                    [
                        'key' => 'lime-500-30',
                        'value' => 'rgba(217, 255, 0, 0.3)'
                    ],
                    [
                        'key' => 'lime-500-40',
                        'value' => 'rgba(217, 255, 0, 0.4)'
                    ],
                    [
                        'key' => 'lime-500-50',
                        'value' => 'rgba(217, 255, 0, 0.5)'
                    ],
                    [
                        'key' => 'lime-500-60',
                        'value' => 'rgba(217, 255, 0, 0.6)'
                    ],
                    [
                        'key' => 'lime-500-70',
                        'value' => 'rgba(217, 255, 0, 0.7)'
                    ],
                    [
                        'key' => 'lime-500-80',
                        'value' => 'rgba(217, 255, 0, 0.8)'
                    ],
                    [
                        'key' => 'lime-500-90',
                        'value' => 'rgba(217, 255, 0, 0.9)'
                    ],
                    [
                        'key' => 'lime-500-100',
                        'value' => 'rgba(217, 255, 0, 1.0)'
                    ],
                    [
                        'key' => 'lime-600',
                        'value' => '#B1D000'
                    ],
                    [
                        'key' => 'lime-600-10',
                        'value' => 'rgba(177, 208, 0, 0.1)'
                    ],
                    [
                        'key' => 'lime-600-20',
                        'value' => 'rgba(177, 208, 0, 0.2)'
                    ],
                    [
                        'key' => 'lime-600-30',
                        'value' => 'rgba(177, 208, 0, 0.3)'
                    ],
                    [
                        'key' => 'lime-600-40',
                        'value' => 'rgba(177, 208, 0, 0.4)'
                    ],
                    [
                        'key' => 'lime-600-50',
                        'value' => 'rgba(177, 208, 0, 0.5)'
                    ],
                    [
                        'key' => 'lime-600-60',
                        'value' => 'rgba(177, 208, 0, 0.6)'
                    ],
                    [
                        'key' => 'lime-600-70',
                        'value' => 'rgba(177, 208, 0, 0.7)'
                    ],
                    [
                        'key' => 'lime-600-80',
                        'value' => 'rgba(177, 208, 0, 0.8)'
                    ],
                    [
                        'key' => 'lime-600-90',
                        'value' => 'rgba(177, 208, 0, 0.9)'
                    ],
                    [
                        'key' => 'lime-600-100',
                        'value' => 'rgba(177, 208, 0, 1.0)'
                    ],
                    [
                        'key' => 'lime-700',
                        'value' => '#8AA200'
                    ],
                    [
                        'key' => 'lime-700-10',
                        'value' => 'rgba(138, 162, 0, 0.1)'
                    ],
                    [
                        'key' => 'lime-700-20',
                        'value' => 'rgba(138, 162, 0, 0.2)'
                    ],
                    [
                        'key' => 'lime-700-30',
                        'value' => 'rgba(138, 162, 0, 0.3)'
                    ],
                    [
                        'key' => 'lime-700-40',
                        'value' => 'rgba(138, 162, 0, 0.4)'
                    ],
                    [
                        'key' => 'lime-700-50',
                        'value' => 'rgba(138, 162, 0, 0.5)'
                    ],
                    [
                        'key' => 'lime-700-60',
                        'value' => 'rgba(138, 162, 0, 0.6)'
                    ],
                    [
                        'key' => 'lime-700-70',
                        'value' => 'rgba(138, 162, 0, 0.7)'
                    ],
                    [
                        'key' => 'lime-700-80',
                        'value' => 'rgba(138, 162, 0, 0.8)'
                    ],
                    [
                        'key' => 'lime-700-90',
                        'value' => 'rgba(138, 162, 0, 0.9)'
                    ],
                    [
                        'key' => 'lime-700-100',
                        'value' => 'rgba(138, 162, 0, 1.0)'
                    ],
                    [
                        'key' => 'lime-800',
                        'value' => '#627300'
                    ],
                    [
                        'key' => 'lime-800-10',
                        'value' => 'rgba(98, 115, 0, 0.1)'
                    ],
                    [
                        'key' => 'lime-800-20',
                        'value' => 'rgba(98, 115, 0, 0.2)'
                    ],
                    [
                        'key' => 'lime-800-30',
                        'value' => 'rgba(98, 115, 0, 0.3)'
                    ],
                    [
                        'key' => 'lime-800-40',
                        'value' => 'rgba(98, 115, 0, 0.4)'
                    ],
                    [
                        'key' => 'lime-800-50',
                        'value' => 'rgba(98, 115, 0, 0.5)'
                    ],
                    [
                        'key' => 'lime-800-60',
                        'value' => 'rgba(98, 115, 0, 0.6)'
                    ],
                    [
                        'key' => 'lime-800-70',
                        'value' => 'rgba(98, 115, 0, 0.7)'
                    ],
                    [
                        'key' => 'lime-800-80',
                        'value' => 'rgba(98, 115, 0, 0.8)'
                    ],
                    [
                        'key' => 'lime-800-90',
                        'value' => 'rgba(98, 115, 0, 0.9)'
                    ],
                    [
                        'key' => 'lime-800-100',
                        'value' => 'rgba(98, 115, 0, 1.0)'
                    ],
                    [
                        'key' => 'lime-900',
                        'value' => '#3B4500'
                    ],
                    [
                        'key' => 'lime-900-10',
                        'value' => 'rgba(59, 69, 0, 0.1)'
                    ],
                    [
                        'key' => 'lime-900-20',
                        'value' => 'rgba(59, 69, 0, 0.2)'
                    ],
                    [
                        'key' => 'lime-900-30',
                        'value' => 'rgba(59, 69, 0, 0.3)'
                    ],
                    [
                        'key' => 'lime-900-40',
                        'value' => 'rgba(59, 69, 0, 0.4)'
                    ],
                    [
                        'key' => 'lime-900-50',
                        'value' => 'rgba(59, 69, 0, 0.5)'
                    ],
                    [
                        'key' => 'lime-900-60',
                        'value' => 'rgba(59, 69, 0, 0.6)'
                    ],
                    [
                        'key' => 'lime-900-70',
                        'value' => 'rgba(59, 69, 0, 0.7)'
                    ],
                    [
                        'key' => 'lime-900-80',
                        'value' => 'rgba(59, 69, 0, 0.8)'
                    ],
                    [
                        'key' => 'lime-900-90',
                        'value' => 'rgba(59, 69, 0, 0.9)'
                    ],
                    [
                        'key' => 'lime-900-100',
                        'value' => 'rgba(59, 69, 0, 1.0)'
                    ],
                    [
                        'key' => 'lime-950',
                        'value' => '#131700'
                    ],
                    [
                        'key' => 'lime-950-10',
                        'value' => 'rgba(19, 23, 0, 0.1)'
                    ],
                    [
                        'key' => 'lime-950-20',
                        'value' => 'rgba(19, 23, 0, 0.2)'
                    ],
                    [
                        'key' => 'lime-950-30',
                        'value' => 'rgba(19, 23, 0, 0.3)'
                    ],
                    [
                        'key' => 'lime-950-40',
                        'value' => 'rgba(19, 23, 0, 0.4)'
                    ],
                    [
                        'key' => 'lime-950-50',
                        'value' => 'rgba(19, 23, 0, 0.5)'
                    ],
                    [
                        'key' => 'lime-950-60',
                        'value' => 'rgba(19, 23, 0, 0.6)'
                    ],
                    [
                        'key' => 'lime-950-70',
                        'value' => 'rgba(19, 23, 0, 0.7)'
                    ],
                    [
                        'key' => 'lime-950-80',
                        'value' => 'rgba(19, 23, 0, 0.8)'
                    ],
                    [
                        'key' => 'lime-950-90',
                        'value' => 'rgba(19, 23, 0, 0.9)'
                    ],
                    [
                        'key' => 'lime-950-100',
                        'value' => 'rgba(19, 23, 0, 1.0)'
                    ]
                ],
                'green' => [
                    [
                        'key' => 'green-50',
                        'value' => '#F0FFE7'
                    ],
                    [
                        'key' => 'green-50-10',
                        'value' => 'rgba(240, 255, 231, 0.1)'
                    ],
                    [
                        'key' => 'green-50-20',
                        'value' => 'rgba(240, 255, 231, 0.2)'
                    ],
                    [
                        'key' => 'green-50-30',
                        'value' => 'rgba(240, 255, 231, 0.3)'
                    ],
                    [
                        'key' => 'green-50-40',
                        'value' => 'rgba(240, 255, 231, 0.4)'
                    ],
                    [
                        'key' => 'green-50-50',
                        'value' => 'rgba(240, 255, 231, 0.5)'
                    ],
                    [
                        'key' => 'green-50-60',
                        'value' => 'rgba(240, 255, 231, 0.6)'
                    ],
                    [
                        'key' => 'green-50-70',
                        'value' => 'rgba(240, 255, 231, 0.7)'
                    ],
                    [
                        'key' => 'green-50-80',
                        'value' => 'rgba(240, 255, 231, 0.8)'
                    ],
                    [
                        'key' => 'green-50-90',
                        'value' => 'rgba(240, 255, 231, 0.9)'
                    ],
                    [
                        'key' => 'green-50-100',
                        'value' => 'rgba(240, 255, 231, 1.0)'
                    ],
                    [
                        'key' => 'green-100',
                        'value' => '#D2FFB9'
                    ],
                    [
                        'key' => 'green-100-10',
                        'value' => 'rgba(210, 255, 185, 0.1)'
                    ],
                    [
                        'key' => 'green-100-20',
                        'value' => 'rgba(210, 255, 185, 0.2)'
                    ],
                    [
                        'key' => 'green-100-30',
                        'value' => 'rgba(210, 255, 185, 0.3)'
                    ],
                    [
                        'key' => 'green-100-40',
                        'value' => 'rgba(210, 255, 185, 0.4)'
                    ],
                    [
                        'key' => 'green-100-50',
                        'value' => 'rgba(210, 255, 185, 0.5)'
                    ],
                    [
                        'key' => 'green-100-60',
                        'value' => 'rgba(210, 255, 185, 0.6)'
                    ],
                    [
                        'key' => 'green-100-70',
                        'value' => 'rgba(210, 255, 185, 0.7)'
                    ],
                    [
                        'key' => 'green-100-80',
                        'value' => 'rgba(210, 255, 185, 0.8)'
                    ],
                    [
                        'key' => 'green-100-90',
                        'value' => 'rgba(210, 255, 185, 0.9)'
                    ],
                    [
                        'key' => 'green-100-100',
                        'value' => 'rgba(210, 255, 185, 1.0)'
                    ],
                    [
                        'key' => 'green-200',
                        'value' => '#B5FF8B'
                    ],
                    [
                        'key' => 'green-200-10',
                        'value' => 'rgba(181, 255, 139, 0.1)'
                    ],
                    [
                        'key' => 'green-200-20',
                        'value' => 'rgba(181, 255, 139, 0.2)'
                    ],
                    [
                        'key' => 'green-200-30',
                        'value' => 'rgba(181, 255, 139, 0.3)'
                    ],
                    [
                        'key' => 'green-200-40',
                        'value' => 'rgba(181, 255, 139, 0.4)'
                    ],
                    [
                        'key' => 'green-200-50',
                        'value' => 'rgba(181, 255, 139, 0.5)'
                    ],
                    [
                        'key' => 'green-200-60',
                        'value' => 'rgba(181, 255, 139, 0.6)'
                    ],
                    [
                        'key' => 'green-200-70',
                        'value' => 'rgba(181, 255, 139, 0.7)'
                    ],
                    [
                        'key' => 'green-200-80',
                        'value' => 'rgba(181, 255, 139, 0.8)'
                    ],
                    [
                        'key' => 'green-200-90',
                        'value' => 'rgba(181, 255, 139, 0.9)'
                    ],
                    [
                        'key' => 'green-200-100',
                        'value' => 'rgba(181, 255, 139, 1.0)'
                    ],
                    [
                        'key' => 'green-300',
                        'value' => '#97FF5C'
                    ],
                    [
                        'key' => 'green-300-10',
                        'value' => 'rgba(151, 255, 92, 0.1)'
                    ],
                    [
                        'key' => 'green-300-20',
                        'value' => 'rgba(151, 255, 92, 0.2)'
                    ],
                    [
                        'key' => 'green-300-30',
                        'value' => 'rgba(151, 255, 92, 0.3)'
                    ],
                    [
                        'key' => 'green-300-40',
                        'value' => 'rgba(151, 255, 92, 0.4)'
                    ],
                    [
                        'key' => 'green-300-50',
                        'value' => 'rgba(151, 255, 92, 0.5)'
                    ],
                    [
                        'key' => 'green-300-60',
                        'value' => 'rgba(151, 255, 92, 0.6)'
                    ],
                    [
                        'key' => 'green-300-70',
                        'value' => 'rgba(151, 255, 92, 0.7)'
                    ],
                    [
                        'key' => 'green-300-80',
                        'value' => 'rgba(151, 255, 92, 0.8)'
                    ],
                    [
                        'key' => 'green-300-90',
                        'value' => 'rgba(151, 255, 92, 0.9)'
                    ],
                    [
                        'key' => 'green-300-100',
                        'value' => 'rgba(151, 255, 92, 1.0)'
                    ],
                    [
                        'key' => 'green-400',
                        'value' => '#7AFE2E'
                    ],
                    [
                        'key' => 'green-400-10',
                        'value' => 'rgba(122, 254, 46, 0.1)'
                    ],
                    [
                        'key' => 'green-400-20',
                        'value' => 'rgba(122, 254, 46, 0.2)'
                    ],
                    [
                        'key' => 'green-400-30',
                        'value' => 'rgba(122, 254, 46, 0.3)'
                    ],
                    [
                        'key' => 'green-400-40',
                        'value' => 'rgba(122, 254, 46, 0.4)'
                    ],
                    [
                        'key' => 'green-400-50',
                        'value' => 'rgba(122, 254, 46, 0.5)'
                    ],
                    [
                        'key' => 'green-400-60',
                        'value' => 'rgba(122, 254, 46, 0.6)'
                    ],
                    [
                        'key' => 'green-400-70',
                        'value' => 'rgba(122, 254, 46, 0.7)'
                    ],
                    [
                        'key' => 'green-400-80',
                        'value' => 'rgba(122, 254, 46, 0.8)'
                    ],
                    [
                        'key' => 'green-400-90',
                        'value' => 'rgba(122, 254, 46, 0.9)'
                    ],
                    [
                        'key' => 'green-400-100',
                        'value' => 'rgba(122, 254, 46, 1.0)'
                    ],
                    [
                        'key' => 'green-500',
                        'value' => '#5DFF00'
                    ],
                    [
                        'key' => 'green-500-10',
                        'value' => 'rgba(93, 255, 0, 0.1)'
                    ],
                    [
                        'key' => 'green-500-20',
                        'value' => 'rgba(93, 255, 0, 0.2)'
                    ],
                    [
                        'key' => 'green-500-30',
                        'value' => 'rgba(93, 255, 0, 0.3)'
                    ],
                    [
                        'key' => 'green-500-40',
                        'value' => 'rgba(93, 255, 0, 0.4)'
                    ],
                    [
                        'key' => 'green-500-50',
                        'value' => 'rgba(93, 255, 0, 0.5)'
                    ],
                    [
                        'key' => 'green-500-60',
                        'value' => 'rgba(93, 255, 0, 0.6)'
                    ],
                    [
                        'key' => 'green-500-70',
                        'value' => 'rgba(93, 255, 0, 0.7)'
                    ],
                    [
                        'key' => 'green-500-80',
                        'value' => 'rgba(93, 255, 0, 0.8)'
                    ],
                    [
                        'key' => 'green-500-90',
                        'value' => 'rgba(93, 255, 0, 0.9)'
                    ],
                    [
                        'key' => 'green-500-100',
                        'value' => 'rgba(93, 255, 0, 1.0)'
                    ],
                    [
                        'key' => 'green-600',
                        'value' => '#4CD000'
                    ],
                    [
                        'key' => 'green-600-10',
                        'value' => 'rgba(76, 208, 0, 0.1)'
                    ],
                    [
                        'key' => 'green-600-20',
                        'value' => 'rgba(76, 208, 0, 0.2)'
                    ],
                    [
                        'key' => 'green-600-30',
                        'value' => 'rgba(76, 208, 0, 0.3)'
                    ],
                    [
                        'key' => 'green-600-40',
                        'value' => 'rgba(76, 208, 0, 0.4)'
                    ],
                    [
                        'key' => 'green-600-50',
                        'value' => 'rgba(76, 208, 0, 0.5)'
                    ],
                    [
                        'key' => 'green-600-60',
                        'value' => 'rgba(76, 208, 0, 0.6)'
                    ],
                    [
                        'key' => 'green-600-70',
                        'value' => 'rgba(76, 208, 0, 0.7)'
                    ],
                    [
                        'key' => 'green-600-80',
                        'value' => 'rgba(76, 208, 0, 0.8)'
                    ],
                    [
                        'key' => 'green-600-90',
                        'value' => 'rgba(76, 208, 0, 0.9)'
                    ],
                    [
                        'key' => 'green-600-100',
                        'value' => 'rgba(76, 208, 0, 1.0)'
                    ],
                    [
                        'key' => 'green-700',
                        'value' => '#3BA200'
                    ],
                    [
                        'key' => 'green-700-10',
                        'value' => 'rgba(59, 162, 0, 0.1)'
                    ],
                    [
                        'key' => 'green-700-20',
                        'value' => 'rgba(59, 162, 0, 0.2)'
                    ],
                    [
                        'key' => 'green-700-30',
                        'value' => 'rgba(59, 162, 0, 0.3)'
                    ],
                    [
                        'key' => 'green-700-40',
                        'value' => 'rgba(59, 162, 0, 0.4)'
                    ],
                    [
                        'key' => 'green-700-50',
                        'value' => 'rgba(59, 162, 0, 0.5)'
                    ],
                    [
                        'key' => 'green-700-60',
                        'value' => 'rgba(59, 162, 0, 0.6)'
                    ],
                    [
                        'key' => 'green-700-70',
                        'value' => 'rgba(59, 162, 0, 0.7)'
                    ],
                    [
                        'key' => 'green-700-80',
                        'value' => 'rgba(59, 162, 0, 0.8)'
                    ],
                    [
                        'key' => 'green-700-90',
                        'value' => 'rgba(59, 162, 0, 0.9)'
                    ],
                    [
                        'key' => 'green-700-100',
                        'value' => 'rgba(59, 162, 0, 1.0)'
                    ],
                    [
                        'key' => 'green-800',
                        'value' => '#2A7300'
                    ],
                    [
                        'key' => 'green-800-10',
                        'value' => 'rgba(42, 115, 0, 0.1)'
                    ],
                    [
                        'key' => 'green-800-20',
                        'value' => 'rgba(42, 115, 0, 0.2)'
                    ],
                    [
                        'key' => 'green-800-30',
                        'value' => 'rgba(42, 115, 0, 0.3)'
                    ],
                    [
                        'key' => 'green-800-40',
                        'value' => 'rgba(42, 115, 0, 0.4)'
                    ],
                    [
                        'key' => 'green-800-50',
                        'value' => 'rgba(42, 115, 0, 0.5)'
                    ],
                    [
                        'key' => 'green-800-60',
                        'value' => 'rgba(42, 115, 0, 0.6)'
                    ],
                    [
                        'key' => 'green-800-70',
                        'value' => 'rgba(42, 115, 0, 0.7)'
                    ],
                    [
                        'key' => 'green-800-80',
                        'value' => 'rgba(42, 115, 0, 0.8)'
                    ],
                    [
                        'key' => 'green-800-90',
                        'value' => 'rgba(42, 115, 0, 0.9)'
                    ],
                    [
                        'key' => 'green-800-100',
                        'value' => 'rgba(42, 115, 0, 1.0)'
                    ],
                    [
                        'key' => 'green-900',
                        'value' => '#194500'
                    ],
                    [
                        'key' => 'green-900-10',
                        'value' => 'rgba(25, 69, 0, 0.1)'
                    ],
                    [
                        'key' => 'green-900-20',
                        'value' => 'rgba(25, 69, 0, 0.2)'
                    ],
                    [
                        'key' => 'green-900-30',
                        'value' => 'rgba(25, 69, 0, 0.3)'
                    ],
                    [
                        'key' => 'green-900-40',
                        'value' => 'rgba(25, 69, 0, 0.4)'
                    ],
                    [
                        'key' => 'green-900-50',
                        'value' => 'rgba(25, 69, 0, 0.5)'
                    ],
                    [
                        'key' => 'green-900-60',
                        'value' => 'rgba(25, 69, 0, 0.6)'
                    ],
                    [
                        'key' => 'green-900-70',
                        'value' => 'rgba(25, 69, 0, 0.7)'
                    ],
                    [
                        'key' => 'green-900-80',
                        'value' => 'rgba(25, 69, 0, 0.8)'
                    ],
                    [
                        'key' => 'green-900-90',
                        'value' => 'rgba(25, 69, 0, 0.9)'
                    ],
                    [
                        'key' => 'green-900-100',
                        'value' => 'rgba(25, 69, 0, 1.0)'
                    ],
                    [
                        'key' => 'green-950',
                        'value' => '#081700'
                    ],
                    [
                        'key' => 'green-950-10',
                        'value' => 'rgba(8, 23, 0, 0.1)'
                    ],
                    [
                        'key' => 'green-950-20',
                        'value' => 'rgba(8, 23, 0, 0.2)'
                    ],
                    [
                        'key' => 'green-950-30',
                        'value' => 'rgba(8, 23, 0, 0.3)'
                    ],
                    [
                        'key' => 'green-950-40',
                        'value' => 'rgba(8, 23, 0, 0.4)'
                    ],
                    [
                        'key' => 'green-950-50',
                        'value' => 'rgba(8, 23, 0, 0.5)'
                    ],
                    [
                        'key' => 'green-950-60',
                        'value' => 'rgba(8, 23, 0, 0.6)'
                    ],
                    [
                        'key' => 'green-950-70',
                        'value' => 'rgba(8, 23, 0, 0.7)'
                    ],
                    [
                        'key' => 'green-950-80',
                        'value' => 'rgba(8, 23, 0, 0.8)'
                    ],
                    [
                        'key' => 'green-950-90',
                        'value' => 'rgba(8, 23, 0, 0.9)'
                    ],
                    [
                        'key' => 'green-950-100',
                        'value' => 'rgba(8, 23, 0, 1.0)'
                    ]
                ],
                'emerald' => [
                    [
                        'key' => 'emerald-50',
                        'value' => '#E8FDF2'
                    ],
                    [
                        'key' => 'emerald-50-10',
                        'value' => 'rgba(232, 253, 242, 0.1)'
                    ],
                    [
                        'key' => 'emerald-50-20',
                        'value' => 'rgba(232, 253, 242, 0.2)'
                    ],
                    [
                        'key' => 'emerald-50-30',
                        'value' => 'rgba(232, 253, 242, 0.3)'
                    ],
                    [
                        'key' => 'emerald-50-40',
                        'value' => 'rgba(232, 253, 242, 0.4)'
                    ],
                    [
                        'key' => 'emerald-50-50',
                        'value' => 'rgba(232, 253, 242, 0.5)'
                    ],
                    [
                        'key' => 'emerald-50-60',
                        'value' => 'rgba(232, 253, 242, 0.6)'
                    ],
                    [
                        'key' => 'emerald-50-70',
                        'value' => 'rgba(232, 253, 242, 0.7)'
                    ],
                    [
                        'key' => 'emerald-50-80',
                        'value' => 'rgba(232, 253, 242, 0.8)'
                    ],
                    [
                        'key' => 'emerald-50-90',
                        'value' => 'rgba(232, 253, 242, 0.9)'
                    ],
                    [
                        'key' => 'emerald-50-100',
                        'value' => 'rgba(232, 253, 242, 1.0)'
                    ],
                    [
                        'key' => 'emerald-100',
                        'value' => '#BCFBD8'
                    ],
                    [
                        'key' => 'emerald-100-10',
                        'value' => 'rgba(188, 251, 216, 0.1)'
                    ],
                    [
                        'key' => 'emerald-100-20',
                        'value' => 'rgba(188, 251, 216, 0.2)'
                    ],
                    [
                        'key' => 'emerald-100-30',
                        'value' => 'rgba(188, 251, 216, 0.3)'
                    ],
                    [
                        'key' => 'emerald-100-40',
                        'value' => 'rgba(188, 251, 216, 0.4)'
                    ],
                    [
                        'key' => 'emerald-100-50',
                        'value' => 'rgba(188, 251, 216, 0.5)'
                    ],
                    [
                        'key' => 'emerald-100-60',
                        'value' => 'rgba(188, 251, 216, 0.6)'
                    ],
                    [
                        'key' => 'emerald-100-70',
                        'value' => 'rgba(188, 251, 216, 0.7)'
                    ],
                    [
                        'key' => 'emerald-100-80',
                        'value' => 'rgba(188, 251, 216, 0.8)'
                    ],
                    [
                        'key' => 'emerald-100-90',
                        'value' => 'rgba(188, 251, 216, 0.9)'
                    ],
                    [
                        'key' => 'emerald-100-100',
                        'value' => 'rgba(188, 251, 216, 1.0)'
                    ],
                    [
                        'key' => 'emerald-200',
                        'value' => '#90F9BE'
                    ],
                    [
                        'key' => 'emerald-200-10',
                        'value' => 'rgba(144, 249, 190, 0.1)'
                    ],
                    [
                        'key' => 'emerald-200-20',
                        'value' => 'rgba(144, 249, 190, 0.2)'
                    ],
                    [
                        'key' => 'emerald-200-30',
                        'value' => 'rgba(144, 249, 190, 0.3)'
                    ],
                    [
                        'key' => 'emerald-200-40',
                        'value' => 'rgba(144, 249, 190, 0.4)'
                    ],
                    [
                        'key' => 'emerald-200-50',
                        'value' => 'rgba(144, 249, 190, 0.5)'
                    ],
                    [
                        'key' => 'emerald-200-60',
                        'value' => 'rgba(144, 249, 190, 0.6)'
                    ],
                    [
                        'key' => 'emerald-200-70',
                        'value' => 'rgba(144, 249, 190, 0.7)'
                    ],
                    [
                        'key' => 'emerald-200-80',
                        'value' => 'rgba(144, 249, 190, 0.8)'
                    ],
                    [
                        'key' => 'emerald-200-90',
                        'value' => 'rgba(144, 249, 190, 0.9)'
                    ],
                    [
                        'key' => 'emerald-200-100',
                        'value' => 'rgba(144, 249, 190, 1.0)'
                    ],
                    [
                        'key' => 'emerald-300',
                        'value' => '#64F7A4'
                    ],
                    [
                        'key' => 'emerald-300-10',
                        'value' => 'rgba(100, 247, 164, 0.1)'
                    ],
                    [
                        'key' => 'emerald-300-20',
                        'value' => 'rgba(100, 247, 164, 0.2)'
                    ],
                    [
                        'key' => 'emerald-300-30',
                        'value' => 'rgba(100, 247, 164, 0.3)'
                    ],
                    [
                        'key' => 'emerald-300-40',
                        'value' => 'rgba(100, 247, 164, 0.4)'
                    ],
                    [
                        'key' => 'emerald-300-50',
                        'value' => 'rgba(100, 247, 164, 0.5)'
                    ],
                    [
                        'key' => 'emerald-300-60',
                        'value' => 'rgba(100, 247, 164, 0.6)'
                    ],
                    [
                        'key' => 'emerald-300-70',
                        'value' => 'rgba(100, 247, 164, 0.7)'
                    ],
                    [
                        'key' => 'emerald-300-80',
                        'value' => 'rgba(100, 247, 164, 0.8)'
                    ],
                    [
                        'key' => 'emerald-300-90',
                        'value' => 'rgba(100, 247, 164, 0.9)'
                    ],
                    [
                        'key' => 'emerald-300-100',
                        'value' => 'rgba(100, 247, 164, 1.0)'
                    ],
                    [
                        'key' => 'emerald-400',
                        'value' => '#38F58A'
                    ],
                    [
                        'key' => 'emerald-400-10',
                        'value' => 'rgba(56, 245, 138, 0.1)'
                    ],
                    [
                        'key' => 'emerald-400-20',
                        'value' => 'rgba(56, 245, 138, 0.2)'
                    ],
                    [
                        'key' => 'emerald-400-30',
                        'value' => 'rgba(56, 245, 138, 0.3)'
                    ],
                    [
                        'key' => 'emerald-400-40',
                        'value' => 'rgba(56, 245, 138, 0.4)'
                    ],
                    [
                        'key' => 'emerald-400-50',
                        'value' => 'rgba(56, 245, 138, 0.5)'
                    ],
                    [
                        'key' => 'emerald-400-60',
                        'value' => 'rgba(56, 245, 138, 0.6)'
                    ],
                    [
                        'key' => 'emerald-400-70',
                        'value' => 'rgba(56, 245, 138, 0.7)'
                    ],
                    [
                        'key' => 'emerald-400-80',
                        'value' => 'rgba(56, 245, 138, 0.8)'
                    ],
                    [
                        'key' => 'emerald-400-90',
                        'value' => 'rgba(56, 245, 138, 0.9)'
                    ],
                    [
                        'key' => 'emerald-400-100',
                        'value' => 'rgba(56, 245, 138, 1.0)'
                    ],
                    [
                        'key' => 'emerald-500',
                        'value' => '#0CF370'
                    ],
                    [
                        'key' => 'emerald-500-10',
                        'value' => 'rgba(12, 243, 112, 0.1)'
                    ],
                    [
                        'key' => 'emerald-500-20',
                        'value' => 'rgba(12, 243, 112, 0.2)'
                    ],
                    [
                        'key' => 'emerald-500-30',
                        'value' => 'rgba(12, 243, 112, 0.3)'
                    ],
                    [
                        'key' => 'emerald-500-40',
                        'value' => 'rgba(12, 243, 112, 0.4)'
                    ],
                    [
                        'key' => 'emerald-500-50',
                        'value' => 'rgba(12, 243, 112, 0.5)'
                    ],
                    [
                        'key' => 'emerald-500-60',
                        'value' => 'rgba(12, 243, 112, 0.6)'
                    ],
                    [
                        'key' => 'emerald-500-70',
                        'value' => 'rgba(12, 243, 112, 0.7)'
                    ],
                    [
                        'key' => 'emerald-500-80',
                        'value' => 'rgba(12, 243, 112, 0.8)'
                    ],
                    [
                        'key' => 'emerald-500-90',
                        'value' => 'rgba(12, 243, 112, 0.9)'
                    ],
                    [
                        'key' => 'emerald-500-100',
                        'value' => 'rgba(12, 243, 112, 1.0)'
                    ],
                    [
                        'key' => 'emerald-600',
                        'value' => '#09C65B'
                    ],
                    [
                        'key' => 'emerald-600-10',
                        'value' => 'rgba(9, 198, 91, 0.1)'
                    ],
                    [
                        'key' => 'emerald-600-20',
                        'value' => 'rgba(9, 198, 91, 0.2)'
                    ],
                    [
                        'key' => 'emerald-600-30',
                        'value' => 'rgba(9, 198, 91, 0.3)'
                    ],
                    [
                        'key' => 'emerald-600-40',
                        'value' => 'rgba(9, 198, 91, 0.4)'
                    ],
                    [
                        'key' => 'emerald-600-50',
                        'value' => 'rgba(9, 198, 91, 0.5)'
                    ],
                    [
                        'key' => 'emerald-600-60',
                        'value' => 'rgba(9, 198, 91, 0.6)'
                    ],
                    [
                        'key' => 'emerald-600-70',
                        'value' => 'rgba(9, 198, 91, 0.7)'
                    ],
                    [
                        'key' => 'emerald-600-80',
                        'value' => 'rgba(9, 198, 91, 0.8)'
                    ],
                    [
                        'key' => 'emerald-600-90',
                        'value' => 'rgba(9, 198, 91, 0.9)'
                    ],
                    [
                        'key' => 'emerald-600-100',
                        'value' => 'rgba(9, 198, 91, 1.0)'
                    ],
                    [
                        'key' => 'emerald-700',
                        'value' => '#079A47'
                    ],
                    [
                        'key' => 'emerald-700-10',
                        'value' => 'rgba(7, 154, 71, 0.1)'
                    ],
                    [
                        'key' => 'emerald-700-20',
                        'value' => 'rgba(7, 154, 71, 0.2)'
                    ],
                    [
                        'key' => 'emerald-700-30',
                        'value' => 'rgba(7, 154, 71, 0.3)'
                    ],
                    [
                        'key' => 'emerald-700-40',
                        'value' => 'rgba(7, 154, 71, 0.4)'
                    ],
                    [
                        'key' => 'emerald-700-50',
                        'value' => 'rgba(7, 154, 71, 0.5)'
                    ],
                    [
                        'key' => 'emerald-700-60',
                        'value' => 'rgba(7, 154, 71, 0.6)'
                    ],
                    [
                        'key' => 'emerald-700-70',
                        'value' => 'rgba(7, 154, 71, 0.7)'
                    ],
                    [
                        'key' => 'emerald-700-80',
                        'value' => 'rgba(7, 154, 71, 0.8)'
                    ],
                    [
                        'key' => 'emerald-700-90',
                        'value' => 'rgba(7, 154, 71, 0.9)'
                    ],
                    [
                        'key' => 'emerald-700-100',
                        'value' => 'rgba(7, 154, 71, 1.0)'
                    ],
                    [
                        'key' => 'emerald-800',
                        'value' => '#056E32'
                    ],
                    [
                        'key' => 'emerald-800-10',
                        'value' => 'rgba(5, 110, 50, 0.1)'
                    ],
                    [
                        'key' => 'emerald-800-20',
                        'value' => 'rgba(5, 110, 50, 0.2)'
                    ],
                    [
                        'key' => 'emerald-800-30',
                        'value' => 'rgba(5, 110, 50, 0.3)'
                    ],
                    [
                        'key' => 'emerald-800-40',
                        'value' => 'rgba(5, 110, 50, 0.4)'
                    ],
                    [
                        'key' => 'emerald-800-50',
                        'value' => 'rgba(5, 110, 50, 0.5)'
                    ],
                    [
                        'key' => 'emerald-800-60',
                        'value' => 'rgba(5, 110, 50, 0.6)'
                    ],
                    [
                        'key' => 'emerald-800-70',
                        'value' => 'rgba(5, 110, 50, 0.7)'
                    ],
                    [
                        'key' => 'emerald-800-80',
                        'value' => 'rgba(5, 110, 50, 0.8)'
                    ],
                    [
                        'key' => 'emerald-800-90',
                        'value' => 'rgba(5, 110, 50, 0.9)'
                    ],
                    [
                        'key' => 'emerald-800-100',
                        'value' => 'rgba(5, 110, 50, 1.0)'
                    ],
                    [
                        'key' => 'emerald-900',
                        'value' => '#03421E'
                    ],
                    [
                        'key' => 'emerald-900-10',
                        'value' => 'rgba(3, 66, 30, 0.1)'
                    ],
                    [
                        'key' => 'emerald-900-20',
                        'value' => 'rgba(3, 66, 30, 0.2)'
                    ],
                    [
                        'key' => 'emerald-900-30',
                        'value' => 'rgba(3, 66, 30, 0.3)'
                    ],
                    [
                        'key' => 'emerald-900-40',
                        'value' => 'rgba(3, 66, 30, 0.4)'
                    ],
                    [
                        'key' => 'emerald-900-50',
                        'value' => 'rgba(3, 66, 30, 0.5)'
                    ],
                    [
                        'key' => 'emerald-900-60',
                        'value' => 'rgba(3, 66, 30, 0.6)'
                    ],
                    [
                        'key' => 'emerald-900-70',
                        'value' => 'rgba(3, 66, 30, 0.7)'
                    ],
                    [
                        'key' => 'emerald-900-80',
                        'value' => 'rgba(3, 66, 30, 0.8)'
                    ],
                    [
                        'key' => 'emerald-900-90',
                        'value' => 'rgba(3, 66, 30, 0.9)'
                    ],
                    [
                        'key' => 'emerald-900-100',
                        'value' => 'rgba(3, 66, 30, 1.0)'
                    ],
                    [
                        'key' => 'emerald-950',
                        'value' => '#01160A'
                    ],
                    [
                        'key' => 'emerald-950-10',
                        'value' => 'rgba(1, 22, 10, 0.1)'
                    ],
                    [
                        'key' => 'emerald-950-20',
                        'value' => 'rgba(1, 22, 10, 0.2)'
                    ],
                    [
                        'key' => 'emerald-950-30',
                        'value' => 'rgba(1, 22, 10, 0.3)'
                    ],
                    [
                        'key' => 'emerald-950-40',
                        'value' => 'rgba(1, 22, 10, 0.4)'
                    ],
                    [
                        'key' => 'emerald-950-50',
                        'value' => 'rgba(1, 22, 10, 0.5)'
                    ],
                    [
                        'key' => 'emerald-950-60',
                        'value' => 'rgba(1, 22, 10, 0.6)'
                    ],
                    [
                        'key' => 'emerald-950-70',
                        'value' => 'rgba(1, 22, 10, 0.7)'
                    ],
                    [
                        'key' => 'emerald-950-80',
                        'value' => 'rgba(1, 22, 10, 0.8)'
                    ],
                    [
                        'key' => 'emerald-950-90',
                        'value' => 'rgba(1, 22, 10, 0.9)'
                    ],
                    [
                        'key' => 'emerald-950-100',
                        'value' => 'rgba(1, 22, 10, 1.0)'
                    ]
                ],
                'tosca' => [
                    [
                        'key' => 'tosca-50',
                        'value' => '#E7FFF7'
                    ],
                    [
                        'key' => 'tosca-50-10',
                        'value' => 'rgba(231, 255, 247, 0.1)'
                    ],
                    [
                        'key' => 'tosca-50-20',
                        'value' => 'rgba(231, 255, 247, 0.2)'
                    ],
                    [
                        'key' => 'tosca-50-30',
                        'value' => 'rgba(231, 255, 247, 0.3)'
                    ],
                    [
                        'key' => 'tosca-50-40',
                        'value' => 'rgba(231, 255, 247, 0.4)'
                    ],
                    [
                        'key' => 'tosca-50-50',
                        'value' => 'rgba(231, 255, 247, 0.5)'
                    ],
                    [
                        'key' => 'tosca-50-60',
                        'value' => 'rgba(231, 255, 247, 0.6)'
                    ],
                    [
                        'key' => 'tosca-50-70',
                        'value' => 'rgba(231, 255, 247, 0.7)'
                    ],
                    [
                        'key' => 'tosca-50-80',
                        'value' => 'rgba(231, 255, 247, 0.8)'
                    ],
                    [
                        'key' => 'tosca-50-90',
                        'value' => 'rgba(231, 255, 247, 0.9)'
                    ],
                    [
                        'key' => 'tosca-50-100',
                        'value' => 'rgba(231, 255, 247, 1.0)'
                    ],
                    [
                        'key' => 'tosca-100',
                        'value' => '#B9FFE7'
                    ],
                    [
                        'key' => 'tosca-100-10',
                        'value' => 'rgba(185, 255, 231, 0.1)'
                    ],
                    [
                        'key' => 'tosca-100-20',
                        'value' => 'rgba(185, 255, 231, 0.2)'
                    ],
                    [
                        'key' => 'tosca-100-30',
                        'value' => 'rgba(185, 255, 231, 0.3)'
                    ],
                    [
                        'key' => 'tosca-100-40',
                        'value' => 'rgba(185, 255, 231, 0.4)'
                    ],
                    [
                        'key' => 'tosca-100-50',
                        'value' => 'rgba(185, 255, 231, 0.5)'
                    ],
                    [
                        'key' => 'tosca-100-60',
                        'value' => 'rgba(185, 255, 231, 0.6)'
                    ],
                    [
                        'key' => 'tosca-100-70',
                        'value' => 'rgba(185, 255, 231, 0.7)'
                    ],
                    [
                        'key' => 'tosca-100-80',
                        'value' => 'rgba(185, 255, 231, 0.8)'
                    ],
                    [
                        'key' => 'tosca-100-90',
                        'value' => 'rgba(185, 255, 231, 0.9)'
                    ],
                    [
                        'key' => 'tosca-100-100',
                        'value' => 'rgba(185, 255, 231, 1.0)'
                    ],
                    [
                        'key' => 'tosca-200',
                        'value' => '#8BFFD8'
                    ],
                    [
                        'key' => 'tosca-200-10',
                        'value' => 'rgba(139, 255, 216, 0.1)'
                    ],
                    [
                        'key' => 'tosca-200-20',
                        'value' => 'rgba(139, 255, 216, 0.2)'
                    ],
                    [
                        'key' => 'tosca-200-30',
                        'value' => 'rgba(139, 255, 216, 0.3)'
                    ],
                    [
                        'key' => 'tosca-200-40',
                        'value' => 'rgba(139, 255, 216, 0.4)'
                    ],
                    [
                        'key' => 'tosca-200-50',
                        'value' => 'rgba(139, 255, 216, 0.5)'
                    ],
                    [
                        'key' => 'tosca-200-60',
                        'value' => 'rgba(139, 255, 216, 0.6)'
                    ],
                    [
                        'key' => 'tosca-200-70',
                        'value' => 'rgba(139, 255, 216, 0.7)'
                    ],
                    [
                        'key' => 'tosca-200-80',
                        'value' => 'rgba(139, 255, 216, 0.8)'
                    ],
                    [
                        'key' => 'tosca-200-90',
                        'value' => 'rgba(139, 255, 216, 0.9)'
                    ],
                    [
                        'key' => 'tosca-200-100',
                        'value' => 'rgba(139, 255, 216, 1.0)'
                    ],
                    [
                        'key' => 'tosca-300',
                        'value' => '#5CFFC8'
                    ],
                    [
                        'key' => 'tosca-300-10',
                        'value' => 'rgba(92, 255, 200, 0.1)'
                    ],
                    [
                        'key' => 'tosca-300-20',
                        'value' => 'rgba(92, 255, 200, 0.2)'
                    ],
                    [
                        'key' => 'tosca-300-30',
                        'value' => 'rgba(92, 255, 200, 0.3)'
                    ],
                    [
                        'key' => 'tosca-300-40',
                        'value' => 'rgba(92, 255, 200, 0.4)'
                    ],
                    [
                        'key' => 'tosca-300-50',
                        'value' => 'rgba(92, 255, 200, 0.5)'
                    ],
                    [
                        'key' => 'tosca-300-60',
                        'value' => 'rgba(92, 255, 200, 0.6)'
                    ],
                    [
                        'key' => 'tosca-300-70',
                        'value' => 'rgba(92, 255, 200, 0.7)'
                    ],
                    [
                        'key' => 'tosca-300-80',
                        'value' => 'rgba(92, 255, 200, 0.8)'
                    ],
                    [
                        'key' => 'tosca-300-90',
                        'value' => 'rgba(92, 255, 200, 0.9)'
                    ],
                    [
                        'key' => 'tosca-300-100',
                        'value' => 'rgba(92, 255, 200, 1.0)'
                    ],
                    [
                        'key' => 'tosca-400',
                        'value' => '#2EFEB9'
                    ],
                    [
                        'key' => 'tosca-400-10',
                        'value' => 'rgba(46, 254, 185, 0.1)'
                    ],
                    [
                        'key' => 'tosca-400-20',
                        'value' => 'rgba(46, 254, 185, 0.2)'
                    ],
                    [
                        'key' => 'tosca-400-30',
                        'value' => 'rgba(46, 254, 185, 0.3)'
                    ],
                    [
                        'key' => 'tosca-400-40',
                        'value' => 'rgba(46, 254, 185, 0.4)'
                    ],
                    [
                        'key' => 'tosca-400-50',
                        'value' => 'rgba(46, 254, 185, 0.5)'
                    ],
                    [
                        'key' => 'tosca-400-60',
                        'value' => 'rgba(46, 254, 185, 0.6)'
                    ],
                    [
                        'key' => 'tosca-400-70',
                        'value' => 'rgba(46, 254, 185, 0.7)'
                    ],
                    [
                        'key' => 'tosca-400-80',
                        'value' => 'rgba(46, 254, 185, 0.8)'
                    ],
                    [
                        'key' => 'tosca-400-90',
                        'value' => 'rgba(46, 254, 185, 0.9)'
                    ],
                    [
                        'key' => 'tosca-400-100',
                        'value' => 'rgba(46, 254, 185, 1.0)'
                    ],
                    [
                        'key' => 'tosca-500',
                        'value' => '#00FFAA'
                    ],
                    [
                        'key' => 'tosca-500-10',
                        'value' => 'rgba(0, 255, 170, 0.1)'
                    ],
                    [
                        'key' => 'tosca-500-20',
                        'value' => 'rgba(0, 255, 170, 0.2)'
                    ],
                    [
                        'key' => 'tosca-500-30',
                        'value' => 'rgba(0, 255, 170, 0.3)'
                    ],
                    [
                        'key' => 'tosca-500-40',
                        'value' => 'rgba(0, 255, 170, 0.4)'
                    ],
                    [
                        'key' => 'tosca-500-50',
                        'value' => 'rgba(0, 255, 170, 0.5)'
                    ],
                    [
                        'key' => 'tosca-500-60',
                        'value' => 'rgba(0, 255, 170, 0.6)'
                    ],
                    [
                        'key' => 'tosca-500-70',
                        'value' => 'rgba(0, 255, 170, 0.7)'
                    ],
                    [
                        'key' => 'tosca-500-80',
                        'value' => 'rgba(0, 255, 170, 0.8)'
                    ],
                    [
                        'key' => 'tosca-500-90',
                        'value' => 'rgba(0, 255, 170, 0.9)'
                    ],
                    [
                        'key' => 'tosca-500-100',
                        'value' => 'rgba(0, 255, 170, 1.0)'
                    ],
                    [
                        'key' => 'tosca-600',
                        'value' => '#00D08B'
                    ],
                    [
                        'key' => 'tosca-600-10',
                        'value' => 'rgba(0, 208, 139, 0.1)'
                    ],
                    [
                        'key' => 'tosca-600-20',
                        'value' => 'rgba(0, 208, 139, 0.2)'
                    ],
                    [
                        'key' => 'tosca-600-30',
                        'value' => 'rgba(0, 208, 139, 0.3)'
                    ],
                    [
                        'key' => 'tosca-600-40',
                        'value' => 'rgba(0, 208, 139, 0.4)'
                    ],
                    [
                        'key' => 'tosca-600-50',
                        'value' => 'rgba(0, 208, 139, 0.5)'
                    ],
                    [
                        'key' => 'tosca-600-60',
                        'value' => 'rgba(0, 208, 139, 0.6)'
                    ],
                    [
                        'key' => 'tosca-600-70',
                        'value' => 'rgba(0, 208, 139, 0.7)'
                    ],
                    [
                        'key' => 'tosca-600-80',
                        'value' => 'rgba(0, 208, 139, 0.8)'
                    ],
                    [
                        'key' => 'tosca-600-90',
                        'value' => 'rgba(0, 208, 139, 0.9)'
                    ],
                    [
                        'key' => 'tosca-600-100',
                        'value' => 'rgba(0, 208, 139, 1.0)'
                    ],
                    [
                        'key' => 'tosca-700',
                        'value' => '#00A26C'
                    ],
                    [
                        'key' => 'tosca-700-10',
                        'value' => 'rgba(0, 162, 108, 0.1)'
                    ],
                    [
                        'key' => 'tosca-700-20',
                        'value' => 'rgba(0, 162, 108, 0.2)'
                    ],
                    [
                        'key' => 'tosca-700-30',
                        'value' => 'rgba(0, 162, 108, 0.3)'
                    ],
                    [
                        'key' => 'tosca-700-40',
                        'value' => 'rgba(0, 162, 108, 0.4)'
                    ],
                    [
                        'key' => 'tosca-700-50',
                        'value' => 'rgba(0, 162, 108, 0.5)'
                    ],
                    [
                        'key' => 'tosca-700-60',
                        'value' => 'rgba(0, 162, 108, 0.6)'
                    ],
                    [
                        'key' => 'tosca-700-70',
                        'value' => 'rgba(0, 162, 108, 0.7)'
                    ],
                    [
                        'key' => 'tosca-700-80',
                        'value' => 'rgba(0, 162, 108, 0.8)'
                    ],
                    [
                        'key' => 'tosca-700-90',
                        'value' => 'rgba(0, 162, 108, 0.9)'
                    ],
                    [
                        'key' => 'tosca-700-100',
                        'value' => 'rgba(0, 162, 108, 1.0)'
                    ],
                    [
                        'key' => 'tosca-800',
                        'value' => '#00734D'
                    ],
                    [
                        'key' => 'tosca-800-10',
                        'value' => 'rgba(0, 115, 77, 0.1)'
                    ],
                    [
                        'key' => 'tosca-800-20',
                        'value' => 'rgba(0, 115, 77, 0.2)'
                    ],
                    [
                        'key' => 'tosca-800-30',
                        'value' => 'rgba(0, 115, 77, 0.3)'
                    ],
                    [
                        'key' => 'tosca-800-40',
                        'value' => 'rgba(0, 115, 77, 0.4)'
                    ],
                    [
                        'key' => 'tosca-800-50',
                        'value' => 'rgba(0, 115, 77, 0.5)'
                    ],
                    [
                        'key' => 'tosca-800-60',
                        'value' => 'rgba(0, 115, 77, 0.6)'
                    ],
                    [
                        'key' => 'tosca-800-70',
                        'value' => 'rgba(0, 115, 77, 0.7)'
                    ],
                    [
                        'key' => 'tosca-800-80',
                        'value' => 'rgba(0, 115, 77, 0.8)'
                    ],
                    [
                        'key' => 'tosca-800-90',
                        'value' => 'rgba(0, 115, 77, 0.9)'
                    ],
                    [
                        'key' => 'tosca-800-100',
                        'value' => 'rgba(0, 115, 77, 1.0)'
                    ],
                    [
                        'key' => 'tosca-900',
                        'value' => '#00452E'
                    ],
                    [
                        'key' => 'tosca-900-10',
                        'value' => 'rgba(0, 69, 46, 0.1)'
                    ],
                    [
                        'key' => 'tosca-900-20',
                        'value' => 'rgba(0, 69, 46, 0.2)'
                    ],
                    [
                        'key' => 'tosca-900-30',
                        'value' => 'rgba(0, 69, 46, 0.3)'
                    ],
                    [
                        'key' => 'tosca-900-40',
                        'value' => 'rgba(0, 69, 46, 0.4)'
                    ],
                    [
                        'key' => 'tosca-900-50',
                        'value' => 'rgba(0, 69, 46, 0.5)'
                    ],
                    [
                        'key' => 'tosca-900-60',
                        'value' => 'rgba(0, 69, 46, 0.6)'
                    ],
                    [
                        'key' => 'tosca-900-70',
                        'value' => 'rgba(0, 69, 46, 0.7)'
                    ],
                    [
                        'key' => 'tosca-900-80',
                        'value' => 'rgba(0, 69, 46, 0.8)'
                    ],
                    [
                        'key' => 'tosca-900-90',
                        'value' => 'rgba(0, 69, 46, 0.9)'
                    ],
                    [
                        'key' => 'tosca-900-100',
                        'value' => 'rgba(0, 69, 46, 1.0)'
                    ],
                    [
                        'key' => 'tosca-950',
                        'value' => '#00170F'
                    ],
                    [
                        'key' => 'tosca-950-10',
                        'value' => 'rgba(0, 23, 15, 0.1)'
                    ],
                    [
                        'key' => 'tosca-950-20',
                        'value' => 'rgba(0, 23, 15, 0.2)'
                    ],
                    [
                        'key' => 'tosca-950-30',
                        'value' => 'rgba(0, 23, 15, 0.3)'
                    ],
                    [
                        'key' => 'tosca-950-40',
                        'value' => 'rgba(0, 23, 15, 0.4)'
                    ],
                    [
                        'key' => 'tosca-950-50',
                        'value' => 'rgba(0, 23, 15, 0.5)'
                    ],
                    [
                        'key' => 'tosca-950-60',
                        'value' => 'rgba(0, 23, 15, 0.6)'
                    ],
                    [
                        'key' => 'tosca-950-70',
                        'value' => 'rgba(0, 23, 15, 0.7)'
                    ],
                    [
                        'key' => 'tosca-950-80',
                        'value' => 'rgba(0, 23, 15, 0.8)'
                    ],
                    [
                        'key' => 'tosca-950-90',
                        'value' => 'rgba(0, 23, 15, 0.9)'
                    ],
                    [
                        'key' => 'tosca-950-100',
                        'value' => 'rgba(0, 23, 15, 1.0)'
                    ]
                ],
                'ocean' => [
                    [
                        'key' => 'ocean-50',
                        'value' => '#E7FFFD'
                    ],
                    [
                        'key' => 'ocean-50-10',
                        'value' => 'rgba(231, 255, 253, 0.1)'
                    ],
                    [
                        'key' => 'ocean-50-20',
                        'value' => 'rgba(231, 255, 253, 0.2)'
                    ],
                    [
                        'key' => 'ocean-50-30',
                        'value' => 'rgba(231, 255, 253, 0.3)'
                    ],
                    [
                        'key' => 'ocean-50-40',
                        'value' => 'rgba(231, 255, 253, 0.4)'
                    ],
                    [
                        'key' => 'ocean-50-50',
                        'value' => 'rgba(231, 255, 253, 0.5)'
                    ],
                    [
                        'key' => 'ocean-50-60',
                        'value' => 'rgba(231, 255, 253, 0.6)'
                    ],
                    [
                        'key' => 'ocean-50-70',
                        'value' => 'rgba(231, 255, 253, 0.7)'
                    ],
                    [
                        'key' => 'ocean-50-80',
                        'value' => 'rgba(231, 255, 253, 0.8)'
                    ],
                    [
                        'key' => 'ocean-50-90',
                        'value' => 'rgba(231, 255, 253, 0.9)'
                    ],
                    [
                        'key' => 'ocean-50-100',
                        'value' => 'rgba(231, 255, 253, 1.0)'
                    ],
                    [
                        'key' => 'ocean-100',
                        'value' => '#B9FFF9'
                    ],
                    [
                        'key' => 'ocean-100-10',
                        'value' => 'rgba(185, 255, 249, 0.1)'
                    ],
                    [
                        'key' => 'ocean-100-20',
                        'value' => 'rgba(185, 255, 249, 0.2)'
                    ],
                    [
                        'key' => 'ocean-100-30',
                        'value' => 'rgba(185, 255, 249, 0.3)'
                    ],
                    [
                        'key' => 'ocean-100-40',
                        'value' => 'rgba(185, 255, 249, 0.4)'
                    ],
                    [
                        'key' => 'ocean-100-50',
                        'value' => 'rgba(185, 255, 249, 0.5)'
                    ],
                    [
                        'key' => 'ocean-100-60',
                        'value' => 'rgba(185, 255, 249, 0.6)'
                    ],
                    [
                        'key' => 'ocean-100-70',
                        'value' => 'rgba(185, 255, 249, 0.7)'
                    ],
                    [
                        'key' => 'ocean-100-80',
                        'value' => 'rgba(185, 255, 249, 0.8)'
                    ],
                    [
                        'key' => 'ocean-100-90',
                        'value' => 'rgba(185, 255, 249, 0.9)'
                    ],
                    [
                        'key' => 'ocean-100-100',
                        'value' => 'rgba(185, 255, 249, 1.0)'
                    ],
                    [
                        'key' => 'ocean-200',
                        'value' => '#8BFFF5'
                    ],
                    [
                        'key' => 'ocean-200-10',
                        'value' => 'rgba(139, 255, 245, 0.1)'
                    ],
                    [
                        'key' => 'ocean-200-20',
                        'value' => 'rgba(139, 255, 245, 0.2)'
                    ],
                    [
                        'key' => 'ocean-200-30',
                        'value' => 'rgba(139, 255, 245, 0.3)'
                    ],
                    [
                        'key' => 'ocean-200-40',
                        'value' => 'rgba(139, 255, 245, 0.4)'
                    ],
                    [
                        'key' => 'ocean-200-50',
                        'value' => 'rgba(139, 255, 245, 0.5)'
                    ],
                    [
                        'key' => 'ocean-200-60',
                        'value' => 'rgba(139, 255, 245, 0.6)'
                    ],
                    [
                        'key' => 'ocean-200-70',
                        'value' => 'rgba(139, 255, 245, 0.7)'
                    ],
                    [
                        'key' => 'ocean-200-80',
                        'value' => 'rgba(139, 255, 245, 0.8)'
                    ],
                    [
                        'key' => 'ocean-200-90',
                        'value' => 'rgba(139, 255, 245, 0.9)'
                    ],
                    [
                        'key' => 'ocean-200-100',
                        'value' => 'rgba(139, 255, 245, 1.0)'
                    ],
                    [
                        'key' => 'ocean-300',
                        'value' => '#5CFFF1'
                    ],
                    [
                        'key' => 'ocean-300-10',
                        'value' => 'rgba(92, 255, 241, 0.1)'
                    ],
                    [
                        'key' => 'ocean-300-20',
                        'value' => 'rgba(92, 255, 241, 0.2)'
                    ],
                    [
                        'key' => 'ocean-300-30',
                        'value' => 'rgba(92, 255, 241, 0.3)'
                    ],
                    [
                        'key' => 'ocean-300-40',
                        'value' => 'rgba(92, 255, 241, 0.4)'
                    ],
                    [
                        'key' => 'ocean-300-50',
                        'value' => 'rgba(92, 255, 241, 0.5)'
                    ],
                    [
                        'key' => 'ocean-300-60',
                        'value' => 'rgba(92, 255, 241, 0.6)'
                    ],
                    [
                        'key' => 'ocean-300-70',
                        'value' => 'rgba(92, 255, 241, 0.7)'
                    ],
                    [
                        'key' => 'ocean-300-80',
                        'value' => 'rgba(92, 255, 241, 0.8)'
                    ],
                    [
                        'key' => 'ocean-300-90',
                        'value' => 'rgba(92, 255, 241, 0.9)'
                    ],
                    [
                        'key' => 'ocean-300-100',
                        'value' => 'rgba(92, 255, 241, 1.0)'
                    ],
                    [
                        'key' => 'ocean-400',
                        'value' => '#2EFEED'
                    ],
                    [
                        'key' => 'ocean-400-10',
                        'value' => 'rgba(46, 254, 237, 0.1)'
                    ],
                    [
                        'key' => 'ocean-400-20',
                        'value' => 'rgba(46, 254, 237, 0.2)'
                    ],
                    [
                        'key' => 'ocean-400-30',
                        'value' => 'rgba(46, 254, 237, 0.3)'
                    ],
                    [
                        'key' => 'ocean-400-40',
                        'value' => 'rgba(46, 254, 237, 0.4)'
                    ],
                    [
                        'key' => 'ocean-400-50',
                        'value' => 'rgba(46, 254, 237, 0.5)'
                    ],
                    [
                        'key' => 'ocean-400-60',
                        'value' => 'rgba(46, 254, 237, 0.6)'
                    ],
                    [
                        'key' => 'ocean-400-70',
                        'value' => 'rgba(46, 254, 237, 0.7)'
                    ],
                    [
                        'key' => 'ocean-400-80',
                        'value' => 'rgba(46, 254, 237, 0.8)'
                    ],
                    [
                        'key' => 'ocean-400-90',
                        'value' => 'rgba(46, 254, 237, 0.9)'
                    ],
                    [
                        'key' => 'ocean-400-100',
                        'value' => 'rgba(46, 254, 237, 1.0)'
                    ],
                    [
                        'key' => 'ocean-500',
                        'value' => '#00FFEA'
                    ],
                    [
                        'key' => 'ocean-500-10',
                        'value' => 'rgba(0, 255, 234, 0.1)'
                    ],
                    [
                        'key' => 'ocean-500-20',
                        'value' => 'rgba(0, 255, 234, 0.2)'
                    ],
                    [
                        'key' => 'ocean-500-30',
                        'value' => 'rgba(0, 255, 234, 0.3)'
                    ],
                    [
                        'key' => 'ocean-500-40',
                        'value' => 'rgba(0, 255, 234, 0.4)'
                    ],
                    [
                        'key' => 'ocean-500-50',
                        'value' => 'rgba(0, 255, 234, 0.5)'
                    ],
                    [
                        'key' => 'ocean-500-60',
                        'value' => 'rgba(0, 255, 234, 0.6)'
                    ],
                    [
                        'key' => 'ocean-500-70',
                        'value' => 'rgba(0, 255, 234, 0.7)'
                    ],
                    [
                        'key' => 'ocean-500-80',
                        'value' => 'rgba(0, 255, 234, 0.8)'
                    ],
                    [
                        'key' => 'ocean-500-90',
                        'value' => 'rgba(0, 255, 234, 0.9)'
                    ],
                    [
                        'key' => 'ocean-500-100',
                        'value' => 'rgba(0, 255, 234, 1.0)'
                    ],
                    [
                        'key' => 'ocean-600',
                        'value' => '#00D0BF'
                    ],
                    [
                        'key' => 'ocean-600-10',
                        'value' => 'rgba(0, 208, 191, 0.1)'
                    ],
                    [
                        'key' => 'ocean-600-20',
                        'value' => 'rgba(0, 208, 191, 0.2)'
                    ],
                    [
                        'key' => 'ocean-600-30',
                        'value' => 'rgba(0, 208, 191, 0.3)'
                    ],
                    [
                        'key' => 'ocean-600-40',
                        'value' => 'rgba(0, 208, 191, 0.4)'
                    ],
                    [
                        'key' => 'ocean-600-50',
                        'value' => 'rgba(0, 208, 191, 0.5)'
                    ],
                    [
                        'key' => 'ocean-600-60',
                        'value' => 'rgba(0, 208, 191, 0.6)'
                    ],
                    [
                        'key' => 'ocean-600-70',
                        'value' => 'rgba(0, 208, 191, 0.7)'
                    ],
                    [
                        'key' => 'ocean-600-80',
                        'value' => 'rgba(0, 208, 191, 0.8)'
                    ],
                    [
                        'key' => 'ocean-600-90',
                        'value' => 'rgba(0, 208, 191, 0.9)'
                    ],
                    [
                        'key' => 'ocean-600-100',
                        'value' => 'rgba(0, 208, 191, 1.0)'
                    ],
                    [
                        'key' => 'ocean-700',
                        'value' => '#00A294'
                    ],
                    [
                        'key' => 'ocean-700-10',
                        'value' => 'rgba(0, 162, 148, 0.1)'
                    ],
                    [
                        'key' => 'ocean-700-20',
                        'value' => 'rgba(0, 162, 148, 0.2)'
                    ],
                    [
                        'key' => 'ocean-700-30',
                        'value' => 'rgba(0, 162, 148, 0.3)'
                    ],
                    [
                        'key' => 'ocean-700-40',
                        'value' => 'rgba(0, 162, 148, 0.4)'
                    ],
                    [
                        'key' => 'ocean-700-50',
                        'value' => 'rgba(0, 162, 148, 0.5)'
                    ],
                    [
                        'key' => 'ocean-700-60',
                        'value' => 'rgba(0, 162, 148, 0.6)'
                    ],
                    [
                        'key' => 'ocean-700-70',
                        'value' => 'rgba(0, 162, 148, 0.7)'
                    ],
                    [
                        'key' => 'ocean-700-80',
                        'value' => 'rgba(0, 162, 148, 0.8)'
                    ],
                    [
                        'key' => 'ocean-700-90',
                        'value' => 'rgba(0, 162, 148, 0.9)'
                    ],
                    [
                        'key' => 'ocean-700-100',
                        'value' => 'rgba(0, 162, 148, 1.0)'
                    ],
                    [
                        'key' => 'ocean-800',
                        'value' => '#00736A'
                    ],
                    [
                        'key' => 'ocean-800-10',
                        'value' => 'rgba(0, 115, 106, 0.1)'
                    ],
                    [
                        'key' => 'ocean-800-20',
                        'value' => 'rgba(0, 115, 106, 0.2)'
                    ],
                    [
                        'key' => 'ocean-800-30',
                        'value' => 'rgba(0, 115, 106, 0.3)'
                    ],
                    [
                        'key' => 'ocean-800-40',
                        'value' => 'rgba(0, 115, 106, 0.4)'
                    ],
                    [
                        'key' => 'ocean-800-50',
                        'value' => 'rgba(0, 115, 106, 0.5)'
                    ],
                    [
                        'key' => 'ocean-800-60',
                        'value' => 'rgba(0, 115, 106, 0.6)'
                    ],
                    [
                        'key' => 'ocean-800-70',
                        'value' => 'rgba(0, 115, 106, 0.7)'
                    ],
                    [
                        'key' => 'ocean-800-80',
                        'value' => 'rgba(0, 115, 106, 0.8)'
                    ],
                    [
                        'key' => 'ocean-800-90',
                        'value' => 'rgba(0, 115, 106, 0.9)'
                    ],
                    [
                        'key' => 'ocean-800-100',
                        'value' => 'rgba(0, 115, 106, 1.0)'
                    ],
                    [
                        'key' => 'ocean-900',
                        'value' => '#00453F'
                    ],
                    [
                        'key' => 'ocean-900-10',
                        'value' => 'rgba(0, 69, 63, 0.1)'
                    ],
                    [
                        'key' => 'ocean-900-20',
                        'value' => 'rgba(0, 69, 63, 0.2)'
                    ],
                    [
                        'key' => 'ocean-900-30',
                        'value' => 'rgba(0, 69, 63, 0.3)'
                    ],
                    [
                        'key' => 'ocean-900-40',
                        'value' => 'rgba(0, 69, 63, 0.4)'
                    ],
                    [
                        'key' => 'ocean-900-50',
                        'value' => 'rgba(0, 69, 63, 0.5)'
                    ],
                    [
                        'key' => 'ocean-900-60',
                        'value' => 'rgba(0, 69, 63, 0.6)'
                    ],
                    [
                        'key' => 'ocean-900-70',
                        'value' => 'rgba(0, 69, 63, 0.7)'
                    ],
                    [
                        'key' => 'ocean-900-80',
                        'value' => 'rgba(0, 69, 63, 0.8)'
                    ],
                    [
                        'key' => 'ocean-900-90',
                        'value' => 'rgba(0, 69, 63, 0.9)'
                    ],
                    [
                        'key' => 'ocean-900-100',
                        'value' => 'rgba(0, 69, 63, 1.0)'
                    ],
                    [
                        'key' => 'ocean-950',
                        'value' => '#001715'
                    ],
                    [
                        'key' => 'ocean-950-10',
                        'value' => 'rgba(0, 23, 21, 0.1)'
                    ],
                    [
                        'key' => 'ocean-950-20',
                        'value' => 'rgba(0, 23, 21, 0.2)'
                    ],
                    [
                        'key' => 'ocean-950-30',
                        'value' => 'rgba(0, 23, 21, 0.3)'
                    ],
                    [
                        'key' => 'ocean-950-40',
                        'value' => 'rgba(0, 23, 21, 0.4)'
                    ],
                    [
                        'key' => 'ocean-950-50',
                        'value' => 'rgba(0, 23, 21, 0.5)'
                    ],
                    [
                        'key' => 'ocean-950-60',
                        'value' => 'rgba(0, 23, 21, 0.6)'
                    ],
                    [
                        'key' => 'ocean-950-70',
                        'value' => 'rgba(0, 23, 21, 0.7)'
                    ],
                    [
                        'key' => 'ocean-950-80',
                        'value' => 'rgba(0, 23, 21, 0.8)'
                    ],
                    [
                        'key' => 'ocean-950-90',
                        'value' => 'rgba(0, 23, 21, 0.9)'
                    ],
                    [
                        'key' => 'ocean-950-100',
                        'value' => 'rgba(0, 23, 21, 1.0)'
                    ]
                ],
                'sky' => [
                    [
                        'key' => 'sky-50',
                        'value' => '#E7F9FF'
                    ],
                    [
                        'key' => 'sky-50-10',
                        'value' => 'rgba(231, 249, 255, 0.1)'
                    ],
                    [
                        'key' => 'sky-50-20',
                        'value' => 'rgba(231, 249, 255, 0.2)'
                    ],
                    [
                        'key' => 'sky-50-30',
                        'value' => 'rgba(231, 249, 255, 0.3)'
                    ],
                    [
                        'key' => 'sky-50-40',
                        'value' => 'rgba(231, 249, 255, 0.4)'
                    ],
                    [
                        'key' => 'sky-50-50',
                        'value' => 'rgba(231, 249, 255, 0.5)'
                    ],
                    [
                        'key' => 'sky-50-60',
                        'value' => 'rgba(231, 249, 255, 0.6)'
                    ],
                    [
                        'key' => 'sky-50-70',
                        'value' => 'rgba(231, 249, 255, 0.7)'
                    ],
                    [
                        'key' => 'sky-50-80',
                        'value' => 'rgba(231, 249, 255, 0.8)'
                    ],
                    [
                        'key' => 'sky-50-90',
                        'value' => 'rgba(231, 249, 255, 0.9)'
                    ],
                    [
                        'key' => 'sky-50-100',
                        'value' => 'rgba(231, 249, 255, 1.0)'
                    ],
                    [
                        'key' => 'sky-100',
                        'value' => '#B9EDFF'
                    ],
                    [
                        'key' => 'sky-100-10',
                        'value' => 'rgba(185, 237, 255, 0.1)'
                    ],
                    [
                        'key' => 'sky-100-20',
                        'value' => 'rgba(185, 237, 255, 0.2)'
                    ],
                    [
                        'key' => 'sky-100-30',
                        'value' => 'rgba(185, 237, 255, 0.3)'
                    ],
                    [
                        'key' => 'sky-100-40',
                        'value' => 'rgba(185, 237, 255, 0.4)'
                    ],
                    [
                        'key' => 'sky-100-50',
                        'value' => 'rgba(185, 237, 255, 0.5)'
                    ],
                    [
                        'key' => 'sky-100-60',
                        'value' => 'rgba(185, 237, 255, 0.6)'
                    ],
                    [
                        'key' => 'sky-100-70',
                        'value' => 'rgba(185, 237, 255, 0.7)'
                    ],
                    [
                        'key' => 'sky-100-80',
                        'value' => 'rgba(185, 237, 255, 0.8)'
                    ],
                    [
                        'key' => 'sky-100-90',
                        'value' => 'rgba(185, 237, 255, 0.9)'
                    ],
                    [
                        'key' => 'sky-100-100',
                        'value' => 'rgba(185, 237, 255, 1.0)'
                    ],
                    [
                        'key' => 'sky-200',
                        'value' => '#8BE1FF'
                    ],
                    [
                        'key' => 'sky-200-10',
                        'value' => 'rgba(139, 225, 255, 0.1)'
                    ],
                    [
                        'key' => 'sky-200-20',
                        'value' => 'rgba(139, 225, 255, 0.2)'
                    ],
                    [
                        'key' => 'sky-200-30',
                        'value' => 'rgba(139, 225, 255, 0.3)'
                    ],
                    [
                        'key' => 'sky-200-40',
                        'value' => 'rgba(139, 225, 255, 0.4)'
                    ],
                    [
                        'key' => 'sky-200-50',
                        'value' => 'rgba(139, 225, 255, 0.5)'
                    ],
                    [
                        'key' => 'sky-200-60',
                        'value' => 'rgba(139, 225, 255, 0.6)'
                    ],
                    [
                        'key' => 'sky-200-70',
                        'value' => 'rgba(139, 225, 255, 0.7)'
                    ],
                    [
                        'key' => 'sky-200-80',
                        'value' => 'rgba(139, 225, 255, 0.8)'
                    ],
                    [
                        'key' => 'sky-200-90',
                        'value' => 'rgba(139, 225, 255, 0.9)'
                    ],
                    [
                        'key' => 'sky-200-100',
                        'value' => 'rgba(139, 225, 255, 1.0)'
                    ],
                    [
                        'key' => 'sky-300',
                        'value' => '#5CD6FF'
                    ],
                    [
                        'key' => 'sky-300-10',
                        'value' => 'rgba(92, 214, 255, 0.1)'
                    ],
                    [
                        'key' => 'sky-300-20',
                        'value' => 'rgba(92, 214, 255, 0.2)'
                    ],
                    [
                        'key' => 'sky-300-30',
                        'value' => 'rgba(92, 214, 255, 0.3)'
                    ],
                    [
                        'key' => 'sky-300-40',
                        'value' => 'rgba(92, 214, 255, 0.4)'
                    ],
                    [
                        'key' => 'sky-300-50',
                        'value' => 'rgba(92, 214, 255, 0.5)'
                    ],
                    [
                        'key' => 'sky-300-60',
                        'value' => 'rgba(92, 214, 255, 0.6)'
                    ],
                    [
                        'key' => 'sky-300-70',
                        'value' => 'rgba(92, 214, 255, 0.7)'
                    ],
                    [
                        'key' => 'sky-300-80',
                        'value' => 'rgba(92, 214, 255, 0.8)'
                    ],
                    [
                        'key' => 'sky-300-90',
                        'value' => 'rgba(92, 214, 255, 0.9)'
                    ],
                    [
                        'key' => 'sky-300-100',
                        'value' => 'rgba(92, 214, 255, 1.0)'
                    ],
                    [
                        'key' => 'sky-400',
                        'value' => '#2ECAFE'
                    ],
                    [
                        'key' => 'sky-400-10',
                        'value' => 'rgba(46, 202, 254, 0.1)'
                    ],
                    [
                        'key' => 'sky-400-20',
                        'value' => 'rgba(46, 202, 254, 0.2)'
                    ],
                    [
                        'key' => 'sky-400-30',
                        'value' => 'rgba(46, 202, 254, 0.3)'
                    ],
                    [
                        'key' => 'sky-400-40',
                        'value' => 'rgba(46, 202, 254, 0.4)'
                    ],
                    [
                        'key' => 'sky-400-50',
                        'value' => 'rgba(46, 202, 254, 0.5)'
                    ],
                    [
                        'key' => 'sky-400-60',
                        'value' => 'rgba(46, 202, 254, 0.6)'
                    ],
                    [
                        'key' => 'sky-400-70',
                        'value' => 'rgba(46, 202, 254, 0.7)'
                    ],
                    [
                        'key' => 'sky-400-80',
                        'value' => 'rgba(46, 202, 254, 0.8)'
                    ],
                    [
                        'key' => 'sky-400-90',
                        'value' => 'rgba(46, 202, 254, 0.9)'
                    ],
                    [
                        'key' => 'sky-400-100',
                        'value' => 'rgba(46, 202, 254, 1.0)'
                    ],
                    [
                        'key' => 'sky-500',
                        'value' => '#00BFFF'
                    ],
                    [
                        'key' => 'sky-500-10',
                        'value' => 'rgba(0, 191, 255, 0.1)'
                    ],
                    [
                        'key' => 'sky-500-20',
                        'value' => 'rgba(0, 191, 255, 0.2)'
                    ],
                    [
                        'key' => 'sky-500-30',
                        'value' => 'rgba(0, 191, 255, 0.3)'
                    ],
                    [
                        'key' => 'sky-500-40',
                        'value' => 'rgba(0, 191, 255, 0.4)'
                    ],
                    [
                        'key' => 'sky-500-50',
                        'value' => 'rgba(0, 191, 255, 0.5)'
                    ],
                    [
                        'key' => 'sky-500-60',
                        'value' => 'rgba(0, 191, 255, 0.6)'
                    ],
                    [
                        'key' => 'sky-500-70',
                        'value' => 'rgba(0, 191, 255, 0.7)'
                    ],
                    [
                        'key' => 'sky-500-80',
                        'value' => 'rgba(0, 191, 255, 0.8)'
                    ],
                    [
                        'key' => 'sky-500-90',
                        'value' => 'rgba(0, 191, 255, 0.9)'
                    ],
                    [
                        'key' => 'sky-500-100',
                        'value' => 'rgba(0, 191, 255, 1.0)'
                    ],
                    [
                        'key' => 'sky-600',
                        'value' => '#009CD0'
                    ],
                    [
                        'key' => 'sky-600-10',
                        'value' => 'rgba(0, 156, 208, 0.1)'
                    ],
                    [
                        'key' => 'sky-600-20',
                        'value' => 'rgba(0, 156, 208, 0.2)'
                    ],
                    [
                        'key' => 'sky-600-30',
                        'value' => 'rgba(0, 156, 208, 0.3)'
                    ],
                    [
                        'key' => 'sky-600-40',
                        'value' => 'rgba(0, 156, 208, 0.4)'
                    ],
                    [
                        'key' => 'sky-600-50',
                        'value' => 'rgba(0, 156, 208, 0.5)'
                    ],
                    [
                        'key' => 'sky-600-60',
                        'value' => 'rgba(0, 156, 208, 0.6)'
                    ],
                    [
                        'key' => 'sky-600-70',
                        'value' => 'rgba(0, 156, 208, 0.7)'
                    ],
                    [
                        'key' => 'sky-600-80',
                        'value' => 'rgba(0, 156, 208, 0.8)'
                    ],
                    [
                        'key' => 'sky-600-90',
                        'value' => 'rgba(0, 156, 208, 0.9)'
                    ],
                    [
                        'key' => 'sky-600-100',
                        'value' => 'rgba(0, 156, 208, 1.0)'
                    ],
                    [
                        'key' => 'sky-700',
                        'value' => '#0079A2'
                    ],
                    [
                        'key' => 'sky-700-10',
                        'value' => 'rgba(0, 121, 162, 0.1)'
                    ],
                    [
                        'key' => 'sky-700-20',
                        'value' => 'rgba(0, 121, 162, 0.2)'
                    ],
                    [
                        'key' => 'sky-700-30',
                        'value' => 'rgba(0, 121, 162, 0.3)'
                    ],
                    [
                        'key' => 'sky-700-40',
                        'value' => 'rgba(0, 121, 162, 0.4)'
                    ],
                    [
                        'key' => 'sky-700-50',
                        'value' => 'rgba(0, 121, 162, 0.5)'
                    ],
                    [
                        'key' => 'sky-700-60',
                        'value' => 'rgba(0, 121, 162, 0.6)'
                    ],
                    [
                        'key' => 'sky-700-70',
                        'value' => 'rgba(0, 121, 162, 0.7)'
                    ],
                    [
                        'key' => 'sky-700-80',
                        'value' => 'rgba(0, 121, 162, 0.8)'
                    ],
                    [
                        'key' => 'sky-700-90',
                        'value' => 'rgba(0, 121, 162, 0.9)'
                    ],
                    [
                        'key' => 'sky-700-100',
                        'value' => 'rgba(0, 121, 162, 1.0)'
                    ],
                    [
                        'key' => 'sky-800',
                        'value' => '#005673'
                    ],
                    [
                        'key' => 'sky-800-10',
                        'value' => 'rgba(0, 86, 115, 0.1)'
                    ],
                    [
                        'key' => 'sky-800-20',
                        'value' => 'rgba(0, 86, 115, 0.2)'
                    ],
                    [
                        'key' => 'sky-800-30',
                        'value' => 'rgba(0, 86, 115, 0.3)'
                    ],
                    [
                        'key' => 'sky-800-40',
                        'value' => 'rgba(0, 86, 115, 0.4)'
                    ],
                    [
                        'key' => 'sky-800-50',
                        'value' => 'rgba(0, 86, 115, 0.5)'
                    ],
                    [
                        'key' => 'sky-800-60',
                        'value' => 'rgba(0, 86, 115, 0.6)'
                    ],
                    [
                        'key' => 'sky-800-70',
                        'value' => 'rgba(0, 86, 115, 0.7)'
                    ],
                    [
                        'key' => 'sky-800-80',
                        'value' => 'rgba(0, 86, 115, 0.8)'
                    ],
                    [
                        'key' => 'sky-800-90',
                        'value' => 'rgba(0, 86, 115, 0.9)'
                    ],
                    [
                        'key' => 'sky-800-100',
                        'value' => 'rgba(0, 86, 115, 1.0)'
                    ],
                    [
                        'key' => 'sky-900',
                        'value' => '#003445'
                    ],
                    [
                        'key' => 'sky-900-10',
                        'value' => 'rgba(0, 52, 69, 0.1)'
                    ],
                    [
                        'key' => 'sky-900-20',
                        'value' => 'rgba(0, 52, 69, 0.2)'
                    ],
                    [
                        'key' => 'sky-900-30',
                        'value' => 'rgba(0, 52, 69, 0.3)'
                    ],
                    [
                        'key' => 'sky-900-40',
                        'value' => 'rgba(0, 52, 69, 0.4)'
                    ],
                    [
                        'key' => 'sky-900-50',
                        'value' => 'rgba(0, 52, 69, 0.5)'
                    ],
                    [
                        'key' => 'sky-900-60',
                        'value' => 'rgba(0, 52, 69, 0.6)'
                    ],
                    [
                        'key' => 'sky-900-70',
                        'value' => 'rgba(0, 52, 69, 0.7)'
                    ],
                    [
                        'key' => 'sky-900-80',
                        'value' => 'rgba(0, 52, 69, 0.8)'
                    ],
                    [
                        'key' => 'sky-900-90',
                        'value' => 'rgba(0, 52, 69, 0.9)'
                    ],
                    [
                        'key' => 'sky-900-100',
                        'value' => 'rgba(0, 52, 69, 1.0)'
                    ],
                    [
                        'key' => 'sky-950',
                        'value' => '#001117'
                    ],
                    [
                        'key' => 'sky-950-10',
                        'value' => 'rgba(0, 17, 23, 0.1)'
                    ],
                    [
                        'key' => 'sky-950-20',
                        'value' => 'rgba(0, 17, 23, 0.2)'
                    ],
                    [
                        'key' => 'sky-950-30',
                        'value' => 'rgba(0, 17, 23, 0.3)'
                    ],
                    [
                        'key' => 'sky-950-40',
                        'value' => 'rgba(0, 17, 23, 0.4)'
                    ],
                    [
                        'key' => 'sky-950-50',
                        'value' => 'rgba(0, 17, 23, 0.5)'
                    ],
                    [
                        'key' => 'sky-950-60',
                        'value' => 'rgba(0, 17, 23, 0.6)'
                    ],
                    [
                        'key' => 'sky-950-70',
                        'value' => 'rgba(0, 17, 23, 0.7)'
                    ],
                    [
                        'key' => 'sky-950-80',
                        'value' => 'rgba(0, 17, 23, 0.8)'
                    ],
                    [
                        'key' => 'sky-950-90',
                        'value' => 'rgba(0, 17, 23, 0.9)'
                    ],
                    [
                        'key' => 'sky-950-100',
                        'value' => 'rgba(0, 17, 23, 1.0)'
                    ]
                ],
                'blue' => [
                    [
                        'key' => 'blue-50',
                        'value' => '#E9EEFD'
                    ],
                    [
                        'key' => 'blue-50-10',
                        'value' => 'rgba(233, 238, 253, 0.1)'
                    ],
                    [
                        'key' => 'blue-50-20',
                        'value' => 'rgba(233, 238, 253, 0.2)'
                    ],
                    [
                        'key' => 'blue-50-30',
                        'value' => 'rgba(233, 238, 253, 0.3)'
                    ],
                    [
                        'key' => 'blue-50-40',
                        'value' => 'rgba(233, 238, 253, 0.4)'
                    ],
                    [
                        'key' => 'blue-50-50',
                        'value' => 'rgba(233, 238, 253, 0.5)'
                    ],
                    [
                        'key' => 'blue-50-60',
                        'value' => 'rgba(233, 238, 253, 0.6)'
                    ],
                    [
                        'key' => 'blue-50-70',
                        'value' => 'rgba(233, 238, 253, 0.7)'
                    ],
                    [
                        'key' => 'blue-50-80',
                        'value' => 'rgba(233, 238, 253, 0.8)'
                    ],
                    [
                        'key' => 'blue-50-90',
                        'value' => 'rgba(233, 238, 253, 0.9)'
                    ],
                    [
                        'key' => 'blue-50-100',
                        'value' => 'rgba(233, 238, 253, 1.0)'
                    ],
                    [
                        'key' => 'blue-100',
                        'value' => '#BECCFA'
                    ],
                    [
                        'key' => 'blue-100-10',
                        'value' => 'rgba(190, 204, 250, 0.1)'
                    ],
                    [
                        'key' => 'blue-100-20',
                        'value' => 'rgba(190, 204, 250, 0.2)'
                    ],
                    [
                        'key' => 'blue-100-30',
                        'value' => 'rgba(190, 204, 250, 0.3)'
                    ],
                    [
                        'key' => 'blue-100-40',
                        'value' => 'rgba(190, 204, 250, 0.4)'
                    ],
                    [
                        'key' => 'blue-100-50',
                        'value' => 'rgba(190, 204, 250, 0.5)'
                    ],
                    [
                        'key' => 'blue-100-60',
                        'value' => 'rgba(190, 204, 250, 0.6)'
                    ],
                    [
                        'key' => 'blue-100-70',
                        'value' => 'rgba(190, 204, 250, 0.7)'
                    ],
                    [
                        'key' => 'blue-100-80',
                        'value' => 'rgba(190, 204, 250, 0.8)'
                    ],
                    [
                        'key' => 'blue-100-90',
                        'value' => 'rgba(190, 204, 250, 0.9)'
                    ],
                    [
                        'key' => 'blue-100-100',
                        'value' => 'rgba(190, 204, 250, 1.0)'
                    ],
                    [
                        'key' => 'blue-200',
                        'value' => '#92ABF7'
                    ],
                    [
                        'key' => 'blue-200-10',
                        'value' => 'rgba(146, 171, 247, 0.1)'
                    ],
                    [
                        'key' => 'blue-200-20',
                        'value' => 'rgba(146, 171, 247, 0.2)'
                    ],
                    [
                        'key' => 'blue-200-30',
                        'value' => 'rgba(146, 171, 247, 0.3)'
                    ],
                    [
                        'key' => 'blue-200-40',
                        'value' => 'rgba(146, 171, 247, 0.4)'
                    ],
                    [
                        'key' => 'blue-200-50',
                        'value' => 'rgba(146, 171, 247, 0.5)'
                    ],
                    [
                        'key' => 'blue-200-60',
                        'value' => 'rgba(146, 171, 247, 0.6)'
                    ],
                    [
                        'key' => 'blue-200-70',
                        'value' => 'rgba(146, 171, 247, 0.7)'
                    ],
                    [
                        'key' => 'blue-200-80',
                        'value' => 'rgba(146, 171, 247, 0.8)'
                    ],
                    [
                        'key' => 'blue-200-90',
                        'value' => 'rgba(146, 171, 247, 0.9)'
                    ],
                    [
                        'key' => 'blue-200-100',
                        'value' => 'rgba(146, 171, 247, 1.0)'
                    ],
                    [
                        'key' => 'blue-300',
                        'value' => '#6789F4'
                    ],
                    [
                        'key' => 'blue-300-10',
                        'value' => 'rgba(103, 137, 244, 0.1)'
                    ],
                    [
                        'key' => 'blue-300-20',
                        'value' => 'rgba(103, 137, 244, 0.2)'
                    ],
                    [
                        'key' => 'blue-300-30',
                        'value' => 'rgba(103, 137, 244, 0.3)'
                    ],
                    [
                        'key' => 'blue-300-40',
                        'value' => 'rgba(103, 137, 244, 0.4)'
                    ],
                    [
                        'key' => 'blue-300-50',
                        'value' => 'rgba(103, 137, 244, 0.5)'
                    ],
                    [
                        'key' => 'blue-300-60',
                        'value' => 'rgba(103, 137, 244, 0.6)'
                    ],
                    [
                        'key' => 'blue-300-70',
                        'value' => 'rgba(103, 137, 244, 0.7)'
                    ],
                    [
                        'key' => 'blue-300-80',
                        'value' => 'rgba(103, 137, 244, 0.8)'
                    ],
                    [
                        'key' => 'blue-300-90',
                        'value' => 'rgba(103, 137, 244, 0.9)'
                    ],
                    [
                        'key' => 'blue-300-100',
                        'value' => 'rgba(103, 137, 244, 1.0)'
                    ],
                    [
                        'key' => 'blue-400',
                        'value' => '#3C68F1'
                    ],
                    [
                        'key' => 'blue-400-10',
                        'value' => 'rgba(60, 104, 241, 0.1)'
                    ],
                    [
                        'key' => 'blue-400-20',
                        'value' => 'rgba(60, 104, 241, 0.2)'
                    ],
                    [
                        'key' => 'blue-400-30',
                        'value' => 'rgba(60, 104, 241, 0.3)'
                    ],
                    [
                        'key' => 'blue-400-40',
                        'value' => 'rgba(60, 104, 241, 0.4)'
                    ],
                    [
                        'key' => 'blue-400-50',
                        'value' => 'rgba(60, 104, 241, 0.5)'
                    ],
                    [
                        'key' => 'blue-400-60',
                        'value' => 'rgba(60, 104, 241, 0.6)'
                    ],
                    [
                        'key' => 'blue-400-70',
                        'value' => 'rgba(60, 104, 241, 0.7)'
                    ],
                    [
                        'key' => 'blue-400-80',
                        'value' => 'rgba(60, 104, 241, 0.8)'
                    ],
                    [
                        'key' => 'blue-400-90',
                        'value' => 'rgba(60, 104, 241, 0.9)'
                    ],
                    [
                        'key' => 'blue-400-100',
                        'value' => 'rgba(60, 104, 241, 1.0)'
                    ],
                    [
                        'key' => 'blue-500',
                        'value' => '#1147EE'
                    ],
                    [
                        'key' => 'blue-500-10',
                        'value' => 'rgba(17, 71, 238, 0.1)'
                    ],
                    [
                        'key' => 'blue-500-20',
                        'value' => 'rgba(17, 71, 238, 0.2)'
                    ],
                    [
                        'key' => 'blue-500-30',
                        'value' => 'rgba(17, 71, 238, 0.3)'
                    ],
                    [
                        'key' => 'blue-500-40',
                        'value' => 'rgba(17, 71, 238, 0.4)'
                    ],
                    [
                        'key' => 'blue-500-50',
                        'value' => 'rgba(17, 71, 238, 0.5)'
                    ],
                    [
                        'key' => 'blue-500-60',
                        'value' => 'rgba(17, 71, 238, 0.6)'
                    ],
                    [
                        'key' => 'blue-500-70',
                        'value' => 'rgba(17, 71, 238, 0.7)'
                    ],
                    [
                        'key' => 'blue-500-80',
                        'value' => 'rgba(17, 71, 238, 0.8)'
                    ],
                    [
                        'key' => 'blue-500-90',
                        'value' => 'rgba(17, 71, 238, 0.9)'
                    ],
                    [
                        'key' => 'blue-500-100',
                        'value' => 'rgba(17, 71, 238, 1.0)'
                    ],
                    [
                        'key' => 'blue-600',
                        'value' => '#0D3AC2'
                    ],
                    [
                        'key' => 'blue-600-10',
                        'value' => 'rgba(13, 58, 194, 0.1)'
                    ],
                    [
                        'key' => 'blue-600-20',
                        'value' => 'rgba(13, 58, 194, 0.2)'
                    ],
                    [
                        'key' => 'blue-600-30',
                        'value' => 'rgba(13, 58, 194, 0.3)'
                    ],
                    [
                        'key' => 'blue-600-40',
                        'value' => 'rgba(13, 58, 194, 0.4)'
                    ],
                    [
                        'key' => 'blue-600-50',
                        'value' => 'rgba(13, 58, 194, 0.5)'
                    ],
                    [
                        'key' => 'blue-600-60',
                        'value' => 'rgba(13, 58, 194, 0.6)'
                    ],
                    [
                        'key' => 'blue-600-70',
                        'value' => 'rgba(13, 58, 194, 0.7)'
                    ],
                    [
                        'key' => 'blue-600-80',
                        'value' => 'rgba(13, 58, 194, 0.8)'
                    ],
                    [
                        'key' => 'blue-600-90',
                        'value' => 'rgba(13, 58, 194, 0.9)'
                    ],
                    [
                        'key' => 'blue-600-100',
                        'value' => 'rgba(13, 58, 194, 1.0)'
                    ],
                    [
                        'key' => 'blue-700',
                        'value' => '#0A2D97'
                    ],
                    [
                        'key' => 'blue-700-10',
                        'value' => 'rgba(10, 45, 151, 0.1)'
                    ],
                    [
                        'key' => 'blue-700-20',
                        'value' => 'rgba(10, 45, 151, 0.2)'
                    ],
                    [
                        'key' => 'blue-700-30',
                        'value' => 'rgba(10, 45, 151, 0.3)'
                    ],
                    [
                        'key' => 'blue-700-40',
                        'value' => 'rgba(10, 45, 151, 0.4)'
                    ],
                    [
                        'key' => 'blue-700-50',
                        'value' => 'rgba(10, 45, 151, 0.5)'
                    ],
                    [
                        'key' => 'blue-700-60',
                        'value' => 'rgba(10, 45, 151, 0.6)'
                    ],
                    [
                        'key' => 'blue-700-70',
                        'value' => 'rgba(10, 45, 151, 0.7)'
                    ],
                    [
                        'key' => 'blue-700-80',
                        'value' => 'rgba(10, 45, 151, 0.8)'
                    ],
                    [
                        'key' => 'blue-700-90',
                        'value' => 'rgba(10, 45, 151, 0.9)'
                    ],
                    [
                        'key' => 'blue-700-100',
                        'value' => 'rgba(10, 45, 151, 1.0)'
                    ],
                    [
                        'key' => 'blue-800',
                        'value' => '#07206C'
                    ],
                    [
                        'key' => 'blue-800-10',
                        'value' => 'rgba(7, 32, 108, 0.1)'
                    ],
                    [
                        'key' => 'blue-800-20',
                        'value' => 'rgba(7, 32, 108, 0.2)'
                    ],
                    [
                        'key' => 'blue-800-30',
                        'value' => 'rgba(7, 32, 108, 0.3)'
                    ],
                    [
                        'key' => 'blue-800-40',
                        'value' => 'rgba(7, 32, 108, 0.4)'
                    ],
                    [
                        'key' => 'blue-800-50',
                        'value' => 'rgba(7, 32, 108, 0.5)'
                    ],
                    [
                        'key' => 'blue-800-60',
                        'value' => 'rgba(7, 32, 108, 0.6)'
                    ],
                    [
                        'key' => 'blue-800-70',
                        'value' => 'rgba(7, 32, 108, 0.7)'
                    ],
                    [
                        'key' => 'blue-800-80',
                        'value' => 'rgba(7, 32, 108, 0.8)'
                    ],
                    [
                        'key' => 'blue-800-90',
                        'value' => 'rgba(7, 32, 108, 0.9)'
                    ],
                    [
                        'key' => 'blue-800-100',
                        'value' => 'rgba(7, 32, 108, 1.0)'
                    ],
                    [
                        'key' => 'blue-900',
                        'value' => '#041340'
                    ],
                    [
                        'key' => 'blue-900-10',
                        'value' => 'rgba(4, 19, 64, 0.1)'
                    ],
                    [
                        'key' => 'blue-900-20',
                        'value' => 'rgba(4, 19, 64, 0.2)'
                    ],
                    [
                        'key' => 'blue-900-30',
                        'value' => 'rgba(4, 19, 64, 0.3)'
                    ],
                    [
                        'key' => 'blue-900-40',
                        'value' => 'rgba(4, 19, 64, 0.4)'
                    ],
                    [
                        'key' => 'blue-900-50',
                        'value' => 'rgba(4, 19, 64, 0.5)'
                    ],
                    [
                        'key' => 'blue-900-60',
                        'value' => 'rgba(4, 19, 64, 0.6)'
                    ],
                    [
                        'key' => 'blue-900-70',
                        'value' => 'rgba(4, 19, 64, 0.7)'
                    ],
                    [
                        'key' => 'blue-900-80',
                        'value' => 'rgba(4, 19, 64, 0.8)'
                    ],
                    [
                        'key' => 'blue-900-90',
                        'value' => 'rgba(4, 19, 64, 0.9)'
                    ],
                    [
                        'key' => 'blue-900-100',
                        'value' => 'rgba(4, 19, 64, 1.0)'
                    ],
                    [
                        'key' => 'blue-950',
                        'value' => '#010615'
                    ],
                    [
                        'key' => 'blue-950-10',
                        'value' => 'rgba(1, 6, 21, 0.1)'
                    ],
                    [
                        'key' => 'blue-950-20',
                        'value' => 'rgba(1, 6, 21, 0.2)'
                    ],
                    [
                        'key' => 'blue-950-30',
                        'value' => 'rgba(1, 6, 21, 0.3)'
                    ],
                    [
                        'key' => 'blue-950-40',
                        'value' => 'rgba(1, 6, 21, 0.4)'
                    ],
                    [
                        'key' => 'blue-950-50',
                        'value' => 'rgba(1, 6, 21, 0.5)'
                    ],
                    [
                        'key' => 'blue-950-60',
                        'value' => 'rgba(1, 6, 21, 0.6)'
                    ],
                    [
                        'key' => 'blue-950-70',
                        'value' => 'rgba(1, 6, 21, 0.7)'
                    ],
                    [
                        'key' => 'blue-950-80',
                        'value' => 'rgba(1, 6, 21, 0.8)'
                    ],
                    [
                        'key' => 'blue-950-90',
                        'value' => 'rgba(1, 6, 21, 0.9)'
                    ],
                    [
                        'key' => 'blue-950-100',
                        'value' => 'rgba(1, 6, 21, 1.0)'
                    ]
                ],
                'violet' => [
                    [
                        'key' => 'violet-50',
                        'value' => '#F3E8FE'
                    ],
                    [
                        'key' => 'violet-50-10',
                        'value' => 'rgba(243, 232, 254, 0.1)'
                    ],
                    [
                        'key' => 'violet-50-20',
                        'value' => 'rgba(243, 232, 254, 0.2)'
                    ],
                    [
                        'key' => 'violet-50-30',
                        'value' => 'rgba(243, 232, 254, 0.3)'
                    ],
                    [
                        'key' => 'violet-50-40',
                        'value' => 'rgba(243, 232, 254, 0.4)'
                    ],
                    [
                        'key' => 'violet-50-50',
                        'value' => 'rgba(243, 232, 254, 0.5)'
                    ],
                    [
                        'key' => 'violet-50-60',
                        'value' => 'rgba(243, 232, 254, 0.6)'
                    ],
                    [
                        'key' => 'violet-50-70',
                        'value' => 'rgba(243, 232, 254, 0.7)'
                    ],
                    [
                        'key' => 'violet-50-80',
                        'value' => 'rgba(243, 232, 254, 0.8)'
                    ],
                    [
                        'key' => 'violet-50-90',
                        'value' => 'rgba(243, 232, 254, 0.9)'
                    ],
                    [
                        'key' => 'violet-50-100',
                        'value' => 'rgba(243, 232, 254, 1.0)'
                    ],
                    [
                        'key' => 'violet-100',
                        'value' => '#DBBBFC'
                    ],
                    [
                        'key' => 'violet-100-10',
                        'value' => 'rgba(219, 187, 252, 0.1)'
                    ],
                    [
                        'key' => 'violet-100-20',
                        'value' => 'rgba(219, 187, 252, 0.2)'
                    ],
                    [
                        'key' => 'violet-100-30',
                        'value' => 'rgba(219, 187, 252, 0.3)'
                    ],
                    [
                        'key' => 'violet-100-40',
                        'value' => 'rgba(219, 187, 252, 0.4)'
                    ],
                    [
                        'key' => 'violet-100-50',
                        'value' => 'rgba(219, 187, 252, 0.5)'
                    ],
                    [
                        'key' => 'violet-100-60',
                        'value' => 'rgba(219, 187, 252, 0.6)'
                    ],
                    [
                        'key' => 'violet-100-70',
                        'value' => 'rgba(219, 187, 252, 0.7)'
                    ],
                    [
                        'key' => 'violet-100-80',
                        'value' => 'rgba(219, 187, 252, 0.8)'
                    ],
                    [
                        'key' => 'violet-100-90',
                        'value' => 'rgba(219, 187, 252, 0.9)'
                    ],
                    [
                        'key' => 'violet-100-100',
                        'value' => 'rgba(219, 187, 252, 1.0)'
                    ],
                    [
                        'key' => 'violet-200',
                        'value' => '#C28EFB'
                    ],
                    [
                        'key' => 'violet-200-10',
                        'value' => 'rgba(194, 142, 251, 0.1)'
                    ],
                    [
                        'key' => 'violet-200-20',
                        'value' => 'rgba(194, 142, 251, 0.2)'
                    ],
                    [
                        'key' => 'violet-200-30',
                        'value' => 'rgba(194, 142, 251, 0.3)'
                    ],
                    [
                        'key' => 'violet-200-40',
                        'value' => 'rgba(194, 142, 251, 0.4)'
                    ],
                    [
                        'key' => 'violet-200-50',
                        'value' => 'rgba(194, 142, 251, 0.5)'
                    ],
                    [
                        'key' => 'violet-200-60',
                        'value' => 'rgba(194, 142, 251, 0.6)'
                    ],
                    [
                        'key' => 'violet-200-70',
                        'value' => 'rgba(194, 142, 251, 0.7)'
                    ],
                    [
                        'key' => 'violet-200-80',
                        'value' => 'rgba(194, 142, 251, 0.8)'
                    ],
                    [
                        'key' => 'violet-200-90',
                        'value' => 'rgba(194, 142, 251, 0.9)'
                    ],
                    [
                        'key' => 'violet-200-100',
                        'value' => 'rgba(194, 142, 251, 1.0)'
                    ],
                    [
                        'key' => 'violet-300',
                        'value' => '#AB61F9'
                    ],
                    [
                        'key' => 'violet-300-10',
                        'value' => 'rgba(171, 97, 249, 0.1)'
                    ],
                    [
                        'key' => 'violet-300-20',
                        'value' => 'rgba(171, 97, 249, 0.2)'
                    ],
                    [
                        'key' => 'violet-300-30',
                        'value' => 'rgba(171, 97, 249, 0.3)'
                    ],
                    [
                        'key' => 'violet-300-40',
                        'value' => 'rgba(171, 97, 249, 0.4)'
                    ],
                    [
                        'key' => 'violet-300-50',
                        'value' => 'rgba(171, 97, 249, 0.5)'
                    ],
                    [
                        'key' => 'violet-300-60',
                        'value' => 'rgba(171, 97, 249, 0.6)'
                    ],
                    [
                        'key' => 'violet-300-70',
                        'value' => 'rgba(171, 97, 249, 0.7)'
                    ],
                    [
                        'key' => 'violet-300-80',
                        'value' => 'rgba(171, 97, 249, 0.8)'
                    ],
                    [
                        'key' => 'violet-300-90',
                        'value' => 'rgba(171, 97, 249, 0.9)'
                    ],
                    [
                        'key' => 'violet-300-100',
                        'value' => 'rgba(171, 97, 249, 1.0)'
                    ],
                    [
                        'key' => 'violet-400',
                        'value' => '#9234F8'
                    ],
                    [
                        'key' => 'violet-400-10',
                        'value' => 'rgba(146, 52, 248, 0.1)'
                    ],
                    [
                        'key' => 'violet-400-20',
                        'value' => 'rgba(146, 52, 248, 0.2)'
                    ],
                    [
                        'key' => 'violet-400-30',
                        'value' => 'rgba(146, 52, 248, 0.3)'
                    ],
                    [
                        'key' => 'violet-400-40',
                        'value' => 'rgba(146, 52, 248, 0.4)'
                    ],
                    [
                        'key' => 'violet-400-50',
                        'value' => 'rgba(146, 52, 248, 0.5)'
                    ],
                    [
                        'key' => 'violet-400-60',
                        'value' => 'rgba(146, 52, 248, 0.6)'
                    ],
                    [
                        'key' => 'violet-400-70',
                        'value' => 'rgba(146, 52, 248, 0.7)'
                    ],
                    [
                        'key' => 'violet-400-80',
                        'value' => 'rgba(146, 52, 248, 0.8)'
                    ],
                    [
                        'key' => 'violet-400-90',
                        'value' => 'rgba(146, 52, 248, 0.9)'
                    ],
                    [
                        'key' => 'violet-400-100',
                        'value' => 'rgba(146, 52, 248, 1.0)'
                    ],
                    [
                        'key' => 'violet-500',
                        'value' => '#7B08F7'
                    ],
                    [
                        'key' => 'violet-500-10',
                        'value' => 'rgba(123, 8, 247, 0.1)'
                    ],
                    [
                        'key' => 'violet-500-20',
                        'value' => 'rgba(123, 8, 247, 0.2)'
                    ],
                    [
                        'key' => 'violet-500-30',
                        'value' => 'rgba(123, 8, 247, 0.3)'
                    ],
                    [
                        'key' => 'violet-500-40',
                        'value' => 'rgba(123, 8, 247, 0.4)'
                    ],
                    [
                        'key' => 'violet-500-50',
                        'value' => 'rgba(123, 8, 247, 0.5)'
                    ],
                    [
                        'key' => 'violet-500-60',
                        'value' => 'rgba(123, 8, 247, 0.6)'
                    ],
                    [
                        'key' => 'violet-500-70',
                        'value' => 'rgba(123, 8, 247, 0.7)'
                    ],
                    [
                        'key' => 'violet-500-80',
                        'value' => 'rgba(123, 8, 247, 0.8)'
                    ],
                    [
                        'key' => 'violet-500-90',
                        'value' => 'rgba(123, 8, 247, 0.9)'
                    ],
                    [
                        'key' => 'violet-500-100',
                        'value' => 'rgba(123, 8, 247, 1.0)'
                    ],
                    [
                        'key' => 'violet-600',
                        'value' => '#6406CA'
                    ],
                    [
                        'key' => 'violet-600-10',
                        'value' => 'rgba(100, 6, 202, 0.1)'
                    ],
                    [
                        'key' => 'violet-600-20',
                        'value' => 'rgba(100, 6, 202, 0.2)'
                    ],
                    [
                        'key' => 'violet-600-30',
                        'value' => 'rgba(100, 6, 202, 0.3)'
                    ],
                    [
                        'key' => 'violet-600-40',
                        'value' => 'rgba(100, 6, 202, 0.4)'
                    ],
                    [
                        'key' => 'violet-600-50',
                        'value' => 'rgba(100, 6, 202, 0.5)'
                    ],
                    [
                        'key' => 'violet-600-60',
                        'value' => 'rgba(100, 6, 202, 0.6)'
                    ],
                    [
                        'key' => 'violet-600-70',
                        'value' => 'rgba(100, 6, 202, 0.7)'
                    ],
                    [
                        'key' => 'violet-600-80',
                        'value' => 'rgba(100, 6, 202, 0.8)'
                    ],
                    [
                        'key' => 'violet-600-90',
                        'value' => 'rgba(100, 6, 202, 0.9)'
                    ],
                    [
                        'key' => 'violet-600-100',
                        'value' => 'rgba(100, 6, 202, 1.0)'
                    ],
                    [
                        'key' => 'violet-700',
                        'value' => '#4E059D'
                    ],
                    [
                        'key' => 'violet-700-10',
                        'value' => 'rgba(78, 5, 157, 0.1)'
                    ],
                    [
                        'key' => 'violet-700-20',
                        'value' => 'rgba(78, 5, 157, 0.2)'
                    ],
                    [
                        'key' => 'violet-700-30',
                        'value' => 'rgba(78, 5, 157, 0.3)'
                    ],
                    [
                        'key' => 'violet-700-40',
                        'value' => 'rgba(78, 5, 157, 0.4)'
                    ],
                    [
                        'key' => 'violet-700-50',
                        'value' => 'rgba(78, 5, 157, 0.5)'
                    ],
                    [
                        'key' => 'violet-700-60',
                        'value' => 'rgba(78, 5, 157, 0.6)'
                    ],
                    [
                        'key' => 'violet-700-70',
                        'value' => 'rgba(78, 5, 157, 0.7)'
                    ],
                    [
                        'key' => 'violet-700-80',
                        'value' => 'rgba(78, 5, 157, 0.8)'
                    ],
                    [
                        'key' => 'violet-700-90',
                        'value' => 'rgba(78, 5, 157, 0.9)'
                    ],
                    [
                        'key' => 'violet-700-100',
                        'value' => 'rgba(78, 5, 157, 1.0)'
                    ],
                    [
                        'key' => 'violet-800',
                        'value' => '#370370'
                    ],
                    [
                        'key' => 'violet-800-10',
                        'value' => 'rgba(55, 3, 112, 0.1)'
                    ],
                    [
                        'key' => 'violet-800-20',
                        'value' => 'rgba(55, 3, 112, 0.2)'
                    ],
                    [
                        'key' => 'violet-800-30',
                        'value' => 'rgba(55, 3, 112, 0.3)'
                    ],
                    [
                        'key' => 'violet-800-40',
                        'value' => 'rgba(55, 3, 112, 0.4)'
                    ],
                    [
                        'key' => 'violet-800-50',
                        'value' => 'rgba(55, 3, 112, 0.5)'
                    ],
                    [
                        'key' => 'violet-800-60',
                        'value' => 'rgba(55, 3, 112, 0.6)'
                    ],
                    [
                        'key' => 'violet-800-70',
                        'value' => 'rgba(55, 3, 112, 0.7)'
                    ],
                    [
                        'key' => 'violet-800-80',
                        'value' => 'rgba(55, 3, 112, 0.8)'
                    ],
                    [
                        'key' => 'violet-800-90',
                        'value' => 'rgba(55, 3, 112, 0.9)'
                    ],
                    [
                        'key' => 'violet-800-100',
                        'value' => 'rgba(55, 3, 112, 1.0)'
                    ],
                    [
                        'key' => 'violet-900',
                        'value' => '#210243'
                    ],
                    [
                        'key' => 'violet-900-10',
                        'value' => 'rgba(33, 2, 67, 0.1)'
                    ],
                    [
                        'key' => 'violet-900-20',
                        'value' => 'rgba(33, 2, 67, 0.2)'
                    ],
                    [
                        'key' => 'violet-900-30',
                        'value' => 'rgba(33, 2, 67, 0.3)'
                    ],
                    [
                        'key' => 'violet-900-40',
                        'value' => 'rgba(33, 2, 67, 0.4)'
                    ],
                    [
                        'key' => 'violet-900-50',
                        'value' => 'rgba(33, 2, 67, 0.5)'
                    ],
                    [
                        'key' => 'violet-900-60',
                        'value' => 'rgba(33, 2, 67, 0.6)'
                    ],
                    [
                        'key' => 'violet-900-70',
                        'value' => 'rgba(33, 2, 67, 0.7)'
                    ],
                    [
                        'key' => 'violet-900-80',
                        'value' => 'rgba(33, 2, 67, 0.8)'
                    ],
                    [
                        'key' => 'violet-900-90',
                        'value' => 'rgba(33, 2, 67, 0.9)'
                    ],
                    [
                        'key' => 'violet-900-100',
                        'value' => 'rgba(33, 2, 67, 1.0)'
                    ],
                    [
                        'key' => 'violet-950',
                        'value' => '#0B0016'
                    ],
                    [
                        'key' => 'violet-950-10',
                        'value' => 'rgba(11, 0, 22, 0.1)'
                    ],
                    [
                        'key' => 'violet-950-20',
                        'value' => 'rgba(11, 0, 22, 0.2)'
                    ],
                    [
                        'key' => 'violet-950-30',
                        'value' => 'rgba(11, 0, 22, 0.3)'
                    ],
                    [
                        'key' => 'violet-950-40',
                        'value' => 'rgba(11, 0, 22, 0.4)'
                    ],
                    [
                        'key' => 'violet-950-50',
                        'value' => 'rgba(11, 0, 22, 0.5)'
                    ],
                    [
                        'key' => 'violet-950-60',
                        'value' => 'rgba(11, 0, 22, 0.6)'
                    ],
                    [
                        'key' => 'violet-950-70',
                        'value' => 'rgba(11, 0, 22, 0.7)'
                    ],
                    [
                        'key' => 'violet-950-80',
                        'value' => 'rgba(11, 0, 22, 0.8)'
                    ],
                    [
                        'key' => 'violet-950-90',
                        'value' => 'rgba(11, 0, 22, 0.9)'
                    ],
                    [
                        'key' => 'violet-950-100',
                        'value' => 'rgba(11, 0, 22, 1.0)'
                    ]
                ],
                'purple' => [
                    [
                        'key' => 'purple-50',
                        'value' => '#F8E7FF'
                    ],
                    [
                        'key' => 'purple-50-10',
                        'value' => 'rgba(248, 231, 255, 0.1)'
                    ],
                    [
                        'key' => 'purple-50-20',
                        'value' => 'rgba(248, 231, 255, 0.2)'
                    ],
                    [
                        'key' => 'purple-50-30',
                        'value' => 'rgba(248, 231, 255, 0.3)'
                    ],
                    [
                        'key' => 'purple-50-40',
                        'value' => 'rgba(248, 231, 255, 0.4)'
                    ],
                    [
                        'key' => 'purple-50-50',
                        'value' => 'rgba(248, 231, 255, 0.5)'
                    ],
                    [
                        'key' => 'purple-50-60',
                        'value' => 'rgba(248, 231, 255, 0.6)'
                    ],
                    [
                        'key' => 'purple-50-70',
                        'value' => 'rgba(248, 231, 255, 0.7)'
                    ],
                    [
                        'key' => 'purple-50-80',
                        'value' => 'rgba(248, 231, 255, 0.8)'
                    ],
                    [
                        'key' => 'purple-50-90',
                        'value' => 'rgba(248, 231, 255, 0.9)'
                    ],
                    [
                        'key' => 'purple-50-100',
                        'value' => 'rgba(248, 231, 255, 1.0)'
                    ],
                    [
                        'key' => 'purple-100',
                        'value' => '#EAB9FF'
                    ],
                    [
                        'key' => 'purple-100-10',
                        'value' => 'rgba(234, 185, 255, 0.1)'
                    ],
                    [
                        'key' => 'purple-100-20',
                        'value' => 'rgba(234, 185, 255, 0.2)'
                    ],
                    [
                        'key' => 'purple-100-30',
                        'value' => 'rgba(234, 185, 255, 0.3)'
                    ],
                    [
                        'key' => 'purple-100-40',
                        'value' => 'rgba(234, 185, 255, 0.4)'
                    ],
                    [
                        'key' => 'purple-100-50',
                        'value' => 'rgba(234, 185, 255, 0.5)'
                    ],
                    [
                        'key' => 'purple-100-60',
                        'value' => 'rgba(234, 185, 255, 0.6)'
                    ],
                    [
                        'key' => 'purple-100-70',
                        'value' => 'rgba(234, 185, 255, 0.7)'
                    ],
                    [
                        'key' => 'purple-100-80',
                        'value' => 'rgba(234, 185, 255, 0.8)'
                    ],
                    [
                        'key' => 'purple-100-90',
                        'value' => 'rgba(234, 185, 255, 0.9)'
                    ],
                    [
                        'key' => 'purple-100-100',
                        'value' => 'rgba(234, 185, 255, 1.0)'
                    ],
                    [
                        'key' => 'purple-200',
                        'value' => '#DC8BFF'
                    ],
                    [
                        'key' => 'purple-200-10',
                        'value' => 'rgba(220, 139, 255, 0.1)'
                    ],
                    [
                        'key' => 'purple-200-20',
                        'value' => 'rgba(220, 139, 255, 0.2)'
                    ],
                    [
                        'key' => 'purple-200-30',
                        'value' => 'rgba(220, 139, 255, 0.3)'
                    ],
                    [
                        'key' => 'purple-200-40',
                        'value' => 'rgba(220, 139, 255, 0.4)'
                    ],
                    [
                        'key' => 'purple-200-50',
                        'value' => 'rgba(220, 139, 255, 0.5)'
                    ],
                    [
                        'key' => 'purple-200-60',
                        'value' => 'rgba(220, 139, 255, 0.6)'
                    ],
                    [
                        'key' => 'purple-200-70',
                        'value' => 'rgba(220, 139, 255, 0.7)'
                    ],
                    [
                        'key' => 'purple-200-80',
                        'value' => 'rgba(220, 139, 255, 0.8)'
                    ],
                    [
                        'key' => 'purple-200-90',
                        'value' => 'rgba(220, 139, 255, 0.9)'
                    ],
                    [
                        'key' => 'purple-200-100',
                        'value' => 'rgba(220, 139, 255, 1.0)'
                    ],
                    [
                        'key' => 'purple-300',
                        'value' => '#CE5CFF'
                    ],
                    [
                        'key' => 'purple-300-10',
                        'value' => 'rgba(206, 92, 255, 0.1)'
                    ],
                    [
                        'key' => 'purple-300-20',
                        'value' => 'rgba(206, 92, 255, 0.2)'
                    ],
                    [
                        'key' => 'purple-300-30',
                        'value' => 'rgba(206, 92, 255, 0.3)'
                    ],
                    [
                        'key' => 'purple-300-40',
                        'value' => 'rgba(206, 92, 255, 0.4)'
                    ],
                    [
                        'key' => 'purple-300-50',
                        'value' => 'rgba(206, 92, 255, 0.5)'
                    ],
                    [
                        'key' => 'purple-300-60',
                        'value' => 'rgba(206, 92, 255, 0.6)'
                    ],
                    [
                        'key' => 'purple-300-70',
                        'value' => 'rgba(206, 92, 255, 0.7)'
                    ],
                    [
                        'key' => 'purple-300-80',
                        'value' => 'rgba(206, 92, 255, 0.8)'
                    ],
                    [
                        'key' => 'purple-300-90',
                        'value' => 'rgba(206, 92, 255, 0.9)'
                    ],
                    [
                        'key' => 'purple-300-100',
                        'value' => 'rgba(206, 92, 255, 1.0)'
                    ],
                    [
                        'key' => 'purple-400',
                        'value' => '#C02EFE'
                    ],
                    [
                        'key' => 'purple-400-10',
                        'value' => 'rgba(192, 46, 254, 0.1)'
                    ],
                    [
                        'key' => 'purple-400-20',
                        'value' => 'rgba(192, 46, 254, 0.2)'
                    ],
                    [
                        'key' => 'purple-400-30',
                        'value' => 'rgba(192, 46, 254, 0.3)'
                    ],
                    [
                        'key' => 'purple-400-40',
                        'value' => 'rgba(192, 46, 254, 0.4)'
                    ],
                    [
                        'key' => 'purple-400-50',
                        'value' => 'rgba(192, 46, 254, 0.5)'
                    ],
                    [
                        'key' => 'purple-400-60',
                        'value' => 'rgba(192, 46, 254, 0.6)'
                    ],
                    [
                        'key' => 'purple-400-70',
                        'value' => 'rgba(192, 46, 254, 0.7)'
                    ],
                    [
                        'key' => 'purple-400-80',
                        'value' => 'rgba(192, 46, 254, 0.8)'
                    ],
                    [
                        'key' => 'purple-400-90',
                        'value' => 'rgba(192, 46, 254, 0.9)'
                    ],
                    [
                        'key' => 'purple-400-100',
                        'value' => 'rgba(192, 46, 254, 1.0)'
                    ],
                    [
                        'key' => 'purple-500',
                        'value' => '#B200FF'
                    ],
                    [
                        'key' => 'purple-500-10',
                        'value' => 'rgba(178, 0, 255, 0.1)'
                    ],
                    [
                        'key' => 'purple-500-20',
                        'value' => 'rgba(178, 0, 255, 0.2)'
                    ],
                    [
                        'key' => 'purple-500-30',
                        'value' => 'rgba(178, 0, 255, 0.3)'
                    ],
                    [
                        'key' => 'purple-500-40',
                        'value' => 'rgba(178, 0, 255, 0.4)'
                    ],
                    [
                        'key' => 'purple-500-50',
                        'value' => 'rgba(178, 0, 255, 0.5)'
                    ],
                    [
                        'key' => 'purple-500-60',
                        'value' => 'rgba(178, 0, 255, 0.6)'
                    ],
                    [
                        'key' => 'purple-500-70',
                        'value' => 'rgba(178, 0, 255, 0.7)'
                    ],
                    [
                        'key' => 'purple-500-80',
                        'value' => 'rgba(178, 0, 255, 0.8)'
                    ],
                    [
                        'key' => 'purple-500-90',
                        'value' => 'rgba(178, 0, 255, 0.9)'
                    ],
                    [
                        'key' => 'purple-500-100',
                        'value' => 'rgba(178, 0, 255, 1.0)'
                    ],
                    [
                        'key' => 'purple-600',
                        'value' => '#9100D0'
                    ],
                    [
                        'key' => 'purple-600-10',
                        'value' => 'rgba(145, 0, 208, 0.1)'
                    ],
                    [
                        'key' => 'purple-600-20',
                        'value' => 'rgba(145, 0, 208, 0.2)'
                    ],
                    [
                        'key' => 'purple-600-30',
                        'value' => 'rgba(145, 0, 208, 0.3)'
                    ],
                    [
                        'key' => 'purple-600-40',
                        'value' => 'rgba(145, 0, 208, 0.4)'
                    ],
                    [
                        'key' => 'purple-600-50',
                        'value' => 'rgba(145, 0, 208, 0.5)'
                    ],
                    [
                        'key' => 'purple-600-60',
                        'value' => 'rgba(145, 0, 208, 0.6)'
                    ],
                    [
                        'key' => 'purple-600-70',
                        'value' => 'rgba(145, 0, 208, 0.7)'
                    ],
                    [
                        'key' => 'purple-600-80',
                        'value' => 'rgba(145, 0, 208, 0.8)'
                    ],
                    [
                        'key' => 'purple-600-90',
                        'value' => 'rgba(145, 0, 208, 0.9)'
                    ],
                    [
                        'key' => 'purple-600-100',
                        'value' => 'rgba(145, 0, 208, 1.0)'
                    ],
                    [
                        'key' => 'purple-700',
                        'value' => '#7100A2'
                    ],
                    [
                        'key' => 'purple-700-10',
                        'value' => 'rgba(113, 0, 162, 0.1)'
                    ],
                    [
                        'key' => 'purple-700-20',
                        'value' => 'rgba(113, 0, 162, 0.2)'
                    ],
                    [
                        'key' => 'purple-700-30',
                        'value' => 'rgba(113, 0, 162, 0.3)'
                    ],
                    [
                        'key' => 'purple-700-40',
                        'value' => 'rgba(113, 0, 162, 0.4)'
                    ],
                    [
                        'key' => 'purple-700-50',
                        'value' => 'rgba(113, 0, 162, 0.5)'
                    ],
                    [
                        'key' => 'purple-700-60',
                        'value' => 'rgba(113, 0, 162, 0.6)'
                    ],
                    [
                        'key' => 'purple-700-70',
                        'value' => 'rgba(113, 0, 162, 0.7)'
                    ],
                    [
                        'key' => 'purple-700-80',
                        'value' => 'rgba(113, 0, 162, 0.8)'
                    ],
                    [
                        'key' => 'purple-700-90',
                        'value' => 'rgba(113, 0, 162, 0.9)'
                    ],
                    [
                        'key' => 'purple-700-100',
                        'value' => 'rgba(113, 0, 162, 1.0)'
                    ],
                    [
                        'key' => 'purple-800',
                        'value' => '#500073'
                    ],
                    [
                        'key' => 'purple-800-10',
                        'value' => 'rgba(80, 0, 115, 0.1)'
                    ],
                    [
                        'key' => 'purple-800-20',
                        'value' => 'rgba(80, 0, 115, 0.2)'
                    ],
                    [
                        'key' => 'purple-800-30',
                        'value' => 'rgba(80, 0, 115, 0.3)'
                    ],
                    [
                        'key' => 'purple-800-40',
                        'value' => 'rgba(80, 0, 115, 0.4)'
                    ],
                    [
                        'key' => 'purple-800-50',
                        'value' => 'rgba(80, 0, 115, 0.5)'
                    ],
                    [
                        'key' => 'purple-800-60',
                        'value' => 'rgba(80, 0, 115, 0.6)'
                    ],
                    [
                        'key' => 'purple-800-70',
                        'value' => 'rgba(80, 0, 115, 0.7)'
                    ],
                    [
                        'key' => 'purple-800-80',
                        'value' => 'rgba(80, 0, 115, 0.8)'
                    ],
                    [
                        'key' => 'purple-800-90',
                        'value' => 'rgba(80, 0, 115, 0.9)'
                    ],
                    [
                        'key' => 'purple-800-100',
                        'value' => 'rgba(80, 0, 115, 1.0)'
                    ],
                    [
                        'key' => 'purple-900',
                        'value' => '#300045'
                    ],
                    [
                        'key' => 'purple-900-10',
                        'value' => 'rgba(48, 0, 69, 0.1)'
                    ],
                    [
                        'key' => 'purple-900-20',
                        'value' => 'rgba(48, 0, 69, 0.2)'
                    ],
                    [
                        'key' => 'purple-900-30',
                        'value' => 'rgba(48, 0, 69, 0.3)'
                    ],
                    [
                        'key' => 'purple-900-40',
                        'value' => 'rgba(48, 0, 69, 0.4)'
                    ],
                    [
                        'key' => 'purple-900-50',
                        'value' => 'rgba(48, 0, 69, 0.5)'
                    ],
                    [
                        'key' => 'purple-900-60',
                        'value' => 'rgba(48, 0, 69, 0.6)'
                    ],
                    [
                        'key' => 'purple-900-70',
                        'value' => 'rgba(48, 0, 69, 0.7)'
                    ],
                    [
                        'key' => 'purple-900-80',
                        'value' => 'rgba(48, 0, 69, 0.8)'
                    ],
                    [
                        'key' => 'purple-900-90',
                        'value' => 'rgba(48, 0, 69, 0.9)'
                    ],
                    [
                        'key' => 'purple-900-100',
                        'value' => 'rgba(48, 0, 69, 1.0)'
                    ],
                    [
                        'key' => 'purple-950',
                        'value' => '#100017'
                    ],
                    [
                        'key' => 'purple-950-10',
                        'value' => 'rgba(16, 0, 23, 0.1)'
                    ],
                    [
                        'key' => 'purple-950-20',
                        'value' => 'rgba(16, 0, 23, 0.2)'
                    ],
                    [
                        'key' => 'purple-950-30',
                        'value' => 'rgba(16, 0, 23, 0.3)'
                    ],
                    [
                        'key' => 'purple-950-40',
                        'value' => 'rgba(16, 0, 23, 0.4)'
                    ],
                    [
                        'key' => 'purple-950-50',
                        'value' => 'rgba(16, 0, 23, 0.5)'
                    ],
                    [
                        'key' => 'purple-950-60',
                        'value' => 'rgba(16, 0, 23, 0.6)'
                    ],
                    [
                        'key' => 'purple-950-70',
                        'value' => 'rgba(16, 0, 23, 0.7)'
                    ],
                    [
                        'key' => 'purple-950-80',
                        'value' => 'rgba(16, 0, 23, 0.8)'
                    ],
                    [
                        'key' => 'purple-950-90',
                        'value' => 'rgba(16, 0, 23, 0.9)'
                    ],
                    [
                        'key' => 'purple-950-100',
                        'value' => 'rgba(16, 0, 23, 1.0)'
                    ]
                ],
                'fuschsia' => [
                    [
                        'key' => 'fuschsia-50',
                        'value' => '#FBEAFC'
                    ],
                    [
                        'key' => 'fuschsia-50-10',
                        'value' => 'rgba(251, 234, 252, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-50-20',
                        'value' => 'rgba(251, 234, 252, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-50-30',
                        'value' => 'rgba(251, 234, 252, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-50-40',
                        'value' => 'rgba(251, 234, 252, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-50-50',
                        'value' => 'rgba(251, 234, 252, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-50-60',
                        'value' => 'rgba(251, 234, 252, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-50-70',
                        'value' => 'rgba(251, 234, 252, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-50-80',
                        'value' => 'rgba(251, 234, 252, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-50-90',
                        'value' => 'rgba(251, 234, 252, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-50-100',
                        'value' => 'rgba(251, 234, 252, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-100',
                        'value' => '#F4C0F8'
                    ],
                    [
                        'key' => 'fuschsia-100-10',
                        'value' => 'rgba(244, 192, 248, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-100-20',
                        'value' => 'rgba(244, 192, 248, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-100-30',
                        'value' => 'rgba(244, 192, 248, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-100-40',
                        'value' => 'rgba(244, 192, 248, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-100-50',
                        'value' => 'rgba(244, 192, 248, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-100-60',
                        'value' => 'rgba(244, 192, 248, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-100-70',
                        'value' => 'rgba(244, 192, 248, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-100-80',
                        'value' => 'rgba(244, 192, 248, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-100-90',
                        'value' => 'rgba(244, 192, 248, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-100-100',
                        'value' => 'rgba(244, 192, 248, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-200',
                        'value' => '#ED95F4'
                    ],
                    [
                        'key' => 'fuschsia-200-10',
                        'value' => 'rgba(237, 149, 244, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-200-20',
                        'value' => 'rgba(237, 149, 244, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-200-30',
                        'value' => 'rgba(237, 149, 244, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-200-40',
                        'value' => 'rgba(237, 149, 244, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-200-50',
                        'value' => 'rgba(237, 149, 244, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-200-60',
                        'value' => 'rgba(237, 149, 244, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-200-70',
                        'value' => 'rgba(237, 149, 244, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-200-80',
                        'value' => 'rgba(237, 149, 244, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-200-90',
                        'value' => 'rgba(237, 149, 244, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-200-100',
                        'value' => 'rgba(237, 149, 244, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-300',
                        'value' => '#E66CEF'
                    ],
                    [
                        'key' => 'fuschsia-300-10',
                        'value' => 'rgba(230, 108, 239, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-300-20',
                        'value' => 'rgba(230, 108, 239, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-300-30',
                        'value' => 'rgba(230, 108, 239, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-300-40',
                        'value' => 'rgba(230, 108, 239, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-300-50',
                        'value' => 'rgba(230, 108, 239, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-300-60',
                        'value' => 'rgba(230, 108, 239, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-300-70',
                        'value' => 'rgba(230, 108, 239, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-300-80',
                        'value' => 'rgba(230, 108, 239, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-300-90',
                        'value' => 'rgba(230, 108, 239, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-300-100',
                        'value' => 'rgba(230, 108, 239, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-400',
                        'value' => '#DF41EB'
                    ],
                    [
                        'key' => 'fuschsia-400-10',
                        'value' => 'rgba(223, 65, 235, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-400-20',
                        'value' => 'rgba(223, 65, 235, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-400-30',
                        'value' => 'rgba(223, 65, 235, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-400-40',
                        'value' => 'rgba(223, 65, 235, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-400-50',
                        'value' => 'rgba(223, 65, 235, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-400-60',
                        'value' => 'rgba(223, 65, 235, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-400-70',
                        'value' => 'rgba(223, 65, 235, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-400-80',
                        'value' => 'rgba(223, 65, 235, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-400-90',
                        'value' => 'rgba(223, 65, 235, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-400-100',
                        'value' => 'rgba(223, 65, 235, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-500',
                        'value' => '#D918E7'
                    ],
                    [
                        'key' => 'fuschsia-500-10',
                        'value' => 'rgba(217, 24, 231, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-500-20',
                        'value' => 'rgba(217, 24, 231, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-500-30',
                        'value' => 'rgba(217, 24, 231, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-500-40',
                        'value' => 'rgba(217, 24, 231, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-500-50',
                        'value' => 'rgba(217, 24, 231, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-500-60',
                        'value' => 'rgba(217, 24, 231, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-500-70',
                        'value' => 'rgba(217, 24, 231, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-500-80',
                        'value' => 'rgba(217, 24, 231, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-500-90',
                        'value' => 'rgba(217, 24, 231, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-500-100',
                        'value' => 'rgba(217, 24, 231, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-600',
                        'value' => '#B113BC'
                    ],
                    [
                        'key' => 'fuschsia-600-10',
                        'value' => 'rgba(177, 19, 188, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-600-20',
                        'value' => 'rgba(177, 19, 188, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-600-30',
                        'value' => 'rgba(177, 19, 188, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-600-40',
                        'value' => 'rgba(177, 19, 188, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-600-50',
                        'value' => 'rgba(177, 19, 188, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-600-60',
                        'value' => 'rgba(177, 19, 188, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-600-70',
                        'value' => 'rgba(177, 19, 188, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-600-80',
                        'value' => 'rgba(177, 19, 188, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-600-90',
                        'value' => 'rgba(177, 19, 188, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-600-100',
                        'value' => 'rgba(177, 19, 188, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-700',
                        'value' => '#8A0F93'
                    ],
                    [
                        'key' => 'fuschsia-700-10',
                        'value' => 'rgba(138, 15, 147, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-700-20',
                        'value' => 'rgba(138, 15, 147, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-700-30',
                        'value' => 'rgba(138, 15, 147, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-700-40',
                        'value' => 'rgba(138, 15, 147, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-700-50',
                        'value' => 'rgba(138, 15, 147, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-700-60',
                        'value' => 'rgba(138, 15, 147, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-700-70',
                        'value' => 'rgba(138, 15, 147, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-700-80',
                        'value' => 'rgba(138, 15, 147, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-700-90',
                        'value' => 'rgba(138, 15, 147, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-700-100',
                        'value' => 'rgba(138, 15, 147, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-800',
                        'value' => '#620A69'
                    ],
                    [
                        'key' => 'fuschsia-800-10',
                        'value' => 'rgba(98, 10, 105, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-800-20',
                        'value' => 'rgba(98, 10, 105, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-800-30',
                        'value' => 'rgba(98, 10, 105, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-800-40',
                        'value' => 'rgba(98, 10, 105, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-800-50',
                        'value' => 'rgba(98, 10, 105, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-800-60',
                        'value' => 'rgba(98, 10, 105, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-800-70',
                        'value' => 'rgba(98, 10, 105, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-800-80',
                        'value' => 'rgba(98, 10, 105, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-800-90',
                        'value' => 'rgba(98, 10, 105, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-800-100',
                        'value' => 'rgba(98, 10, 105, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-900',
                        'value' => '#3B063E'
                    ],
                    [
                        'key' => 'fuschsia-900-10',
                        'value' => 'rgba(59, 6, 62, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-900-20',
                        'value' => 'rgba(59, 6, 62, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-900-30',
                        'value' => 'rgba(59, 6, 62, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-900-40',
                        'value' => 'rgba(59, 6, 62, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-900-50',
                        'value' => 'rgba(59, 6, 62, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-900-60',
                        'value' => 'rgba(59, 6, 62, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-900-70',
                        'value' => 'rgba(59, 6, 62, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-900-80',
                        'value' => 'rgba(59, 6, 62, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-900-90',
                        'value' => 'rgba(59, 6, 62, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-900-100',
                        'value' => 'rgba(59, 6, 62, 1.0)'
                    ],
                    [
                        'key' => 'fuschsia-950',
                        'value' => '#130215'
                    ],
                    [
                        'key' => 'fuschsia-950-10',
                        'value' => 'rgba(19, 2, 21, 0.1)'
                    ],
                    [
                        'key' => 'fuschsia-950-20',
                        'value' => 'rgba(19, 2, 21, 0.2)'
                    ],
                    [
                        'key' => 'fuschsia-950-30',
                        'value' => 'rgba(19, 2, 21, 0.3)'
                    ],
                    [
                        'key' => 'fuschsia-950-40',
                        'value' => 'rgba(19, 2, 21, 0.4)'
                    ],
                    [
                        'key' => 'fuschsia-950-50',
                        'value' => 'rgba(19, 2, 21, 0.5)'
                    ],
                    [
                        'key' => 'fuschsia-950-60',
                        'value' => 'rgba(19, 2, 21, 0.6)'
                    ],
                    [
                        'key' => 'fuschsia-950-70',
                        'value' => 'rgba(19, 2, 21, 0.7)'
                    ],
                    [
                        'key' => 'fuschsia-950-80',
                        'value' => 'rgba(19, 2, 21, 0.8)'
                    ],
                    [
                        'key' => 'fuschsia-950-90',
                        'value' => 'rgba(19, 2, 21, 0.9)'
                    ],
                    [
                        'key' => 'fuschsia-950-100',
                        'value' => 'rgba(19, 2, 21, 1.0)'
                    ]
                ],
                'pink' => [
                    [
                        'key' => 'pink-50',
                        'value' => '#FDE9F6'
                    ],
                    [
                        'key' => 'pink-50-10',
                        'value' => 'rgba(253, 233, 246, 0.1)'
                    ],
                    [
                        'key' => 'pink-50-20',
                        'value' => 'rgba(253, 233, 246, 0.2)'
                    ],
                    [
                        'key' => 'pink-50-30',
                        'value' => 'rgba(253, 233, 246, 0.3)'
                    ],
                    [
                        'key' => 'pink-50-40',
                        'value' => 'rgba(253, 233, 246, 0.4)'
                    ],
                    [
                        'key' => 'pink-50-50',
                        'value' => 'rgba(253, 233, 246, 0.5)'
                    ],
                    [
                        'key' => 'pink-50-60',
                        'value' => 'rgba(253, 233, 246, 0.6)'
                    ],
                    [
                        'key' => 'pink-50-70',
                        'value' => 'rgba(253, 233, 246, 0.7)'
                    ],
                    [
                        'key' => 'pink-50-80',
                        'value' => 'rgba(253, 233, 246, 0.8)'
                    ],
                    [
                        'key' => 'pink-50-90',
                        'value' => 'rgba(253, 233, 246, 0.9)'
                    ],
                    [
                        'key' => 'pink-50-100',
                        'value' => 'rgba(253, 233, 246, 1.0)'
                    ],
                    [
                        'key' => 'pink-100',
                        'value' => '#FABDE4'
                    ],
                    [
                        'key' => 'pink-100-10',
                        'value' => 'rgba(250, 189, 228, 0.1)'
                    ],
                    [
                        'key' => 'pink-100-20',
                        'value' => 'rgba(250, 189, 228, 0.2)'
                    ],
                    [
                        'key' => 'pink-100-30',
                        'value' => 'rgba(250, 189, 228, 0.3)'
                    ],
                    [
                        'key' => 'pink-100-40',
                        'value' => 'rgba(250, 189, 228, 0.4)'
                    ],
                    [
                        'key' => 'pink-100-50',
                        'value' => 'rgba(250, 189, 228, 0.5)'
                    ],
                    [
                        'key' => 'pink-100-60',
                        'value' => 'rgba(250, 189, 228, 0.6)'
                    ],
                    [
                        'key' => 'pink-100-70',
                        'value' => 'rgba(250, 189, 228, 0.7)'
                    ],
                    [
                        'key' => 'pink-100-80',
                        'value' => 'rgba(250, 189, 228, 0.8)'
                    ],
                    [
                        'key' => 'pink-100-90',
                        'value' => 'rgba(250, 189, 228, 0.9)'
                    ],
                    [
                        'key' => 'pink-100-100',
                        'value' => 'rgba(250, 189, 228, 1.0)'
                    ],
                    [
                        'key' => 'pink-200',
                        'value' => '#F891D2'
                    ],
                    [
                        'key' => 'pink-200-10',
                        'value' => 'rgba(248, 145, 210, 0.1)'
                    ],
                    [
                        'key' => 'pink-200-20',
                        'value' => 'rgba(248, 145, 210, 0.2)'
                    ],
                    [
                        'key' => 'pink-200-30',
                        'value' => 'rgba(248, 145, 210, 0.3)'
                    ],
                    [
                        'key' => 'pink-200-40',
                        'value' => 'rgba(248, 145, 210, 0.4)'
                    ],
                    [
                        'key' => 'pink-200-50',
                        'value' => 'rgba(248, 145, 210, 0.5)'
                    ],
                    [
                        'key' => 'pink-200-60',
                        'value' => 'rgba(248, 145, 210, 0.6)'
                    ],
                    [
                        'key' => 'pink-200-70',
                        'value' => 'rgba(248, 145, 210, 0.7)'
                    ],
                    [
                        'key' => 'pink-200-80',
                        'value' => 'rgba(248, 145, 210, 0.8)'
                    ],
                    [
                        'key' => 'pink-200-90',
                        'value' => 'rgba(248, 145, 210, 0.9)'
                    ],
                    [
                        'key' => 'pink-200-100',
                        'value' => 'rgba(248, 145, 210, 1.0)'
                    ],
                    [
                        'key' => 'pink-300',
                        'value' => '#F566C0'
                    ],
                    [
                        'key' => 'pink-300-10',
                        'value' => 'rgba(245, 102, 192, 0.1)'
                    ],
                    [
                        'key' => 'pink-300-20',
                        'value' => 'rgba(245, 102, 192, 0.2)'
                    ],
                    [
                        'key' => 'pink-300-30',
                        'value' => 'rgba(245, 102, 192, 0.3)'
                    ],
                    [
                        'key' => 'pink-300-40',
                        'value' => 'rgba(245, 102, 192, 0.4)'
                    ],
                    [
                        'key' => 'pink-300-50',
                        'value' => 'rgba(245, 102, 192, 0.5)'
                    ],
                    [
                        'key' => 'pink-300-60',
                        'value' => 'rgba(245, 102, 192, 0.6)'
                    ],
                    [
                        'key' => 'pink-300-70',
                        'value' => 'rgba(245, 102, 192, 0.7)'
                    ],
                    [
                        'key' => 'pink-300-80',
                        'value' => 'rgba(245, 102, 192, 0.8)'
                    ],
                    [
                        'key' => 'pink-300-90',
                        'value' => 'rgba(245, 102, 192, 0.9)'
                    ],
                    [
                        'key' => 'pink-300-100',
                        'value' => 'rgba(245, 102, 192, 1.0)'
                    ],
                    [
                        'key' => 'pink-400',
                        'value' => '#F23AAE'
                    ],
                    [
                        'key' => 'pink-400-10',
                        'value' => 'rgba(242, 58, 174, 0.1)'
                    ],
                    [
                        'key' => 'pink-400-20',
                        'value' => 'rgba(242, 58, 174, 0.2)'
                    ],
                    [
                        'key' => 'pink-400-30',
                        'value' => 'rgba(242, 58, 174, 0.3)'
                    ],
                    [
                        'key' => 'pink-400-40',
                        'value' => 'rgba(242, 58, 174, 0.4)'
                    ],
                    [
                        'key' => 'pink-400-50',
                        'value' => 'rgba(242, 58, 174, 0.5)'
                    ],
                    [
                        'key' => 'pink-400-60',
                        'value' => 'rgba(242, 58, 174, 0.6)'
                    ],
                    [
                        'key' => 'pink-400-70',
                        'value' => 'rgba(242, 58, 174, 0.7)'
                    ],
                    [
                        'key' => 'pink-400-80',
                        'value' => 'rgba(242, 58, 174, 0.8)'
                    ],
                    [
                        'key' => 'pink-400-90',
                        'value' => 'rgba(242, 58, 174, 0.9)'
                    ],
                    [
                        'key' => 'pink-400-100',
                        'value' => 'rgba(242, 58, 174, 1.0)'
                    ],
                    [
                        'key' => 'pink-500',
                        'value' => '#F00F9D'
                    ],
                    [
                        'key' => 'pink-500-10',
                        'value' => 'rgba(240, 15, 157, 0.1)'
                    ],
                    [
                        'key' => 'pink-500-20',
                        'value' => 'rgba(240, 15, 157, 0.2)'
                    ],
                    [
                        'key' => 'pink-500-30',
                        'value' => 'rgba(240, 15, 157, 0.3)'
                    ],
                    [
                        'key' => 'pink-500-40',
                        'value' => 'rgba(240, 15, 157, 0.4)'
                    ],
                    [
                        'key' => 'pink-500-50',
                        'value' => 'rgba(240, 15, 157, 0.5)'
                    ],
                    [
                        'key' => 'pink-500-60',
                        'value' => 'rgba(240, 15, 157, 0.6)'
                    ],
                    [
                        'key' => 'pink-500-70',
                        'value' => 'rgba(240, 15, 157, 0.7)'
                    ],
                    [
                        'key' => 'pink-500-80',
                        'value' => 'rgba(240, 15, 157, 0.8)'
                    ],
                    [
                        'key' => 'pink-500-90',
                        'value' => 'rgba(240, 15, 157, 0.9)'
                    ],
                    [
                        'key' => 'pink-500-100',
                        'value' => 'rgba(240, 15, 157, 1.0)'
                    ],
                    [
                        'key' => 'pink-600',
                        'value' => '#C40C80'
                    ],
                    [
                        'key' => 'pink-600-10',
                        'value' => 'rgba(196, 12, 128, 0.1)'
                    ],
                    [
                        'key' => 'pink-600-20',
                        'value' => 'rgba(196, 12, 128, 0.2)'
                    ],
                    [
                        'key' => 'pink-600-30',
                        'value' => 'rgba(196, 12, 128, 0.3)'
                    ],
                    [
                        'key' => 'pink-600-40',
                        'value' => 'rgba(196, 12, 128, 0.4)'
                    ],
                    [
                        'key' => 'pink-600-50',
                        'value' => 'rgba(196, 12, 128, 0.5)'
                    ],
                    [
                        'key' => 'pink-600-60',
                        'value' => 'rgba(196, 12, 128, 0.6)'
                    ],
                    [
                        'key' => 'pink-600-70',
                        'value' => 'rgba(196, 12, 128, 0.7)'
                    ],
                    [
                        'key' => 'pink-600-80',
                        'value' => 'rgba(196, 12, 128, 0.8)'
                    ],
                    [
                        'key' => 'pink-600-90',
                        'value' => 'rgba(196, 12, 128, 0.9)'
                    ],
                    [
                        'key' => 'pink-600-100',
                        'value' => 'rgba(196, 12, 128, 1.0)'
                    ],
                    [
                        'key' => 'pink-700',
                        'value' => '#980963'
                    ],
                    [
                        'key' => 'pink-700-10',
                        'value' => 'rgba(152, 9, 99, 0.1)'
                    ],
                    [
                        'key' => 'pink-700-20',
                        'value' => 'rgba(152, 9, 99, 0.2)'
                    ],
                    [
                        'key' => 'pink-700-30',
                        'value' => 'rgba(152, 9, 99, 0.3)'
                    ],
                    [
                        'key' => 'pink-700-40',
                        'value' => 'rgba(152, 9, 99, 0.4)'
                    ],
                    [
                        'key' => 'pink-700-50',
                        'value' => 'rgba(152, 9, 99, 0.5)'
                    ],
                    [
                        'key' => 'pink-700-60',
                        'value' => 'rgba(152, 9, 99, 0.6)'
                    ],
                    [
                        'key' => 'pink-700-70',
                        'value' => 'rgba(152, 9, 99, 0.7)'
                    ],
                    [
                        'key' => 'pink-700-80',
                        'value' => 'rgba(152, 9, 99, 0.8)'
                    ],
                    [
                        'key' => 'pink-700-90',
                        'value' => 'rgba(152, 9, 99, 0.9)'
                    ],
                    [
                        'key' => 'pink-700-100',
                        'value' => 'rgba(152, 9, 99, 1.0)'
                    ],
                    [
                        'key' => 'pink-800',
                        'value' => '#6D0647'
                    ],
                    [
                        'key' => 'pink-800-10',
                        'value' => 'rgba(109, 6, 71, 0.1)'
                    ],
                    [
                        'key' => 'pink-800-20',
                        'value' => 'rgba(109, 6, 71, 0.2)'
                    ],
                    [
                        'key' => 'pink-800-30',
                        'value' => 'rgba(109, 6, 71, 0.3)'
                    ],
                    [
                        'key' => 'pink-800-40',
                        'value' => 'rgba(109, 6, 71, 0.4)'
                    ],
                    [
                        'key' => 'pink-800-50',
                        'value' => 'rgba(109, 6, 71, 0.5)'
                    ],
                    [
                        'key' => 'pink-800-60',
                        'value' => 'rgba(109, 6, 71, 0.6)'
                    ],
                    [
                        'key' => 'pink-800-70',
                        'value' => 'rgba(109, 6, 71, 0.7)'
                    ],
                    [
                        'key' => 'pink-800-80',
                        'value' => 'rgba(109, 6, 71, 0.8)'
                    ],
                    [
                        'key' => 'pink-800-90',
                        'value' => 'rgba(109, 6, 71, 0.9)'
                    ],
                    [
                        'key' => 'pink-800-100',
                        'value' => 'rgba(109, 6, 71, 1.0)'
                    ],
                    [
                        'key' => 'pink-900',
                        'value' => '#41042A'
                    ],
                    [
                        'key' => 'pink-900-10',
                        'value' => 'rgba(65, 4, 42, 0.1)'
                    ],
                    [
                        'key' => 'pink-900-20',
                        'value' => 'rgba(65, 4, 42, 0.2)'
                    ],
                    [
                        'key' => 'pink-900-30',
                        'value' => 'rgba(65, 4, 42, 0.3)'
                    ],
                    [
                        'key' => 'pink-900-40',
                        'value' => 'rgba(65, 4, 42, 0.4)'
                    ],
                    [
                        'key' => 'pink-900-50',
                        'value' => 'rgba(65, 4, 42, 0.5)'
                    ],
                    [
                        'key' => 'pink-900-60',
                        'value' => 'rgba(65, 4, 42, 0.6)'
                    ],
                    [
                        'key' => 'pink-900-70',
                        'value' => 'rgba(65, 4, 42, 0.7)'
                    ],
                    [
                        'key' => 'pink-900-80',
                        'value' => 'rgba(65, 4, 42, 0.8)'
                    ],
                    [
                        'key' => 'pink-900-90',
                        'value' => 'rgba(65, 4, 42, 0.9)'
                    ],
                    [
                        'key' => 'pink-900-100',
                        'value' => 'rgba(65, 4, 42, 1.0)'
                    ],
                    [
                        'key' => 'pink-950',
                        'value' => '#15010E'
                    ],
                    [
                        'key' => 'pink-950-10',
                        'value' => 'rgba(21, 1, 14, 0.1)'
                    ],
                    [
                        'key' => 'pink-950-20',
                        'value' => 'rgba(21, 1, 14, 0.2)'
                    ],
                    [
                        'key' => 'pink-950-30',
                        'value' => 'rgba(21, 1, 14, 0.3)'
                    ],
                    [
                        'key' => 'pink-950-40',
                        'value' => 'rgba(21, 1, 14, 0.4)'
                    ],
                    [
                        'key' => 'pink-950-50',
                        'value' => 'rgba(21, 1, 14, 0.5)'
                    ],
                    [
                        'key' => 'pink-950-60',
                        'value' => 'rgba(21, 1, 14, 0.6)'
                    ],
                    [
                        'key' => 'pink-950-70',
                        'value' => 'rgba(21, 1, 14, 0.7)'
                    ],
                    [
                        'key' => 'pink-950-80',
                        'value' => 'rgba(21, 1, 14, 0.8)'
                    ],
                    [
                        'key' => 'pink-950-90',
                        'value' => 'rgba(21, 1, 14, 0.9)'
                    ],
                    [
                        'key' => 'pink-950-100',
                        'value' => 'rgba(21, 1, 14, 1.0)'
                    ]
                ],
                'rose' => [
                    [
                        'key' => 'rose-50',
                        'value' => '#FFE7EF'
                    ],
                    [
                        'key' => 'rose-50-10',
                        'value' => 'rgba(255, 231, 239, 0.1)'
                    ],
                    [
                        'key' => 'rose-50-20',
                        'value' => 'rgba(255, 231, 239, 0.2)'
                    ],
                    [
                        'key' => 'rose-50-30',
                        'value' => 'rgba(255, 231, 239, 0.3)'
                    ],
                    [
                        'key' => 'rose-50-40',
                        'value' => 'rgba(255, 231, 239, 0.4)'
                    ],
                    [
                        'key' => 'rose-50-50',
                        'value' => 'rgba(255, 231, 239, 0.5)'
                    ],
                    [
                        'key' => 'rose-50-60',
                        'value' => 'rgba(255, 231, 239, 0.6)'
                    ],
                    [
                        'key' => 'rose-50-70',
                        'value' => 'rgba(255, 231, 239, 0.7)'
                    ],
                    [
                        'key' => 'rose-50-80',
                        'value' => 'rgba(255, 231, 239, 0.8)'
                    ],
                    [
                        'key' => 'rose-50-90',
                        'value' => 'rgba(255, 231, 239, 0.9)'
                    ],
                    [
                        'key' => 'rose-50-100',
                        'value' => 'rgba(255, 231, 239, 1.0)'
                    ],
                    [
                        'key' => 'rose-100',
                        'value' => '#FFB9D1'
                    ],
                    [
                        'key' => 'rose-100-10',
                        'value' => 'rgba(255, 185, 209, 0.1)'
                    ],
                    [
                        'key' => 'rose-100-20',
                        'value' => 'rgba(255, 185, 209, 0.2)'
                    ],
                    [
                        'key' => 'rose-100-30',
                        'value' => 'rgba(255, 185, 209, 0.3)'
                    ],
                    [
                        'key' => 'rose-100-40',
                        'value' => 'rgba(255, 185, 209, 0.4)'
                    ],
                    [
                        'key' => 'rose-100-50',
                        'value' => 'rgba(255, 185, 209, 0.5)'
                    ],
                    [
                        'key' => 'rose-100-60',
                        'value' => 'rgba(255, 185, 209, 0.6)'
                    ],
                    [
                        'key' => 'rose-100-70',
                        'value' => 'rgba(255, 185, 209, 0.7)'
                    ],
                    [
                        'key' => 'rose-100-80',
                        'value' => 'rgba(255, 185, 209, 0.8)'
                    ],
                    [
                        'key' => 'rose-100-90',
                        'value' => 'rgba(255, 185, 209, 0.9)'
                    ],
                    [
                        'key' => 'rose-100-100',
                        'value' => 'rgba(255, 185, 209, 1.0)'
                    ],
                    [
                        'key' => 'rose-200',
                        'value' => '#FF8BB3'
                    ],
                    [
                        'key' => 'rose-200-10',
                        'value' => 'rgba(255, 139, 179, 0.1)'
                    ],
                    [
                        'key' => 'rose-200-20',
                        'value' => 'rgba(255, 139, 179, 0.2)'
                    ],
                    [
                        'key' => 'rose-200-30',
                        'value' => 'rgba(255, 139, 179, 0.3)'
                    ],
                    [
                        'key' => 'rose-200-40',
                        'value' => 'rgba(255, 139, 179, 0.4)'
                    ],
                    [
                        'key' => 'rose-200-50',
                        'value' => 'rgba(255, 139, 179, 0.5)'
                    ],
                    [
                        'key' => 'rose-200-60',
                        'value' => 'rgba(255, 139, 179, 0.6)'
                    ],
                    [
                        'key' => 'rose-200-70',
                        'value' => 'rgba(255, 139, 179, 0.7)'
                    ],
                    [
                        'key' => 'rose-200-80',
                        'value' => 'rgba(255, 139, 179, 0.8)'
                    ],
                    [
                        'key' => 'rose-200-90',
                        'value' => 'rgba(255, 139, 179, 0.9)'
                    ],
                    [
                        'key' => 'rose-200-100',
                        'value' => 'rgba(255, 139, 179, 1.0)'
                    ],
                    [
                        'key' => 'rose-300',
                        'value' => '#FF5C95'
                    ],
                    [
                        'key' => 'rose-300-10',
                        'value' => 'rgba(255, 92, 149, 0.1)'
                    ],
                    [
                        'key' => 'rose-300-20',
                        'value' => 'rgba(255, 92, 149, 0.2)'
                    ],
                    [
                        'key' => 'rose-300-30',
                        'value' => 'rgba(255, 92, 149, 0.3)'
                    ],
                    [
                        'key' => 'rose-300-40',
                        'value' => 'rgba(255, 92, 149, 0.4)'
                    ],
                    [
                        'key' => 'rose-300-50',
                        'value' => 'rgba(255, 92, 149, 0.5)'
                    ],
                    [
                        'key' => 'rose-300-60',
                        'value' => 'rgba(255, 92, 149, 0.6)'
                    ],
                    [
                        'key' => 'rose-300-70',
                        'value' => 'rgba(255, 92, 149, 0.7)'
                    ],
                    [
                        'key' => 'rose-300-80',
                        'value' => 'rgba(255, 92, 149, 0.8)'
                    ],
                    [
                        'key' => 'rose-300-90',
                        'value' => 'rgba(255, 92, 149, 0.9)'
                    ],
                    [
                        'key' => 'rose-300-100',
                        'value' => 'rgba(255, 92, 149, 1.0)'
                    ],
                    [
                        'key' => 'rose-400',
                        'value' => '#FE2E77'
                    ],
                    [
                        'key' => 'rose-400-10',
                        'value' => 'rgba(254, 46, 119, 0.1)'
                    ],
                    [
                        'key' => 'rose-400-20',
                        'value' => 'rgba(254, 46, 119, 0.2)'
                    ],
                    [
                        'key' => 'rose-400-30',
                        'value' => 'rgba(254, 46, 119, 0.3)'
                    ],
                    [
                        'key' => 'rose-400-40',
                        'value' => 'rgba(254, 46, 119, 0.4)'
                    ],
                    [
                        'key' => 'rose-400-50',
                        'value' => 'rgba(254, 46, 119, 0.5)'
                    ],
                    [
                        'key' => 'rose-400-60',
                        'value' => 'rgba(254, 46, 119, 0.6)'
                    ],
                    [
                        'key' => 'rose-400-70',
                        'value' => 'rgba(254, 46, 119, 0.7)'
                    ],
                    [
                        'key' => 'rose-400-80',
                        'value' => 'rgba(254, 46, 119, 0.8)'
                    ],
                    [
                        'key' => 'rose-400-90',
                        'value' => 'rgba(254, 46, 119, 0.9)'
                    ],
                    [
                        'key' => 'rose-400-100',
                        'value' => 'rgba(254, 46, 119, 1.0)'
                    ],
                    [
                        'key' => 'rose-500',
                        'value' => '#FF0059'
                    ],
                    [
                        'key' => 'rose-500-10',
                        'value' => 'rgba(255, 0, 89, 0.1)'
                    ],
                    [
                        'key' => 'rose-500-20',
                        'value' => 'rgba(255, 0, 89, 0.2)'
                    ],
                    [
                        'key' => 'rose-500-30',
                        'value' => 'rgba(255, 0, 89, 0.3)'
                    ],
                    [
                        'key' => 'rose-500-40',
                        'value' => 'rgba(255, 0, 89, 0.4)'
                    ],
                    [
                        'key' => 'rose-500-50',
                        'value' => 'rgba(255, 0, 89, 0.5)'
                    ],
                    [
                        'key' => 'rose-500-60',
                        'value' => 'rgba(255, 0, 89, 0.6)'
                    ],
                    [
                        'key' => 'rose-500-70',
                        'value' => 'rgba(255, 0, 89, 0.7)'
                    ],
                    [
                        'key' => 'rose-500-80',
                        'value' => 'rgba(255, 0, 89, 0.8)'
                    ],
                    [
                        'key' => 'rose-500-90',
                        'value' => 'rgba(255, 0, 89, 0.9)'
                    ],
                    [
                        'key' => 'rose-500-100',
                        'value' => 'rgba(255, 0, 89, 1.0)'
                    ],
                    [
                        'key' => 'rose-600',
                        'value' => '#D00048'
                    ],
                    [
                        'key' => 'rose-600-10',
                        'value' => 'rgba(208, 0, 72, 0.1)'
                    ],
                    [
                        'key' => 'rose-600-20',
                        'value' => 'rgba(208, 0, 72, 0.2)'
                    ],
                    [
                        'key' => 'rose-600-30',
                        'value' => 'rgba(208, 0, 72, 0.3)'
                    ],
                    [
                        'key' => 'rose-600-40',
                        'value' => 'rgba(208, 0, 72, 0.4)'
                    ],
                    [
                        'key' => 'rose-600-50',
                        'value' => 'rgba(208, 0, 72, 0.5)'
                    ],
                    [
                        'key' => 'rose-600-60',
                        'value' => 'rgba(208, 0, 72, 0.6)'
                    ],
                    [
                        'key' => 'rose-600-70',
                        'value' => 'rgba(208, 0, 72, 0.7)'
                    ],
                    [
                        'key' => 'rose-600-80',
                        'value' => 'rgba(208, 0, 72, 0.8)'
                    ],
                    [
                        'key' => 'rose-600-90',
                        'value' => 'rgba(208, 0, 72, 0.9)'
                    ],
                    [
                        'key' => 'rose-600-100',
                        'value' => 'rgba(208, 0, 72, 1.0)'
                    ],
                    [
                        'key' => 'rose-700',
                        'value' => '#A20038'
                    ],
                    [
                        'key' => 'rose-700-10',
                        'value' => 'rgba(162, 0, 56, 0.1)'
                    ],
                    [
                        'key' => 'rose-700-20',
                        'value' => 'rgba(162, 0, 56, 0.2)'
                    ],
                    [
                        'key' => 'rose-700-30',
                        'value' => 'rgba(162, 0, 56, 0.3)'
                    ],
                    [
                        'key' => 'rose-700-40',
                        'value' => 'rgba(162, 0, 56, 0.4)'
                    ],
                    [
                        'key' => 'rose-700-50',
                        'value' => 'rgba(162, 0, 56, 0.5)'
                    ],
                    [
                        'key' => 'rose-700-60',
                        'value' => 'rgba(162, 0, 56, 0.6)'
                    ],
                    [
                        'key' => 'rose-700-70',
                        'value' => 'rgba(162, 0, 56, 0.7)'
                    ],
                    [
                        'key' => 'rose-700-80',
                        'value' => 'rgba(162, 0, 56, 0.8)'
                    ],
                    [
                        'key' => 'rose-700-90',
                        'value' => 'rgba(162, 0, 56, 0.9)'
                    ],
                    [
                        'key' => 'rose-700-100',
                        'value' => 'rgba(162, 0, 56, 1.0)'
                    ],
                    [
                        'key' => 'rose-800',
                        'value' => '#730028'
                    ],
                    [
                        'key' => 'rose-800-10',
                        'value' => 'rgba(115, 0, 40, 0.1)'
                    ],
                    [
                        'key' => 'rose-800-20',
                        'value' => 'rgba(115, 0, 40, 0.2)'
                    ],
                    [
                        'key' => 'rose-800-30',
                        'value' => 'rgba(115, 0, 40, 0.3)'
                    ],
                    [
                        'key' => 'rose-800-40',
                        'value' => 'rgba(115, 0, 40, 0.4)'
                    ],
                    [
                        'key' => 'rose-800-50',
                        'value' => 'rgba(115, 0, 40, 0.5)'
                    ],
                    [
                        'key' => 'rose-800-60',
                        'value' => 'rgba(115, 0, 40, 0.6)'
                    ],
                    [
                        'key' => 'rose-800-70',
                        'value' => 'rgba(115, 0, 40, 0.7)'
                    ],
                    [
                        'key' => 'rose-800-80',
                        'value' => 'rgba(115, 0, 40, 0.8)'
                    ],
                    [
                        'key' => 'rose-800-90',
                        'value' => 'rgba(115, 0, 40, 0.9)'
                    ],
                    [
                        'key' => 'rose-800-100',
                        'value' => 'rgba(115, 0, 40, 1.0)'
                    ],
                    [
                        'key' => 'rose-900',
                        'value' => '#450018'
                    ],
                    [
                        'key' => 'rose-900-10',
                        'value' => 'rgba(69, 0, 24, 0.1)'
                    ],
                    [
                        'key' => 'rose-900-20',
                        'value' => 'rgba(69, 0, 24, 0.2)'
                    ],
                    [
                        'key' => 'rose-900-30',
                        'value' => 'rgba(69, 0, 24, 0.3)'
                    ],
                    [
                        'key' => 'rose-900-40',
                        'value' => 'rgba(69, 0, 24, 0.4)'
                    ],
                    [
                        'key' => 'rose-900-50',
                        'value' => 'rgba(69, 0, 24, 0.5)'
                    ],
                    [
                        'key' => 'rose-900-60',
                        'value' => 'rgba(69, 0, 24, 0.6)'
                    ],
                    [
                        'key' => 'rose-900-70',
                        'value' => 'rgba(69, 0, 24, 0.7)'
                    ],
                    [
                        'key' => 'rose-900-80',
                        'value' => 'rgba(69, 0, 24, 0.8)'
                    ],
                    [
                        'key' => 'rose-900-90',
                        'value' => 'rgba(69, 0, 24, 0.9)'
                    ],
                    [
                        'key' => 'rose-900-100',
                        'value' => 'rgba(69, 0, 24, 1.0)'
                    ],
                    [
                        'key' => 'rose-950',
                        'value' => '#170008'
                    ],
                    [
                        'key' => 'rose-950-10',
                        'value' => 'rgba(23, 0, 8, 0.1)'
                    ],
                    [
                        'key' => 'rose-950-20',
                        'value' => 'rgba(23, 0, 8, 0.2)'
                    ],
                    [
                        'key' => 'rose-950-30',
                        'value' => 'rgba(23, 0, 8, 0.3)'
                    ],
                    [
                        'key' => 'rose-950-40',
                        'value' => 'rgba(23, 0, 8, 0.4)'
                    ],
                    [
                        'key' => 'rose-950-50',
                        'value' => 'rgba(23, 0, 8, 0.5)'
                    ],
                    [
                        'key' => 'rose-950-60',
                        'value' => 'rgba(23, 0, 8, 0.6)'
                    ],
                    [
                        'key' => 'rose-950-70',
                        'value' => 'rgba(23, 0, 8, 0.7)'
                    ],
                    [
                        'key' => 'rose-950-80',
                        'value' => 'rgba(23, 0, 8, 0.8)'
                    ],
                    [
                        'key' => 'rose-950-90',
                        'value' => 'rgba(23, 0, 8, 0.9)'
                    ],
                    [
                        'key' => 'rose-950-100',
                        'value' => 'rgba(23, 0, 8, 1.0)'
                    ]
                ],
                'steel' => [
                    [
                        'key' => 'steel-50',
                        'value' => '#F2F3F4'
                    ],
                    [
                        'key' => 'steel-50-10',
                        'value' => 'rgba(242, 243, 244, 0.1)'
                    ],
                    [
                        'key' => 'steel-50-20',
                        'value' => 'rgba(242, 243, 244, 0.2)'
                    ],
                    [
                        'key' => 'steel-50-30',
                        'value' => 'rgba(242, 243, 244, 0.3)'
                    ],
                    [
                        'key' => 'steel-50-40',
                        'value' => 'rgba(242, 243, 244, 0.4)'
                    ],
                    [
                        'key' => 'steel-50-50',
                        'value' => 'rgba(242, 243, 244, 0.5)'
                    ],
                    [
                        'key' => 'steel-50-60',
                        'value' => 'rgba(242, 243, 244, 0.6)'
                    ],
                    [
                        'key' => 'steel-50-70',
                        'value' => 'rgba(242, 243, 244, 0.7)'
                    ],
                    [
                        'key' => 'steel-50-80',
                        'value' => 'rgba(242, 243, 244, 0.8)'
                    ],
                    [
                        'key' => 'steel-50-90',
                        'value' => 'rgba(242, 243, 244, 0.9)'
                    ],
                    [
                        'key' => 'steel-50-100',
                        'value' => 'rgba(242, 243, 244, 1.0)'
                    ],
                    [
                        'key' => 'steel-100',
                        'value' => '#D8DCDF'
                    ],
                    [
                        'key' => 'steel-100-10',
                        'value' => 'rgba(216, 220, 223, 0.1)'
                    ],
                    [
                        'key' => 'steel-100-20',
                        'value' => 'rgba(216, 220, 223, 0.2)'
                    ],
                    [
                        'key' => 'steel-100-30',
                        'value' => 'rgba(216, 220, 223, 0.3)'
                    ],
                    [
                        'key' => 'steel-100-40',
                        'value' => 'rgba(216, 220, 223, 0.4)'
                    ],
                    [
                        'key' => 'steel-100-50',
                        'value' => 'rgba(216, 220, 223, 0.5)'
                    ],
                    [
                        'key' => 'steel-100-60',
                        'value' => 'rgba(216, 220, 223, 0.6)'
                    ],
                    [
                        'key' => 'steel-100-70',
                        'value' => 'rgba(216, 220, 223, 0.7)'
                    ],
                    [
                        'key' => 'steel-100-80',
                        'value' => 'rgba(216, 220, 223, 0.8)'
                    ],
                    [
                        'key' => 'steel-100-90',
                        'value' => 'rgba(216, 220, 223, 0.9)'
                    ],
                    [
                        'key' => 'steel-100-100',
                        'value' => 'rgba(216, 220, 223, 1.0)'
                    ],
                    [
                        'key' => 'steel-200',
                        'value' => '#BEC4CB'
                    ],
                    [
                        'key' => 'steel-200-10',
                        'value' => 'rgba(190, 196, 203, 0.1)'
                    ],
                    [
                        'key' => 'steel-200-20',
                        'value' => 'rgba(190, 196, 203, 0.2)'
                    ],
                    [
                        'key' => 'steel-200-30',
                        'value' => 'rgba(190, 196, 203, 0.3)'
                    ],
                    [
                        'key' => 'steel-200-40',
                        'value' => 'rgba(190, 196, 203, 0.4)'
                    ],
                    [
                        'key' => 'steel-200-50',
                        'value' => 'rgba(190, 196, 203, 0.5)'
                    ],
                    [
                        'key' => 'steel-200-60',
                        'value' => 'rgba(190, 196, 203, 0.6)'
                    ],
                    [
                        'key' => 'steel-200-70',
                        'value' => 'rgba(190, 196, 203, 0.7)'
                    ],
                    [
                        'key' => 'steel-200-80',
                        'value' => 'rgba(190, 196, 203, 0.8)'
                    ],
                    [
                        'key' => 'steel-200-90',
                        'value' => 'rgba(190, 196, 203, 0.9)'
                    ],
                    [
                        'key' => 'steel-200-100',
                        'value' => 'rgba(190, 196, 203, 1.0)'
                    ],
                    [
                        'key' => 'steel-300',
                        'value' => '#A5ADB6'
                    ],
                    [
                        'key' => 'steel-300-10',
                        'value' => 'rgba(165, 173, 182, 0.1)'
                    ],
                    [
                        'key' => 'steel-300-20',
                        'value' => 'rgba(165, 173, 182, 0.2)'
                    ],
                    [
                        'key' => 'steel-300-30',
                        'value' => 'rgba(165, 173, 182, 0.3)'
                    ],
                    [
                        'key' => 'steel-300-40',
                        'value' => 'rgba(165, 173, 182, 0.4)'
                    ],
                    [
                        'key' => 'steel-300-50',
                        'value' => 'rgba(165, 173, 182, 0.5)'
                    ],
                    [
                        'key' => 'steel-300-60',
                        'value' => 'rgba(165, 173, 182, 0.6)'
                    ],
                    [
                        'key' => 'steel-300-70',
                        'value' => 'rgba(165, 173, 182, 0.7)'
                    ],
                    [
                        'key' => 'steel-300-80',
                        'value' => 'rgba(165, 173, 182, 0.8)'
                    ],
                    [
                        'key' => 'steel-300-90',
                        'value' => 'rgba(165, 173, 182, 0.9)'
                    ],
                    [
                        'key' => 'steel-300-100',
                        'value' => 'rgba(165, 173, 182, 1.0)'
                    ],
                    [
                        'key' => 'steel-400',
                        'value' => '#8B96A1'
                    ],
                    [
                        'key' => 'steel-400-10',
                        'value' => 'rgba(139, 150, 161, 0.1)'
                    ],
                    [
                        'key' => 'steel-400-20',
                        'value' => 'rgba(139, 150, 161, 0.2)'
                    ],
                    [
                        'key' => 'steel-400-30',
                        'value' => 'rgba(139, 150, 161, 0.3)'
                    ],
                    [
                        'key' => 'steel-400-40',
                        'value' => 'rgba(139, 150, 161, 0.4)'
                    ],
                    [
                        'key' => 'steel-400-50',
                        'value' => 'rgba(139, 150, 161, 0.5)'
                    ],
                    [
                        'key' => 'steel-400-60',
                        'value' => 'rgba(139, 150, 161, 0.6)'
                    ],
                    [
                        'key' => 'steel-400-70',
                        'value' => 'rgba(139, 150, 161, 0.7)'
                    ],
                    [
                        'key' => 'steel-400-80',
                        'value' => 'rgba(139, 150, 161, 0.8)'
                    ],
                    [
                        'key' => 'steel-400-90',
                        'value' => 'rgba(139, 150, 161, 0.9)'
                    ],
                    [
                        'key' => 'steel-400-100',
                        'value' => 'rgba(139, 150, 161, 1.0)'
                    ],
                    [
                        'key' => 'steel-500',
                        'value' => '#727F8D'
                    ],
                    [
                        'key' => 'steel-500-10',
                        'value' => 'rgba(114, 127, 141, 0.1)'
                    ],
                    [
                        'key' => 'steel-500-20',
                        'value' => 'rgba(114, 127, 141, 0.2)'
                    ],
                    [
                        'key' => 'steel-500-30',
                        'value' => 'rgba(114, 127, 141, 0.3)'
                    ],
                    [
                        'key' => 'steel-500-40',
                        'value' => 'rgba(114, 127, 141, 0.4)'
                    ],
                    [
                        'key' => 'steel-500-50',
                        'value' => 'rgba(114, 127, 141, 0.5)'
                    ],
                    [
                        'key' => 'steel-500-60',
                        'value' => 'rgba(114, 127, 141, 0.6)'
                    ],
                    [
                        'key' => 'steel-500-70',
                        'value' => 'rgba(114, 127, 141, 0.7)'
                    ],
                    [
                        'key' => 'steel-500-80',
                        'value' => 'rgba(114, 127, 141, 0.8)'
                    ],
                    [
                        'key' => 'steel-500-90',
                        'value' => 'rgba(114, 127, 141, 0.9)'
                    ],
                    [
                        'key' => 'steel-500-100',
                        'value' => 'rgba(114, 127, 141, 1.0)'
                    ],
                    [
                        'key' => 'steel-600',
                        'value' => '#5D6773'
                    ],
                    [
                        'key' => 'steel-600-10',
                        'value' => 'rgba(93, 103, 115, 0.1)'
                    ],
                    [
                        'key' => 'steel-600-20',
                        'value' => 'rgba(93, 103, 115, 0.2)'
                    ],
                    [
                        'key' => 'steel-600-30',
                        'value' => 'rgba(93, 103, 115, 0.3)'
                    ],
                    [
                        'key' => 'steel-600-40',
                        'value' => 'rgba(93, 103, 115, 0.4)'
                    ],
                    [
                        'key' => 'steel-600-50',
                        'value' => 'rgba(93, 103, 115, 0.5)'
                    ],
                    [
                        'key' => 'steel-600-60',
                        'value' => 'rgba(93, 103, 115, 0.6)'
                    ],
                    [
                        'key' => 'steel-600-70',
                        'value' => 'rgba(93, 103, 115, 0.7)'
                    ],
                    [
                        'key' => 'steel-600-80',
                        'value' => 'rgba(93, 103, 115, 0.8)'
                    ],
                    [
                        'key' => 'steel-600-90',
                        'value' => 'rgba(93, 103, 115, 0.9)'
                    ],
                    [
                        'key' => 'steel-600-100',
                        'value' => 'rgba(93, 103, 115, 1.0)'
                    ],
                    [
                        'key' => 'steel-700',
                        'value' => '#485059'
                    ],
                    [
                        'key' => 'steel-700-10',
                        'value' => 'rgba(72, 80, 89, 0.1)'
                    ],
                    [
                        'key' => 'steel-700-20',
                        'value' => 'rgba(72, 80, 89, 0.2)'
                    ],
                    [
                        'key' => 'steel-700-30',
                        'value' => 'rgba(72, 80, 89, 0.3)'
                    ],
                    [
                        'key' => 'steel-700-40',
                        'value' => 'rgba(72, 80, 89, 0.4)'
                    ],
                    [
                        'key' => 'steel-700-50',
                        'value' => 'rgba(72, 80, 89, 0.5)'
                    ],
                    [
                        'key' => 'steel-700-60',
                        'value' => 'rgba(72, 80, 89, 0.6)'
                    ],
                    [
                        'key' => 'steel-700-70',
                        'value' => 'rgba(72, 80, 89, 0.7)'
                    ],
                    [
                        'key' => 'steel-700-80',
                        'value' => 'rgba(72, 80, 89, 0.8)'
                    ],
                    [
                        'key' => 'steel-700-90',
                        'value' => 'rgba(72, 80, 89, 0.9)'
                    ],
                    [
                        'key' => 'steel-700-100',
                        'value' => 'rgba(72, 80, 89, 1.0)'
                    ],
                    [
                        'key' => 'steel-800',
                        'value' => '#333940'
                    ],
                    [
                        'key' => 'steel-800-10',
                        'value' => 'rgba(51, 57, 64, 0.1)'
                    ],
                    [
                        'key' => 'steel-800-20',
                        'value' => 'rgba(51, 57, 64, 0.2)'
                    ],
                    [
                        'key' => 'steel-800-30',
                        'value' => 'rgba(51, 57, 64, 0.3)'
                    ],
                    [
                        'key' => 'steel-800-40',
                        'value' => 'rgba(51, 57, 64, 0.4)'
                    ],
                    [
                        'key' => 'steel-800-50',
                        'value' => 'rgba(51, 57, 64, 0.5)'
                    ],
                    [
                        'key' => 'steel-800-60',
                        'value' => 'rgba(51, 57, 64, 0.6)'
                    ],
                    [
                        'key' => 'steel-800-70',
                        'value' => 'rgba(51, 57, 64, 0.7)'
                    ],
                    [
                        'key' => 'steel-800-80',
                        'value' => 'rgba(51, 57, 64, 0.8)'
                    ],
                    [
                        'key' => 'steel-800-90',
                        'value' => 'rgba(51, 57, 64, 0.9)'
                    ],
                    [
                        'key' => 'steel-800-100',
                        'value' => 'rgba(51, 57, 64, 1.0)'
                    ],
                    [
                        'key' => 'steel-900',
                        'value' => '#1F2226'
                    ],
                    [
                        'key' => 'steel-900-10',
                        'value' => 'rgba(31, 34, 38, 0.1)'
                    ],
                    [
                        'key' => 'steel-900-20',
                        'value' => 'rgba(31, 34, 38, 0.2)'
                    ],
                    [
                        'key' => 'steel-900-30',
                        'value' => 'rgba(31, 34, 38, 0.3)'
                    ],
                    [
                        'key' => 'steel-900-40',
                        'value' => 'rgba(31, 34, 38, 0.4)'
                    ],
                    [
                        'key' => 'steel-900-50',
                        'value' => 'rgba(31, 34, 38, 0.5)'
                    ],
                    [
                        'key' => 'steel-900-60',
                        'value' => 'rgba(31, 34, 38, 0.6)'
                    ],
                    [
                        'key' => 'steel-900-70',
                        'value' => 'rgba(31, 34, 38, 0.7)'
                    ],
                    [
                        'key' => 'steel-900-80',
                        'value' => 'rgba(31, 34, 38, 0.8)'
                    ],
                    [
                        'key' => 'steel-900-90',
                        'value' => 'rgba(31, 34, 38, 0.9)'
                    ],
                    [
                        'key' => 'steel-900-100',
                        'value' => 'rgba(31, 34, 38, 1.0)'
                    ],
                    [
                        'key' => 'steel-950',
                        'value' => '#0A0B0C'
                    ],
                    [
                        'key' => 'steel-950-10',
                        'value' => 'rgba(10, 11, 12, 0.1)'
                    ],
                    [
                        'key' => 'steel-950-20',
                        'value' => 'rgba(10, 11, 12, 0.2)'
                    ],
                    [
                        'key' => 'steel-950-30',
                        'value' => 'rgba(10, 11, 12, 0.3)'
                    ],
                    [
                        'key' => 'steel-950-40',
                        'value' => 'rgba(10, 11, 12, 0.4)'
                    ],
                    [
                        'key' => 'steel-950-50',
                        'value' => 'rgba(10, 11, 12, 0.5)'
                    ],
                    [
                        'key' => 'steel-950-60',
                        'value' => 'rgba(10, 11, 12, 0.6)'
                    ],
                    [
                        'key' => 'steel-950-70',
                        'value' => 'rgba(10, 11, 12, 0.7)'
                    ],
                    [
                        'key' => 'steel-950-80',
                        'value' => 'rgba(10, 11, 12, 0.8)'
                    ],
                    [
                        'key' => 'steel-950-90',
                        'value' => 'rgba(10, 11, 12, 0.9)'
                    ],
                    [
                        'key' => 'steel-950-100',
                        'value' => 'rgba(10, 11, 12, 1.0)'
                    ]
                ],
                'neutral' => [
                    [
                        'key' => 'neutral-50',
                        'value' => '#EAEAEA'
                    ],
                    [
                        'key' => 'neutral-50-10',
                        'value' => 'rgba(234, 234, 234, 0.1)'
                    ],
                    [
                        'key' => 'neutral-50-20',
                        'value' => 'rgba(234, 234, 234, 0.2)'
                    ],
                    [
                        'key' => 'neutral-50-30',
                        'value' => 'rgba(234, 234, 234, 0.3)'
                    ],
                    [
                        'key' => 'neutral-50-40',
                        'value' => 'rgba(234, 234, 234, 0.4)'
                    ],
                    [
                        'key' => 'neutral-50-50',
                        'value' => 'rgba(234, 234, 234, 0.5)'
                    ],
                    [
                        'key' => 'neutral-50-60',
                        'value' => 'rgba(234, 234, 234, 0.6)'
                    ],
                    [
                        'key' => 'neutral-50-70',
                        'value' => 'rgba(234, 234, 234, 0.7)'
                    ],
                    [
                        'key' => 'neutral-50-80',
                        'value' => 'rgba(234, 234, 234, 0.8)'
                    ],
                    [
                        'key' => 'neutral-50-90',
                        'value' => 'rgba(234, 234, 234, 0.9)'
                    ],
                    [
                        'key' => 'neutral-50-100',
                        'value' => 'rgba(234, 234, 234, 1.0)'
                    ],
                    [
                        'key' => 'neutral-100',
                        'value' => '#D3D3D3'
                    ],
                    [
                        'key' => 'neutral-100-10',
                        'value' => 'rgba(211, 211, 211, 0.1)'
                    ],
                    [
                        'key' => 'neutral-100-20',
                        'value' => 'rgba(211, 211, 211, 0.2)'
                    ],
                    [
                        'key' => 'neutral-100-30',
                        'value' => 'rgba(211, 211, 211, 0.3)'
                    ],
                    [
                        'key' => 'neutral-100-40',
                        'value' => 'rgba(211, 211, 211, 0.4)'
                    ],
                    [
                        'key' => 'neutral-100-50',
                        'value' => 'rgba(211, 211, 211, 0.5)'
                    ],
                    [
                        'key' => 'neutral-100-60',
                        'value' => 'rgba(211, 211, 211, 0.6)'
                    ],
                    [
                        'key' => 'neutral-100-70',
                        'value' => 'rgba(211, 211, 211, 0.7)'
                    ],
                    [
                        'key' => 'neutral-100-80',
                        'value' => 'rgba(211, 211, 211, 0.8)'
                    ],
                    [
                        'key' => 'neutral-100-90',
                        'value' => 'rgba(211, 211, 211, 0.9)'
                    ],
                    [
                        'key' => 'neutral-100-100',
                        'value' => 'rgba(211, 211, 211, 1.0)'
                    ],
                    [
                        'key' => 'neutral-200',
                        'value' => '#BCBCBC'
                    ],
                    [
                        'key' => 'neutral-200-10',
                        'value' => 'rgba(188, 188, 188, 0.1)'
                    ],
                    [
                        'key' => 'neutral-200-20',
                        'value' => 'rgba(188, 188, 188, 0.2)'
                    ],
                    [
                        'key' => 'neutral-200-30',
                        'value' => 'rgba(188, 188, 188, 0.3)'
                    ],
                    [
                        'key' => 'neutral-200-40',
                        'value' => 'rgba(188, 188, 188, 0.4)'
                    ],
                    [
                        'key' => 'neutral-200-50',
                        'value' => 'rgba(188, 188, 188, 0.5)'
                    ],
                    [
                        'key' => 'neutral-200-60',
                        'value' => 'rgba(188, 188, 188, 0.6)'
                    ],
                    [
                        'key' => 'neutral-200-70',
                        'value' => 'rgba(188, 188, 188, 0.7)'
                    ],
                    [
                        'key' => 'neutral-200-80',
                        'value' => 'rgba(188, 188, 188, 0.8)'
                    ],
                    [
                        'key' => 'neutral-200-90',
                        'value' => 'rgba(188, 188, 188, 0.9)'
                    ],
                    [
                        'key' => 'neutral-200-100',
                        'value' => 'rgba(188, 188, 188, 1.0)'
                    ],
                    [
                        'key' => 'neutral-300',
                        'value' => '#A5A5A5'
                    ],
                    [
                        'key' => 'neutral-300-10',
                        'value' => 'rgba(165, 165, 165, 0.1)'
                    ],
                    [
                        'key' => 'neutral-300-20',
                        'value' => 'rgba(165, 165, 165, 0.2)'
                    ],
                    [
                        'key' => 'neutral-300-30',
                        'value' => 'rgba(165, 165, 165, 0.3)'
                    ],
                    [
                        'key' => 'neutral-300-40',
                        'value' => 'rgba(165, 165, 165, 0.4)'
                    ],
                    [
                        'key' => 'neutral-300-50',
                        'value' => 'rgba(165, 165, 165, 0.5)'
                    ],
                    [
                        'key' => 'neutral-300-60',
                        'value' => 'rgba(165, 165, 165, 0.6)'
                    ],
                    [
                        'key' => 'neutral-300-70',
                        'value' => 'rgba(165, 165, 165, 0.7)'
                    ],
                    [
                        'key' => 'neutral-300-80',
                        'value' => 'rgba(165, 165, 165, 0.8)'
                    ],
                    [
                        'key' => 'neutral-300-90',
                        'value' => 'rgba(165, 165, 165, 0.9)'
                    ],
                    [
                        'key' => 'neutral-300-100',
                        'value' => 'rgba(165, 165, 165, 1.0)'
                    ],
                    [
                        'key' => 'neutral-400',
                        'value' => '#8E8E8E'
                    ],
                    [
                        'key' => 'neutral-400-10',
                        'value' => 'rgba(142, 142, 142, 0.1)'
                    ],
                    [
                        'key' => 'neutral-400-20',
                        'value' => 'rgba(142, 142, 142, 0.2)'
                    ],
                    [
                        'key' => 'neutral-400-30',
                        'value' => 'rgba(142, 142, 142, 0.3)'
                    ],
                    [
                        'key' => 'neutral-400-40',
                        'value' => 'rgba(142, 142, 142, 0.4)'
                    ],
                    [
                        'key' => 'neutral-400-50',
                        'value' => 'rgba(142, 142, 142, 0.5)'
                    ],
                    [
                        'key' => 'neutral-400-60',
                        'value' => 'rgba(142, 142, 142, 0.6)'
                    ],
                    [
                        'key' => 'neutral-400-70',
                        'value' => 'rgba(142, 142, 142, 0.7)'
                    ],
                    [
                        'key' => 'neutral-400-80',
                        'value' => 'rgba(142, 142, 142, 0.8)'
                    ],
                    [
                        'key' => 'neutral-400-90',
                        'value' => 'rgba(142, 142, 142, 0.9)'
                    ],
                    [
                        'key' => 'neutral-400-100',
                        'value' => 'rgba(142, 142, 142, 1.0)'
                    ],
                    [
                        'key' => 'neutral-500',
                        'value' => '#777777'
                    ],
                    [
                        'key' => 'neutral-500-10',
                        'value' => 'rgba(119, 119, 119, 0.1)'
                    ],
                    [
                        'key' => 'neutral-500-20',
                        'value' => 'rgba(119, 119, 119, 0.2)'
                    ],
                    [
                        'key' => 'neutral-500-30',
                        'value' => 'rgba(119, 119, 119, 0.3)'
                    ],
                    [
                        'key' => 'neutral-500-40',
                        'value' => 'rgba(119, 119, 119, 0.4)'
                    ],
                    [
                        'key' => 'neutral-500-50',
                        'value' => 'rgba(119, 119, 119, 0.5)'
                    ],
                    [
                        'key' => 'neutral-500-60',
                        'value' => 'rgba(119, 119, 119, 0.6)'
                    ],
                    [
                        'key' => 'neutral-500-70',
                        'value' => 'rgba(119, 119, 119, 0.7)'
                    ],
                    [
                        'key' => 'neutral-500-80',
                        'value' => 'rgba(119, 119, 119, 0.8)'
                    ],
                    [
                        'key' => 'neutral-500-90',
                        'value' => 'rgba(119, 119, 119, 0.9)'
                    ],
                    [
                        'key' => 'neutral-500-100',
                        'value' => 'rgba(119, 119, 119, 1.0)'
                    ],
                    [
                        'key' => 'neutral-600',
                        'value' => '#5F5F5F'
                    ],
                    [
                        'key' => 'neutral-600-10',
                        'value' => 'rgba(95, 95, 95, 0.1)'
                    ],
                    [
                        'key' => 'neutral-600-20',
                        'value' => 'rgba(95, 95, 95, 0.2)'
                    ],
                    [
                        'key' => 'neutral-600-30',
                        'value' => 'rgba(95, 95, 95, 0.3)'
                    ],
                    [
                        'key' => 'neutral-600-40',
                        'value' => 'rgba(95, 95, 95, 0.4)'
                    ],
                    [
                        'key' => 'neutral-600-50',
                        'value' => 'rgba(95, 95, 95, 0.5)'
                    ],
                    [
                        'key' => 'neutral-600-60',
                        'value' => 'rgba(95, 95, 95, 0.6)'
                    ],
                    [
                        'key' => 'neutral-600-70',
                        'value' => 'rgba(95, 95, 95, 0.7)'
                    ],
                    [
                        'key' => 'neutral-600-80',
                        'value' => 'rgba(95, 95, 95, 0.8)'
                    ],
                    [
                        'key' => 'neutral-600-90',
                        'value' => 'rgba(95, 95, 95, 0.9)'
                    ],
                    [
                        'key' => 'neutral-600-100',
                        'value' => 'rgba(95, 95, 95, 1.0)'
                    ],
                    [
                        'key' => 'neutral-700',
                        'value' => '#484848'
                    ],
                    [
                        'key' => 'neutral-700-10',
                        'value' => 'rgba(72, 72, 72, 0.1)'
                    ],
                    [
                        'key' => 'neutral-700-20',
                        'value' => 'rgba(72, 72, 72, 0.2)'
                    ],
                    [
                        'key' => 'neutral-700-30',
                        'value' => 'rgba(72, 72, 72, 0.3)'
                    ],
                    [
                        'key' => 'neutral-700-40',
                        'value' => 'rgba(72, 72, 72, 0.4)'
                    ],
                    [
                        'key' => 'neutral-700-50',
                        'value' => 'rgba(72, 72, 72, 0.5)'
                    ],
                    [
                        'key' => 'neutral-700-60',
                        'value' => 'rgba(72, 72, 72, 0.6)'
                    ],
                    [
                        'key' => 'neutral-700-70',
                        'value' => 'rgba(72, 72, 72, 0.7)'
                    ],
                    [
                        'key' => 'neutral-700-80',
                        'value' => 'rgba(72, 72, 72, 0.8)'
                    ],
                    [
                        'key' => 'neutral-700-90',
                        'value' => 'rgba(72, 72, 72, 0.9)'
                    ],
                    [
                        'key' => 'neutral-700-100',
                        'value' => 'rgba(72, 72, 72, 1.0)'
                    ],
                    [
                        'key' => 'neutral-800',
                        'value' => '#313131'
                    ],
                    [
                        'key' => 'neutral-800-10',
                        'value' => 'rgba(49, 49, 49, 0.1)'
                    ],
                    [
                        'key' => 'neutral-800-20',
                        'value' => 'rgba(49, 49, 49, 0.2)'
                    ],
                    [
                        'key' => 'neutral-800-30',
                        'value' => 'rgba(49, 49, 49, 0.3)'
                    ],
                    [
                        'key' => 'neutral-800-40',
                        'value' => 'rgba(49, 49, 49, 0.4)'
                    ],
                    [
                        'key' => 'neutral-800-50',
                        'value' => 'rgba(49, 49, 49, 0.5)'
                    ],
                    [
                        'key' => 'neutral-800-60',
                        'value' => 'rgba(49, 49, 49, 0.6)'
                    ],
                    [
                        'key' => 'neutral-800-70',
                        'value' => 'rgba(49, 49, 49, 0.7)'
                    ],
                    [
                        'key' => 'neutral-800-80',
                        'value' => 'rgba(49, 49, 49, 0.8)'
                    ],
                    [
                        'key' => 'neutral-800-90',
                        'value' => 'rgba(49, 49, 49, 0.9)'
                    ],
                    [
                        'key' => 'neutral-800-100',
                        'value' => 'rgba(49, 49, 49, 1.0)'
                    ],
                    [
                        'key' => 'neutral-900',
                        'value' => '#1A1A1A'
                    ],
                    [
                        'key' => 'neutral-900-10',
                        'value' => 'rgba(26, 26, 26, 0.1)'
                    ],
                    [
                        'key' => 'neutral-900-20',
                        'value' => 'rgba(26, 26, 26, 0.2)'
                    ],
                    [
                        'key' => 'neutral-900-30',
                        'value' => 'rgba(26, 26, 26, 0.3)'
                    ],
                    [
                        'key' => 'neutral-900-40',
                        'value' => 'rgba(26, 26, 26, 0.4)'
                    ],
                    [
                        'key' => 'neutral-900-50',
                        'value' => 'rgba(26, 26, 26, 0.5)'
                    ],
                    [
                        'key' => 'neutral-900-60',
                        'value' => 'rgba(26, 26, 26, 0.6)'
                    ],
                    [
                        'key' => 'neutral-900-70',
                        'value' => 'rgba(26, 26, 26, 0.7)'
                    ],
                    [
                        'key' => 'neutral-900-80',
                        'value' => 'rgba(26, 26, 26, 0.8)'
                    ],
                    [
                        'key' => 'neutral-900-90',
                        'value' => 'rgba(26, 26, 26, 0.9)'
                    ],
                    [
                        'key' => 'neutral-900-100',
                        'value' => 'rgba(26, 26, 26, 1.0)'
                    ],
                    [
                        'key' => 'neutral-950',
                        'value' => '#030303'
                    ],
                    [
                        'key' => 'neutral-950-10',
                        'value' => 'rgba(3, 3, 3, 0.1)'
                    ],
                    [
                        'key' => 'neutral-950-20',
                        'value' => 'rgba(3, 3, 3, 0.2)'
                    ],
                    [
                        'key' => 'neutral-950-30',
                        'value' => 'rgba(3, 3, 3, 0.3)'
                    ],
                    [
                        'key' => 'neutral-950-40',
                        'value' => 'rgba(3, 3, 3, 0.4)'
                    ],
                    [
                        'key' => 'neutral-950-50',
                        'value' => 'rgba(3, 3, 3, 0.5)'
                    ],
                    [
                        'key' => 'neutral-950-60',
                        'value' => 'rgba(3, 3, 3, 0.6)'
                    ],
                    [
                        'key' => 'neutral-950-70',
                        'value' => 'rgba(3, 3, 3, 0.7)'
                    ],
                    [
                        'key' => 'neutral-950-80',
                        'value' => 'rgba(3, 3, 3, 0.8)'
                    ],
                    [
                        'key' => 'neutral-950-90',
                        'value' => 'rgba(3, 3, 3, 0.9)'
                    ],
                    [
                        'key' => 'neutral-950-100',
                        'value' => 'rgba(3, 3, 3, 1.0)'
                    ]
                ],
                'stone' => [
                    [
                        'key' => 'stone-50',
                        'value' => '#F4F3F2'
                    ],
                    [
                        'key' => 'stone-50-10',
                        'value' => 'rgba(244, 243, 242, 0.1)'
                    ],
                    [
                        'key' => 'stone-50-20',
                        'value' => 'rgba(244, 243, 242, 0.2)'
                    ],
                    [
                        'key' => 'stone-50-30',
                        'value' => 'rgba(244, 243, 242, 0.3)'
                    ],
                    [
                        'key' => 'stone-50-40',
                        'value' => 'rgba(244, 243, 242, 0.4)'
                    ],
                    [
                        'key' => 'stone-50-50',
                        'value' => 'rgba(244, 243, 242, 0.5)'
                    ],
                    [
                        'key' => 'stone-50-60',
                        'value' => 'rgba(244, 243, 242, 0.6)'
                    ],
                    [
                        'key' => 'stone-50-70',
                        'value' => 'rgba(244, 243, 242, 0.7)'
                    ],
                    [
                        'key' => 'stone-50-80',
                        'value' => 'rgba(244, 243, 242, 0.8)'
                    ],
                    [
                        'key' => 'stone-50-90',
                        'value' => 'rgba(244, 243, 242, 0.9)'
                    ],
                    [
                        'key' => 'stone-50-100',
                        'value' => 'rgba(244, 243, 242, 1.0)'
                    ],
                    [
                        'key' => 'stone-100',
                        'value' => '#DFDBD9'
                    ],
                    [
                        'key' => 'stone-100-10',
                        'value' => 'rgba(223, 219, 217, 0.1)'
                    ],
                    [
                        'key' => 'stone-100-20',
                        'value' => 'rgba(223, 219, 217, 0.2)'
                    ],
                    [
                        'key' => 'stone-100-30',
                        'value' => 'rgba(223, 219, 217, 0.3)'
                    ],
                    [
                        'key' => 'stone-100-40',
                        'value' => 'rgba(223, 219, 217, 0.4)'
                    ],
                    [
                        'key' => 'stone-100-50',
                        'value' => 'rgba(223, 219, 217, 0.5)'
                    ],
                    [
                        'key' => 'stone-100-60',
                        'value' => 'rgba(223, 219, 217, 0.6)'
                    ],
                    [
                        'key' => 'stone-100-70',
                        'value' => 'rgba(223, 219, 217, 0.7)'
                    ],
                    [
                        'key' => 'stone-100-80',
                        'value' => 'rgba(223, 219, 217, 0.8)'
                    ],
                    [
                        'key' => 'stone-100-90',
                        'value' => 'rgba(223, 219, 217, 0.9)'
                    ],
                    [
                        'key' => 'stone-100-100',
                        'value' => 'rgba(223, 219, 217, 1.0)'
                    ],
                    [
                        'key' => 'stone-200',
                        'value' => '#C9C3C0'
                    ],
                    [
                        'key' => 'stone-200-10',
                        'value' => 'rgba(201, 195, 192, 0.1)'
                    ],
                    [
                        'key' => 'stone-200-20',
                        'value' => 'rgba(201, 195, 192, 0.2)'
                    ],
                    [
                        'key' => 'stone-200-30',
                        'value' => 'rgba(201, 195, 192, 0.3)'
                    ],
                    [
                        'key' => 'stone-200-40',
                        'value' => 'rgba(201, 195, 192, 0.4)'
                    ],
                    [
                        'key' => 'stone-200-50',
                        'value' => 'rgba(201, 195, 192, 0.5)'
                    ],
                    [
                        'key' => 'stone-200-60',
                        'value' => 'rgba(201, 195, 192, 0.6)'
                    ],
                    [
                        'key' => 'stone-200-70',
                        'value' => 'rgba(201, 195, 192, 0.7)'
                    ],
                    [
                        'key' => 'stone-200-80',
                        'value' => 'rgba(201, 195, 192, 0.8)'
                    ],
                    [
                        'key' => 'stone-200-90',
                        'value' => 'rgba(201, 195, 192, 0.9)'
                    ],
                    [
                        'key' => 'stone-200-100',
                        'value' => 'rgba(201, 195, 192, 1.0)'
                    ],
                    [
                        'key' => 'stone-300',
                        'value' => '#B4ABA7'
                    ],
                    [
                        'key' => 'stone-300-10',
                        'value' => 'rgba(180, 171, 167, 0.1)'
                    ],
                    [
                        'key' => 'stone-300-20',
                        'value' => 'rgba(180, 171, 167, 0.2)'
                    ],
                    [
                        'key' => 'stone-300-30',
                        'value' => 'rgba(180, 171, 167, 0.3)'
                    ],
                    [
                        'key' => 'stone-300-40',
                        'value' => 'rgba(180, 171, 167, 0.4)'
                    ],
                    [
                        'key' => 'stone-300-50',
                        'value' => 'rgba(180, 171, 167, 0.5)'
                    ],
                    [
                        'key' => 'stone-300-60',
                        'value' => 'rgba(180, 171, 167, 0.6)'
                    ],
                    [
                        'key' => 'stone-300-70',
                        'value' => 'rgba(180, 171, 167, 0.7)'
                    ],
                    [
                        'key' => 'stone-300-80',
                        'value' => 'rgba(180, 171, 167, 0.8)'
                    ],
                    [
                        'key' => 'stone-300-90',
                        'value' => 'rgba(180, 171, 167, 0.9)'
                    ],
                    [
                        'key' => 'stone-300-100',
                        'value' => 'rgba(180, 171, 167, 1.0)'
                    ],
                    [
                        'key' => 'stone-400',
                        'value' => '#9F938E'
                    ],
                    [
                        'key' => 'stone-400-10',
                        'value' => 'rgba(159, 147, 142, 0.1)'
                    ],
                    [
                        'key' => 'stone-400-20',
                        'value' => 'rgba(159, 147, 142, 0.2)'
                    ],
                    [
                        'key' => 'stone-400-30',
                        'value' => 'rgba(159, 147, 142, 0.3)'
                    ],
                    [
                        'key' => 'stone-400-40',
                        'value' => 'rgba(159, 147, 142, 0.4)'
                    ],
                    [
                        'key' => 'stone-400-50',
                        'value' => 'rgba(159, 147, 142, 0.5)'
                    ],
                    [
                        'key' => 'stone-400-60',
                        'value' => 'rgba(159, 147, 142, 0.6)'
                    ],
                    [
                        'key' => 'stone-400-70',
                        'value' => 'rgba(159, 147, 142, 0.7)'
                    ],
                    [
                        'key' => 'stone-400-80',
                        'value' => 'rgba(159, 147, 142, 0.8)'
                    ],
                    [
                        'key' => 'stone-400-90',
                        'value' => 'rgba(159, 147, 142, 0.9)'
                    ],
                    [
                        'key' => 'stone-400-100',
                        'value' => 'rgba(159, 147, 142, 1.0)'
                    ],
                    [
                        'key' => 'stone-500',
                        'value' => '#8A7C75'
                    ],
                    [
                        'key' => 'stone-500-10',
                        'value' => 'rgba(138, 124, 117, 0.1)'
                    ],
                    [
                        'key' => 'stone-500-20',
                        'value' => 'rgba(138, 124, 117, 0.2)'
                    ],
                    [
                        'key' => 'stone-500-30',
                        'value' => 'rgba(138, 124, 117, 0.3)'
                    ],
                    [
                        'key' => 'stone-500-40',
                        'value' => 'rgba(138, 124, 117, 0.4)'
                    ],
                    [
                        'key' => 'stone-500-50',
                        'value' => 'rgba(138, 124, 117, 0.5)'
                    ],
                    [
                        'key' => 'stone-500-60',
                        'value' => 'rgba(138, 124, 117, 0.6)'
                    ],
                    [
                        'key' => 'stone-500-70',
                        'value' => 'rgba(138, 124, 117, 0.7)'
                    ],
                    [
                        'key' => 'stone-500-80',
                        'value' => 'rgba(138, 124, 117, 0.8)'
                    ],
                    [
                        'key' => 'stone-500-90',
                        'value' => 'rgba(138, 124, 117, 0.9)'
                    ],
                    [
                        'key' => 'stone-500-100',
                        'value' => 'rgba(138, 124, 117, 1.0)'
                    ],
                    [
                        'key' => 'stone-600',
                        'value' => '#70655F'
                    ],
                    [
                        'key' => 'stone-600-10',
                        'value' => 'rgba(112, 101, 95, 0.1)'
                    ],
                    [
                        'key' => 'stone-600-20',
                        'value' => 'rgba(112, 101, 95, 0.2)'
                    ],
                    [
                        'key' => 'stone-600-30',
                        'value' => 'rgba(112, 101, 95, 0.3)'
                    ],
                    [
                        'key' => 'stone-600-40',
                        'value' => 'rgba(112, 101, 95, 0.4)'
                    ],
                    [
                        'key' => 'stone-600-50',
                        'value' => 'rgba(112, 101, 95, 0.5)'
                    ],
                    [
                        'key' => 'stone-600-60',
                        'value' => 'rgba(112, 101, 95, 0.6)'
                    ],
                    [
                        'key' => 'stone-600-70',
                        'value' => 'rgba(112, 101, 95, 0.7)'
                    ],
                    [
                        'key' => 'stone-600-80',
                        'value' => 'rgba(112, 101, 95, 0.8)'
                    ],
                    [
                        'key' => 'stone-600-90',
                        'value' => 'rgba(112, 101, 95, 0.9)'
                    ],
                    [
                        'key' => 'stone-600-100',
                        'value' => 'rgba(112, 101, 95, 1.0)'
                    ],
                    [
                        'key' => 'stone-700',
                        'value' => '#574E4A'
                    ],
                    [
                        'key' => 'stone-700-10',
                        'value' => 'rgba(87, 78, 74, 0.1)'
                    ],
                    [
                        'key' => 'stone-700-20',
                        'value' => 'rgba(87, 78, 74, 0.2)'
                    ],
                    [
                        'key' => 'stone-700-30',
                        'value' => 'rgba(87, 78, 74, 0.3)'
                    ],
                    [
                        'key' => 'stone-700-40',
                        'value' => 'rgba(87, 78, 74, 0.4)'
                    ],
                    [
                        'key' => 'stone-700-50',
                        'value' => 'rgba(87, 78, 74, 0.5)'
                    ],
                    [
                        'key' => 'stone-700-60',
                        'value' => 'rgba(87, 78, 74, 0.6)'
                    ],
                    [
                        'key' => 'stone-700-70',
                        'value' => 'rgba(87, 78, 74, 0.7)'
                    ],
                    [
                        'key' => 'stone-700-80',
                        'value' => 'rgba(87, 78, 74, 0.8)'
                    ],
                    [
                        'key' => 'stone-700-90',
                        'value' => 'rgba(87, 78, 74, 0.9)'
                    ],
                    [
                        'key' => 'stone-700-100',
                        'value' => 'rgba(87, 78, 74, 1.0)'
                    ],
                    [
                        'key' => 'stone-800',
                        'value' => '#3E3835'
                    ],
                    [
                        'key' => 'stone-800-10',
                        'value' => 'rgba(62, 56, 53, 0.1)'
                    ],
                    [
                        'key' => 'stone-800-20',
                        'value' => 'rgba(62, 56, 53, 0.2)'
                    ],
                    [
                        'key' => 'stone-800-30',
                        'value' => 'rgba(62, 56, 53, 0.3)'
                    ],
                    [
                        'key' => 'stone-800-40',
                        'value' => 'rgba(62, 56, 53, 0.4)'
                    ],
                    [
                        'key' => 'stone-800-50',
                        'value' => 'rgba(62, 56, 53, 0.5)'
                    ],
                    [
                        'key' => 'stone-800-60',
                        'value' => 'rgba(62, 56, 53, 0.6)'
                    ],
                    [
                        'key' => 'stone-800-70',
                        'value' => 'rgba(62, 56, 53, 0.7)'
                    ],
                    [
                        'key' => 'stone-800-80',
                        'value' => 'rgba(62, 56, 53, 0.8)'
                    ],
                    [
                        'key' => 'stone-800-90',
                        'value' => 'rgba(62, 56, 53, 0.9)'
                    ],
                    [
                        'key' => 'stone-800-100',
                        'value' => 'rgba(62, 56, 53, 1.0)'
                    ],
                    [
                        'key' => 'stone-900',
                        'value' => '#25211F'
                    ],
                    [
                        'key' => 'stone-900-10',
                        'value' => 'rgba(37, 33, 31, 0.1)'
                    ],
                    [
                        'key' => 'stone-900-20',
                        'value' => 'rgba(37, 33, 31, 0.2)'
                    ],
                    [
                        'key' => 'stone-900-30',
                        'value' => 'rgba(37, 33, 31, 0.3)'
                    ],
                    [
                        'key' => 'stone-900-40',
                        'value' => 'rgba(37, 33, 31, 0.4)'
                    ],
                    [
                        'key' => 'stone-900-50',
                        'value' => 'rgba(37, 33, 31, 0.5)'
                    ],
                    [
                        'key' => 'stone-900-60',
                        'value' => 'rgba(37, 33, 31, 0.6)'
                    ],
                    [
                        'key' => 'stone-900-70',
                        'value' => 'rgba(37, 33, 31, 0.7)'
                    ],
                    [
                        'key' => 'stone-900-80',
                        'value' => 'rgba(37, 33, 31, 0.8)'
                    ],
                    [
                        'key' => 'stone-900-90',
                        'value' => 'rgba(37, 33, 31, 0.9)'
                    ],
                    [
                        'key' => 'stone-900-100',
                        'value' => 'rgba(37, 33, 31, 1.0)'
                    ],
                    [
                        'key' => 'stone-950',
                        'value' => '#0C0B0A'
                    ],
                    [
                        'key' => 'stone-950-10',
                        'value' => 'rgba(12, 11, 10, 0.1)'
                    ],
                    [
                        'key' => 'stone-950-20',
                        'value' => 'rgba(12, 11, 10, 0.2)'
                    ],
                    [
                        'key' => 'stone-950-30',
                        'value' => 'rgba(12, 11, 10, 0.3)'
                    ],
                    [
                        'key' => 'stone-950-40',
                        'value' => 'rgba(12, 11, 10, 0.4)'
                    ],
                    [
                        'key' => 'stone-950-50',
                        'value' => 'rgba(12, 11, 10, 0.5)'
                    ],
                    [
                        'key' => 'stone-950-60',
                        'value' => 'rgba(12, 11, 10, 0.6)'
                    ],
                    [
                        'key' => 'stone-950-70',
                        'value' => 'rgba(12, 11, 10, 0.7)'
                    ],
                    [
                        'key' => 'stone-950-80',
                        'value' => 'rgba(12, 11, 10, 0.8)'
                    ],
                    [
                        'key' => 'stone-950-90',
                        'value' => 'rgba(12, 11, 10, 0.9)'
                    ],
                    [
                        'key' => 'stone-950-100',
                        'value' => 'rgba(12, 11, 10, 1.0)'
                    ]
                ]
            ]
        ];
        
        
        return view('pages.background-color', [
            'tokens' => $tokens
        ]);
    }
}
