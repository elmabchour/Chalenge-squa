<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortenedUrlController extends Controller
{
    // app/Http/Controllers/ShortenedUrlController.php

use App\Models\ShortenedUrl;

public function store(Request $request)
{
    $request->validate([
        'original_url' => 'required|url',
    ]);

    $shortenedUrl = ShortenedUrl::create([
        'original_url' => $request->input('original_url'),
        'short_url' => Str::random(6), // Generate a unique short URL
    ]);

    return response()->json($shortenedUrl, 201);
}

public function show($shortUrl)
{
    $shortenedUrl = ShortenedUrl::where('short_url', $shortUrl)->firstOrFail();
    $shortenedUrl->increment('click_count');

    return redirect($shortenedUrl->original_url);
}

public function index()
{
    $shortenedUrls = ShortenedUrl::orderBy('id', 'desc')->get();
    return response()->json($shortenedUrls);
}

}
