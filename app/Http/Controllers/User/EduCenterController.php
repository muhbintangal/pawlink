<?php

namespace App\Http\Controllers\User;

// Import Controller induk dan Request
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Article; // Pastikan Model Article sudah dibuat

class EduCenterController extends Controller
{
    public function index(Request $request)
    {
        // Perbaikan: Gunakan satu tanda $ saja
        $query = Article::query();

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category') && $request->category != 'All') {
            $query->where('category', $request->category);
        }

        $articles = $query->latest()->get();

        // Sesuaikan dengan letak view kamu (edu/index.blade.php)
        return view('edu.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('edu.show', compact('article'));
    }
}