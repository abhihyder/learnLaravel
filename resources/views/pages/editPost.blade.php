@extends('welcome')

@section('content')
    <div class="main_wrapper content_bg">
        <div class="wrapper cntnt_wrp">
            <div id="content">
                
                <!-- If any error-->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{url('updatePost'.$sql->id)}}" method="post">
                @csrf
                    <div><input type="text" value="{{$sql->titles}}" name="title"></div>
                    <div><input type="text" value="{{$sql->details}}" name="details"></div>
                    <div><input class="btn btn-sm btn-success" type="submit" value="Update" name="publish"><a class="btn btn-sm btn-danger" href="{{url('blog')}}">Cancel</a></div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection