<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\LearnCrypto;
use Illuminate\Http\Request;

class AdminLearnCryptoController extends Controller
{
    public function index()
    {
        $news = LearnCrypto::all();
        return view('admin.learn.list', compact('news'));
    }

    public function create()
    {
        return view('admin.learn.add');
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
            $destinationPath = public_path('/cryptodoor');
            $image->move($destinationPath, $input['imagename']);

            $news = new LearnCrypto();
            $news->title = $request->title;
            $news->featured = $request->featured;
            $news->description = $request->description;
            $news->image = $input['imagename'];
            $news->save();
            return redirect()->route('admin.learn-crypto.index');
        }

        $news = new LearnCrypto();
        $news->title = $request->title;
        $news->featured = $request->featured;
        $news->description = $request->description;
        $news->save();
        return redirect()->route('admin.learn-crypto.index');
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
        $news = LearnCrypto::findOrFail($id);
        return view('admin.learn.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->getData($request);
        $news = LearnCrypto::findOrFail($id);
        if ($request->hasFile('image')){
            $featured_image = $request->file('image');
            $input['image'] = time().'.'.$featured_image->getClientOriginalExtension();
            $destinationPath = public_path('/cryptodoor');
            $featured_image->move($destinationPath, $input['image']);

            $news->update($data);
            $news->update(['image' => $input['image']]);
            return redirect()->route('admin.learn-crypto.index')->with('updated', "NFT Listing Updated Successfully");
        }else{
            $news->update($data);
            return redirect()->route('admin.learn-crypto.index')->with('updated', "NFT Listing Updated Successfully");
        }
    }

    public function destroy($id)
    {
        $news = LearnCrypto::findOrFail($id);
        $news->delete();
        return redirect()->back();
    }
}
