<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard')? 'active' : '' }}"  href="/dashboard">
            <i class="fa-solid fa-house"></i> 
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*')? 'active' : '' }}" href="/dashboard/posts">
            <i class="fa-regular fa-file"></i> 
            My Posts
          </a>
        </li>
       
      </ul>

      @can('admin')
          
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*')? 'active' : '' }}" href="/dashboard/categories">
            <i class="fa-solid fa-table-cells-large"></i>
           Post Categories
          </a>
        </li>
      @endcan

     
    </div>
  </nav>