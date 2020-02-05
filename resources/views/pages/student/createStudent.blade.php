@extends('welcome')

@section('content')
    <div class="main_wrapper content_bg">
    <div class="wrapper cntnt_wrp">

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
            
                <form  action="" method="post">
                @csrf
                    <div><input type="text" placeholder="First Name" name="firstName"></div>
                    <div><input type="text" placeholder="Last Name" name="lastName"></div>
                    <div><input type="email" placeholder="Email Address" name="email"></div>
                    <div><input class="btn btn-sm btn-success"  type="submit" value="Publish" name="publish"></div>
                </form>
            </div>
        </div>
    </div>
@endsection