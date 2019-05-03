<?php

namespace App\Http\Controllers\Admin;

use App\Slider;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        
        return view( 'admin.slider.index', compact('sliders',$sliders));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title'     => 'required',
           'sub_title' => 'required',
           'image'     => 'required|image|max:2048',
        ]);

        $image = $request->file('image');

        $slug = Str::slug($request->title);

        if ( isset($image) )
        {
            $currentDate = Carbon:: now()->toDateString();

            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if ( ! file_exists('uploads/slider'))
            {
                mkdir('uploads/slider', 0777, true);
            }

            $image->move('uploads/slider', $imageName);
        }
        else
        {
            $imageName = 'default.png';
        }

        $slider = new Slider();

        $slider->title     = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image     = $imageName;
        $slider->save();

        return redirect()->route('slider.index')->with('successMsg', 'slider added successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.edit', compact('slider'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'     => 'required',
            'sub_title' => 'required',
            'image'     => 'image|max:2048',
        ]);

        $image  = $request->file('image');
        $slug   = Str::slug($request->title);
        $slider = Slider::find($id);

        if ( isset($image) )
        {
            $currentDate = Carbon:: now()->toDateString();

            $imageName   = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if ( ! file_exists('uploads/slider') )
            {
                mkdir('uploads/slider', 0777, true);
            }

            $image->move('uploads/slider', $imageName);
        }
        else
        {
            $imageName = $slider->image;
        }

        $slider->title     = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image     = $imageName;
        $slider->save();

        return redirect()->route('slider.index')->with('updateMsg', 'slider updated successfully ');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);


        if ( file_exists('uploads/slider/'.$slider->image) )
        {
            unlink('uploads/slider/'.$slider->image);
        }

        $slider->delete();
        return redirect()->back()->with('SuccessMsg', 'Deleted successfully');
    }
}
