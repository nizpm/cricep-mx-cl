<header class="main-header main-header-silver">
  <div class="header-sticky">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('images/logo.svg') }}" alt="Logo">
        </a>

        <div class="collapse navbar-collapse main-menu">
          <div class="nav-menu-wrapper">
            <ul class="navbar-nav mr-auto" id="menu">
              <li class="nav-item submenu">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <ul>
                  <li class="nav-item"><a class="nav-link" href="/">Home - Version 1</a></li>
                  <li class="nav-item"><a class="nav-link" href="/inicio-2">Home - Version 2</a></li>
                  <li class="nav-item"><a class="nav-link" href="/inicio-3">Home - Version 3</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="/sobre-nosotros">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="/servicios">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
              <li class="nav-item submenu">
                <a class="nav-link" href="#">Pages</a>
                <ul>
                  <li class="nav-item"><a class="nav-link" href="/servicios/detalle">Service Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="/blog/detalle">Blog Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="/proyectos">projects</a></li>
                  <li class="nav-item"><a class="nav-link" href="/proyectos/detalle">Project Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="/equipo">Our Team</a></li>
                  <li class="nav-item"><a class="nav-link" href="/equipo/detalle">Team Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="/testimonios">Testimonials</a></li>
                  <li class="nav-item"><a class="nav-link" href="/precios">Pricing Plan</a></li>
                  <li class="nav-item"><a class="nav-link" href="/galeria-imagenes">Image Gallery</a></li>
                  <li class="nav-item"><a class="nav-link" href="/galeria-videos">Video Gallery</a></li>
                  <li class="nav-item"><a class="nav-link" href="/faqs">FAQs</a></li>
                  <li class="nav-item"><a class="nav-link" href="/404">404</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="/contacto">Contact Us</a></li>
            </ul>
          </div>

          <div class="header-btn">
            <a href="/contacto" class="btn-default btn-highlighted">Contact Us</a>
          </div>
        </div>
        <div class="navbar-toggle"></div>
      </div>
    </nav>
    <div class="responsive-menu"></div>
  </div>
</header>