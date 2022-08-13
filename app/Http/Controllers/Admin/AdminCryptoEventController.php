<?php

namespace App\Http\Controllers\Admin;

use App\CryptoEvent;
//use App\CryptoEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCryptoEventController extends Controller
{
    public function index()
    {
        $news = CryptoEvent::all();
        return view('admin.crypto-event.list', compact('news'));
    }

    public function create()
    {
        return view('admin.crypto-event.add');
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

            $news = new CryptoEvent();
            $news->title = $request->title;
            $news->featured = $request->featured;
            $news->description = $request->description;
            $news->image = $input['imagename'];
            $news->save();
            return redirect()->route('admin.crypto-event.index');
        }

        $news = new CryptoEvent();
        $news->title = $request->title;
        $news->featured = $request->featured;
        $news->description = $request->description;
        $news->save();
        return redirect()->route('admin.crypto-event.index');
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
        $news = CryptoEvent::findOrFail($id);
        return view('admin.crypto-event.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->getData($request);
        $news = CryptoEvent::findOrFail($id);
        if ($request->hasFile('image')){
            $featured_image = $request->file('image');
            $input['image'] = time().'.'.$featured_image->getClientOriginalExtension();
            $destinationPath = public_path('/cryptodoor');
            $featured_image->move($destinationPath, $input['image']);

            $news->update($data);
            $news->update(['image' => $input['image']]);
            return redirect()->route('admin.crypto-event.index')->with('updated', "NFT Listing Updated Successfully");
        }else{
            $news->update($data);
            return redirect()->route('admin.crypto-event.index')->with('updated', "NFT Listing Updated Successfully");
        }
    }

    public function destroy($id)
    {
        $news = CryptoEvent::findOrFail($id);
        $news->delete();
        return redirect()->back();
    }
}
