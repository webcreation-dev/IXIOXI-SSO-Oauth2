<x-head_ixioxi />

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">

        <div class="nk-main ">

            <div class="nk-wrap ">
                <x-nav_ixioxi />
                <div class="nk-content ">

                    {{-- @if (session('status'))
                    <div class="alert alert-success alert-sm col-md-8 ">
                        <center>{!! session('status') !!} </center>
                    </div>
                    @endif --}}

                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">

                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Définition des accès</h4>
                                        <div class="nk-block-des">
                                            <p>Modifier les accès aux application de cet utilisateur</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('update.role') }}">
                                    @csrf

                                    @if (isset($id))
                                    <input type="hidden" name="id" id="id" value=" {{$id}} ">
                                    @else
                                    <input type="hidden" name="email" id="email" value=" {{$email}} ">
                                    @endif
                                    {{-- <div class="form-group">

                                        <div class="form-control-wrap">
                                            <input id="email" type="email" placeholder="Email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div> --}}



                                    <div class="row gy-4 mb-4">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="preview-block">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="crm" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">CRM</label>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4 col-sm-6">
                                            <div class="preview-block">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck2">
                                                    <label class="custom-control-label"
                                                        for="customCheck2">CACHET</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="preview-block">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">EASY</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>



                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Mettre à
                                            jour</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

                </div>


                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                    data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>

                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Nouvel Utilisateur</h5>
                            <div class="nk-block-des">
                                <p>Envoyer un lien d'inscription</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->

                    <div class="nk-block">

                        <form method="POST" action="{{ route('send.mail') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">Email</label>
                                        <div class="form-control-wrap">
                                            <input id="email" name="email" type="email"
                                                class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-block-head-content">
                                    <div class="nk-block-des">
                                        <p>Ajouter des accès aux applications pour cet utilisateur</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="crm"
                                                id="fv-com-sms">
                                            <label class="custom-control-label" for="fv-com-sms">CRM</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="cachet_express"
                                                id="fv-com-phone">
                                            <label class="custom-control-label" for="fv-com-phone">Cachet</label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-12">
                                    <button type="submit" style="width: 100%;"
                                        class="btn btn-primary justify-content-center">
                                        {{-- <em class="icon ni ni-plus"></em> --}}
                                        <span>Envoyer</span></button>
                                </div>
                            </div>
                        </form>
                    </div><!-- .nk-block -->
                </div>

                <x-foot_ixioxi />
            </div>

        </div>
    </div>

    <x-footer_ixioxi />