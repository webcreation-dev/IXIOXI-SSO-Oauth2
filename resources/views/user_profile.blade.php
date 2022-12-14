<x-head_ixioxi />

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">

        <div class="nk-main ">

            <div class="nk-wrap ">
                <x-nav_ixioxi />



                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                                @if (session('modifyProfil'))
                                    <div class="alert alert-success" role="alert">
                                        {!! session('modifyProfil') !!}
                                    </div>
                                @endif


                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Modification de votre profil</h4>
                                                            {{-- <div class="nk-block-des">
                                                                <p>Basic info, like your name and address, that you use
                                                                    on Nio Platform.</p>
                                                            </div> --}}
                                                        </div>
                                                        {{-- <div
                                                            class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                                                                data-target="userAside"><em
                                                                    class="icon ni ni-menu-alt-r"></em></a>
                                                        </div> --}}
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">

                                                        <div class="data-item" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Nom</span>
                                                                <span class="data-value">{{ Auth::user()->name }}</span>
                                                            </div>
                                                            {{-- <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div> --}}
                                                        </div>
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Email</span>
                                                                <span class="data-value">{{ Auth::user()->email
                                                                    }}</span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Soci??t??</span>
                                                                <span class="data-value">{{ Auth::user()->name_society
                                                                    }}</span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="data-item" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Telephone</span>
                                                                @if (Auth::user()->telephone === null)
                                                                <span class="data-value text-soft">Non enregistr??</span>
                                                                @else
                                                                <span
                                                                    class="data-value text-soft">{{Auth::user()->telephone}}</span>
                                                                @endif
                                                            </div>
                                                            {{-- <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div> --}}
                                                        </div>

                                                        @if (Auth::user()->name_society != "professionnel")
                                                        <div class="data-item" data-bs-target="#profile-edit"
                                                            data-tab-target="#address">
                                                            <div class="data-col">
                                                                @foreach ($users as $user)

                                                                <span class="data-label">Adresse Soci??t??</span>

                                                                @if ((Auth::user()->addresse === null) &&
                                                                ($user->addresse === null))

                                                                <span class="data-value text-soft">Non enregistr??</span>

                                                                @else
                                                                <span class="data-value text-soft">{{$user->addresse}}
                                                                </span>
                                                                @endif
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>

                                                </div><!-- .nk-block -->


                                                <div class="row">
                                                    <div class="col-md-10"></div>
                                                    <div class="col-md-2">
                                                        <button type="submit" style="width: 100%;"
                                                            data-bs-toggle="modal" data-bs-target="#profile-edit"
                                                            class="btn btn-primary justify-content-center">
                                                            {{-- <em class="icon ni ni-send"></em> --}}
                                                            <span>Modifier</span>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
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
                                        <p>Ajouter des acc??s aux applications pour cet utilisateur</p>
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





    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Mis ?? jour</h5>
                    <ul class="nk-nav nav nav-tabs">
                        {{-- <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personnel</a>
                        </li> --}}

                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <form method="POST" action="{{ route('edit.user') }}">
                            @csrf
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Nom</label>
                                            <input type="text" class="form-control form-control-lg" id="full-name"
                                                name="name" value="{{ Auth::user()->name }}"
                                                placeholder="Enter Full name">
                                        </div>
                                    </div>

                                    @if (hasRole(Auth::user()->id) === 'Administrateur')
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Adresse Soci??t??</label>
                                            <input type="text" class="form-control form-control-lg" name="addresse"
                                                value="{{ Auth::user()->addresse }}" placeholder="Enter display name">
                                        </div>
                                    </div>
                                    @endif

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Telephone</label>
                                            <input type="text" class="form-control form-control-lg" name="telephone"
                                                value="{{ Auth::user()->telephone }}" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <div class="form-control-wrap">
                                                <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                    data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input id="password" type="password"
                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                    name="password" autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" style="width: 100%;"
                                                    class="btn btn-primary justify-content-center">
                                                    {{-- <em class="icon ni ni-plus"></em> --}}
                                                    <span>Mettre ?? jour</span></button>
                                                {{-- <a href="#" class="btn btn-lg btn-primary"
                                                    data-bs-dismiss="modal">Update Profile</a> --}}
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal" class="link link-light">Annuler</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                        </form>

                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

    <x-footer_ixioxi />