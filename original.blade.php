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



      <div class="tabbable card sticky-top">
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#formcontrols" data-toggle="tab">Form Controls</a>
        </li>
  <!--							<li  ><a href="#jscontrols" data-toggle="tab">JS Controls</a></li>
  -->
        <li  ><a href="#form2" data-toggle="tab">form2</a></li>
        <li  ><a href="#form3" data-toggle="tab">form3</a></li>
        <li  ><a href="#form4" data-toggle="tab">form4</a></li>
        <li  ><a href="#form5" data-toggle="tab">form5</a></li>
        <li  ><a href="#form6" data-toggle="tab">form6</a></li>
        <li  ><a href="#form7" data-toggle="tab">form7</a></li>
        <li  ><a href="#form8" data-toggle="tab">form8</a></li>
        <li  ><a href="#form9" data-toggle="tab">form9</a></li>
        <li  ><a href="#form10" data-toggle="tab">form10</a></li>
        <li  ><a href="#form11" data-toggle="tab">Review</a></li>

      </ul>

      <br>

        <div class="tab-content">
          <div class="tab-pane " id="form2"><!--##2 -->

            <form id="edit-profile" class="form-horizontal">
              <fieldset>

                <div class="control-group">
                  <label class="control-label" for="username">Full Name</label>
                  <div class="controls">
                    <input type="text" class="span6 " id="username" value="Example" >
                    <p class="help-block">Full Name must match the name on your passport.</p>
                  </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                  <label class="control-label" for="firstname">Place & Date of birth</label>
                  <div class="controls">
                    <input type="text" class="span6" id="firstname" value="1 September 1990">
                  </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                  <label class="control-label" for="lastname">Nationality</label>
                  <div class="controls">
                    <input type="text" class="span6" id="lastname" value="">
                  </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                  <label class="control-label" for="email">Password Number</label>
                  <div class="controls">
                    <input type="text" class="span4" id="email" value="">
                  </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                  <label class="control-label" for="password1">Validity</label>
                  <div class="controls">
                    <input type="number" class="span1" id="password1" value="">
                    <input type="number" class="span1" id="password1" value="">
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
                    <label class="control-label" for="email">Martial Status</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" for="email">Spouse Name</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" for="email">Military Record</label>
                    <div class="controls">
                      <textarea type="text" class="span4" id="email" value="">
                      </textarea>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                    <label class="control-label" for="email">Education </label>
                    <div class="controls">
                      <textarea type="text" class="span4" id="email" value="">
                        </textarea>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                  <label class="control-label" for="email">Role in the project </label>
                  <div class="controls">
                      <textarea type="text" class="span4" id="email" value="">
                        </textarea>
                  </div> <!-- /controls -->
              </div> <!-- /control-group -->

                <div class="control-group">
                    <label class="control-label" for="email">Employment Record </label>
                    <div class="controls">
                        <textarea type="text" class="span4" id="email" value="">
                          </textarea>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                  <label class="control-label" for="email">Date & Place of Previous Journalistic visit to Indonesia</label>
                  <div class="controls">
                    <input type="text" class="span3" id="email" value="">
                    <input type="date" class="span1" >
                  </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class="control-group">
                  <label class="control-label" for="email">Proposed Date & Place of Journalistic visit to Indonesia</label>
                  <div class="controls">
                    <input type="text" class="span3" id="email" value="">
                    <input type="date" class="span1" >
                  </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                  <label class="control-label" for="email"></label>
                  <div class="controls">

                    <b> Emergency Contact</b>

                  </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class="control-group">
                  <label class="control-label" for="email">Contact person in case of emergency</label>
                  <div class="controls">
                    <input type="text" class="span3" id="email" value="">

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



                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Save and Next</button>
                </div> <!-- /form-actions -->
              </fieldset>
            </form>



          </div>
          <div class="tab-pane " id="form3"><!--##3 -->

            <form id="edit-profile" class="form-horizontal">
              <fieldset>
            <!--
            <div class="control-group">
              <label class="control-label" for="password2">No. of crew traveling together to Indonesia </label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div>
            </div>  /control-group -->



            <div class="control-group">
              <label class="control-label" for="password2">Company Name</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->


            <div class="control-group">
              <label class="control-label" for="password2">Position within th Company</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->


            <div class="control-group">
              <label class="control-label" for="password2">Office Address</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->


            <div class="control-group">
              <label class="control-label" for="password2">Phone Number</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
              <label class="control-label" for="password2">Office Email</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
              <label class="control-label" for="email"></label>
              <div class="controls">

                <b> Detail of UK Bank guarantee </b>

              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
              <label class="control-label" for="password2">Name of Bank</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value=" ">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
              <label class="control-label" for="password2"> Address of UK Bank </label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save and Next</button>
              <!--<button class="btn">Cancel</button>-->
            </div> <!-- /form-actions -->

          </div>

            </fieldset>
          </form>
          <div class="tab-pane " id="form4"><!--##4 -->

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

          <div class="tab-pane " id="form5"><!--##5 -->

            <!-- /widget -->
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Production Time Table</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                <tr>
                  <th> No </th>
                  <th> Date </th>
                  <th> Location </th>
                  <th> Activity</th>
                  <th class="td-actions"> Actions </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td> 1</td>
                  <td> 25 October 2018</td>
                  <td> Bali </td>
                  <td> Traditional Bali Dance </td>
                  <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil"> Edit</i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i>Remove</a></td>
                </tr>
                <tr>
                    <td> 2</td>
                    <td> 26 October 2018</td>
                    <td> Bali </td>
                    <td> DWP </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil"> Edit</i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i>Remove</a></td>
                </tr>


                </tbody>
              </table>
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->

            <form id="edit-profile" class="form-horizontal">
              <fieldset>



            <div class="control-group">
              <label class="control-label" for="password2">Date</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
              <label class="control-label" for="password2">Location</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="control-group">
              <label class="control-label" for="password2">Activity</label>
              <div class="controls">
                <input type="text" class="span4" id="password2" value="">
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save and Next</button>
              <!--<button class="btn">Cancel</button>-->
            </div> <!-- /form-actions -->

          </div>
            </fieldset>
          </form>
          <div class="tab-pane " id="form6"><!--##6 -->

            <form id="edit-profile" class="form-horizontal">
                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="password2">Story Board/Synopsis</label>
                        <div class="controls">
                          <textarea class="span6" heigth="6 00px"></textarea>
                        </div> <!-- /controls -->
                      </div> <!-- /control-group -->

                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save and Next</button>
                        <!--<button class="btn">Cancel</button>-->
                      </div> <!-- /form-actions -->


                </fieldset>
              </form>

          </div>


          <div class="tab-pane " id="form7"><!--##7 -->

          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Production Time Table</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <table class="table table-striped table-bordered">
              <thead>
              <tr>
                <th> No </th>
                <th> Full Name </th>
                <th> Occupation </th>
                <th> Company/ Institution</th>
                <th> Address, Phone and Email</th>
                <th class="td-actions"> Actions </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td> 1</td>
                <td> Rafiqa</td>
                <td> Media Partner Staff </td>
                <td> Indonesian Embassy  </td>
                <td> Jl. Kijang No 10 Jakarta, 021 232 3232<br/> rq@qq.com </td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil"> Edit</i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i>Remove</a></td>
              </tr>
              <tr>
                <td> 1</td>
                <td> Rafiqa</td>
                <td> Media Partner Staff </td>
                <td> Indonesian Embassy  </td>
                <td> Jl. Kijang No 10 Jakarta, 021 232 3232<br/> rq@qq.com </td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil"> Edit</i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i>Remove</a></td>
              </tr>

              </tbody>
            </table>
            </div>
            <!-- /widget-content -->
          </div>
          <!-- /widget -->

          <form id="edit-profile" class="form-horizontal">
            <fieldset>


          <div class="control-group">
            <label class="control-label" for="password2">Full Name</label>
            <div class="controls">
              <input type="text" class="span4" >
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Occupation</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Company/ Institution</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Full Address</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Phone Number</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->


          <div class="control-group">
            <label class="control-label" for="password2">Email</label>
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



          <div class="tab-pane " id="form8"><!--##8 -->


          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Production Time Table</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <table class="table table-striped table-bordered">
              <thead>
              <tr>
                <th> No </th>
                <th> Full Name </th>
                <th> Occupation </th>
                <th> Company/ Institution</th>
                <th> Address, Phone and Email</th>
                <th class="td-actions"> Actions </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td> 1</td>
                <td> Rafiqa</td>
                <td> Media Partner Staff </td>
                <td> Indonesian Embassy  </td>
                <td> Jl. Kijang No 10 Jakarta, 021 232 3232<br/> rq@qq.com </td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil"> Edit</i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i>Remove</a></td>
              </tr>
              <tr>
                <td> 1</td>
                <td> Rafiqa</td>
                <td> Media Partner Staff </td>
                <td> Indonesian Embassy  </td>
                <td> Jl. Kijang No 10 Jakarta, 021 232 3232<br/> rq@qq.com </td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil"> Edit</i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i>Remove</a></td>
              </tr>

              </tbody>
            </table>
            </div>
            <!-- /widget-content -->
          </div>
          <!-- /widget -->

          <form id="edit-profile" class="form-horizontal">
            <fieldset>


          <div class="control-group">
            <label class="control-label" for="password2">Full Name</label>
            <div class="controls">
              <input type="text" class="span4" >
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Occupation</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Company/ Institution</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Full Address</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->

          <div class="control-group">
            <label class="control-label" for="password2">Phone Number</label>
            <div class="controls">
              <input type="text" class="span4" id="password2" value="">
            </div> <!-- /controls -->
          </div> <!-- /control-group -->


          <div class="control-group">
            <label class="control-label" for="password2">Email</label>
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
          <div class="tab-pane " id="form9"><!--##9 -->



            <label>
              Statement for coverage application (news coverage, photos, cameras and foreign correspondents)
            </label>
            <br/>

            <center><h3>STATEMENT</h3></center>

            <p>
              To complete application for journalist visit permit in Indonesia, I/we hereby declare that we shall :<br/>
  1. Observe and agree to all relevant national and local regulations of the Government
  of the Republic of Indonesia on holy places, national parks, and other intended
  places;<br/>
  2. Bear all expenses during duration of journalist activities;<br/>
  3. Not cover strategic/vital objects/locations;<br/>
  4. Re-export all equipment at own expenses upon completion of journalist visit and
  bear all related costs.

            </p>
            <div class="control-group">
              <label class="control-label" for="password2"></label>
              <div class="controls">
                <input type="checkbox" class="" id="password2" value=""> I Agree to term and conditions above
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save and Next</button>
              <!--<button class="btn">Cancel</button>-->
            </div> <!-- /form-actions -->


          </div>

          <div class="tab-pane " id="form10"><!--##10-->



            <label>
              Statement for filming application
              (film shooting/documentary/reality show/commercial advertising)
            </label>
            <br/>

            <center><h3>STATEMENT</h3></center>

            <p>
                To complete our application for film/video/documentary shooting permit in Indonesia, I/we hereby declare that we shall :
                <br/>1. Comply with laws and regulations of the Government of the Republic of Indonesia.
                <br/>2. Report upon arrival to the Ministry of Education and Culture c.q. Film Development
                Center to obtain details of central and local rules before filming begins.
                <br/>3. Report to the Information Services of the Provinces/Regional Government that will
                appoint a liaison officer and bear all expenses related to the services, or appointed
                by Film Development Center.
                <br/>4. Appoint a local partner or fixer.
                <br/>5. Conduct shooting in accordance with the proposed script/synopsis and
                object/locations as set out in the shooting permit issued by the Ministry of Education
                and Culture.
                <br/>6. Not film strategic/vital objects/and locations.
                <br/>7. Apply for the Conservation Area Entry Permit (Surat Izin Masuk Kawasan
                Konservasi - SIMAKSI) at the Ministry of Environment and Forestry, if applicable.
                <br/>8. Bear all expenses towards taking objects/locations which have specific rules and if
                deemed necessary, additional expenses will also be borne.
                <br/>9. Re-export all shooting equipment at your own expense upon completion of filming
                and bear all related costs on CBP/ATA Carnet.
                <br/>10. Submit 1(one) released copy of film/video to the Ministry of Education and Culture
                c.q. Film Development Center through the Embassy of the Republic of
                Indonesia/Consulate General of the Republic of Indonesia which may be used at the
                discretion of Government of the Republic of Indonesia for non-commercial
                purposes.


            </p>
            <div class="control-group">
              <label class="control-label" for="password2"></label>
              <div class="controls">
                <input type="checkbox" class="" id="password2" value=""> I Agree to term and conditions above
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save and Next</button>
              <!--<button class="btn">Cancel</button>-->
            </div> <!-- /form-actions -->




          </div>
          <div class="tab-pane " id="form11"><!--##11-->
            <form id="edit-profile" class="form-horizontal">
                <fieldset>

                  <div class="control-group">
                    <label class="control-label" for="username">Full Name</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;">Deni Setiawan</label>

                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                    <label class="control-label" for="firstname">Place & Date of birth</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >1 September 1990</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                    <label class="control-label" for="lastname">Nationality</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >Indonesian</label>

                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                    <label class="control-label" for="email">Password Number</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >B366966</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                    <label class="control-label" for="password1">Validity</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >Januari 2020</label>

                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                    <label class="control-label" for="password2">Address </label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >25 Waterloo Road E6 1AP</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                      <label class="control-label" for="password2">Phone Number </label>
                      <div class="controls">
                          <label class="control-label" style="text-align:left; width:400px;" >+4470711234321</label>
                      </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="password2">Email </label>
                    <div class="controls">
                        <label class="control-label"  style="text-align:left; width:400px;">lopisquenak@gmail.com</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->



                  <div class="control-group">
                      <label class="control-label" for="email">Martial Status</label>
                      <div class="controls">
                          <label class="control-label" style="text-align:left; width:400px;">Maried</label>
                      </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                      <label class="control-label" for="email">Spouse Name</label>
                      <div class="controls">
                          <label class="control-label" style="text-align:left; width:400px;" >Inas R Humairah</label>
                      </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                      <label class="control-label" for="email">Military Record</label>
                      <div class="controls">
                          <label class="control-label" style="text-align:left; width:400px;" >None</label>
                      </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                      <label class="control-label" for="email">Education </label>
                      <div class="controls">
                          <label class="control-label" style="text-align:left; width:400px;" >Msc Queen Mary University of London</label>
                      </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                    <label class="control-label" for="email">Role in the project </label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >Project Director</label>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                  <div class="control-group">
                      <label class="control-label" for="email">Employment Record </label>
                      <div class="controls">
                          <label class="control-label" style="text-align:left; width:400px;" >None</label>
                      </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Date & Place of Previous Journalistic visit to Indonesia</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >1 September 2018</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->


                  <div class="control-group">
                    <label class="control-label" for="email">Proposed Date & Place of Journalistic visit to Indonesia</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >1 December 2018</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email"></label>
                    <div class="controls">

                      <b> Emergency Contact</b>

                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Contact person in case of emergency</label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >Rafiqa</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="password2">Address </label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >25 Waterloo Road</label>													</div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                      <label class="control-label" for="password2">Phone Number </label>
                      <div class="controls">
                          <label class="control-label" style="text-align:left; width:400px;" >-</label>
                      </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="password2">Email </label>
                    <div class="controls">
                        <label class="control-label" style="text-align:left; width:400px;" >-</label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->



                  <div class="form-actions">
                      <p class="help-block"><b style="color:red;">You cannot change this data after you submited</b> </p>
                    <button type="submit" class="btn btn-primary">Submit</button>

                  </div> <!-- /form-actions -->
                </fieldset>
              </form>

          </div>

          <div class="tab-pane active" id="formcontrols">
          <!--  peringatan  -->
          <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Welcome to the Visa service</strong> <br/>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
          </div>

            <!--form 1 ##1-->
          <form id="edit-profile" class="form-horizontal">
            <fieldset>

              <div class="control-group">
                <label class="control-label" for="username">Sponsor Letter</label>
                <div class="controls">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">


                  <p class="help-block"><b> The letter must explain the puropseof the journalistic visit, place to be visited, date / schedule and Information on the broadcasting period </b></p>
                </div> <!-- /controls -->
              </div>

              <div class="control-group">
                  <label class="control-label" for="username">Company Profile</label>
                  <div class="controls">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">

                    <p class="help-block"><b> The letter must explain overview on company profile</b></p>
                  </div> <!-- /controls -->


              </div>


              <div class="control-group">
                  <label class="control-label" for="username">Local Partner letter</label>
                  <div class="controls">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">

                    <p class="help-block"><b> A Letter from a local partner / fixer</b></p>
                  </div> <!-- /controls -->


              </div>

              <div class="form-actions">

                  <button type="submit" class="btn btn-primary">Save and Next</button>
                  <!--<button class="btn">Cancel</button>-->
              </div> <!-- /form-actions -->

            </fieldset>
          </form>

          </div>

          <div class="tab-pane " id="jscontrols">

            <div class="wizard">
              <div class="wizard-inner">
                  <div class="connecting-line"></div>
                  <ul class="nav nav-tabs" role="tablist">

                      <li role="presentation" class="active">
                          <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-folder-open"></i>
                              </span>
                          </a>
                      </li>

                      <li role="presentation" class="">
                          <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-pencil"></i>
                              </span>
                          </a>
                      </li>
                      <li role="presentation" class="">
                          <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-picture"></i>
                              </span>
                          </a>
                      </li>

                      <li role="presentation" class="disabled">
                          <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-ok"></i>
                              </span>
                          </a>
                      </li>
                  </ul>
              </div>

              <form role="form">
                  <div class="tab-content">
                      <div class="tab-pane active" role="tabpanel" id="step1">
                          <h3>Step 1</h3>
                          <p>This is step 1</p>
                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                          </ul>
                      </div>
                      <div class="tab-pane" role="tabpanel" id="step2">
                          <h3>Step 2</h3>
                          <p>This is step 2</p>
                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                              <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                          </ul>
                      </div>
                      <div class="tab-pane" role="tabpanel" id="step3">
                          <h3>Step 3</h3>
                          <p>This is step 3</p>
                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                              <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                              <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                          </ul>
                      </div>
                      <div class="tab-pane" role="tabpanel" id="complete">
                          <h3>Complete</h3>
                          <p>You have successfully completed all steps.</p>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </form>
          </div>


          </div>

        </div>


      </div>
 <!-- /widget the main content -->




    </div> <!-- /widget-content -->

  </div> <!-- /widget -->

  </div> <!-- /span8 -->




  </div> <!-- /row -->

@endsection
