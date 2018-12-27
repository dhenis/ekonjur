@extends('layouts.master_template')

@section('content')
  <div class="row">

    <div class="span12">

      <div class="widget ">

        <div class="widget-header">
          <i class="icon-user"></i>
          <h3>Your Account</h3>
      </div> <!-- /widget-header -->

    <div class="widget-content">

      @include('layouts.navigation.main_navigation')
      
      <br/>

      
      <div class="tab-pane active" id="form1">
        
           
        <!--  peringatan  -->
        <div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Welcome to the Visa service</strong> <br/>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </div>

        
        <form action="{{route('one.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
          <fieldset>
              {{ csrf_field() }}  
            <input type="hidden" value="{{$id}}" name="project_id">
            <div class="control-group">											
              <label class="control-label" >Sponsor Letter</label>
              <div class="controls">
                <input type="file"  class="form-control-file" name="sponsor_letter" accept="application/pdf" required>

                
                <p class="help-block"><b> The letter must explain the puropseof the journalistic visit, place to be visited, date / schedule and Information on the broadcasting period </b></p>
              </div> <!-- /controls -->				
            </div>
                                
            <div class="control-group">											
                <label class="control-label" >Company Profile</label>
                <div class="controls">
                  <input type="file" class="form-control-file" name="company_profile" accept="application/pdf">
                      
                  <p class="help-block"><b> The letter must explain overview on company profile</b></p>
                </div> <!-- /controls -->				
                

            </div>

        
            <div class="control-group">											
                <label class="control-label" for="username">Local Partner letter</label>
                <div class="controls">
                  <input type="file" class="form-control-file" name="local_patner" accept="application/pdf">
                      
                  <p class="help-block"><b> A Letter from a local partner / fixer</b></p>
                </div> <!-- /controls -->				
                

            </div>

            <div class="form-actions">
                
                <input value="Save and Next" type="submit" class="btn btn-primary"> 

            </div> <!-- /form-actions -->

          </fieldset>
        </form>

        </div>



    </div> <!-- /widget-content -->

  </div> <!-- /widget -->

  </div> <!-- /span8 -->




  </div> <!-- /row -->

@endsection

