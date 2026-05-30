<section class="wzx-realm">

  <div class="bqt-shell">

    <div class="nrv-topline">
      <span class="fmx-badge">Why Choose Us</span>

      <h2>
        Designed For
        <span class="lpk-shine">Premium Car Buyers</span>
      </h2>

      <p>
        We combine trust, transparency, and luxury-level experience to help you find your perfect car without the usual hassle.
      </p>
    </div>

    <div class="xev-grid">

      <div class="uio-panel">
        <div class="gtr-visual gtr-aura1">
          🚘
        </div>

        <h3>Verified Inventory</h3>

        <p>
          Every listed vehicle is thoroughly inspected and verified for quality, ownership, and documentation.
        </p>
      </div>


      <div class="uio-panel">
        <div class="gtr-visual gtr-aura2">
          ⚡
        </div>

        <h3>Fast Response</h3>

        <p>
          Our experts respond quickly to inquiries and help you throughout the buying journey.
        </p>
      </div>


      <div class="uio-panel">
        <div class="gtr-visual gtr-aura3">
          🛡️
        </div>

        <h3>Trusted Process</h3>

        <p>
          Transparent pricing, smooth paperwork, and secure ownership transfer with zero confusion.
        </p>
      </div>


      <div class="uio-panel">
        <div class="gtr-visual gtr-aura4">
          ✨
        </div>

        <h3>Premium Experience</h3>

        <p>
          From test drives to final delivery, we ensure a luxury experience at every step.
        </p>
      </div>

    </div>

  </div>

</section>

<style>

  .wzx-realm{
    padding:120px 40px;
    background:
      radial-gradient(circle at top left, rgba(255,140,0,0.12), transparent 30%),
      radial-gradient(circle at bottom right, rgba(255,0,120,0.10), transparent 35%),
      #120d08;
    overflow:hidden;
  }

  .bqt-shell{
    max-width:1250px;
    margin:auto;
  }

  .nrv-topline{
    max-width:760px;
    margin:0 auto 80px;
    text-align:center;
  }

  .fmx-badge{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:7px 18px;
    border-radius:999px;
    border:1px solid rgba(255,255,255,0.1);
    background:rgba(255,255,255,0.03);
    color:#ffb357;
    font-size:0.85rem;
    margin-bottom:18px;
    backdrop-filter:blur(10px);
  }

  .nrv-topline h2{
    font-size:clamp(2.2rem,4vw,3.6rem);
    line-height:1.1;
    font-weight:800;
    color:#fff3df;
    margin-bottom:18px;
    font-family:'Syne',sans-serif;
  }

  .lpk-shine{
    background:linear-gradient(135deg,#ffcf70,#ff7b54,#ff4da6);
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
  }

  .nrv-topline p{
    color:rgba(255,243,223,0.68);
    font-size:1rem;
    line-height:1.7;
  }

  .xev-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:28px;
  }

  .uio-panel{
    background:linear-gradient(
      145deg,
      rgba(255,255,255,0.07),
      rgba(255,255,255,0.03)
    );

    border:1px solid rgba(255,255,255,0.08);

    border-radius:28px;

    padding:30px 24px;

    transition:
      transform 0.45s ease,
      border-color 0.45s ease,
      box-shadow 0.45s ease;

    position:relative;
    overflow:hidden;

    backdrop-filter:blur(14px);
  }

  .uio-panel::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(
      135deg,
      rgba(255,255,255,0.05),
      transparent 40%
    );
    pointer-events:none;
  }

  .uio-panel:hover{
    transform:translateY(-12px);
    border-color:rgba(255,180,90,0.35);
    box-shadow:0 25px 60px rgba(0,0,0,0.35);
  }

  .gtr-visual{
    width:95px;
    height:95px;
    border-radius:24px;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:2.4rem;

    margin-bottom:24px;

    position:relative;

    overflow:hidden;
  }

  .gtr-visual::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(
      135deg,
      rgba(255,255,255,0.22),
      transparent
    );
  }

  .gtr-aura1{
    background:
      linear-gradient(135deg,#ff9966,#ff5e62);
    box-shadow:0 15px 40px rgba(255,94,98,0.35);
  }

  .gtr-aura2{
    background:
      linear-gradient(135deg,#00c6ff,#0072ff);
    box-shadow:0 15px 40px rgba(0,114,255,0.35);
  }

  .gtr-aura3{
    background:
      linear-gradient(135deg,#7f7fd5,#86a8e7,#91eae4);
    box-shadow:0 15px 40px rgba(127,127,213,0.35);
  }

  .gtr-aura4{
    background:
      linear-gradient(135deg,#ff9a9e,#fad0c4);
    box-shadow:0 15px 40px rgba(255,154,158,0.35);
  }

  .uio-panel h3{
    color:#fff5e7;
    font-size:1.25rem;
    margin-bottom:12px;
    font-family:'Syne',sans-serif;
  }

  .uio-panel p{
    color:rgba(255,243,223,0.68);
    line-height:1.7;
    font-size:0.95rem;
  }

  @media(max-width:1000px){

    .xev-grid{
      grid-template-columns:repeat(2,1fr);
    }

  }

  @media(max-width:640px){

    .wzx-realm{
      padding:90px 20px;
    }

    .xev-grid{
      grid-template-columns:1fr;
    }

  }
  @media(max-width:400px){

    .nrv-topline h2{
      font-size:1.8rem;
    }

  }

</style>

<script>

  const mxqCards = document.querySelectorAll('.uio-panel');

  const vbnObserver = new IntersectionObserver((entries)=>{

    entries.forEach((entry)=>{

      if(entry.isIntersecting){

        entry.target.animate([
          {
            opacity:0,
            transform:'translateY(50px)'
          },

          {
            opacity:1,
            transform:'translateY(0px)'
          }

        ],{
          duration:900,
          easing:'cubic-bezier(0.22,1,0.36,1)',
          fill:'forwards'
        });

      }

    });

  },{
    threshold:0.15
  });

  mxqCards.forEach((card)=>{
    vbnObserver.observe(card);
  });

</script>