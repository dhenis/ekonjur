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

    
      <div class="tab-pane " id="form2">

        <form  action="{{route('crews.familyFriendsStore')}}" method="POST" id="edit-profile" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" value="{{$id}}" name="project_id">

            <fieldset>

                <div class="control-group">
                    <label class="control-label" >Marital Status</label>
                    <div class="controls">
                        <select class="span6"  name="marital_status">
                            <option selected value="Single">Single</option>
                            <option value="Married / Civil Partner">Married / Civil Partner</option>
                            <option value="Unmarried Partner">Unmarried Partner</option>
                            <option value="Fiancée / Proposed Civil Partner">Fiancée / Proposed Civil Partner</option>
                            <option value="Divorced / Dissolved Partnership">Divorced / Dissolved Partnership</option>
                            <option value="Separated">Separated</option>
                            <option value="Widowed / Surviving Civil Partner">Widowed / Surviving Civil Partner</option>
                        </select>
                        
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Spuse Name</label>
                    <div class="controls">

                        <input type="text" class="span6 " name="spouse_name" > 

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" > Spouse Nationality</label>
                    <div class="controls">
                        <input type="text" class="span4" name="spouse_nationality" value="" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" >Date of birth</label>
                    <div class="controls">
                        <input type="text" class="span6" name="spouse_birth" value="" required> <b class="error-text1">* </b>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                

                <div class="control-group">
                    <label class="control-label" >Does your spouse / partner currently live with you?</label>
                    <div class="controls">
                        {{-- <input type="text" class="span6" name="nationality_on_current_location"  value="" > --}}
                    
                        <input type="radio" name="spouse_living_together" value="yes"> Yes<br>
                        <input type="radio" name="spouse_living_together" value="no"> No<br>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                
                
                

                
                <div class="control-group">
                    <label class="control-label" ></label>
                    <div class="controls">

                    <h3><b>Father</b></h3>
                    <hr/>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Father Fullname </label>
                    <div class="controls">
                        <input type="text" class="span3" name="father_name" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" >Father Nationality</label>
                    <div class="controls">
                        <input type="text" class="span6" name="father_nationality" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

            
                <div class="control-group">
                    <label class="control-label" > Date of birth</label>
                    <div class="controls">
                        <input type="text" class="span3" name="father_birth_date" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                
                <div class="control-group">
                    <label class="control-label" >Place of birth</label>
                    <div class="controls">
                        <input type="text" class="span6" name="father_birth_place"  value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                
                <div class="control-group">
                        <label class="control-label" ></label>
                        <div class="controls">
    
                        <h3><b>Mother</b></h3>
                        <hr/>
    
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
    
    
                    <div class="control-group">
                        <label class="control-label" >Mother Fullname </label>
                        <div class="controls">
                            <input type="text" class="span3" name="mother_name" >
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
    
    
                    <div class="control-group">
                        <label class="control-label" >Mother Nationality</label>
                        <div class="controls">
                            <input type="text" class="span6" name="mother_nationality" >
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
    
                
                    <div class="control-group">
                        <label class="control-label" > Date of birth</label>
                        <div class="controls">
                            <input type="text" class="span3" name="mother_birth_date" >
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
    
                    
                    <div class="control-group">
                        <label class="control-label" >Place of birth</label>
                        <div class="controls">
                            <input type="text" class="span6" name="mother_birth_place"  value="">
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
    
                    
                    
                
                <div class="control-group">
                    <label class="control-label" ></label>
                    <div class="controls">

                    <h3><b> Children</b></h3>
                    <hr/>

                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                
                <div class="control-group">
                        <label class="control-label" >Do you have any dependent children?</label>
                        <div class="controls">
                        
                            <input type="radio" name="has_children" value="yes"> Yes<br>
                            <input type="radio" name="has_children" value="no"> No<br>
    
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
                            <label class="control-label" ></label>
                            <div class="controls">
        
                            <h3><b> Friends</b></h3>
                            <hr/>
        
                            </div> <!-- /controls -->
                        </div> <!-- /control-group -->
        
                        
                        <div class="control-group">
                                <label class="control-label" >Do you have any friends or family in Indonesia?</label>
                                <div class="controls">
                                
                                    <input type="radio" name="has_friends" value="yes"> Yes<br>
                                    <input type="radio" name="has_friends" value="no"> No<br>
            
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

