@extends('welcome')

@section('content')
<div class="main_wrapper content_bg">
        <div class="wrapper cntnt_wrp">
            <div id="content">
                <a href="{{url('post/create')}}">Add Post</a>
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
                
                <div style="border-bottom: 1px solid black">
                    <a href="{{url('post/'.$data->id)}}" class="btn btn-sm btn-success">View</a>
                    <a href="{{url('post/'.$data->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>

                    <form action="{{url('post/'.$data->id)}}" method="post">
                    @csrf 
                    @method('DELETE')
                        <button class="btn btn-sm btn-danger" style="submit">Delete</button>
                    </form>
                </div>

       
            </div>
            @endforeach
            </div>
        </div>
</div>


@endsection