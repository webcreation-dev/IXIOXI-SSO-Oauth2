<x-head_ixioxi />

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">

        <div class="nk-main ">
            
            <div class="nk-wrap ">
                <x-nav_ixioxi />
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Update Access User</h4>
                                        <div class="nk-block-des">
                                            <p>Modifier les accès de l'utilisateur Julian</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('update.role') }}">
                                    @csrf

                                    <input type="hidden" name="id" id="id" value=" {{$id}} ">
                                    <div class="form-group">
                                        
                                        <div class="form-control-wrap">
                                            <input id="email" type="email" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    


                                    <div class="row gy-4 mb-4">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="preview-block">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">CRM</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="preview-block">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">CACHET</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="preview-block">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">EASY</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Update access</button>
                                    </div>
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <x-foot_ixioxi />
            </div>
            
        </div>
    </div>

    <x-footer_ixioxi />
