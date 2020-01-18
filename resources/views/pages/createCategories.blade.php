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
                <form action="{{route('publishCat')}}" method="post">
                @csrf
                    <div><input type="text" placeholder="Name" name="name"></div>
                    <div><input type="text" placeholder="Slug" name="slug"></div>
                    <div><input class="btn btn-sm btn-success"  type="submit" value="Create" name="create"></div>
                </form>
            </div>
        </div>
    </div>
@endsection