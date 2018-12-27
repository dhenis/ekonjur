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

        <form  action="{{route('crews.PersonalDetailHistoryStore')}}" method="POST" id="edit-profile" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" value="{{$id}}" name="project_id">

            <fieldset>

                <div class="control-group">
                    <label class="control-label" >Full Address</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="address" value="" required> <b class="error-text1">* </b>
                       
                        <p class="help-block">What is your residential address and contact details?</p>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Phone Number</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="phone" value="" required> 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Email</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="email" value="" required> 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

               
                <div class="control-group">
                        <label class="control-label" >Another contact</label>
                        <div class="controls">
                            {{-- <input type="text" class="span6" name="nationality_on_current_location"  value="" > --}}
                        
                            <input type="radio" name="nationality_on_current_location" value="yes"> Yes<br>
                            <input type="radio" name="nationality_on_current_location" value="no"> No<br>

                            <p class="help-block">Are your preferred contact details different from the contact details already provided above?	</p>
             
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
                     
    
                <div class="control-group">
                    <label class="control-label" >Full Address</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="secondary_address" value="" > <b class="error-text1">* </b>
                        
                        <p class="help-block">What is your residential address and contact details?</p>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
    
                <div class="control-group">
                    <label class="control-label" >Phone Number</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="secondary_phone" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Email</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="secondary_email" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >How long have you live at this address?</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="address_duration" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                
                {{-- 
                    <div class="control-group">
                        <label class="control-label" >Are you a national of the country in which you are applying?</label>
                        <div class="controls">
                        
                            <input type="radio" name="nationality_on_current_location" value="yes"> Yes<br>
                            <input type="radio" name="nationality_on_current_location" value="no"> No<br>
    
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
                --}}


                
                <div class="control-group">
    
                    <div class="controls">
                        
                        <h3>Travel Information</h3>
                        <hr/>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
              
                <div class="control-group">
                    <label class="control-label" >Have you ever travelled to Indonesia in the last 10 years?</label>
                    <div class="controls">
                    
                        <input type="radio" name="has_visited" value="yes"> Yes<br>
                        <input type="radio" name="has_visited" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
                    <div class="controls span7">
                            <div class="">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Date Of Arrival </th>
                                            <th>Deparature</th>
                                            <th>Purpose</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                            <a href="javascript:;" class="btn " >Add</a>
                            <hr/>
                            </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    


                
                <div class="control-group">
                    <label class="control-label" > Have you been refused entry to the Indonesia in the last 10 years
                        (for example at a Indonesian airport or seaport)?</label>
                    <div class="controls">
                    
                        <input type="radio" name="refused_entry" value="yes"> Yes<br>
                        <input type="radio" name="refused_entry" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
                    <div class="controls span7">
                            <div class="">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Date Of Refusal </th>
                                            <th>Port or airport</th>
                                            <th>Reason for refusal</th>
                                            <th>Reference number (if applicable)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                        </tbody>
                                    </table>
                            <a href="javascript:;" class="btn " >Add</a>
                            <hr/>
                            </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    




                <div class="control-group">
                    <label class="control-label" > Have you ever travelled to Indonesia in the last 10 years?</label>
                    <div class="controls">
                    
                        <input type="radio" name="refused_entry" value="yes"> Yes<br>
                        <input type="radio" name="refused_entry" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
                    <div class="controls span7">
                            <div class="">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Date Of Refusal </th>
                                            <th>Port or airport</th>
                                            <th>Reason for refusal</th>
                                            <th>Reference number (if applicable)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                        </tbody>
                                    </table>
                            <a href="javascript:;" class="btn " >Add</a>
                            <hr/>
                            </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    

                <div class="control-group">
                    <label class="control-label" > Have you been refused a visa for any country including Indonesia in the last 10 years?</label>
                    <div class="controls">
                    
                        <input type="radio" name="refused_visa" value="yes"> Yes<br>
                        <input type="radio" name="refused_visa" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
                    <div class="controls span7">
                            <div class="">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Date Of Refusal </th>
                                            <th>Port or airport</th>
                                            <th>Reason for refusal</th>
                                            <th>Reference number (if applicable)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                        </tbody>
                                    </table>
                            <a href="javascript:;" class="btn " >Add</a>
                            <hr/>
                            </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    


                
                <div class="control-group">
                    <label class="control-label" > Have you been deported, removed or otherwise required to leave any country including Indonesia in the last 10 years?</label>
                    <div class="controls">
                    
                        <input type="radio" name="deported" value="yes"> Yes<br>
                        <input type="radio" name="deported" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
                    <div class="controls span7">
                            <div class="">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Date Of Refusal </th>
                                            <th>Port or airport</th>
                                            <th>Reason for refusal</th>
                                            <th>Reference number (if applicable)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                        </tbody>
                                    </table>
                            <a href="javascript:;" class="btn " >Add</a>
                            <hr/>
                            </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    




                <div class="control-group">
                    <label class="control-label" > Have you been deported, removed or otherwise required to leave any country including Indonesia in the last 10 years?</label>
                    <div class="controls">
                    
                        <input type="radio" name="exclusion" value="yes"> Yes<br>
                        <input type="radio" name="exclusion" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
                    <div class="controls span7">
                            <div class="">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Date Of Refusal </th>
                                            <th>Port or airport</th>
                                            <th>Reason for refusal</th>
                                            <th>Reference number (if applicable)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                        </tbody>
                                    </table>
                            <a href="javascript:;" class="btn " >Add</a>
                            <hr/>
                            </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    




                <div class="control-group">
                    <label class="control-label" >Have you ever travelled outside your country of residence, excluding the Indonesia, in the last 10 years?</label>
                    <div class="controls">
                    
                        <input type="radio" name="travel_abroad" value="yes"> Yes<br>
                        <input type="radio" name="travel_abroad" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
                    <div class="controls span7">
                            <div class="">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Date Of Refusal </th>
                                            <th>Port or airport</th>
                                            <th>Reason for refusal</th>
                                            <th>Reference number (if applicable)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                        </tbody>
                                    </table>
                            <a href="javascript:;" class="btn " >Add</a>
                            <hr/>
                            </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    

                



                <div class="control-group">
                    <label class="control-label" >Have you ever been convicted of any criminal offence in Indonesia or any country?</label>
                    <div class="controls">
                    
                        <input type="radio" name="criminal_record" value="yes"> Yes<br>
                        <input type="radio" name="criminal_record" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
           
                         <div class="controls">
                        
                                <textarea class="" name="criminal_record_form" rows="4" style="width:100%;" > </textarea>
                        
                                <br>
                         
                        </div> <!-- /controls -->
                  
                    
                </div> <!-- /control-group -->
    


                <div class="control-group">
                    {{-- <label class="control-label" >Have you been arrested and charged with any offence in any country and are awaiting, or are currently on trial?</label> --}}
                    <div class="controls">
                        <label >Have you been arrested and charged with any offence in any country and are awaiting, or are currently on trial?</label>
                    
                        <input type="radio" name="arrested_record" value="yes"> Yes<br>
                        <input type="radio" name="arrested_record" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
           
                         <div class="controls">
                                <p class="help-block">Please enter details:</p>
                                <textarea class="" name="arrested_record_form" rows="4" style="width:100%;" > </textarea>
                        
                                <br>
                         
                        </div> <!-- /controls -->
                  
                    
                </div> <!-- /control-group -->
    


                <div class="control-group">
                    <label class="control-label" >Have you ever been involved in, supported or encouraged terrorist activities in any country? Have you ever been a member of, or given support to, an organisation that has been connected with terrorism?</label>
                    <div class="controls">
                    
                        <input type="radio" name="supporting_terorrism" value="yes"> Yes<br>
                        <input type="radio" name="supporting_terorrism" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
           
                         <div class="controls">
                        
                                <textarea class="" name="supporting_terorrism_form" rows="4" style="width:100%;" > </textarea>
                        
                                <br>
                         
                        </div> <!-- /controls -->    
                    
                </div> <!-- /control-group -->
    


                <div class="control-group">
                    <label class="control-label" >Have you ever, by any means or medium, expressed views that justify or glorify terrorist violence, or that may encourage others to commit acts of terrorism or other serious criminal acts?</label>
                    <div class="controls">
                    
                        <input type="radio" name="medium_terorrism" value="yes"> Yes<br>
                        <input type="radio" name="medium_terorrism" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
           
                         <div class="controls">
                        
                                <textarea class="" name="medium_terorrism_form" rows="4" style="width:100%;" > </textarea>
                        
                                <br>
                         
                        </div> <!-- /controls -->    
                    
                </div> <!-- /control-group -->
    

                <div class="control-group">
                    <label class="control-label" >In times of either peace or war have you ever been involved in, or suspected of involvement in, war crimes, crimes against humanity or genocide?</label>
                    <div class="controls">
                    
                        <input type="radio" name="supporting_warcrimes" value="yes"> Yes<br>
                        <input type="radio" name="supporting_warcrimes" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
           
                         <div class="controls">
                        
                                <textarea class="" name="supporting_warcrimes_form" rows="4" style="width:100%;" > </textarea>
                        
                                <br>
                         
                        </div> <!-- /controls -->
                   
                </div> <!-- /control-group -->
    

                <div class="control-group">
                    <label class="control-label" >Have you engaged in any other activities that might indicate that you may not be admitted to the UK?</label>
                    <div class="controls">
                    
                        <input type="radio" name="maybe_rejected" value="yes"> Yes<br>
                        <input type="radio" name="maybe_rejected" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
           
                         <div class="controls">
                        
                                <textarea class="" name="maybe_rejected_form" rows="4" style="width:100%;" > </textarea>
                        
                                <br>
                         
                        </div> <!-- /controls -->
                   
                </div> <!-- /control-group -->
    

                <div class="control-group">
                    <label class="control-label" >Have you received any other penalty in relation to a criminal offence; for example a caution, reprimand, warning, or similar penalties in the UK or any other country?</label>
                    <div class="controls">
                    
                        <input type="radio" name="penalty_record" value="yes"> Yes<br>
                        <input type="radio" name="penalty_record" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">    
           
                         <div class="controls">
                        
                                <textarea placeholder="Please Enter Details" class="" name="penalty_record_form" rows="4" style="width:100%;" > </textarea>
                        
                                <br>
                         
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

