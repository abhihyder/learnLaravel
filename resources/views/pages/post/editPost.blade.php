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
                <form action="{{url('post/'.$sql->id)}}" method="post">
                @csrf
                @method('PUT')   
                    <div><input type="text" value="{{$sql->titles}}" name="title"></div>
                    <div><input type="text" value="{{$sql->details}}" name="details"></div>
                    <div> Old Image: <img src="{{url($sql->img)}}" style="width: 300px; height: auto" alt=""></div>
                    <div> Insert new image: 
                        <input type="file" name="img">
                    </div>
                    <div> Post Category: 
                        <select name="cat_id">
                        @foreach($sql2 as $data)
                            <option value="{{$data->id}}"<?php if($data->id == $sql->cat_id) echo 'selected' ; ?> >
                            {{$data->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div><input class="btn btn-sm btn-success" type="submit" value="Update" name="publish"><a class="btn btn-sm btn-danger" href="{{url('post')}}">Cancel</a></div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection