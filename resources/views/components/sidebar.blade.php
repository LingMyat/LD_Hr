<div  class="page-wrapper chiller-theme">

    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="{{ route('home') }}">Life Depending Hr</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src=""
              alt="User picture">
          </div>
          <div class="user-info">
            <span class="user-name">
              <strong>{{ Auth::user()->name }}</strong>
            </span>
            <span class="user-role">Administrator</span>
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <span>Online</span>
            </span>
          </div>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-search">
          <div>
            <div class="input-group">
              <input type="text" class="form-control search-menu" placeholder="Search...">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <x-sidebar-item :name="__('Employee')">
                <i class="fa fa-folder"></i>
            </x-sidebar-item>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
    </nav>

      </div>
    </main>
    <!-- page-content" -->
</div>
