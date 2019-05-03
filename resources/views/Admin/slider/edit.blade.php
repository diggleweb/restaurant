@extends('layouts.app')

@section('title','Slider')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.message.message')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Sliders</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-content">

                                <form method="POST" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data" >
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Title</label>
                                                <input type="text" class="form-control" name="title" value="{{$slider->title}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">SubTitle</label>
                                                <input type="text" class="form-control"name="sub_title" value="{{$slider->sub_title}}" style="margin-bottom: 10px">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="bmd-label-floating">Image</label>
                                        <input type="file" name="image" id="image" value="{{$slider->image}}" style="margin-bottom: 10px">
                                    </div>

                                    <a href="{{ route('slider.index') }}"type="submit" class="btn btn-danger">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush