

@extends('layouts.master')


@section('content')



 <div class="home1" style="z-index: -1;">
        <div class="home_background" style="background-image:url(images/form3.jpg)"></div>
        
    </div>




<!-- Find Form -->

    <div class="find" style="">
        <!-- Image by https://unsplash.com/@garciasaldana_ -->
        <div id="findForm" class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div>
        <div class="container" style="">
            <div class="row">
                <div class="col-12">
                    <div class="find_title text-center">Find the Adventure of a lifetime</div>
                </div>
                <div class="col-12">
                    <div class="find_form_container">


                            <div style="width: 600px; height: 40px; " >
                                <div style="position: absolute;left: 20px;">
                                    <div class="custom-control custom-switch" style="margin-right: 50px; ">
                                        <input type="radio" class="custom-control-input oneWay" name="gridRadios" id="customSwitch1" checked="">
                                        <label class="custom-control-label" style="color: #fff;" for="customSwitch1">One way</label>
                                     </div>
                                     <div class="custom-control custom-switch">
                                        <input type="radio" class="custom-control-input return" name="gridRadios" id="customSwitch2" checked="">
                                        <label class="custom-control-label" style="color: #fff;" for="customSwitch2">Return</label>
                                     </div> 
                                 </div>
                                


                            </div>


                        <form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
                            <div class="find_item">
                                <div>From:</div>
                                <input id="justAnInputBox1" type="text" class="destination find_input" required="required" placeholder="Keyword here" autocomplete="off">
                            </div>
                            <div class="find_item">
                                <div>To:</div>
                                <input id="justAnInputBox2" type="text" class="destination find_input" required="required" placeholder="Keyword here" autocomplete="off">
                            </div>
                            <div class="find_item">
                                <div>Depart:</div>
                                <input type="date" class="destination find_input" required="required" placeholder="Keyword here">
                                </select>
                            </div>
                            <div class="find_item">
                                <div>Return:</div>
                                <input type="date" class="destination find_input" required="required" placeholder="Keyword here">
                            </div>
                              <div class="find_item">
                                <div>Passengers:</div>
                                <select name="max_price" id="max_price" class="dropdown_item_select find_input">
                                  
                                </select>
                            </div>
                            
                            <div id="duration_form" style="width:1000px; height: 130px; padding-top: 7px; " >
                                <div style="position: absolute;left: 20px;">
                                    <div class=" custom-control custom-switch" >
                                        <input type="checkbox" class="custom-control-input" name="flex" id="customSwitch3" onclick="showDuration()">
                                        <label class="custom-control-label" style="width: 100px; color: #fff;" for="customSwitch3">Flex Date:</label>
                                     </div>
                                 </div>
                                 <br>
                                <div id="duration_input" class="find_item" style="padding-top: 5px; display:;">
                                    <div>Duration:</div>
                                    <input type="text" class="destination find_input flex" required="required" placeholder="Keyword">
                                </div>
                             </div>
                              
                            <button class="button find_button">Find</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


      


@endsection