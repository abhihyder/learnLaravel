@extends('welcome')

@section('content')
    <div class="main_wrapper content_bg">
    <div class="wrapper cntnt_wrp">
            <div id="content">
                <a href="{{route('createCat')}}">Add Category</a>
            </div>
        </div>
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
                <form enctype="multipart/form-data" action="{{route('publishPost')}}" method="post">
                @csrf
                    <div><input type="text" placeholder="Title" name="title"></div>
                    <div><input type="text" placeholder="Details" name="details"></div>
                    <div><input type="file" name="img"></div>
                    <div><input class="btn btn-sm btn-success"  type="submit" value="Publish" name="publish"></div>
                </form>
            </div>
        </div>
    </div>
@endsection