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
                
               
                
            <a href="{{route('timetable.modalForm',$project_id)}}" class="btn btn-primary modal-show" style="height:30%;width:30%;">Create a crew profile</a>				

                <br/>
                <br/>

                <div class="container span11" >
                    {{-- class="table table-bordered span11" --}}
                    <table id="datatable" class="table table-hover span11"  >
                        <thead>
                            <tr>
                                {{-- <th>No</th> --}}
                                <th>Date</th>
                                <th>Location</th>
                                <th>Activity</th>      
                                <th></th>      
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                  
                    </table>
                </div>

            </div>
        </div>
    </div>


    

  </div> <!-- /span8 -->

@endsection




@push('scripts')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('timetable.data',['project_id'=>$project_id]) }}",
            columns: [
                // {data: 'DT_Row_Index', name: 'id'},
                {data: 'date', name: 'date'},
                {data: 'location', name: 'location'},
                {data: 'activity', name: 'activity'},
                {data: 'action', name: 'action'}
            ]
        });
    </script>
@endpush

