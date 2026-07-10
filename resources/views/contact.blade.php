<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Contact — SundarMotors</title>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
<script src="https://unpkg.com/lucide@latest"></script>

<style>

:root{
    --bg:oklch(0.14 0.012 60);
    --bg-2:oklch(0.18 0.015 60);
    --card:oklch(0.20 0.015 60);
    --fg:oklch(0.96 0.015 80);
    --muted:oklch(0.70 0.02 70);
    --border:oklch(0.30 0.02 60 / 60%);
    --amber:oklch(0.78 0.18 65);
    --gradient-amber:linear-gradient(135deg,oklch(0.78 0.18 65),oklch(0.55 0.20 45));
    --gradient-hero:radial-gradient(ellipse at top right,oklch(0.78 0.18 65 / 0.28),transparent 60%),
                    radial-gradient(ellipse at bottom left,oklch(0.55 0.20 45 / 0.18),transparent 50%),
                    linear-gradient(180deg,oklch(0.14 0.012 60),oklch(0.10 0.01 60));
    --texture:radial-gradient(circle at 20% 20%,oklch(0.78 0.18 65 / 0.08) 0,transparent 40%),
              radial-gradient(circle at 80% 70%,oklch(0.58 0.18 50 / 0.10) 0,transparent 45%);
    --shadow-amber:0 20px 60px -20px oklch(0.78 0.18 65 / 0.45);
    --shadow-card:0 10px 40px -10px oklch(0 0 0 / 0.6);
    --ease:cubic-bezier(0.22,1,0.36,1);
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family:'Inter',sans-serif;
    background:var(--bg);
    color:var(--fg);
    background-image:var(--texture);
    overflow-x:hidden;
}

img{
    max-width:100%;
    display:block;
}

a{
    text-decoration:none;
    color:inherit;
}

h1,h2,h3,h4{
    font-family:'Syne',sans-serif;
    line-height:1.1;
    letter-spacing:-0.02em;
}

.container{
    max-width:1200px;
    margin:0 auto;
    padding:0 24px;
}

.text-amber{
    background:var(--gradient-amber);
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
}

section{
    padding:90px 0;
}

/* HERO */

.hero{
    position:relative;
    padding:120px 0 100px;
    background:var(--gradient-hero);
    overflow:hidden;
}

.orb{
    position:absolute;
    width:450px;
    height:450px;
    border-radius:50%;
    filter:blur(40px);
    pointer-events:none;
    animation:float 8s ease-in-out infinite;
}

.orb-1{
    top:-100px;
    right:-120px;
    background:radial-gradient(circle,oklch(0.78 0.18 65 / 0.35),transparent 70%);
}

.orb-2{
    bottom:-140px;
    left:-120px;
    background:radial-gradient(circle,oklch(0.55 0.20 45 / 0.3),transparent 70%);
    animation-delay:-4s;
}

@keyframes float{
    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-25px);
    }
}

.hero-content{
    position:relative;
    text-align:center;
    max-width:800px;
    margin:0 auto;
}

.badge{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:8px 16px;
    border-radius:999px;
    background:oklch(0.78 0.18 65 / 0.12);
    border:1px solid oklch(0.78 0.18 65 / 0.3);
    color:var(--amber);
    margin-bottom:24px;
    font-size:13px;
    font-weight:600;
}

.badge .dot{
    width:6px;
    height:6px;
    border-radius:50%;
    background:var(--amber);
}

.hero h1{
    font-size:clamp(42px,6vw,74px);
    margin-bottom:24px;
}

.hero p{
    color:var(--muted);
    font-size:18px;
    line-height:1.7;
}

/* CONTACT */

.contact-grid{
    display:grid;
    grid-template-columns:1fr 1.1fr;
    gap:40px;
    align-items:start;
}

.contact-info{
    display:flex;
    flex-direction:column;
    gap:24px;
}

.info-card{
    padding:28px;
    border-radius:24px;
    background:var(--card);
    border:1px solid var(--border);
    transition:0.4s;
}

.info-card:hover{
    transform:translateY(-5px);
    border-color:oklch(0.78 0.18 65 / 0.4);
    box-shadow:var(--shadow-amber);
}

.info-icon{
    width:56px;
    height:56px;
    border-radius:16px;
    background:oklch(0.78 0.18 65 / 0.12);
    display:grid;
    place-items:center;
    color:var(--amber);
    margin-bottom:18px;
}

.info-card h3{
    margin-bottom:10px;
    font-size:22px;
}

.info-card p{
    color:var(--muted);
    line-height:1.7;
    font-size:15px;
}

/* FORM */

.form-box{
    padding:36px;
    border-radius:28px;
    background:var(--card);
    border:1px solid var(--border);
    box-shadow:var(--shadow-card);
}

.form-box h2{
    font-size:38px;
    margin-bottom:12px;
}

.form-box p{
    color:var(--muted);
    margin-bottom:30px;
    line-height:1.7;
}

.form-group{
    margin-bottom:22px;
}

.form-group label{
    display:block;
    margin-bottom:10px;
    font-size:14px;
    color:var(--muted);
}

.form-control{
    width:100%;
    padding:16px 18px;
    border-radius:16px;
    border:1px solid var(--border);
    background:oklch(0.17 0.015 60);
    color:var(--fg);
    outline:none;
    transition:0.3s;
    font-size:15px;
}

