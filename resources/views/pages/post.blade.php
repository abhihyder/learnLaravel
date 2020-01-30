@extends('welcome')

@section('content')
<div class="main_wrapper content_bg">
        <div class="wrapper cntnt_wrp">
            <div id="content">
                <a href="{{route('createPost')}}">Add Post</a>
            </div>
        </div>
        <div class="wrapper cntnt_wrp">
            <div id="content">

            <!--Read data by loop-->
            @foreach($sql as $data)
            <div>
                
                <p>{{$data->titles}}</p>
                <p>{{$data->details}}</p>
                <p> Category: {{$data->name}}</p>
                <img src="{{url($data->img)}}" style="width: 300px; height: auto" alt="">
                
                <a href="{{url('view_single_post_'.$data->id)}}" class="btn btn-sm btn-success">View</a>
                <a href="{{url('edit_post_'.$data->id)}}" class="btn btn-sm btn-info">Edit</a>
                <a href="{{url('delete_post_'.$data->id)}}" class="btn btn-sm btn-danger">Delete</a>
       
            </div>
            @endforeach
            </div>
        </div>
</div>


@endsection