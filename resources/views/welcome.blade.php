<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>SundarMotors — Premium Pre-Owned Cars</title>
<meta name="description" content="Buy verified second-hand cars or sell yours to a trusted dealer instantly." />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
<script src="https://unpkg.com/lucide@latest"></script>
<style>
   .xqa-top{
    text-align:center;
    max-width:760px;
    margin:0 auto 70px;
  }

  .jvr-pill{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding:8px 20px;

    border-radius:999px;

    border:1px solid rgba(255,180,80,0.25);

    background:rgba(255,180,80,0.04);

    color:#ffbe69;

    font-size:0.88rem;

    margin-bottom:22px;
  }

  .xqa-top h2{
    font-size:clamp(2.6rem,5vw,5rem);

    font-weight:800;

    line-height:1;

    color:#f8ead7;

    margin-bottom:22px;

    font-family:'Syne',sans-serif;
  }

  .nkt-accent{
    background:linear-gradient(
      135deg,
      #ffd36b,
      #ff9b45,
      #ff7b2c
    );

    -webkit-background-clip:text;
    background-clip:text;

    color:transparent;
  }

  .xqa-top p{
    color:rgba(248,234,215,0.72);

    font-size:1.08rem;

    line-height:1.7;
  }

  @media(max-width:640px){

    .xqa-top{
      margin-bottom:50px;
      padding:0 14px;
    }

    .xqa-top h2{
      font-size:3rem;
    }

    .xqa-top p{
      font-size:0.95rem;
    }

  }
  @media(max-width:400px){
    h2{
      font-size:10px;
    }
  } 
  :root{
    --bg:#1a140d; --bg-2:#120e08; --card:#221a10; --border:#3a2c1c;
    --text:#f4ead8; --muted:#a89878;
    --amber:#f0a830; --amber-deep:#b8651c;
    --gradient-amber:linear-gradient(135deg,#f4b13a,#b8651c);
    --gradient-hero:radial-gradient(ellipse at top right,rgba(240,168,48,.25),transparent 60%),
                    radial-gradient(ellipse at bottom left,rgba(184,101,28,.18),transparent 50%),
                    linear-gradient(180deg,#16110a,#0e0a05);
    --texture:radial-gradient(circle at 20% 20%,rgba(240,168,48,.08) 0,transparent 40%),
              radial-gradient(circle at 80% 70%,rgba(184,101,28,.10) 0,transparent 45%);
    --shadow-amber:0 20px 60px -20px rgba(240,168,48,.45);
    --shadow-card:0 10px 40px -10px rgba(0,0,0,.6);
    --ease:cubic-bezier(.22,1,.36,1);
  }
  *{box-sizing:border-box;margin:0;padding:0}
  html{scroll-behavior:smooth;}
  body{
    font-family:'Inter',sans-serif; background:var(--bg); color:var(--text);
    background-image:var(--texture); background-attachment:fixed;
    overflow-x:hidden; line-height:1.5;
  }
  h1,h2,h3,h4{font-family:'Syne',sans-serif; letter-spacing:-.02em; font-weight:700}
  a{color:inherit;text-decoration:none}
  button{font:inherit;cursor:pointer;border:0;background:none;color:inherit}
  img{display:block;max-width:100%;height:auto}
  ul{list-style:none}
  .container{max-width:1200px;margin:0 auto;padding:0 1.5rem}
  .gradient-text{background:var(--gradient-amber);-webkit-background-clip:text;background-clip:text;color:transparent}
  .glass{background:rgba(34,26,16,.6);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px)}
  .btn-amber{
    display:inline-flex;align-items:center;gap:.5rem;padding:.9rem 1.6rem;border-radius:.5rem;
    background:var(--gradient-amber);color:#1a140d;font-weight:600;box-shadow:var(--shadow-amber);
    transition:transform .3s var(--ease);
  }
  .btn-amber:hover{transform:scale(1.03)}
  .btn-ghost{
    display:inline-flex;align-items:center;gap:.5rem;padding:.9rem 1.6rem;border-radius:.5rem;
    border:1px solid var(--border);transition:.3s;
  }
  .btn-ghost:hover{border-color:var(--amber);color:var(--amber)}
  .eyebrow{color:var(--amber);font-size:.78rem;letter-spacing:.3em;text-transform:uppercase;margin-bottom:.75rem}
  .muted{color:var(--muted)}


  /* HERO */
  .hero{position:relative;min-height:100vh;display:flex;align-items:center;padding:6rem 0 5rem;background:var(--gradient-hero);overflow:hidden}
  .orb{position:absolute;border-radius:50%;filter:blur(120px)}
  .orb-1{top:-8rem;right:-8rem;width:24rem;height:24rem;background:rgba(240,168,48,.2);animation:float 6s ease-in-out infinite}
  .orb-2{bottom:0;left:-8rem;width:24rem;height:24rem;background:rgba(184,101,28,.15)}
  .hero-grid{display:grid;gap:3rem;align-items:center;padding:5rem 0 2rem;position:relative;z-index:2}
  @media(min-width:1024px){.hero-grid{grid-template-columns:1fr 1fr}}
  .pill{display:inline-flex;align-items:center;gap:.5rem;padding:.35rem .85rem;border-radius:999px;border:1px solid rgba(240,168,48,.3);background:rgba(240,168,48,.1);color:var(--amber);font-size:.75rem;font-weight:500;margin-bottom:1.25rem}
  .pulse-dot{height:.4rem;width:.4rem;border-radius:50%;background:var(--amber);animation:pulse 1.6s infinite}
  .hero h1{font-size:clamp(2.5rem,6vw,4.5rem);line-height:1.05;margin-bottom:1.25rem}
  .hero p.lead{font-size:1.1rem;color:var(--muted);max-width:34rem;margin-bottom:2rem}
  .cta-row{display:flex;flex-wrap:wrap;gap:1rem}
  .stats{margin-top:3rem;display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;max-width:26rem}
  .stat-n{font-family:'Syne';font-size:1.8rem;font-weight:700}
  .stat-l{font-size:.7rem;color:var(--muted);text-transform:uppercase;letter-spacing:.15em;margin-top:.25rem}
  .slide-dots{display:flex;gap:.5rem;margin-top:2.5rem}
  .slide-dots button{height:.25rem;width:1rem;border-radius:999px;background:var(--border);transition:.5s}
  .slide-dots button.active{width:2.5rem;background:var(--gradient-amber)}
  .hero-visual{position:relative}
  .hero-visual .glow{position:absolute;inset:0;background:var(--gradient-amber);filter:blur(80px);opacity:.3;border-radius:50%;animation:glow 3s ease-in-out infinite}
  .hero-visual img{position:relative;animation:float 6s ease-in-out infinite;filter:drop-shadow(0 30px 60px rgba(0,0,0,.6));border-radius:1rem}

  /* MARQUEE */
  .marquee{position:absolute;bottom:0;left:0;right:0;border-top:1px solid var(--border);border-bottom:1px solid var(--border);background:rgba(14,10,5,.5);padding:1rem 0;overflow:hidden}
  .marquee-track{display:flex;animation:marquee 30s linear infinite;white-space:nowrap}
  .marquee-track:hover{animation-play-state:paused}
  .marquee-group{display:flex;align-items:center;gap:3rem;padding:0 1.5rem;color:var(--muted);font-size:.85rem;letter-spacing:.3em;text-transform:uppercase}
  .dot{height:.25rem;width:.25rem;border-radius:50%;background:rgba(240,168,48,.5)}

  /* SECTION */
  section.block{padding:7rem 0;position:relative}
  .section-head{display:flex;flex-direction:column;gap:1rem;margin-bottom:4rem}
  @media(min-width:768px){.section-head{flex-direction:row;align-items:flex-end;justify-content:space-between}}
  .section-head h2{font-size:clamp(2rem,4vw,3rem)}
  .link-arrow{display:inline-flex;align-items:center;gap:.5rem;color:var(--amber)}

  /* CARDS */




  /* REVEAL + KEYFRAMES */
  [data-reveal]{opacity:0;transform:translateY(24px)}
  [data-reveal].in{opacity:1;transform:translateY(0);transition:opacity .9s var(--ease),transform .9s var(--ease)}
  @keyframes fadeIn{from{opacity:0}to{opacity:1}}
  @keyframes pulse{0%,100%{opacity:1}50%{opacity:.4}}
  @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
  @keyframes glow{0%,100%{opacity:.3}50%{opacity:.6}}
  @keyframes marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}

  .grain::before{content:"";position:absolute;inset:0;pointer-events:none;opacity:.35;mix-blend-mode:overlay;
    background-image:url("data:image/svg+xml;utf8,<svg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2'/></filter><rect width='100%25' height='100%25' filter='url(%23n)' opacity='0.4'/></svg>");}
