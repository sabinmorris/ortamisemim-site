<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="{{Route('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/zanzibar-flag.webp" alt="">
      <h1 id="title" class="sitename">Or-Tamisemim</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{Route('/')}}" class="active">Home</a></li>
        <li><a href="{{Route('about_Us')}}" class="active">Kuhusu Sisi</a></li>
        <li><a href="{{Route('events')}}">Habari na Matukio</a></li>
        <li><a href="{{Route('our_leadership')}}">Uongozi</a></li>
        <li class="dropdown"><a href="#"><span>Maktaba</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{Route('video_Lebo')}}">Video</a></li>
            <li><a href="{{Route('photo_Lebo')}}">Picha</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Idara</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          @if(count([$departmentInfos]) > 0)
          @foreach($departmentInfos as $departmentInfo)


          <ul>
            <li><a href="{{Route('utumishi_department', $departmentInfo->departmentName ='utumishi')}}">Utumishi na Uendeshaji</a></li>
            <li><a href="{{Route('utumishi_department', $departmentInfo->departmentName ='mipango')}}">Mipango Sera na Utafiti</a></li>
            <li><a href="{{Route('utumishi_department', $departmentInfo->departmentName ='uratibu')}}">Tawala za Mikoa na Serikali za Mitaa</a></li>
            <li><a href="{{Route('utumishi_department', $departmentInfo->departmentName ='idara maalum')}}">Idara Maalum</a></li>
            <li><a href="{{Route('utumishi_department', $departmentInfo->departmentName ='mrajis')}}">Mrajis</a></li>
          </ul>


          @endforeach
          @endif
        </li>
        <li><a href="{{Route('contact_Us')}}">Wasiliana Nasi</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <a href="{{Route('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/smz_logo.png" alt="">
      <h1 id="title" class="sitename">Or-Tamisemim</h1>
    </a>

    <!-- Simple language switcher -->
    <div class="language-switcher me-3">
      <div class="translate-wrapper">
        <i class="fas fa-globe text-white me-2"></i>
        <select id="language-select" class="form-select form-select-sm custom-translator-select" onchange="changeLanguage(this.value)">
          <option value="en">English</option>
          <option value="sw">Kiswahili</option>
        </select>
      </div>
    </div>

  </div>
</header>
