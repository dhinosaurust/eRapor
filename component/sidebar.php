<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a style="height: auto !important;" class="sidebar-brand d-flex flex-column align-items-center text-decoration-none mt-3" href="#">
        <img style="border: solid 2px #fff !important; object-fit: cover; width: 120px; height: 120px;" class="user-profile img-fluid border rounded-circle" src="resource/assets/img/pic_blank.jpeg" alt="user-profile">
        <div class="sidebar-brand-text mb-4">
            <p class="font-weight-normal text-white text-center mt-3 mb-2"><small><?php echo $name ? $name : "-" ; ?></small></p>
            <p class="text-white text-center mb-0"><small class="font-weight-bold"><?php echo $username ? $username : "" ; ?></small></p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ;?> ">
        <a class="nav-link " href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Nav Item - Charts -->
    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/list-pegawai' ? 'active' : '' ;?>">
        <a class="nav-link" href="/list-pegawai">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pegawai</span></a>
    </li>

    <hr class="sidebar-divider"> 

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->