.form-control:focus{
    border-color:var(--amber);
    box-shadow:0 0 0 4px oklch(0.78 0.18 65 / 0.12);
}

textarea.form-control{
    min-height:160px;
    resize:none;
}

.btn{
    display:inline-flex;
    align-items:center;
    gap:10px;
    padding:16px 28px;
    border:none;
    border-radius:999px;
    background:var(--gradient-amber);
    color:#1a1207;
    font-weight:700;
    cursor:pointer;
    transition:0.4s;
    box-shadow:var(--shadow-amber);
}

.btn:hover{
    transform:translateY(-3px);
}

/* MAP BAND */

.map-band{
    margin-top:70px;
    border-radius:28px;
    overflow:hidden;
    border:1px solid var(--border);
    box-shadow:var(--shadow-card);
}

.map-band iframe{
    width:100%;
    height:420px;
    border:none;
}

/* REVEAL */

[data-reveal]{
    opacity:0;
    transform:translateY(30px);
    transition:0.8s var(--ease);
}

[data-reveal].in{
    opacity:1;
    transform:none;
}

/* RESPONSIVE */

@media(max-width:920px){

    .contact-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:580px){

    section{
        padding:70px 0;
    }

    .hero{
        padding:100px 0 80px;
    }

    .form-box{
        padding:26px;
    }

    .hero h1{
        font-size:46px;
    }

}

</style>
</head>

<body>
<!-- Navbar -->
 @include('components.navigation-bar')
<!-- HERO -->

<section class="hero">

    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <div class="container hero-content">

        <div class="badge" data-reveal>
            <span class="dot"></span>
            Contact SundarMotors
        </div>

        <h1 data-reveal>
            Let's Start Your
            <span class="text-amber">Next Journey</span>
        </h1>

        <p data-reveal>
            Whether you're buying, selling, or simply exploring options, our team is here to help you every step of the way.
        </p>

    </div>

</section>

<!-- CONTACT -->

<section>

    <div class="container">

        <div class="contact-grid">

            <!-- LEFT -->

            <div class="contact-info">

                <div class="info-card" data-reveal>

                    <div class="info-icon">
                        <i data-lucide="map-pin"></i>
                    </div>

                    <h3>Visit Our Showroom</h3>

                    <p>
                        shop no. 47, near radha krishna mandir, A 2 Block, Paschim Vihar, New delhi, Delhi, 110063
                    </p>

                </div>

                <div class="info-card" data-reveal>

                    <div class="info-icon">
                        <i data-lucide="phone"></i>
                    </div>

                    <h3>Call Us Anytime</h3>

                    <p>
                        <a href="tel:+91 8888886078">+91 8888886078</a><br>
                        <a href="tel:+91 9871735020">+91 9871735020</a><br>
                        Mon - Sat : 9AM - 8PM
                    </p>

                </div>

                <div class="info-card" data-reveal>

                    <div class="info-icon">
                        <i data-lucide="mail"></i>
                    </div>

                    <h3>Email Support</h3>

                    <p>
                        <a href="mailto:sundarmotors1@gmail.com">sundarmotors1@gmail.com</a><br>
                    </p>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="form-box" data-reveal>

                <h2>
                    Send a Message
                </h2>

                <p>
                    Fill out the form below and our team will get back to you shortly.
                </p>

                <form method="POST" action="message" id="message-form">
                    @csrf
                    @if(auth()->user())
                    <input name="user_id" hidden value="{{auth()->user()->id}}">
                    @endif
                    <div class="form-group">

                        <label>Name</label>

                        <input name="name" type="text" class="form-control" placeholder="Enter your full name">

                    </div>

                    <div class="form-group">

                        <label>Email</label>

                        <input type="email" name="email" class="form-control" placeholder="Enter your email address">

                    </div>

                    <div class="form-group">

                        <label>Phone</label>

                        <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">

                    </div>

                    <div class="form-group">

                        <label>Message</label>

                        <textarea class="form-control" placeholder="Write your message here" name="message"></textarea>

                    </div>
                    

                    @if(auth()->user())
                        <button type="submit" class="btn">
                            Send Message
                            <i data-lucide="arrow-right"></i>
                    </button>
                    
                    @else
                        <a type="button" href="{{route('login',['redirect' => url()->current().'#message-form'])}}" class="btn">
                            Login to message 
                            <i data-lucide="arrow-right"></i>
                        </a>
                    @endif
                </form>

            </div>

        </div>

        <!-- MAP -->

        <div class="map-band" data-reveal>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.5158256948985!2d77.0969676755023!3d28.674212575642038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d058143b812c9%3A0xdc7a549b5b2d35ae!2sSUNDAR%20MOTORS%20%26%20REAL%20ESTATE!5e0!3m2!1sen!2sin!4v1779541813726!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </div>

</section>

@include('components.footer')

<script>

lucide.createIcons();

const io = new IntersectionObserver((entries)=>{

    entries.forEach((e)=>{

        if(e.isIntersecting){

            e.target.classList.add('in');
            io.unobserve(e.target);

        }

    });

},{
    threshold:0.12
});

document.querySelectorAll('[data-reveal]').forEach((el)=>{
    io.observe(el);
});

</script>

</body>
</html>