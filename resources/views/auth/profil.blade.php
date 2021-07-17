@extends('layouts.master')

@section('content')

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Photo de profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img  width="470" src="{{ asset('uploads/' . Auth::user()->profilImg) }}">
      </div>
      
    </div>
  </div>
</div>
<div class="home">
        <!-- Image by https://unsplash.com/@peecho -->
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/register.jpg" data-speed="0.8"></div>
        <div class="container" style="position: absolute;left: 100px; top: 155px; opacity: 0.9;" >
            <div class="row justify-content-center">
                <div class="col-md-8" >
                   <div class="card"  style="background-color: #acacac;  ">
                <div class="card-header" style="text-align: center; background-color: #999;">
                	<!-- <img width="100" height="100" src="{{ asset('images/profil_image.png') }}"> -->
                	
					    <img  class="profilImg" width="100" height="100" src="{{ asset('uploads/' . Auth::user()->profilImg) }}"/>
					<!-- /////////////////////////////////////////////////////////////////////::::::::: -->
							 <div id="imgDrop" class=""  aria-labelledby="navbarDropdown" >
                      
                  				<form id="formImg" method="POST" action="{{ route('editProfilImg', Auth::user()->id) }}" enctype="multipart/form-data">
                  					@csrf
                  				<label id="forfor1" for="forfor" class="profilDropItem1">Modifier la photo</label>
                  				<input id="forfor" type="file" name="image" style="">
                				</form>

                				<a id="affich" href="#" class="profilDropItem1">Afficher la photo</a>
                                </div>


					<!-- /////////////////////////////////////////////////////////////////////::::::::: -->
				
                	<br>
                	<div> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
                </div>

                <div class="card-body" >

                    <form id="editfirstname" method="POST" action="{{ route('editfirstname', Auth::user()->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input style="background-color: #cdcdcd;" id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value=" {{ Auth::user()->firstname }}" required disabled>
                                

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="col-md-1" style=" ">
                            <img id="editbtn1" width="20" height="20" src="{{ asset('images/editImg.png') }}">
                            <img id="savebtn1" style="display: none" width="20" height="20" src="{{ asset('images/saveImg.png') }}">
                           </div>
                          
                        </div>
                        </form>

                        <form id="editlastname" method="POST" action="{{ route('editlastname', Auth::user()->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input style="background-color: #cdcdcd;" id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value=" {{ Auth::user()->lastname }}" required disabled >

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                 <div class="col-md-1" style="">
                            <img id="editbtn2" width="20" height="20" src="{{ asset('images/editImg.png') }}">
                            <img id="savebtn2" style="display: none" width="20" height="20" src="{{ asset('images/saveImg.png') }}">
                           </div>
                        </div>
                        </form>

                        <form id="editnationalite" method="POST" action="{{ route('editnationalite', Auth::user()->id) }}">
                        @csrf
                         <div class="form-group row">
                            <label for="nationalite" class="col-md-4 col-form-label text-md-right">{{ __('Nationnalité') }}</label>
                            <div class="col-md-6">
                                <input style="background-color: #cdcdcd;" id="nationalite" type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" value=" {{ Auth::user()->nationalite }}" required disabled >

                                @error('nationalite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1" style="">
                            <img id="editbtn3" width="20" height="20" src="{{ asset('images/editImg.png') }}">
                            <img id="savebtn3" style="display: none" width="20" height="20" src="{{ asset('images/saveImg.png') }}">
                           </div>
                        </div>
                        </form>

                        <form id="edittel" method="POST" action="{{ route('edittel', Auth::user()->id) }}">
                        @csrf
                           <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                            <div class="col-md-6">
                                <input style="background-color: #cdcdcd;" id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value=" {{ Auth::user()->telephone }}" required disabled>

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1" style=" ">
                            <img id="editbtn4" width="20" height="20" src="{{ asset('images/editImg.png') }}">
                            <img id="savebtn4" style="display: none" width="20" height="20" src="{{ asset('images/saveImg.png') }}">
                           </div>
                        </div>

                        </form>

                        <form id="editemail" method="POST" action="{{ route('editemail', Auth::user()->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input style="background-color: #cdcdcd;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{ Auth::user()->email }}" required disabled>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1" style=" ">
                            <img id="editbtn5" width="20" height="20" src="{{ asset('images/editImg.png') }}">
                            <img id="savebtn5" style="display: none" width="20" height="20" src="{{ asset('images/saveImg.png') }}">
                           </div> 
                        </div>
                        </form>
                    
                </div>
            </div> 
                </div>
            </div>
        </div>      
    </div>
@endsection