@extends('layouts.master')

@section('title')
    ZippyReg 2
    @endsection

@section('content')
    <div class='hidden hidden-xs' style='background-color: #D0CFD3; margin-top: -20px; padding: 10px;'>
        <div class="container">
            <div class='row' style='margin: 0px;'>
                <div class='hidden col-sm-12 text-center' style='max-height: 100px; padding: 0px;'>
                    <span style='font-weight: bold; font-size: 3.75em; font-style: italic; display: inline;'>ZippyReg</span>
                    <img src="" style='height: 50px; display: inline;'>
                </div>
            </div>
        </div>
    </div>

    <div class='' style='background-color: #fff;'>
        <div class='container'>
            <div style="max-height: 340px; overflow: hidden; position: relative;">
                <img src='/img/btx.jpg' class='img-responsive img-thumbnail' style='margin: 4px auto; z-index: 10;'>
            </div>


            <div class="row">
                <div class="col-sm-12">



                    <h3 class='text-center' style='color: inherit;'>Registration in a Zip!</h3>
                    <div class='row' style='margin-top: 30px;'> <!-- inner row -->
                        <div class='col-sm-4'>
                            <div class="panel panel-info">
                                <div class="panel-heading" onclick="">
                                    <h3 style='margin: 0px;'><i class="fa fa-users" aria-hidden="true"></i>
                                        Ease of Use
                                    </h3></div>
                                <div id='eusediv' class="panel-body" style=''>
                                    <ul>
                                        <li>Mobile-first design</li>
                                        <li>Conditional question display</li>
                                        <li>Single-page registration system</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-4'>

                            <div class="panel panel-info" style=''>
                                <div class="panel-heading"
                                     onclick=""><h3 style='margin: 0px;'><i class="fa fa-cogs" aria-hidden="true"></i>
                                        Fully Customizable
                                    </h3></div>
                                <div id='fcustdiv' class="panel-body" style=''>
                                    <ul>
                                        <!-- <li>Integrated Online Store</li> -->
                                        <li>Gift Registration System</li>
                                        <li>Efficiently handles limits and caps</li>
                                        <li>Automated Transfers, Deferrals, Switches</li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class='col-sm-4'>
                            <div class="panel panel-info">
                                <div class="panel-heading"
                                     onclick=""><h3 style='margin: 0px;'><i class="fa fa-laptop" aria-hidden="true"></i>
                                        Dedicated Support
                                    </h3></div>
                                <div id='dcsdiv' class="panel-body" style=''>
                                    <ul>
                                        <li>Full registrar services</li>
                                        <li>Highly responsive support team</li>
                                        <li>Automated registrant inquiry tools</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end the inner row -->
                </div> <!-- end col-sm-12-->

            </div>


        </div>

    </div> <!-- end full-width -->

    <div class='' style='background-color: #fff;'> <!-- background-color: #D0CFD3; -->

        <div class="container text-center">
            <h3 style='color: inherit;'>What We Do</h3>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading" style='' onclick=""><h3 style='margin: 0px;'><i class="fa fa-globe" aria-hidden="true"></i>
                                Online Registration
                            </h3></div>
                        <div id='onlregdiv' class="panel-body" style='text-align: left; min-height: 100px;'>
                            <ul>
                                <li>Event Registration</li>
                                <li>Conference Registration</li>
                                <li>Adult Education Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading" ><h3 style='margin: 0px;'><i class="fa fa-thermometer-full" aria-hidden="true"></i>
                                Fundraising Solutions
                            </h3></div>
                        <div id='fundsdiv' class="panel-body" style='text-align: left; min-height: 100px;'>
                            Either as part of your event's registration or as a standalone product, partner with us to help your organization meet your fundraising goals.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading" onclick=""><h3 style='margin: 0px;'><i class="fa fa-cubes" aria-hidden="true"></i>
                                Custom Software
                            </h3></div>
                        <div id='custsdiv' class="panel-body" style='text-align: left; min-height: 100px;'>
                            We have worked with a variety of clients to develop custom software applications including Nike and other companies.
                        </div>
                    </div>
                </div>
            </div>


            <div style=' background-color: #2F4858; margin-bottom: 0px; margin-top: 12px;'>
                <div class="container text-center">
                    <h3 style="color: #fff; margin-top: 10px;">Email us at INFO@ZIPPYREG.COM to get started.</h3>
                </div>
            </div> <!-- end the full width div -->




        </div>

    </div> <!-- end the full-width bg color div -->

    <div style=' background-color: #2F4858; margin-bottom: 0px; margin-top: 12px;'>
        <div class="container text-center" style='padding-bottom: 22px;'>
            <h3 style='color: #fff;'>Some of Our Partners<br><small style='color: #fff;'>Major events that have used our registration solutions.</small></h3>
            <br>
            <div class="row">
                <div class="col-xs-6 col-sm-2"><img src="/zippy/images/clients/nikewsf.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></div>
                <div class="col-xs-6 col-sm-2"><img src="/zippy/images/clients/mdi.jpg" class="img-responsive  img-thumbnail" style="width:100%" alt="Image"></div>
                <div class="col-xs-6 col-sm-2"><img src="/zippy/images/clients/mhm.jpg" class="img-responsive  img-thumbnail" style="width:100%" alt="Image"></div>
                <div class="col-xs-6 col-sm-2"><img src="/zippy/images/clients/cdphp.jpg" class="img-responsive  img-thumbnail" style="width:100%" alt="Image"></div>
                <div class="col-xs-6 col-sm-2"><img src="/zippy/images/clients/gwpc.svg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></div>
                <div class="col-xs-6 col-sm-2"><img src="/zippy/images/clients/palio.jpg" class="img-responsive  img-thumbnail" style="width:100%" alt="Image"></div>
            </div>
        </div>
    </div> <!-- end the full width div -->
@endsection