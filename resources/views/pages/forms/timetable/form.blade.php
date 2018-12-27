<div class="widget-content"> 
        <div class="tab-pane " id="form1">

        {!! Form::model($model, [
            'class'=> 'form-horizontal',
            'route' => $model->exists ? ['timetable.modalUpdate', $model->id] : 'timetable.modalStore',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}


            <div class="control-group">
                <label class="control-label" for="date">Date </label>
                <div class="controls">
                    {{-- {{$model}} --}} 
                    {!! Form::text('date', null, ['class' => 'datepicker','style'=>'width:80%;', 'id' => 'date']) !!}
                    {!! Form::hidden('project_id', $project_id, ['class' => 'datepicker','style'=>'width:80%;', 'id' => 'date']) !!}
                    {!! Form::hidden('status', '1', ['class' => 'datepicker','style'=>'width:80%;', 'id' => 'status']) !!}

                </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
                <label class="control-label" for="location"> Location </label>
                <div class="controls">
                    {{-- <input type="text" class="" name="location" id="location" value="" style="width:80%;"> --}}
                   {!! Form::text('location', null, ['class' => 'location','style'=>'width:80%;', 'id' => 'location']) !!}
        
                </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
                <label class="control-label" for="activity">Activity</label>
                
                <div class="controls">
                   {!! Form::textarea('activity', null, ['class' => '','style'=>'width:80%;', 'id' => '']) !!}
                    
                    {{-- <textarea type="text" class="" name="activity" id="activity" value="" rows="4" style="width:80%;"> </textarea> --}}
                </div> <!-- /controls -->
            </div> <!-- /control-group -->
            <label class="open"></label>

        {!! Form::close() !!} 



        {{--         
        <form id="edit-profile" method="POST" action="{{route('timetable.modalStore')}}"  class="form-horizontal">
            <fieldset>
              {{ csrf_field() }}
          <div class="control-group">
            <label class="control-label" for="date">Date </label>
            <div class="controls">
              
              <input type="text" class="datepicker" name="date datepicker" id="date datepicker"  value="" style="width:80%;">
              <input type="hidden" name="project_id" id="project_id" class="" value="{{$id}}" style="width:80%;">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->
    
    
          <div class="control-group">
            <label class="control-label" for="location"> Location </label>
            <div class="controls">
              <input type="text" class="" name="location" id="location" value="" style="width:80%;">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->
    
          <div class="control-group">
            <label class="control-label" for="activity">Activity</label>
            
            <div class="controls">
              <textarea type="text" class="" name="activity" id="activity" value="" rows="4" style="width:80%;"> </textarea>
            </div> <!-- /controls -->
          </div> <!-- /control-group -->
  
          <label class="open"></label>
          </fieldset>
        </form> --}}


      </div>
    
    
    
    </div>
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/datepicker/pikaday.css') }}" />
    <link href="{{ asset('assets/vendor/datepicker/site.css') }}" rel="stylesheet"/>
    
    <script src="{{ asset('assets/vendor/datepicker/pikaday.js') }}"></script>
    
    
    <script>
    
      var picker = new Pikaday(
      {
          field: document.getElementById('datepicker'),
          firstDay: 1,
          minDate: new Date(),
          maxDate: new Date(2020, 12, 31),
          yearRange: [2000,2020]
      });
    
      </script>
     --}}
    
    
    
    
    
     