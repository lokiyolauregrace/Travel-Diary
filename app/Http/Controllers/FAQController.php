<?php

namespace App\Http\Controllers;

use App\Models\FAQ;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();

        return view('faq.index', compact('faqs'));
    }
}