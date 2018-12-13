
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
                        <a href="{{route('crews.passportTravel',['id'=>$id,'parts'=>1])}}" class="btn btn-info span2 pass"  >Passport and Travel Information<i style="float:right; position:absolute;margin-top:2%;" class="icon-chevron-right icon-white"></i></a> 
                        <a href="{{route('crews.details',['id'=>$id,'parts'=>2])}}" class="btn btn-inverse span2 pass"    >Personal Details and Travel History</a>
                        <a href="{{route('crews.details',['id'=>$id,'parts'=>3])}}" class="btn btn-inverse span2 pass"    >Family Details</a>
                        <a href="{{route('crews.details',['id'=>$id,'parts'=>4])}}" class="btn btn-inverse span2 pass"    >Family and Friends in the UK</a>
                        <a href="{{route('crews.details',['id'=>$id,'parts'=>5])}}" class="btn btn-inverse span2 pass"    >Employment and Income</a>
                        <a href="{{route('crews.details',['id'=>$id,'parts'=>6])}}" class="btn btn-inverse span2 pass"    >Medical Treatment</a>
                        <a href="{{route('crews.details',['id'=>$id,'parts'=>7])}}" class="btn btn-inverse span2 pass"    >UK Organisation</a>
                        <br/>
                        <br/>
                        <button class="btn btn-success pass"   style="margin-top:10;" >Additional Information</button>
                        <br/>
                        <br/>
                        
                        <a href="{{route('crews.form',['id'=>$id])}}" class="btn btn-primary span2 pass"    >Back to main application</a>
                
                </div> <!-- /controls -->
            </div> <!-- /control-group -->
    </div>    
</div>  