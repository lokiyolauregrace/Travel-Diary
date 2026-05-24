<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\FAQCategory;
use Illuminate\Http\Request;

class AdminFAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        $categories = FAQCategory::all();
        return view('admin.faqs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        FAQ::create($request->all());

        return redirect('/admin/faqs');
    }

    public function edit(FAQ $faq)
    {
        $categories = FAQCategory::all();

        return view('admin.faqs.edit', compact('faq', 'categories'));
    }

    public function update(Request $request, FAQ $faq)
    {
        $faq->update($request->all());

        return redirect('/admin/faqs');
    }

    public function destroy(FAQ $faq)
    {
        $faq->delete();

        return back();
    }
}