</style>
</head>
<body>

<!-- NAVBAR -->
@include('components.navigation-bar')
<!-- HERO -->
<section class="hero"  id="home">
  <div class="grain"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="container hero-grid">
    <div>
      <div class="pill"><span class="pulse-dot"></span><span id="heroTag">Premium Pre-Owned</span></div>
      <h1><span id="heroTitle">Drive Your Dream Car</span> <span class="gradient-text" id="heroAccent">at the Right Price</span></h1>
      <p class="lead">India's most trusted pre-owned car dealership. Hand-picked inventory, transparent pricing, and paperwork handled in-house — so you only think about the drive.</p>
      <div class="cta-row">
        <a href="#explore" class="btn-amber">Explore Cars <i data-lucide="arrow-right" width="16"></i></a>
        <a href="#sell" class="btn-ghost glass">Sell Your Car</a>
      </div>
      <div class="stats">
        <div><div class="stat-n gradient-text">8K+</div><div class="stat-l">Cars Sold</div></div>
        <div><div class="stat-n gradient-text">12yr</div><div class="stat-l">Trusted Dealer</div></div>
        <div><div class="stat-n gradient-text">200pt</div><div class="stat-l">Inspection</div></div>
      </div>
      <div class="slide-dots" id="slideDots"></div>
    </div>
    <div class="hero-visual">
      <div class="glow"></div>
      <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?w=1200&q=80" alt="Premium pre-owned sports car" />
    </div>
  </div>

  <!-- MARQUEE -->
  <div class="marquee">
    <div class="marquee-track" id="marqueeTrack"></div>
  </div>
