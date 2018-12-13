@extends('layouts.master_template')

@section('content')

  <div class="row">
    <div class="span12">

      <div class="widget widget-nopad">
        <div class="widget-header"> <i class="icon-list-alt"></i>
          <h3> My Applications</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
          <br/>
          <a href="index.html" class="button btn btn-primary btn-large" style="float:left;">Add Application </a>

          <br/>
          <br/>

          <div class="widget big-stats-container">
            <div class="widget-content">


                       <div class="accordion" id="accordion2">
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                               Application 1
                              </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                              <div class="accordion-inner">

                                  <table width="100%" border="0" class="table">
                                     <tbody>
                                       <tr>
                                           <td width="28%">Applicant :<br><strong>rAfiqa 12</strong></td>
                                           <td width="22%">Status Application :<br> <strong> Incomplete</strong></td>
                                           <td><a href="main_application.php?noreg=VS-1PV1AG&amp;id=7997" class="btn btn-success btn-ubah" role="button"><span class="glyphicon glyphicon-cog"></span> Go to Application</a></td>
                                       </tr>
                                       <tr>
                                           <td>Reference : <br><strong>VS-1PV1AG</strong></td>
                                           <td>Next Step :<br><strong>Go to Application and complete the form application</strong></td>
                                           <td></td>  </tr>  <tr>    <td>Travel Date :<br><strong> </strong></td>
                                           <td><br><strong></strong></td><td></td>
                                       </tr>
                                       <tr>
                                           <td>Passport Number:<br><strong></strong></td>
                                           <td><a href="https://consular.indonesianembassy.org.uk/check/trackapp.php?track=VS-1PV1AG" target="_blank"><span class="glyphicon glyphicon-search"></span> Track Application</a></td>
                                           <td><a href="hapus.php?id=7997&amp;reg=VS-1PV1AG" darurat="" class="btn btn-danger btn-ubah" role="button"><span class="glyphicon glyphicon-trash"></span> Delete Application</a></td>
                                       </tr>
                                       <!-- <tr>  </tr> -->
                                     </tbody>
                                  </table>


                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Application 2
                              </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                              <div class="accordion-inner">

                                  <table width="100%" border="0" class="table">
                                      <tbody>
                                        <tr>
                                            <td width="28%">Applicant :<br><strong>rAfiqa 12</strong></td>
                                            <td width="22%">Status Application :<br> <strong> Incomplete</strong></td>
                                            <td><a href="main_application.php?noreg=VS-1PV1AG&amp;id=7997" class="btn btn-success btn-ubah" role="button"><span class="glyphicon glyphicon-cog"></span> Go to Application</a></td>
                                        </tr>
                                        <tr>
                                            <td>Reference : <br><strong>VS-1PV1AG</strong></td>
                                            <td>Next Step :<br><strong>Go to Application and complete the form application</strong></td>
                                            <td></td>  </tr>  <tr>    <td>Travel Date :<br><strong> </strong></td>
                                            <td>Visa Type :<br><strong>Single Visit</strong></td><td></td>
                                        </tr>
                                        <tr>
                                            <td>Passport Number:<br><strong></strong></td>
                                            <td><a href="https://consular.indonesianembassy.org.uk/check/trackapp.php?track=VS-1PV1AG" target="_blank"><span class="glyphicon glyphicon-search"></span> Track Application</a></td>
                                            <td><a href="hapus.php?id=7997&amp;reg=VS-1PV1AG" darurat="" class="btn btn-danger btn-ubah" role="button"><span class="glyphicon glyphicon-trash"></span> Delete Application</a></td>
                                        </tr>
                                        <!-- <tr>  </tr> -->
                                      </tbody>
                                   </table>

                               </div>
                            </div>
                          </div>
                        </div>
            </div>
            <!-- /widget-content -->

          </div>
        </div>
      </div>
      <!-- /widget -->

    </div>
    <!-- /span6 -->
  </div>

@endsection
