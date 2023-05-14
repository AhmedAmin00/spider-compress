<?php

namespace App\Http\Controllers;

use Goutte;
use Illuminate\Http\Request;
use Image;

class ImageCompressionController extends Controller
{
    public function index()
    {
        return view('scrape');
    }

    public function scrapeSite(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $url = $request->input('url');
        $images = Goutte::request('GET', $url);
        $imageArray = [];
        $images = $images->filter('img')->each(function ($image) use (&$imageArray) {
            $src = $image->attr('src');
            if (strpos($src, 'data:image') === false) {
                if (strpos($src, '//') === 0) {
                    $src = 'https:' . $src;
                }
                $imageArray[] = $src;
                return $src;
            }
        });

        return view('choose', compact('imageArray'));
    }
    public function compressImage(Request $request)
    {
        $url = $request->input('url');
        $img = Image::make($url);
        $imgName = \Str::uuid() . '_' . time() . '.' . 'webp';
        $img->save(public_path($imgName), 60);
        return response()->download(public_path($imgName));
    }

}