</section>

<!-- FEATURED CARS -->
<section class="xqa-top">

  <span class="jvr-pill">
    Latest Inventory
  </span>

  <span style="display:block;font-size:2.8rem;font-weight:800;color:#f8ead7;margin-bottom:18px">
    Featured
    <span class="nkt-accent">Cars</span>
</spaan>

  <p>
    Hand-picked premium pre-owned vehicles, fully inspected and ready to drive.
  </p>

</section>

<div style="display:flex;gap:2rem;overflow-x:auto;padding-bottom:1rem;margin-bottom:3rem;justify-content:center;padding-top:100px;flex-wrap:wrap">

  @if($cars)
        @foreach($cars as $car)
        
          <div class="cdefrt-maincard" style="margin-bottom:20px">

  <div class="tgbyhn-imageframe">

    <img 
      class="ikmopl-imagezoom"
      src="{{$car -> secure_url}}"
      alt="{{$car -> brand}} {{$car -> model}}"
    >

    <span class="mkiolp-badgepill">
      Verified
    </span>

  </div>




  <div class="edcvfr-contentpad">

    <h2 class="wsxokm-titlebrand">
      {{$car -> brand}} {{$car -> model}}
    </h2>

    <span class="bgtvfr-yeartext">
      {{$car -> year}} Model
    </span>

    <div class="wazxsw-flexfooter">

      <div class="edcvtg-priceblock">
        <span style="font-size: 1.4rem;">₹{{$car -> price}}</span>
      </div>

      <a href="/details/{{$car->id}}" class="qazplm-viewbutton">
        View →
      </a>

    </div>

  </div>

