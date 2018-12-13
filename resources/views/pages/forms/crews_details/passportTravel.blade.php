@extends('layouts.master_template')

@section('content')
  <div class="row">
    
<div class="span3" id="added" style="display:none;">
    <div class="widget " ></div>

</div>

    @include('pages/forms/crews_details/parts/sidebar_navigation')        
        
    <div class="span9">

      <div class="widget ">

        <div class="widget-header">
          <i class="icon-pencil"></i>
          <h3>Form</h3>
      </div> <!-- /widget-header -->

    
      <div class="widget-content">

    
      <div class="tab-pane " id="form2"><!--##2 -->

        <form  action="{{route('crews.PassportTravelstore')}}" method="POST" id="edit-profile" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" value="{{$id}}" name="project_id">

            <fieldset>

                <div class="control-group">
                    <label class="control-label" >Full Name</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="full_name" value="Example" required> <b class="error-text1">* </b>
                       
                        <p class="help-block">Full Name must match the name on your passport.</p>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Alias/ Other Names</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="alias" value="Example" required> 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" > Date of birth</label>
                    <div class="controls">
                        <input type="text" class="span4" name="birth_date" value="" required><b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Place of birth</label>
                    <div class="controls">
                        <input type="text" class="span6" name="birth_place" value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Nationality</label>
                    <div class="controls">
                        <input type="text" class="span6" name="nationality" value="" required><b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Other Nationalities </label> 
                    <div class="controls">
                        <textarea type="text" class="span6" name="nationality2" rows="2"></textarea>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->



                <div class="control-group">
                    <label class="control-label" >Passport Number</label>
                    <div class="controls">
                        <input type="text" class="span6" name="passport_number" value="" required><b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Place of Issue</label>
                    <div class="controls">
                        <input type="text" class="span6" name="passport_issued_place" value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Date of Issue</label>
                    <div class="controls">
                        <input type="text" class="span4" name="passport_issued_date" value="" required><b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Date of Expiry</label>
                    <div class="controls">
                        <input type="text" class="span4" name="passport_expiry_date" value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Authority</label>
                    <div class="controls">
                        <input type="text" class="span6" name="passport_authority" value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Current Location </label>
                    <div class="controls">
                        <input type="text" class="span6" name="current_location"  value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Are you a national of the country in which you are applying?</label>
                    <div class="controls">
                        {{-- <input type="text" class="span6" name="nationality_on_current_location"  value="" > --}}
                    
                        <input type="radio" name="nationality_on_current_location" value="yes"> Yes<br>
                        <input type="radio" name="nationality_on_current_location" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                
                <div class="control-group">
                    <label class="control-label" >Is this your first passport </label>
                    <div class="controls">

                        <input type="radio" name="is_first_passport" value="yes"> Yes<br>
                        <input type="radio" name="is_first_passport" value="no"> No<br>
                        
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                
                <div class="control-group">
                    <label class="control-label" ></label>
                    <div class="controls">

                    <h3><b> Travel Infromation</b></h3>
                    <hr/>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Date of planned arrival in Indonesia</label>
                    <div class="controls">
                        <input type="text" class="span3" name="proposed_visit_date" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Place/ city of planned arrival in Indonesia</label>
                    <div class="controls">
                        <input type="text" class="span6" name="proposed_visit_place" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

            
                <div class="control-group">
                    <label class="control-label" > How long do you intend to stay in the UK?</label>
                    <div class="controls">
                        <input type="text" class="span3" name="duration_stay" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                
                <div class="control-group">
                    <label class="control-label" >Accomodation name</label>
                    <div class="controls">
                        <input type="text" class="span6" name="accomodation_name"  value="">
                        <p class="help-block">Name of Person/ Hotel</p>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Accomodation address </label>
                    <div class="controls">
                        <input type="text" class="span6" name="accomodation_address"  value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                        <label class="control-label" >Accomodation phone </label>
                        <div class="controls">
                            <input type="text" class="span6" name="accomodation_phone" value="">
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Accomodation email </label>
                    <div class="controls">
                        <input type="text" class="span6" name="accomodation_email" value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                
                <div class="control-group">
                    <label class="control-label" ></label>
                    <div class="controls">

                    <h3><b> Emergency Contact</b></h3>
                    <hr/>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Emergency Contact</label>
                    <div class="controls">
                        <input type="text" class="span6" name="emergency_contact_name"  value="">
                        <p class="help-block">Contact person in case of emergency</p>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Address </label>
                    <div class="controls">
                        <input type="text" class="span6" name="emergency_contact_address"  value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                        <label class="control-label" >Phone Number </label>
                        <div class="controls">
                            <input type="text" class="span6" name="emergency_contact_phone" value="">
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Email </label>
                    <div class="controls">
                        <input type="text" class="span6" name="emergency_contact_email" value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <input type="hidden" value="1" name="status">
                <div class="form-actions">
                    <input type="submit" class="btn btn-primary" value="Save and Next">
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

