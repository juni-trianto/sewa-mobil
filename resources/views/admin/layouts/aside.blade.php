<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li @if ($page_folder == 'dashboard') class="active" @endif > 
                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" >
                        <i  class="fa fa-book"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li @if ($page_folder == 'users') class="active" @endif> 
                    <a class="waves-effect waves-dark" href="{{ route('users') }}" >
                        <i class="fa fa-user-circle-o"></i>
                        <span class="hide-menu">Manajemen User</span>
                    </a>
                </li>
                <li @if ($page_folder == 'users') class="active" @endif> 
                    <a class="waves-effect waves-dark" href="{{ route('users') }}" >
                        <i  class="fa fa-tachometer"></i>
                        <span class="hide-menu">Manajemen Mobil</span>
                    </a>
                </li>
                <li @if ($page_folder == 'users') class="active" @endif> 
                    <a class="waves-effect waves-dark" href="{{ route('users') }}" >
                        <i  class="fa fa-phone"></i>
                        <span class="hide-menu">Sewa Mobil</span>
                    </a>
                </li>
                {{-- <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i
                            class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i
                            class="fa fa-smile-o"></i><span class="hide-menu">Icons</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i
                            class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i
                            class="fa fa-bookmark-o"></i><span class="hide-menu">Blank</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                            class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                </li> --}}
            </ul>
            <div class="text-center mt-4">
                <a class="btn waves-effect waves-light btn-info hidden-md-down text-white">
                    Logout
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                      </svg>
                </a>
            </div>
        </nav>
    </div>
</aside>