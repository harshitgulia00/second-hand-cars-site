<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>AmberDrive — How It Works</title>

<style>
  *{
    box-sizing:border-box;
    margin:0;
    padding:0;
  }

  body{
    font-family:'Inter',system-ui,sans-serif;
    background:
      radial-gradient(circle at 80% 30%, rgba(255,180,60,0.08), transparent 40%),
      #1a140d;
    color:#f5ecd9;
    padding:100px 40px;
    min-height:100vh;
  }

  .qxv-zone{
    text-align:center;
    max-width:700px;
    margin:0 auto 70px;
  }

  .mtr-pill{
    display:inline-block;
    padding:6px 16px;
    border:1px solid rgba(255,195,107,0.3);
    border-radius:999px;
    font-size:0.85rem;
    color:#ffc36b;
    margin-bottom:16px;
  }

  .qxv-zone h2{
    font-family:'Syne',sans-serif;
    font-size:clamp(2rem,4vw,3rem);
    font-weight:800;
    letter-spacing:-0.02em;
    margin-bottom:14px;
  }

  .qxv-zone h2 .tzn-mark{
    background:linear-gradient(135deg,#ffc36b,#c9772b);
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
  }

  .qxv-zone p{
    color:rgba(245,236,217,0.65);
  }

  .krv-flow{
    max-width:1200px;
    margin:0 auto;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
    position:relative;
  }

  .krv-flow::before{
    content:"";
    position:absolute;
    top:40px;
    left:10%;
    right:10%;
    height:2px;
    background:linear-gradient(
      90deg,
      transparent,
      rgba(255,195,107,0.4) 20%,
      rgba(255,195,107,0.4) 80%,
      transparent
    );
    z-index:0;
  }

  .hxr-card{
    text-align:center;
    position:relative;
    z-index:1;
    opacity:0;
    transform:translateY(30px);
    transition:
      opacity 0.8s cubic-bezier(0.22,1,0.36,1),
      transform 0.8s cubic-bezier(0.22,1,0.36,1);
  }

  .hxr-card.jvu-show{
    opacity:1;
    transform:translateY(0);
  }

  .hxr-card:nth-child(1){
    transition-delay:0.05s;
  }

  .hxr-card:nth-child(2){
    transition-delay:0.2s;
  }

  .hxr-card:nth-child(3){
    transition-delay:0.35s;
  }

  .hxr-card:nth-child(4){
    transition-delay:0.5s;
  }

  .vlt-orb{
    width:80px;
    height:80px;
    margin:0 auto 24px;
    border-radius:50%;
    background:linear-gradient(135deg,#2a1f15,#1a140d);
    border:1px solid rgba(255,195,107,0.3);
    display:flex;
    align-items:center;
    justify-content:center;
    font-family:'Syne',sans-serif;
    font-size:1.5rem;
    font-weight:800;
    color:#ffc36b;
    position:relative;
    transition:all 0.4s;
  }

  .hxr-card:hover .vlt-orb{
    transform:scale(1.1);
    background:linear-gradient(135deg,#ffc36b,#c9772b);
    color:#1a140d;
    box-shadow:0 15px 40px rgba(255,180,60,0.4);
  }

  .vlt-orb::after{
    content:"";
    position:absolute;
    inset:-6px;
    border-radius:50%;
    border:1px solid rgba(255,195,107,0.15);
    animation:fxr-wave 3s ease-in-out infinite;
  }

  .kdp-glyph{
    font-size:1.8rem;
  }

  .hxr-card h3{
    font-family:'Syne',sans-serif;
    font-size:1.2rem;
    font-weight:700;
    margin-bottom:8px;
  }

  .hxr-card p{
    color:rgba(245,236,217,0.65);
    font-size:0.9rem;
    line-height:1.5;
    max-width:220px;
    margin:0 auto;
  }

  @keyframes fxr-wave{
    0%,100%{
      transform:scale(1);
      opacity:0.5;
    }

    50%{
      transform:scale(1.15);
      opacity:0;
    }
  }

  @media (max-width:800px){
    .krv-flow{
      grid-template-columns:repeat(2,1fr);
      gap:40px 20px;
    }

    .krv-flow::before{
      display:none;
    }
  }

  @media (max-width:480px){
    .krv-flow{
      grid-template-columns:1fr;
    }
  }
</style>
</head>

<body>

<div class="qxv-zone">
  <span class="mtr-pill">How It Works</span>

  <h2>
    Buy In
    <span class="tzn-mark">Four Easy Steps</span>
  </h2>

  <p>
    From browsing to driving home — our streamlined process makes owning a premium car effortless.
  </p>
</div>

<div class="krv-flow" id="zrkFlow">
  
  <div class="hxr-card">
    <div class="vlt-orb">
      <span class="kdp-glyph">🔍</span>
    </div>

    <h3>1. Explore</h3>

    <p>
      Browse our curated inventory of premium verified cars.
    </p>
  </div>

  <div class="hxr-card">
    <div class="vlt-orb">
      <span class="kdp-glyph">💬</span>
    </div>

    <h3>2. Inquire</h3>

    <p>
      Send a quick inquiry — our team responds within minutes.
    </p>
  </div>

  <div class="hxr-card">
    <div class="vlt-orb">
      <span class="kdp-glyph">🤝</span>
    </div>

    <h3>3. Meet</h3>

    <p>
      Schedule a visit, test drive, and inspect the car in person.
    </p>
  </div>

  <div class="hxr-card">
    <div class="vlt-orb">
      <span class="kdp-glyph">🔑</span>
    </div>

    <h3>4. Buy</h3>

    <p>
      Easy paperwork, instant ownership transfer, drive home happy.
    </p>
  </div>

</div>

<script>
  const qlvWatcher = new IntersectionObserver((items) => {

    items.forEach((box) => {

      if(box.isIntersecting){
        box.target.classList.add('jvu-show');
      }

    });

  }, {
    threshold:0.2
  });

  document.querySelectorAll('.hxr-card').forEach((node) => {
    qlvWatcher.observe(node);
  });
</script>

</body>
</html>