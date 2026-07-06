<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman home
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Menampilkan halaman profil dengan data Nama dan NPM
     * 
     * @return \Illuminate\View\View
     */
    public function profil()
    {
        $nama = 'Del Affan';  // Ganti dengan nama Anda
        $npm = '12345678';    // Ganti dengan NPM Anda
        
        return view('profil', compact('nama', 'npm'));
    }

    /**
     * Menampilkan halaman pendidikan dengan data Kampus dan Prodi
     * 
     * @return \Illuminate\View\View
     */
    public function pendidikan()
    {
        $kampus = 'Universitas Medan Area';
        $prodi = 'Teknik Informatika';
        
        return view('pendidikan', compact('kampus', 'prodi'));
    }

    /**
     * Menampilkan halaman keahlian dengan data skill
     * 
     * @return \Illuminate\View\View
     */
    public function keahlian()
    {
        $skills = ['PHP', 'Laravel', 'HTML', 'CSS', 'JavaScript', 'MySQL'];
        
        return view('keahlian', compact('skills'));
    }
}