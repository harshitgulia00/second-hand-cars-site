
<section class="kzr-zone">

  <div class="vht-wrapper">

    <div class="rpf-heading">

      <span class="nxd-chip">Testimonials</span>

      <h2>
        Loved By
        <span class="sqa-glow">Happy Drivers</span>
      </h2>

      <p>
        Hear what our customers say after finding their perfect premium car through us.
      </p>

    </div>


    <div class="jty-stack">

      <div class="mcv-box">

        <div class="fdr-stars">★★★★★</div>

        <p>
          “The entire process felt premium from start to finish. Super transparent and professional team.”
        </p>

        <div class="hwp-user">

          <div class="uaz-avatar uaz-tone1">
            A
          </div>

          <div>
            <h4>Arjun Mehta</h4>
            <span>BMW 3 Series Owner</span>
          </div>

        </div>

      </div>



      <div class="mcv-box">

        <div class="fdr-stars">★★★★★</div>

        <p>
          “I found my dream car within days. The paperwork and ownership transfer were surprisingly smooth.”
        </p>

        <div class="hwp-user">

          <div class="uaz-avatar uaz-tone2">
            R
          </div>

          <div>
            <h4>Riya Sharma</h4>
            <span>Audi Q5 Owner</span>
          </div>

        </div>

      </div>



      <div class="mcv-box">

        <div class="fdr-stars">★★★★★</div>

        <p>
          “Most dealers overpromise. These guys actually delivered exactly what they showed online.”
        </p>

        <div class="hwp-user">

          <div class="uaz-avatar uaz-tone3">
            K
          </div>

          <div>
            <h4>Karan Verma</h4>
            <span>Mercedes C-Class Owner</span>
          </div>

        </div>

      </div>

    </div>

  </div>

</section>


<style>

  .kzr-zone{
    padding:120px 40px;
    background:
      radial-gradient(circle at top right, rgba(255,180,80,0.10), transparent 30%),
      #140f09;
  }

  .vht-wrapper{
    max-width:1200px;
    margin:auto;
  }

  .rpf-heading{
    text-align:center;
    max-width:720px;
    margin:0 auto 70px;
  }

  .nxd-chip{
    display:inline-block;
    padding:7px 18px;
    border-radius:999px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    color:#ffbf73;
    font-size:0.85rem;
    margin-bottom:18px;
  }

  .rpf-heading h2{
    font-size:clamp(2.2rem,4vw,3.4rem);
    color:#fff2df;
    font-family:'Syne',sans-serif;
    margin-bottom:18px;
  }

  .sqa-glow{
    background:linear-gradient(135deg,#ffd36d,#ff8a5c,#ff4fa3);
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
  }

  .rpf-heading p{
    color:rgba(255,242,223,0.68);
    line-height:1.7;
  }

  .jty-stack{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:28px;
  }

  .mcv-box{
    background:linear-gradient(
      145deg,
      rgba(255,255,255,0.06),
      rgba(255,255,255,0.03)
    );

    border:1px solid rgba(255,255,255,0.08);

    border-radius:30px;

    padding:32px;

    backdrop-filter:blur(14px);

    transition:
      transform 0.45s ease,
      border-color 0.45s ease;
  }

  .mcv-box:hover{
    transform:translateY(-10px);
    border-color:rgba(255,180,90,0.3);
  }

  .fdr-stars{
    color:#ffbf73;
    font-size:1.1rem;
    margin-bottom:18px;
    letter-spacing:2px;
  }

  .mcv-box p{
    color:#f7ead7;
    line-height:1.8;
    margin-bottom:28px;
    font-size:0.96rem;
  }

  .hwp-user{
    display:flex;
    align-items:center;
    gap:14px;
  }

  .uaz-avatar{
    width:58px;
    height:58px;
    border-radius:18px;

    display:flex;
    align-items:center;
    justify-content:center;

    font-weight:700;
    color:white;
    font-size:1.1rem;
  }

  .uaz-tone1{
    background:linear-gradient(135deg,#ff9966,#ff5e62);
  }

  .uaz-tone2{
    background:linear-gradient(135deg,#00c6ff,#0072ff);
  }

  .uaz-tone3{
    background:linear-gradient(135deg,#a18cd1,#fbc2eb);
  }

  .hwp-user h4{
    color:#fff2df;
    margin-bottom:4px;
    font-size:1rem;
  }

  .hwp-user span{
    color:rgba(255,242,223,0.6);
    font-size:0.88rem;
  }

  @media(max-width:950px){

    .jty-stack{
      grid-template-columns:1fr;
    }

  }

  @media(max-width:640px){

    .kzr-zone{
      padding:90px 20px;
    }

  }

</style>

<script>

  const qxeCards = document.querySelectorAll('.mcv-box');

  const ctyWatch = new IntersectionObserver((items)=>{

    items.forEach((item)=>{

      if(item.isIntersecting){

        item.target.animate([
          {
            opacity:0,
            transform:'translateY(50px)'
          },

          {
            opacity:1,
            transform:'translateY(0px)'
          }

        ],{
          duration:850,
          fill:'forwards',
          easing:'cubic-bezier(0.22,1,0.36,1)'
        });

      }

    });

  },{
    threshold:0.15
  });

  qxeCards.forEach((card)=>{
    ctyWatch.observe(card);
  });

</script>