<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
   public function index()
   {
       return view('home');
   }
   public function profile()
   {
       return view('profile');
   }
   public function tentang()
   {
       return view('tentang');
   }
   public function faq()
   {
       return view('faq');
   }
   public function pelatihan()
   {
       return view('pelatihan');
   }
   public function kartu()
   {
       return view('kartu');
   }
 
}
