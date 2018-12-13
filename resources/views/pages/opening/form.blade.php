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

      @extends('pages.forms.parts.navigation')
      
      <br/>

      <div class="tab-pane " id="form1"><!--##4 -->

        <form id="edit-profile" class="form-horizontal">
          <fieldset>


        <div class="control-group">
          <label class="control-label" for="password2"> Production  Title </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2"> Production Purpose </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="email">Number of Crew traveling to Indonesia</label>
          <div class="controls">
            <input type="text" class="span4" id="email" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="email">Head/Person in charge of the production</label>
          <div class="controls">
            <input type="text" class="span4" id="email" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Address </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
            <label class="control-label" for="password2">Phone Number </label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Email </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->


        <div class="control-group">
          <label class="control-label" for="password2">Date & Broadcasting media production </label>

          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Name & company of fixer in indonesia</label>

          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Address </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
            <label class="control-label" for="password2">Phone Number </label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Email </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Name & Institiution of Indonesian counterpart</label>

          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Address </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
            <label class="control-label" for="password2">Phone Number </label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Email </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="control-group">
          <label class="control-label" for="password2">Address of accomodation in Indonesia </label>
          <div class="controls">
            <input type="text" class="span4" id="password2" value="">
          </div> <!-- /controls -->
        </div> <!-- /control-group -->

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Save and Next</button>
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
