<div class="span3 " id="navbar1" >
    <div class="widget "  >

        <div class="widget-header ">
        <i class="icon-indent-right"></i>
        <h3>Navigation</h3>
        </div> <!-- /widget-header -->

            <div class="control-group widget-content" style="    ">
                    
                <div class="controls " >
                    @if (isset($parts))
                    parts: {{$parts}}<br/>
                    @endif
                    
                    @if (isset($id))
                        id: {{$id}}
                    @endif
                    
                    @if (isset($crew))
                    crew: {{$crew}}
                    @endif
                    <?php $active = ''; ?>
                    {{-- /crews/1/details/1/parts --}}
                        @if(Request::url() == url('/crews/'.$id.'/details/1/parts'))         

                            <a href="{{route('crews.passportTravel',['id'=>$id])}}" class="btn btn-info span2 pass"  >Passport and Travel Information <i style="float:right; position:absolute;margin-top:2%;" class="icon-chevron-right icon-white"></i></a> 
    
                        @else
                            <a href="{{route('crews.passportTravel',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Passport and Travel Information</a>
  
                        @endif

                        @if(Request::url() == url('/crews/'.$id.'/details/2/parts'))         
    
                            <a href="{{route('crews.personalDetailHistory',['id'=>$id])}}" class="btn btn-info span2 pass"    >Personal Details and Travel History  <i style="float:right; position:absolute;margin-top:2%;" class="icon-chevron-right icon-white"></i></a>

                        @else
    
                            <a href="{{route('crews.personalDetailHistory',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Personal Details and Travel History</a>

                        @endif


                        @if(Request::url() == url('/crews/'.$id.'/details/3/parts'))         
    
                            <a href="{{route('crews.familyFriends',['id'=>$id])}}" class="btn btn-info span2 pass"    >Family and Friends Details  <i style="float:right; position:absolute;margin-top:2%;" class="icon-chevron-right icon-white"></i></a>
                 
                        @else
                 
                           <a href="{{route('crews.familyFriends',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Family and Friends Details</a>
                 
                        @endif

                        @if(Request::url() == url('/crews/'.$id.'/details/4/parts'))         

                            <a href="{{route('crews.educationEmployment',['id'=>$id])}}" class="btn btn-info span2 pass"    >Employment and Income <i style="float:right; position:absolute;margin-top:2%;" class="icon-chevron-right icon-white"></i></a>
                        
                        @else
                 
                            <a href="{{route('crews.educationEmployment',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Employment and Income</a>
                        
                        @endif


                        @if(Request::url() == url('/crews/'.$id.'/details/5/parts'))         

                            <a href="{{route('crews.medical',['id'=>$id])}}" class="btn btn-info span2 pass"    >Medical Treatment  <i style="float:right; position:absolute;margin-top:2%;" class="icon-chevron-right icon-white"></i></a>
                        
                        @else
                 
                            <a href="{{route('crews.medical',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Medical Treatment</a>
                        
                        @endif
                        
                        {{-- 

                        <a href="{{route('crews.personalDetailHistory',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Personal Details and Travel History</a>
                        <a href="{{route('crews.familyFriends',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Family and Friends Details</a>
                        <a href="{{route('crews.educationEmployment',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Employment and Income</a>
                        <a href="{{route('crews.medical',['id'=>$id])}}" class="btn btn-inverse span2 pass"    >Medical Treatment</a>
                        {{-- <br/>
                        <br/>
                        <button class="btn btn-success pass"   style="margin-top:10;" >Additional Information</button>
                        <br/>
                        <br/>
                        --}}
                        <a href="{{route('crews.form',['id'=>$id])}}" class="btn btn-warning span2 pass"  style="margin-top:10%;"  >Back to main application</a>
                
                </div> <!-- /controls -->
            </div> <!-- /control-group -->
    </div>    
</div>  

@push('sidebar')
<script> 
    window.onscroll = function() {myFunction()};
  
    var navbar = document.getElementById("navbar1");
    var sticky = navbar.offsetTop;
  
      // adding
      var added = document.getElementById("added");
      
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
        document.getElementById("added").style.display = "block";
      } else {
        navbar.classList.remove("sticky");
        document.getElementById("added").style.display = "none";
      }
    }
  </script>

  
@endpush
