
 <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#slide01" id="logo" title="Agrowisata by RF.AFK">
                        <img src="/img/logo.png" style="width: 50px">
                        Agrowisata
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                    <li data-menuanchor="slide02"><a href="#slide02">About</a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03">Fasilitas</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">Services</a></li>
                                    <li data-menuanchor="slide05"><a href="#slide05">Contact</a></li>

                                    <li class="nav-item">
                                        <a href="/posts">Blog</a>
                                    </li>

                                    @auth

                                        <li>
                                         <a href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard
                                        </a>
                                        </li>
                                            
                                        @else
                            
                                        <li class="nav-item">
                                            <a href="/login" ><i class="bi bi-box-arrow-in-right"></i> Login</a>
                                        </li>
                                        {{-- text-decoration-none diguanakan untuk menghilangkan tanda garis biru link --}}
                                        
                                    @endauth

                                  

                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
 </header>
