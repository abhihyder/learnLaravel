@extends('welcome')

@section('content')
<div class="main_wrapper content_bg">

        <div class="wrapper cntnt_wrp">
            <div id="content">

            <div>
                
                <p>{{$sql->id}}</p>
                <p>{{$sql->titles}}</p>
                <p>{{$sql->details}}</p>
                <p>{{$sql->created_at}}</p>

       
            </div>
            </div>
        </div>
</div>


@endsection