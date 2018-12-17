<div class="tabbable card sticky-top" >
    <ul class="nav nav-tabs">
    
        {{-- {{dd(request()->route()->parameters)}} --}}
        {{-- {{url('/one/'.$id.'/form >><< ')}}
        {{Request::url() }} --}}
      <li class="{{(Request::url() == url('/one/'.$id.'/form'))?'active':null}}" ><a href="{{route('one.form',$id)}}" >Supporting Documents</a></li>
      <li class="{{(Request::url() == url('/crews/'.$id.'/form'))?'active':null}}" ><a href="{{route('crews.form',$id)}}" >Crew Details</a></li>
      {{-- <li class="{{(Request::url() == url('/two/'.$id.'/form'))?'active':null}}" ><a href="{{route('three.form',$id)}}" data-toggle="tab">form 3</a></li> --}}
      <li class="{{(Request::url() == url('/timetable/'.$id.'/form'))?'active':null}}" ><a href="{{route('timetable.form',$id)}}" >Timetable</a></li>
      
      {{-- <li  ><a href="#form4" data-toggle="tab">form 4</a></li>  --}}
      <li  ><a href="#form5" data-toggle="tab">form 5</a></li>
      <li  ><a href="#form6" data-toggle="tab">form 6</a></li>
      <li  ><a href="#form7" data-toggle="tab">form 7</a></li>
      <li  ><a href="#form8" data-toggle="tab">form 8</a></li>
      <li  ><a href="#form9" data-toggle="tab">form 9</a></li>
      <li  ><a href="#form10" data-toggle="tab">form 10</a></li>
      <li  ><a href="#form11" data-toggle="tab">Review</a></li>

    </ul>
</div>