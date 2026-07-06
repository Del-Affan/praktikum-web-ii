<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    /**
     * Menangani rute dasar (welcome)
     * Mengembalikan pesan "Selamat datang di aplikasi Laravel!"
     * 
     * @return string
     */
    public function welcome()
    {
        return 'Selamat datang di aplikasi Laravel!';
    }

    /**
     * Menangani rute dengan parameter (nama dan npm)
     * Mengembalikan pesan "Halo, [nama] [npm]!"
     * 
     * @param string $name
     * @param string $npm
     * @return string
     */
    public function greet($name, $npm)
    {
        return 'Halo, ' . $name . ' ' . $npm . '!';
    }
}