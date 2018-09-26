<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi-google-pages"></i><span class="menu-arrow"></span> <span> Table </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('produk.index')}}">Produk</a></li>
                                    <li><a href="{{route('galeri.index')}}">Galeri</a></li>
                                    <li><a href="{{route('user.index')}}">User</a></li>
                                    <li><a href="{{route('artikel.index')}}">Artikel</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> support@support.com</p>
                        <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
                    </div>

                </div>
                <!-- Sidebar -left -->
            </div>