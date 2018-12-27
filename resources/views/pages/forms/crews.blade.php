@extends('layouts.master_template')

@section('content')
  <div class="row">
    <div class="span12">

            <div class="widget ">
        
                <div class="widget-header">
                <i class="icon-table"></i>
                <h3>Form</h3>
            </div> <!-- /widget-header -->    
            <div class="widget-content">
                
                @include('layouts.navigation.main_navigation')
                {{-- {{$parts}} --}}
               
                
                <a href="{{route('crews.passportTravel',$id)}}" class="btn btn-primary " style="height:30%;width:30%;">Create a crew profile</a>				

                <br/>
                <br/>

                <div class="container">
                    <table class="table table-bordered span11">
                        <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    

  </div> <!-- /span8 -->

@endsection

