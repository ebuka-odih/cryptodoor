<?php

namespace App\Http\Controllers\Admin;

use App\CoinPicker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCoinPickerController extends Controller
{
    public function index()
    {
        $coins = CoinPicker::all();
        return view('admin.coin-picker.list', compact('coins'));
    }

    public function create()
    {
        return view('admin.coin-picker.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'nullable',
            'up_down' => 'required',
            'percent' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/cryptodoor');
            $image->move($destinationPath, $input['imagename']);

            $coins = new CoinPicker();
            $coins->name = $request->name;
            $coins->price = $request->price;
            $coins->up_down = $request->up_down;
            $coins->percent = $request->percent;
            $coins->image = $input['imagename'];
            $coins->save();
            return redirect()->route('admin.coin-picker.index');
        }

        $coins = new CoinPicker();
        $coins->name = $request->name;
        $coins->price = $request->price;
        $coins->up_down = $request->up_down;
        $coins->save();
        return redirect()->route('admin.coin-picker.index');
    }

    public function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'price' => 'nullable',
            'up_down' => 'required',
            'percent' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
        return $request->validate($rules);
    }

    public function edit($id)
    {
        $coins = CoinPicker::findOrFail($id);
        return view('admin.coin-picker.edit', compact('coins'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->getData($request);
        $coins = CoinPicker::findOrFail($id);
        if ($request->hasFile('image')){
            $featured_image = $request->file('image');
            $input['image'] = time().'.'.$featured_image->getClientOriginalExtension();
            $destinationPath = public_path('/cryptodoor');
            $featured_image->move($destinationPath, $input['image']);

            $coins->update($data);
            $coins->update(['image' => $input['image']]);
            return redirect()->route('admin.coin-picker.index')->with('updated', "NFT Listing Updated Successfully");
        }else{
            $coins->update($data);
            return redirect()->route('admin.coin-picker.index')->with('updated', "NFT Listing Updated Successfully");
        }
    }

    public function destroy($id)
    {
        $coins = CoinPicker::findOrFail($id);
        $coins->delete();
        return redirect()->back();
    }

}