</div>

    @endforeach
  @endif

</div>

<style>

.cdefrt-maincard{

  width:100%;
  max-width:470px;

  overflow:hidden;

  border-radius:34px;

  background:
    linear-gradient(
      145deg,
      rgba(34,20,10,0.98),
      rgba(18,10,5,1)
    );

  border:1px solid rgba(255,180,80,0.16);

  box-shadow:
    0 28px 90px rgba(255,140,40,0.12);

  transition:
    transform 0.45s ease,
    border-color 0.45s ease,
    box-shadow 0.45s ease;

}

.cdefrt-maincard:hover{

  transform:translateY(-12px);

  border-color:rgba(255,190,90,0.35);

  box-shadow:
    0 40px 110px rgba(255,140,40,0.22);

}





.tgbyhn-imageframe{

  position:relative;

  overflow:hidden;

  aspect-ratio:16/10;

  background:#0f0905;

}

.ikmopl-imagezoom{

  width:100%;
  height:100%;

  object-fit:cover;

  transition:transform 0.9s cubic-bezier(0.22,1,0.36,1);

}

.cdefrt-maincard:hover .ikmopl-imagezoom{
  transform:scale(1.08);
}





.mkiolp-badgepill{

  position:absolute;

  top:18px;
  left:18px;

  padding:8px 16px;

  border-radius:999px;

  background:rgba(18,10,5,0.84);

  border:1px solid rgba(255,190,100,0.22);

  color:#ffc36b;

  font-size:0.78rem;

  font-weight:700;

  backdrop-filter:blur(10px);

}





.edcvfr-contentpad{
  padding:30px;
}

.wsxokm-titlebrand{

  color:#f8ead7;

  font-size:2rem;

  line-height:1.1;

  margin-bottom:10px;

  font-weight:800;

  font-family:'Syne',sans-serif;
}

.bgtvfr-yeartext{

  display:block;

  color:rgba(248,234,215,0.58);

  font-size:1rem;

  margin-bottom:28px;
}





.nhyujm-specgrid{

  display:grid;

  grid-template-columns:repeat(3,1fr);

  gap:18px;

  padding:22px 0;

  margin-bottom:28px;

  border-top:1px solid rgba(255,180,80,0.10);

  border-bottom:1px solid rgba(255,180,80,0.10);

}

.asdqwe-specitem{
  text-align:left;
}

.zxctyu-speclabel{

  display:block;

  margin-bottom:10px;

  color:rgba(248,234,215,0.38);

  font-size:0.76rem;

  letter-spacing:0.12em;

  text-transform:uppercase;
}

.asdqwe-specitem strong{

  color:#f8ead7;

  font-size:1.3rem;

  font-weight:700;
}





.wazxsw-flexfooter{

  display:flex;

  align-items:center;

  justify-content:space-between;

  gap:20px;
}





.edcvtg-priceblock{

  font-size:3rem;

  line-height:1;

  font-weight:800;

  font-family:'Syne',sans-serif;

  background:linear-gradient(
    135deg,
    #ffd36b,
    #ff9b45
  );

  -webkit-background-clip:text;
  background-clip:text;

  color:transparent;
}





.qazplm-viewbutton{

  display:inline-flex;

  align-items:center;
  justify-content:center;

  min-width:125px;

  height:58px;

  padding:0 24px;

  border-radius:18px;

  text-decoration:none;

  font-weight:700;

  color:#ffbe69;

  background:rgba(255,180,80,0.08);

  border:1px solid rgba(255,180,80,0.22);

  transition:
    transform 0.35s ease,
    background 0.35s ease,
    border-color 0.35s ease;

}

