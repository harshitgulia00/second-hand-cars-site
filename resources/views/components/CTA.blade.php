
<section class="xlp-banner">

  <div class="tgr-shell">

    <div class="mzo-glow"></div>

    <div class="dvn-copy">

      <span class="wlt-pill">
        Premium Cars Await
      </span>

      <h2>
        Ready To Drive
        <span class="gfd-highlight">Your Dream Car?</span>
      </h2>

      <p>
        Explore verified premium cars, schedule a test drive, and experience a smoother way to buy luxury vehicles.
      </p>

    </div>


    <div class="jko-actions">

      <a href="/explore" class="nmu-btn nmu-main">
        Explore >>
      </a>

      <a href="/contact" class="nmu-btn nmu-alt">
        Contact >>
      </a>

    </div>

  </div>

</section>


<style>

  .xlp-banner{
    padding:120px 40px;
    background:
      radial-gradient(circle at top left, rgba(255,150,70,0.15), transparent 30%),
      radial-gradient(circle at bottom right, rgba(255,0,140,0.10), transparent 35%),
      #120d08;
    overflow:hidden;
  }

  .tgr-shell{
    max-width:1200px;
    margin:auto;

    position:relative;

    padding:70px 60px;

    border-radius:36px;

    background:linear-gradient(
      145deg,
      rgba(255,255,255,0.08),
      rgba(255,255,255,0.03)
    );

    border:1px solid rgba(255,255,255,0.08);

    backdrop-filter:blur(16px);

    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:40px;

    overflow:hidden;
  }

  .mzo-glow{
    position:absolute;
    width:380px;
    height:380px;
    border-radius:50%;

    background:
      radial-gradient(circle, rgba(255,170,70,0.22), transparent 70%);

    top:-120px;
    right:-100px;

    pointer-events:none;
  }

  .dvn-copy{
    position:relative;
    z-index:2;
    max-width:700px;
  }

  .wlt-pill{
    display:inline-block;
    padding:7px 18px;
    border-radius:999px;

    background:rgba(255,255,255,0.04);

    border:1px solid rgba(255,255,255,0.08);

    color:#ffbf73;

    font-size:0.85rem;

    margin-bottom:20px;
  }

  .dvn-copy h2{
    font-size:clamp(2.4rem,4vw,4rem);
    line-height:1.1;
    color:#fff2df;
    margin-bottom:20px;
    font-family:'Syne',sans-serif;
  }

  .gfd-highlight{
    background:linear-gradient(135deg,#ffd86f,#ff7f50,#ff4fa3);
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
  }

  .dvn-copy p{
    color:rgba(255,242,223,0.68);
    line-height:1.8;
    font-size:1rem;
  }

  .jko-actions{
    display:flex;
    align-items:center;
    gap:18px;
    position:relative;
    z-index:2;
  }

  .nmu-btn{
    padding:16px 30px;
    border-radius:18px;
    text-decoration:none;
    font-weight:700;
    transition:all 0.35s ease;
    white-space:nowrap;
  }

  .nmu-main{
    background:linear-gradient(135deg,#ffb347,#ff7043);
    color:#1a120d;
    box-shadow:0 18px 40px rgba(255,140,70,0.35);
  }

  .nmu-main:hover{
    transform:translateY(-5px) scale(1.03);
  }

  .nmu-alt{
    border:1px solid rgba(255,255,255,0.12);
    color:#fff2df;
    background:rgba(255,255,255,0.03);
  }

  .nmu-alt:hover{
    background:rgba(255,255,255,0.07);
    transform:translateY(-5px);
  }

  @media(max-width:950px){

    .tgr-shell{
      flex-direction:column;
      align-items:flex-start;
      padding:55px 35px;
    }

  }

  @media(max-width:640px){

    .xlp-banner{
      padding:90px 20px;
    }

    .jko-actions{
      width:100%;
      flex-direction:column;
      align-items:stretch;
    }

    .nmu-btn{
      text-align:center;
    }

  }

</style>

<script>

  const zkpCta = document.querySelector('.tgr-shell');

  const htrObserve = new IntersectionObserver((entries)=>{

    entries.forEach((entry)=>{

      if(entry.isIntersecting){

        entry.target.animate([
          {
            opacity:0,
            transform:'translateY(60px)'
          },

          {
            opacity:1,
            transform:'translateY(0px)'
          }

        ],{
          duration:1000,
          fill:'forwards',
          easing:'cubic-bezier(0.22,1,0.36,1)'
        });

      }

    });

  },{
    threshold:0.2
  });

  htrObserve.observe(zkpCta);

</script>