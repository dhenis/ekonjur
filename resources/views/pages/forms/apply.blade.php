@extends('layouts.master_template')

@section('content')
  <div class="row">

    <div class="span12">

      <div class="widget ">

        <div class="widget-header">
          <i class="icon-user"></i>
          <h3>Apply for new application </h3>
      </div> <!-- /widget-header -->

    <div class="widget-content">
    <h2><b>Application Details</b></h2>
      <hr/>


      @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          
            <li>{{$error}}</li>    
          
          @endforeach
        </ul>

      @endif


      <div class="tab-pane " id="form4">
								
      <form action="{{route('apply.store')}}" method="POST" id="edit-profile" class="form-horizontal">
        {{ csrf_field() }}
        <fieldset>


        <div class="control-group">											
          <label class="control-label "  > Production  Title </label>
          <div class="controls">
            
            <input type="text" class="span9"  name="project_title" value="" required>
            
          </div> <!-- /controls -->				
         			
            
        </div> <!-- /control-group -->

        <div class="control-group">											
          <label class="control-label"> Production Purpose </label>
          <div class="controls">
            <textarea type="text" class="span9" name="purpose" rows="4"  value="" required>

            </textarea>
            <p class="help-block  "><b> Production Purpose must be explained profoundly</b></p>
            {{-- <label class="control-label"  > Production Purpose </label> --}}
          </div> <!-- /controls -->				
          
        </div> <!-- /control-group -->
        
        <div class="control-group">											
          <label class="control-label" >Number of Crew traveling to Indonesia</label>
          <div class="controls">
            <input type="number" class="span2" name="crew_number"  value="" required />
            
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->
        
        <div class="control-group">											
          <label class="control-label">Head/Person in charge of the production</label>
          <div class="controls">
            <input type="text" class="span9" name="head" value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->
          
        <div class="control-group">											
          <label class="control-label"  >Address </label>
          <div class="controls">
            <input type="text" class="span9" name="head_address" value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->
        
        <div class="control-group">											
            <label class="control-label"  >Phone Number </label>
            <div class="controls">
              <input type="text" class="span9" name="head_phone"   value="">
            </div> <!-- /controls -->				
          </div> <!-- /control-group -->
          
        <div class="control-group">											
          <label class="control-label"  >Email </label>
          <div class="controls">
            <input type="email" class="span9" name="head_email"   value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->


        <div class="control-group">											
          <label class="control-label"  >Date & Broadcasting media production </label>

          <div class="controls">
            <input type="text" class="span9"  name="production_date"   value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->
        
        {{-- <div class="control-group">											
          <label class="control-label"  >Address of accomodation in Indonesia </label>
          <div class="controls">
            <input type="text" class=" span9" name="accomodation"  value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group --> --}}

        <br/>
        <h3>Fixer </h3>
        <hr/>

        <div class="control-group">											
          <label class="control-label"  >Name & company of fixer in indonesia</label>
          
          <div class="controls">
            <input type="text" class="span9" name="fixer"  value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->

        <div class="control-group">											
          <label class="control-label" >Address </label>
          <div class="controls">
            <input type="text" class=" span9"  name="fixer_address"  value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->
        
        <div class="control-group">											
            <label class="control-label"  >Phone Number </label>
            <div class="controls">
              <input type="text" class=" span9" name="fixer_phone"  value="">
            </div> <!-- /controls -->				
          </div> <!-- /control-group -->
          
        <div class="control-group">											
          <label class="control-label"  >Email </label>
          <div class="controls">
            <input type="email" class=" span9" name="fixer_email"  value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->
        
        <br/>
        <h3> Indonesian counterpart </h3>
        <hr/>

        <div class="control-group">											
          <label class="control-label" >Name & Institiution of Indonesian counterpart</label>
          
          <div class="controls"> 
            <input type="text" class=" span9"  name="counterpart" value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->

        <div class="control-group">											
          <label class="control-label"  >Address </label>
          <div class="controls">
            <input type="text" class=" span9"  name="counterpart_address" value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->
        
        <div class="control-group">											
            <label class="control-label"  >Phone Number </label>
            <div class="controls">
              <input type="text" class=" span9" name="counterpart_phone"  value="">
            </div> <!-- /controls -->				
          </div> <!-- /control-group -->
          
        <div class="control-group">											
          <label class="control-label"  >Email </label>
          <div class="controls">
            <input type="email" class=" span9" name="counterpart_email"  value="">
          </div> <!-- /controls -->				
        </div> <!-- /control-group -->

        <div class="form-actions">
        <input type="submit" class="btn btn-primary" href="{{route('apply.create')}}" value="Create Application"/> 
          {{-- <button type="submit" class="btn btn-primary">Save and Next</button>  --}}
          <!--<button class="btn">Cancel</button>-->
        </div> <!-- /form-actions -->


        </fieldset>
      </form>
    </div>
    </div> <!-- /widget-content -->

  </div> <!-- /widget -->

  </div> <!-- /span8 -->




  </div> <!-- /row -->

@endsection

