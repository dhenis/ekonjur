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

        <form  action="{{route('crews.store')}}" method="POST" id="edit-profile" class="form-horizontal">
            
            <fieldset>

                <div class="control-group">
                    <label class="control-label" >Full Name</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="full_name" value="Example" required> <b class="error-text1">* </b>
                        {{ csrf_field() }}

                        <input type="hidden" value="{{$id}}" name="project_id">
                       
                        <p class="help-block">Full Name must match the name on your passport.</p>
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
                        <input type="text" class="span6" name="nationality2" value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->



                <div class="control-group">
                    <label class="control-label" >Password Number</label>
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
                    <label class="control-label" >Validity</label>
                    <div class="controls">
                        <input type="text" class="span4" name="validity" value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Authority</label>
                    <div class="controls">
                        <input type="text" class="span4" name="passport_authority" value="" required> <b class="error-text1">* </b>
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
                        <input type="text" class="span6" name="nationality_on_current_location"  value="" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                
                {{-- <div class="control-group">
                    <label class="control-label" >Current Location </label>
                    <div class="controls">

                        <input type="radio" name="is_first_password" value="yes"> Male<br>
                        <input type="radio" name="is_first_password" value="no"> Female<br>
                        
                    </div> <!-- /controls -->
                </div> <!-- /control-group --> --}}

                <div class="control-group">
                    <label class="control-label">Address </label>
                    <div class="controls">
                        <input type="text" class="span6" name="address"  value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                        <label class="control-label" >Phone Number </label>
                        <div class="controls">
                            <input type="text" class="span6" name="phone" value="" required> <b class="error-text1">* </b>
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Email </label>
                    <div class="controls">
                        <input type="text" class="span6" name="email" value="" required><b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                        <label class="control-label" >Martial Status</label>
                        <div class="controls">
                            <input type="text" class="span6" name="martial_status" value="" required><b class="error-text1">* </b>
                        </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                        <label class="control-label" >Spouse Name</label>
                        <div class="controls">
                            <input type="text" class="span6" name="spouse_name" value="">
                        </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                        <label class="control-label" >Military Record</label>
                        <div class="controls">
                            <textarea type="text" class="span6" rows="4" name="military_record" value="">
                            </textarea>
                        </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                        <label class="control-label" >Education </label>
                        <div class="controls">
                            <textarea type="text" class="span6" name="education" value="">
                                </textarea>
                        </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Role in the project </label>
                    <div class="controls">
                            <input type="text" class="span6" rows="4" name="project_role" value="">
                                
                    </div> <!-- /controls -->
            </div> <!-- /control-group -->

                <div class="control-group">
                        <label class="control-label" >Employment Record </label>
                        <div class="controls">
                                <textarea type="text" class="span6" name="employment_record" rows="4"   value="">
                                    </textarea>
                        </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Date & Place of Previous Journalistic visit to Indonesia</label>
                    <div class="controls">
                        <input type="text" class="span3" name="previous_visit" value="" placeholder="city/district">
                        <input type="text" class="span3" name="previous_visit_date" placeholder="date">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" for="email">Proposed Date & Place of Journalistic visit to Indonesia</label>
                    <div class="controls">
                        <input type="text" class="span3" name="proposed_visit" value="" placeholder="city/district">
                        <input type="text" class="span3" name="proposed_visit_date" placeholder="date">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                

                <div class="control-group">
                    <label class="control-label" ></label>
                    <div class="controls">

                        <h3><b> Company details</b></h3>
                        <hr/>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                
                
                <div class="control-group">
                    <label class="control-label" >Company Name </label>
                    <div class="controls">
                            <input type="text" class="span6" name="company_name"    value="">
                                
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Position within the company </label>
                    <div class="controls">
                            <input type="text" class="span6" name="position" value="">

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Company Address</label>
                    <div class="controls">
                            <input type="text" class="span6" name="company_address" value="">
                                
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Company Phone Number</label>
                    <div class="controls">
                            <input type="text" class="span6" name="company_phone" value="">
                                
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Company Email</label>
                    <div class="controls">
                            <input type="text" class="span6" name="company_email" value="">
                                
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Bank Name</label>
                    <div class="controls">
                            <input type="text" class="span6" name="bank_name" value="">
                                
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Bank Address</label>
                    <div class="controls">
                            <input type="text" class="span6" name="bank_address" value="">
                                
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

