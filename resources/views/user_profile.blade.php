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
                                <div class="nk-block" style="padding-left: 150px;padding-right: 150px;">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap" >

                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Information Personnelle</h4>
                                                            <div class="nk-block-des">
                                                                <p>Mettez à jour vos informations personnelles</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block" style="transform: translateY(-30px)">
                                                    <div class="nk-data data-list">
                                                        {{-- <div class="data-head">
                                                            <h6 class="overline-title">Basics</h6>
                                                        </div> --}}
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Nom</span>
                                                                <span class="data-value">{{ Auth::user()->name }}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div>
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Email</span>
                                                                <span class="data-value">{{ Auth::user()->email }}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div>
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Société</span>
                                                                <span class="data-value">{{ Auth::user()->name_society }}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div>
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Telephone</span>
                                                                @if (Auth::user()->telephone === null)
                                                                    <span class="data-value text-soft">Non enregistré</span>
                                                                @else
                                                                    <span class="data-value text-soft">{{Auth::user()->telephone}}</span>
                                                                @endif
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div>
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Adresse Société</span>
                                                                @if (Auth::user()->addresse === null)
                                                                    <span class="data-value text-soft">Non enregistré</span>
                                                                @else
                                                                    <span class="data-value text-soft">{{Auth::user()->addresse}}</span>
                                                                @endif
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>
                        
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <form method="POST" action="{{ route('edit.user') }}">
                            @csrf
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Nom</label>
                                            <input type="text" class="form-control form-control-lg" id="full-name" name="name" value="{{ Auth::user()->name }}" placeholder="Enter Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Adresse Société</label>
                                            <input type="text" class="form-control form-control-lg" name="addresse" value="{{ Auth::user()->addresse }}" placeholder="Enter display name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Telephone</label>
                                            <input type="text" class="form-control form-control-lg" name="telephone" value="{{ Auth::user()->telephone }}" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <div class="form-control-wrap">
                                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" style="width: 100%;" class="btn btn-primary justify-content-center"><em class="icon ni ni-plus"></em><span>Envoyer</span></button>
                                                {{-- <a href="#" class="btn btn-lg btn-primary" data-bs-dismiss="modal">Update Profile</a> --}}
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
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
