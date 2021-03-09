<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">SIM Rayon</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KW</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>              
              <li class="">
                <a class="nav-link" href=""><i class="fas fa-home"></i> <span>Dashboard</span></a>
              </li>              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i><span>Jadwal</span></a>
                <ul class="dropdown-menu">
                  <li class="">
                    <a class="nav-link" href="{{ route('piket.index') }}"><span> Piket</span></a>
                  </li>
                  <li class="">
                    <a class="nav-link" href="{{ route('kumpul_rayon.index') }}"><span>Kumpul Rayon</span></a>
                  </li>     
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Absen</span></a>
                <ul class="dropdown-menu">
                  <li class="">
                    <a class="nav-link" href="{{ route('absen_piket.index') }}"><span>Absen Piket</span></a>
                  </li>
                  <li class="">
                  <a class="nav-link" href="{{ route('absen_rayon.index') }}"><span>Absen Kehadiran</span></a>
                  </li>     
                </ul>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('rayon.index') }}"><i class="fas fa-building"></i> <span>Rayon</span></a>
              </li>                            
              <!-- tambah user & pembimbing rayon hanya bisa diakses oleh admin -->
              <li class="">
                <a class="nav-link" href=""><i class="fas fa-users"></i> <span>Tambah User</span></a>
              </li>                            
              <li class="">
                <a class="nav-link" href=""><i class="fas fa-user"></i> <span>Pembimbing Rayon</span></a>
              </li>                            
            </ul>            
        </aside>
      </div>