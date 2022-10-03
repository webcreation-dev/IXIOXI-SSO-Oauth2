
<x-head_ixioxi />

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="/" class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('demo/images/logo-ixioxi.png')}}" srcset="{{asset('demo/images/logo-ixioxi.png 2x')}}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Inscription</h4>
                                        <div class="nk-block-des">
                                            <p>Créer un nouveau compte IXIOXI</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('register.user') }}">
                                    @csrf
                                    
                                    <input type="hidden" name="email" id="email" value=" {{$email}} ">

                                    <div class="form-group">
                                        <label class="form-label" for="name">Nom</label>
                                        <div class="form-control-wrap">
                                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="password">Mot de passe</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="password">Confirmer le Mot de passe</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password-confirm">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">S'inscrire</button>
                                    </div>
                                </form>
                                {{-- <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="#"><strong>Sign in instead</strong></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<x-footer_ixioxi /> 

