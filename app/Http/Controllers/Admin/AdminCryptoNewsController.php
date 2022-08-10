<?php

namespace App\Http\Controllers\Admin;

use App\CryptoNews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCryptoNewsController extends Controller
{
    public function index()
    {
        $news = CryptoNews::all();
        return view('admin.news.list', compact('news'));
    }

    public function create()
    {
        return view('admin.news.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'featured' => 'nullable',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);

            $news = new CryptoNews();
            $news->title = $request->title;
            $news->featured = $request->featured;
            $news->description = $request->description;
            $news->image = $input['imagename'];
            $news->save();
            return redirect()->route('admin.crypto-news.index');
        }

        $news = new CryptoNews();
        $news->title = $request->title;
        $news->featured = $request->featured;
        $news->description = $request->description;
        $news->save();
        return redirect()->route('admin.crypto-news.index');
    }

    public function getData(Request $request)
    {
        $rules = [
            'title' => 'required',
            'featured' => 'nullable',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
        return $request->validate($rules);
    }

    public function edit($id)
    {
        $news = CryptoNews::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->getData($request);
        $news = CryptoNews::findOrFail($id);
        if ($request->hasFile('image')){
            $featured_image = $request->file('image');
            $input['image'] = time().'.'.$featured_image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $featured_image->move($destinationPath, $input['image']);

            $news->update($data);
            $news->update(['image' => $input['image']]);
            return redirect()->route('admin.crypto-news.index')->with('updated', "NFT Listing Updated Successfully");
        }else{
            $news->update($data);
            return redirect()->route('admin.crypto-news.index')->with('updated', "NFT Listing Updated Successfully");
        }
    }

    public function destroy($id)
    {
        $news = CryptoNews::findOrFail($id);
        $news->delete();
        return redirect()->back();
    }

}
