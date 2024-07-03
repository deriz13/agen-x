<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
  <div class="container-fluid px-0">
    <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
      <div class="d-flex align-items-center"></div>
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown ms-lg-3">
        <div class="media d-flex align-items-center">
            <a class="d-flex align-items-center" href="{{ route('logout') }}">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
          <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
            
            <div role="separator" class="dropdown-divider my-1"></div>
            <a class="dropdown-item d-flex align-items-center">
              <div wire:id="idgeBkBjhlkRNGJLWvxJ" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;idgeBkBjhlkRNGJLWvxJ&quot;,&quot;name&quot;:&quot;logout&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;0e6e08b1&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;6e19d0aeecec4884b187f762c77d97e72dc5f37df14ad8e39fd3ef7fa37c002b&quot;}}" wire:click='logout' >
                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>Logout
                </div>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>