.qazplm-viewbutton:hover{

  transform:translateY(-3px);

  background:linear-gradient(
    135deg,
    #ffbe69,
    #ff9b45
  );

  color:#1b120c;

  border-color:transparent;

}





@media(max-width:640px){

  .cdefrt-maincard{
    border-radius:28px;
  }

  .edcvfr-contentpad{
    padding:24px;
  }

  .wsxokm-titlebrand{
    font-size:1.7rem;
  }

  .edcvtg-priceblock{
    font-size:2.4rem;
  }

  .wazxsw-flexfooter{

    flex-direction:column;

    align-items:flex-start;
  }

  .qazplm-viewbutton{
    width:100%;
  }

}

</style>



<!-- WHY -->
@include('components.whyChooseus')

<!-- PROCESS -->
<div style="padding:5rem 0">
  @include('components.process')
</div>

<!-- TESTIMONIALS -->

@include('components.testimonial')

<!-- CTA -->
@include('components.CTA')

<!-- FOOTER -->
@include('components.footer')
<script>
  // Data

  const heroSlides = [
    {tag:'Premium Pre-Owned',title:'Drive Your Dream Car',accent:'at the Right Price'},
    {tag:'Certified Inventory',title:'Inspected. Verified.',accent:'Ready to Roll.'},
    {tag:'Sell in 48 Hours',title:'Got a Car to Sell?',accent:'We Pay Top Dealer Price.'},
  ];
  const brands = ['BMW','Mercedes-Benz','Audi','Range Rover','Toyota','Hyundai','Porsche','Volvo','Jaguar'];

  // Render cars


  // Render why


  // Render reviews


  // Marquee
  const groupHtml = `<div class="marquee-group">${brands.map(b=>`<span>${b}</span><span class="dot"></span>`).join('')}</div>`;
  document.getElementById('marqueeTrack').innerHTML = groupHtml + groupHtml;

  // Slide dots + hero rotation
  const dotsEl = document.getElementById('slideDots');
  dotsEl.innerHTML = heroSlides.map((_,i)=>`<button data-i="${i}" class="${i===0?'active':''}" aria-label="slide ${i+1}"></button>`).join('');
  let slide = 0;
  function setSlide(i){
    slide = i;
    document.getElementById('heroTag').textContent = heroSlides[i].tag;
    document.getElementById('heroTitle').textContent = heroSlides[i].title;
    document.getElementById('heroAccent').textContent = heroSlides[i].accent;
    [...dotsEl.children].forEach((b,k)=>b.classList.toggle('active',k===i));
  }
  dotsEl.addEventListener('click',e=>{ const i=e.target.dataset.i; if(i!=null) setSlide(+i); });
  setInterval(()=>setSlide((slide+1)%heroSlides.length), 5000);

  // Nav scroll
  const nav = document.getElementById('nav');
  window.addEventListener('scroll',()=>nav.classList.toggle('scrolled',window.scrollY>30));

  // Mobile menu
  const mb = document.getElementById('menuBtn'), mm = document.getElementById('mobileMenu');
  mb.addEventListener('click',()=>{
    mm.classList.toggle('open');
    mb.innerHTML = mm.classList.contains('open') ? '<i data-lucide="x"></i>' : '<i data-lucide="menu"></i>';
    lucide.createIcons();
  });
  mm.addEventListener('click',e=>{ if(e.target.tagName==='A'){mm.classList.remove('open'); mb.innerHTML='<i data-lucide="menu"></i>'; lucide.createIcons();} });

  // Reveal observer
  const io = new IntersectionObserver(entries=>{
    entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target);} });
  },{threshold:.15});
  document.querySelectorAll('[data-reveal]').forEach(el=>io.observe(el));

  // Year
  document.getElementById('year').textContent = new Date().getFullYear();

  // Icons
  lucide.createIcons();
</script>
</body>
</html>
