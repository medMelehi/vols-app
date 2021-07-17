@guest



 <?php if (\Route::current()->getName() == 'Home'): ?>
      
  
                                    
                               

<div  id="registerform" class="abs_form move">
                <div class="card-header" style=" color: #fff; background-color: #666; text-align: center; padding-top: 20px;">
                	<h3>Welcome to Flight-Confort</h3>
					<p style="color: #fff">register to receive the most cheaper flights</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-7">
                                <input style="background-color: #cccccc;" id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-7">
                                <input style="background-color: #cccccc;" id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="nationalite" class="col-md-4 col-form-label text-md-right">{{ __('Nationnalité') }}</label>
                            <div class="col-md-7">
                                <input style="background-color: #cccccc;" id="nationalite" type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" value="{{ old('nationalite') }}" required autocomplete="nationalite" autofocus>

                                @error('nationalite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                            <div class="col-md-7">
                                <input style="background-color: #cccccc;" id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input style="background-color: #cccccc;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input style="background-color: #cccccc;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input style="background-color: #cccccc;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a style="margin-left: 10px" name="" href="#" onclick="hideform()">Register later</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
 </div>

<?php endif ?>
 
@endguest




@if(Session::has('valid'))
    


<div id="flashmsg" class=" abs_mssg movedown_mssg">         
         <div style="padding : auto ; margin-bottom:10px"><h3>Thank you {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </h3></div>
         <br>  <div style="margin: 0 auto ;width:70% ;border-top:solid 2px #777 ;padding-top:8px">Registration was successful!</div>     
    </div>

    @endif 