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

      <h2> Important Information</h2>
@foreach ($models as $model)
  <b><h3>
  {{$model->heading}}
</h3></b>

<p>
  {{ $model->content}}
</p>

@endforeach
<br/>

<a href="{{route('apply.create')}}" class="btn btn-primary" > Continue</a>


{{$models2}}
{{-- {% raw %}
You last visited {{ $models }} on {{ $models2 }}.
{% endraw %} --}}
<p>


</p>

    </div> <!-- /widget-content -->

  </div> <!-- /widget -->

  </div> <!-- /span8 -->




  </div> <!-- /row -->

@endsection
