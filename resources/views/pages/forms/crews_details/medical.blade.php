@extends('layouts.master_template')

@section('content')
  <div class="row">
    
<div class="span3" id="added" style="display:none;">
    <div class="widget " ></div>

</div>
    
    @include('layouts.navigation.sidebar_navigation')

    {{-- @include('pages/forms/crews_details/parts/sidebar_navigation')         --}}
        
    <div class="span9">

      <div class="widget ">

        <div class="widget-header">
          <i class="icon-pencil"></i>
          <h3>Form</h3>
      </div> <!-- /widget-header -->

    
      <div class="widget-content">

    
      <div class="tab-pane " id="form2">

        <form  action="{{route('crews.medicalStore')}}" method="POST" id="edit-profile" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" value="{{$id}}" name="project_id">

            <fieldset>
            
                <div class="control-group">
                    <label class="control-label" >Have you ever received medical treatment in the UK?</label>
                    <div class="controls">
                    
                        <input type="radio" name="has_medical" value="yes"> Yes<br>
                        <input type="radio" name="has_medical" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
            
            
                <div class="control-group">
                    <label class="control-label" >Did you have to pay for the treatment?</label>
                    <div class="controls">
                    
                        <input type="radio" name="pay_treatment" value="yes"> Yes<br>
                        <input type="radio" name="pay_treatment" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
            

                <div class="control-group">
                    <label class="control-label" >Organisation / Hospital</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="treatment_organisation" value="" > <b class="error-text1">* </b>
                       
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Address</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="treatment_address" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

            

                <div class="control-group">
                    <label class="control-label" >Phone</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="treatment_phone" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                

                <div class="control-group">
                    <label class="control-label" >Email</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="treatment_email" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Treatment start date</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="treatment_start_date" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                

                <div class="control-group">
                    <label class="control-label" >Treatment end date</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="treatment_end_date" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                
                
                
                <input type="hidden" value="1" name="status">
                <div class="form-actions">
                    <input type="submit" class="btn btn-primary" value="Complete">
                </div> <!-- /form-actions -->
            </fieldset>
        </form>

    </div>
      
    </div> <!-- /widget-content -->

  </div> <!-- /widget -->

  <div class="span3"></div>


  </div> <!-- /row -->

  </div> <!-- /span8 -->

@endsection

