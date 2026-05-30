
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body {
    min-height: 200vh;
    font-family: 'Inter', system-ui, sans-serif;
    background:
      radial-gradient(circle at 20% 20%, rgba(255,180,60,0.08), transparent 40%),
      radial-gradient(circle at 80% 70%, rgba(200,120,40,0.10), transparent 45%),
      #1a140d;
    color: #f5ecd9;
  }

  .navbar {
    width: 100vw;
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    padding: 18px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(26, 20, 13, 0.6);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border-bottom: 1px solid rgba(255, 180, 60, 0.15);
    transition: all 0.4s cubic-bezier(0.22,1,0.36,1);
  }
  .navbar.scrolled {
    padding: 12px 40px;
    background: rgba(20, 15, 10, 0.85);
    box-shadow: 0 10px 40px rgba(0,0,0,0.4);
  }

  .nav-logo {
    font-family: 'Syne', sans-serif;
    font-weight: 800;
    width:80px;
    display: flex;
    height: 40px;
    font-size: 1.5rem;
    letter-spacing: -0.02em;

    color: #f9a11c;
    cursor: pointer;
  }
  .logo span { color: #f5ecd9; -webkit-text-fill-color: #f5ecd9; }

  .nav-links {
    display: flex;
    gap: 32px;
    list-style: none;
  }
  .nav-links a {
    color: #f5ecd9;
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 500;
    position: relative;
    transition: color 0.3s;
  }
  .nav-links a::after {
    content: '';
    position: absolute;
    left: 0; bottom: -4px;
    width: 0; height: 2px;
    background: linear-gradient(90deg, #ffc36b, #c9772b);
    transition: width 0.3s cubic-bezier(0.22,1,0.36,1);
  }
  .nav-links a:hover { color: #ffc36b; }
  .nav-links a:hover::after { width: 100%; }

  .nav-actions { display: flex; gap: 12px; align-items: center; }
  .btn-login {
    padding: 10px 10px;
    background: linear-gradient(135deg, #ffc36b, #c9772b);
    color: #1a140d;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(255, 180, 60, 0.4);
  }

  .menu-toggle { display: none; background: none; border: none; color: #f5ecd9; font-size: 1.5rem; cursor: pointer; }

  @media (max-width: 1200px) {
    .navbar { padding: 14px 20px; }
    .nav-links {
      position: fixed;
      top: 70px; left: 0; right: 0;
      flex-direction: column;
      background: rgba(20, 15, 10, 0.95);
      backdrop-filter: blur(14px);
      padding: 30px;
      gap: 20px;
      transform: translateY(-150%);
      transition: transform 0.4s;
    }
    .nav-links.open { transform: translateY(0); }
    .menu-toggle { display: block; }

  }
  @media (max-width: 600px) {
    .logo-text { display: none; }
  }
</style>
</head>
<body>

<nav class="navbar" id="navbar">
  <div class="nav-logo"><img src="{{ asset('build/assets/logo.png') }}" alt="Logo"><span class="logo-text">Sunder</span><span class="logo-text" style="color: #c3b9ac;"  >Motors</span></div>
  <ul class="nav-links" id="navLinks">
    <li><a href="/">Home</a></li>
    <li><a href="/explore">Explore Cars</a></li>
    <li><a href="/sellCar">Sell Car</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact Us</a></li>
  </ul>
  <div class="nav-actions">

        @if(Auth::check())
            <a type="button" class="btn-login" href="{{ route('dashboard') }}">{{Auth::user()->name }}</a>
        @else
            <a type="button" class="btn-login" href="{{ route('login') }}">Login/SignUp</a>
        @endif
    
    <button class="menu-toggle" id="menuToggle">☰</button>
  </div>
</nav>


<script>
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 30);
  });

  const toggle = document.getElementById('menuToggle');
  const links = document.getElementById('navLinks');
  toggle.addEventListener('click', () => links.classList.toggle('open'));
</script>
