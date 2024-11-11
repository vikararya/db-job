<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      DB<span>Jobs</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item ">
        <a href="{{ route('dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
                {{-- khusus admin --}}
          @if (auth()->user()->hasRole('admin'))
          <li class="nav-item nav-category">Fitur Admin</li>
          <li class="nav-item">
              <a href="{{route('profession.index')}}" class="nav-link">
                  <i class="link-icon" data-feather="message-square"></i>
                  <span class="link-title">Profession</span>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/pendaftar') }}" class="nav-link">
                  <i class="link-icon" data-feather="user"></i>
                  <span class="link-title">Pendaftar</span>
              </a>
          </li>
          @endif

          {{-- khusus perusahaan --}}
          @if (auth()->user()->hasRole('administrator_employers'))
          <li class="nav-item nav-category">Fitur Perusahaan</li>
          <li class="nav-item">
              <a href="{{ url('/karyawan') }}" class="nav-link">
                  <i class="link-icon" data-feather="briefcase"></i>
                  <span class="link-title">Karyawan</span>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/laporan') }}" class="nav-link">
                  <i class="link-icon" data-feather="file-text"></i>
                  <span class="link-title">Laporan</span>
              </a>
          </li>
          @endif

          {{-- khusus pekerja --}}
          @if (auth()->user()->hasRole('job_seeker'))
          <li class="nav-item nav-category">Fitur Pekerja</li>
          <li class="nav-item">
              <a href="{{ route('profile.edit') }}" class="nav-link">
                  <i class="link-icon" data-feather="user"></i>
                  <span class="link-title">Profil Saya</span>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/lamaran') }}" class="nav-link">
                  <i class="link-icon" data-feather="file"></i>
                  <span class="link-title">Lamaran Saya</span>
              </a>
          </li>
          @endif

      
    </ul>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted mb-2">Sidebar:</h6>
    <div class="mb-3 pb-3 border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo1/">
        <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo2/">
        <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
      </a>
    </div>
  </div>
</nav>