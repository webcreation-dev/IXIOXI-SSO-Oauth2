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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">User Lists</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total {{count($users)}}.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content {{ hasProfile(Auth::user()->id) === "Membre" ? 'disable' : ''}}">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        
                                                        <li class="nk-block-tools-opt">
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add New User</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->

                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-tb-list is-separate mb-3">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                            <div class="nk-tb-col"><span class="sub-text">Nom</span></div>
                                            <div class="nk-tb-col tb-col-mb "><span class="sub-text">Email</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Profil</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date Subscription</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col tb-col-md {{ hasProfile(Auth::user()->id) === "Membre" ? 'disable' : ''}}" ><span class="sub-text">Access</span></div>
                                        </div><!-- .nk-tb-item -->
                                    @foreach ($users as $user)  
                                        <div class="nk-tb-item">

                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>{{$user->name[0] }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{$user->name }} <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="nk-tb-col tb-col-mb"><span class="tb-amount">{{$user->email }}</span></div>

                                            <div class="nk-tb-col tb-col-md"><span>{{hasProfile($user->id)}}</span></div>

                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{$user->created_at }}</span>
                                            </div>

                                            <div class="nk-tb-col tb-col-md ">
                                                <span class="tb-status text-success">Active</span>
                                            </div>

                                            <div class="nk-tb-col nk-tb-col-tools {{ hasProfile(Auth::user()->id) === "Membre" ? 'disable' : ''}}">
                                                <ul class="nk-tb-actions gx-1 justify-content-start">
                                                    <li>
                                                        <a href="{{URL::signedRoute('update.access', ['id' => $user->id]) }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach  
                                    
                                    


                                    @foreach ($pendings as $pending)  
                                        <div class="nk-tb-item">

                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>AB</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="tb-lead">En cours <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="nk-tb-col tb-col-mb"><span class="tb-amount">{{$user->email }}</span></div>

                                            <div class="nk-tb-col tb-col-md"><span>En cours</span></div>

                                            <div class="nk-tb-col tb-col-lg">
                                                <span>En cours</span>
                                            </div>

                                            <div class="nk-tb-col tb-col-md ">
                                                <span class="tb-status text-warning">En cours</span>
                                            </div>

                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 justify-content-start">
                                                    <li>
                                                        <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach  
                                    </div>
                                    
                                    
                                    {{-- <div class="card">
                                        <div class="card-inner">
                                            <div class="nk-block-between-md g-3">
                                                <div class="g">
                                                    <ul class="pagination justify-content-center justify-content-md-start">
                                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                                <div class="g">
                                                    <ul class="pagination justify-content-center justify-content-md-start">
                                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>





                                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
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
                                                            <input id="email" name="email" type="email" class="form-control form-control-lg" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="crm" id="fv-com-sms">
                                                            <label class="custom-control-label" for="fv-com-sms">CRM</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="cachet_express" id="fv-com-phone">
                                                            <label class="custom-control-label" for="fv-com-phone">Cachet</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" style="width: 100%;" class="btn btn-primary justify-content-center"><em class="icon ni ni-plus"></em><span>Envoyer</span></button>
                                                </div>
                                            </div>
                                    </form>
                                    </div><!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-foot_ixioxi />
            </div>
            
        </div>
    </div>

    <x-footer_ixioxi />
