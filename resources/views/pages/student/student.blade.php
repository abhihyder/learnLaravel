@extends('welcome')

@section('content')
<div class="main_wrapper content_bg">
        <div class="wrapper cntnt_wrp">
            <div id="content">
                <a href="{{url('student/create')}}">Add Student</a>
            </div>
        </div>
        <div class="wrapper cntnt_wrp">
            <div id="content">

            <!--Read data by loop-->
           
            <div>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                    @foreach($student as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->firstName}}</td>
                        <td>{{$data->lastName}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success">View</a>
                            <a href="{{url('student/'.$data->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
               

                

                
       
            </div>
            
            </div>
        </div>
</div>


@endsection