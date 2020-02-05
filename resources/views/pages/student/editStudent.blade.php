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
                <form action="{{url('student/'.$student->id)}}" method="post">
                @csrf
                @method('PUT')   
                    <div><input type="text" value="{{$student->firstName}}" name="firstName"></div>
                    <div><input type="text" value="{{$student->lastName}}" name="lastName"></div>
                    <div><input type="email" value="{{$student->email}}" name="email"></div>
                    
                   
                    <div><input class="btn btn-sm btn-success" type="submit" value="Update" name="update"><a class="btn btn-sm btn-info" href="{{url('student')}}">Cancel</a></div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection