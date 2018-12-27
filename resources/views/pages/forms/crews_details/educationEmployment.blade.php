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

        <form  action="{{route('crews.educationEmploymentStore')}}" method="POST" id="edit-profile" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" value="{{$id}}" name="project_id">

            <fieldset>

                <div class="control-group">
                    <label class="control-label" >Role on this project</label>
                    <div class="controls">

                        <textarea type="text" rows="5" class="span6 " name="project_role" value="" > </textarea>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Company Name</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="company_name" value="" > <b class="error-text1">* </b>
                       
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Occupation in the company</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="company_position" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Company Address</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="company_address" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

            

                <div class="control-group">
                    <label class="control-label" >Company Phone</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="company_phone" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                

                <div class="control-group">
                    <label class="control-label" >Email</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="company_email" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Name Bank Guarantee</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="bank_guarantee_name" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                

                <div class="control-group">
                    <label class="control-label" >Bank Address</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="bank_guarantee_address" value="" > 

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
                        
                        <h3>Education and Military Recor</h3>
                        <hr/>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
              
                <div class="control-group">
                    <div class="controls">

                        <label class="" >Education Record</label>
                        
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
                        <label class="control-label" >Military Record</label>
                        <div class="controls">
    
                            <textarea  class="span6 " name="military_record" value="" > </textarea>
    
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

<hr/>

                <div class="control-group">
                    <label class="control-label" >Do you have saving account</label>
                    <div class="controls">
                    
                        <input type="radio" name="has_saving" value="yes"> Yes<br>
                        <input type="radio" name="has_saving" value="no"> No<br>

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
                    <label class="control-label" >How much living cost</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="living_cost" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
                
                <div class="control-group">
                    <label class="control-label" >How much Dependant cost</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="dependant_cost" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
                
                <div class="control-group">
                    <label class="control-label" >How much personal trip cost</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="personal_trip_cost" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
                
                <div class="control-group">
                    <label class="control-label" >Total trip </label>
                    <div class="controls">

                        <input type="text" class="span6 " name="total_trip_cost" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
                
                <div class="control-group">
                    <label class="control-label" >Ticket cost </label>
                    <div class="controls">

                        <input type="text" class="span6 " name="ticket_cost" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
                
                <div class="control-group">
                    <label class="control-label" >Accomodation cost </label>
                    <div class="controls">

                        <input type="text" class="span6 " name="accomodation_cost" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
                
                <div class="control-group">
                    <label class="control-label" >Trip Expense </label>
                    <div class="controls">

                        <input type="text" class="span6 " name="trip_expense" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    


                <div class="control-group">
                    <label class="control-label" >Do you have sponsor</label>
                    <div class="controls">
                    
                        <input type="radio" name="other_pays" value="yes"> Yes<br>
                        <input type="radio" name="other_pays" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                
                <div class="control-group">
                    <label class="control-label" >Name of sponsor </label>
                    <div class="controls">

                        <input type="text" class="span6 " name="payers_name" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
                
                <div class="control-group">
                    <label class="control-label" >Spending of sponsor </label>
                    <div class="controls">

                        <input type="text" class="span6 " name="payers_spend" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
    
    
                
                <div class="control-group">
                    <label class="control-label" > sponsor Notice</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="payers_explaination" value="" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
    
    
                
                <div class="control-group">
                    <label class="control-label" > Total </label>
                    <div class="controls">

                        <input type="text" class="span6 " name="total_cost_plus_payers" value="" > 

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

