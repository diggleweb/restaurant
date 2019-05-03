@extends('layouts.app')

@section('title','Slider')

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('slider.create') }}" class="btn btn-info">Add New</a>
                @include('layouts.message.message')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">All Sliders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="slider-table" cellspacing="0" width="100%">
                                <thead class=" text-primary">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @if (isset($sliders))
                                    @foreach($sliders as $key => $slider)
                                    <tr>
                                        <td> {{$key + 1 }} </td>
                                        <td> {{$slider->title}} </td>
                                        <td> {{$slider->sub_title}} </td>
                                        <td> {{$slider->image}} </td>
                                        <td> {{$slider->created_at}} </td>
                                        <td> {{$slider->updated_at}} </td>
                                        <td> <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-info btn-sm">
                                                <i class="material-icons">mode_edit</i></a>
                                                <form method="post" id="delete-form-{{$slider->id}}" action="{{route('slider.delete', $slider->id)}}" style="display:none">
                                                @csrf
                                                @method('DELETE')
                                                </form>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure?' +
                                                            'You want to delete this'))
                                                    {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$slider->id}}').submit();
                                                    }
                                                    else
                                                    {
                                                        event.preventDefault();
                                                    }">
                                                <i class="material-icons">delete</i></button>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif 

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('scripts')
    {{--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>--}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <script>
                                                        $(document).ready(function() {
                                                        $('#slider-table').DataTable();
                                                        });
    </script>
    @endpush