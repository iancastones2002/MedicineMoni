<div class="sidebar" data-color="purple" data-background-color="white" data-image="images/logo.png">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="d-flex align-items-center text-decoration-none col-md-4">
            <div class="offset-md-6">
                <img src="admin/images/logo.jpg" width="150rem" height="auto" alt="logo">
            </div>

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p><b>Dashboard</b></p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('medicines') || Request::is('medicines/create') || Request::is('medicines/*/edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('medicines.index') }}">
                    <i class="fa fa-list-alt fa-bounce"></i>
                    <p><b>Medicine List</b></p>
                </a>
            </li>
        </ul>
    </div>
</div>
