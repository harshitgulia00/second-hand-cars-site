
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>About — SunderMotors</title>
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
    --amber-deep:oklch(0.58 0.20 50);
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
    box-sizing:border-box;
    margin:0;
    padding:0;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family:'Inter',sans-serif;
    background:var(--bg);
    color:var(--fg);
    background-image:var(--texture);
    background-attachment:fixed;
    overflow-x:hidden;
}

h1,h2,h3,h4{
    font-family:'Syne',sans-serif;
    letter-spacing:-0.02em;
    line-height:1.1;
}

a{
    color:inherit;
    text-decoration:none;
}

img{
    max-width:100%;
    display:block;
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
    position:relative;
}

.section-eyebrow{
    font-size:13px;
    letter-spacing:0.2em;
    text-transform:uppercase;
    color:var(--amber);
    font-weight:600;
    margin-bottom:16px;
}

.section-title{
    font-size:clamp(32px,4vw,48px);
    font-weight:700;
    margin-bottom:20px;
}

.section-desc{
    font-size:16px;
    color:var(--muted);
    line-height:1.7;
    max-width:600px;
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
    width:480px;
    height:480px;
    border-radius:50%;
    background:radial-gradient(circle,oklch(0.78 0.18 65 / 0.35),transparent 70%);
    filter:blur(40px);
    animation:float 8s ease-in-out infinite;
    pointer-events:none;
}

.orb-1{
    top:-100px;
    right:-80px;
}

.orb-2{
    bottom:-150px;
    left:-100px;
    animation-delay:-4s;
    background:radial-gradient(circle,oklch(0.55 0.20 45 / 0.3),transparent 70%);
}

@keyframes float{
    0%,100%{
        transform:translateY(0) scale(1);
    }

    50%{
        transform:translateY(-30px) scale(1.05);
    }
}

.hero-content{
    position:relative;
    text-align:center;
    max-width:820px;
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
    font-size:13px;
    font-weight:500;
    color:var(--amber);
    margin-bottom:24px;
}

.badge .dot{
    width:6px;
    height:6px;
    border-radius:50%;
    background:var(--amber);
    box-shadow:0 0 10px var(--amber);
}

.hero h1{
    font-size:clamp(40px,6vw,72px);
    font-weight:800;
    margin-bottom:24px;
}

.hero p.lead{
    font-size:18px;
    color:var(--muted);
    line-height:1.6;
    max-width:640px;
    margin:0 auto;
}

/* STORY */
.story-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

.story-img{
    position:relative;
    border-radius:24px;
    overflow:hidden;
    aspect-ratio:4/5;
    box-shadow:var(--shadow-card);
}

.story-img img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.story-img::after{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(180deg,transparent 50%,oklch(0.14 0.012 60 / 0.6));
}

.story p{
    color:var(--muted);
    line-height:1.8;
    margin-bottom:16px;
}

/* STATS */
.stats{
    background:linear-gradient(180deg,transparent,oklch(0.18 0.015 60),transparent);
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:24px;
}

.stat{
    text-align:center;
    padding:32px 20px;
    border-radius:20px;
    background:var(--card);
    border:1px solid var(--border);
    transition:all .5s var(--ease);
}

.stat:hover{
    transform:translateY(-6px);
    border-color:oklch(0.78 0.18 65 / 0.5);
    box-shadow:var(--shadow-amber);
}

.stat .num{
    font-family:'Syne';
    font-size:48px;
    font-weight:800;
    background:var(--gradient-amber);
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
    line-height:1;
}

.stat .label{
    margin-top:10px;
    color:var(--muted);
    font-size:14px;
}

/* VALUES */
.values-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:24px;
    margin-top:48px;
}

.value{
    padding:32px;
    border-radius:20px;
    background:var(--card);
    border:1px solid var(--border);
    transition:all .5s var(--ease);
    position:relative;
    overflow:hidden;
}

.value:hover{
    transform:translateY(-6px);
    border-color:oklch(0.78 0.18 65 / 0.4);
    box-shadow:var(--shadow-amber);
}

.value::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    right:0;
    height:2px;
    background:var(--gradient-amber);
    transform:scaleX(0);
    transform-origin:left;
    transition:transform .5s var(--ease);
}

.value:hover::before{
    transform:scaleX(1);
}

.value .icon{
    width:52px;
    height:52px;
    border-radius:14px;
    background:oklch(0.78 0.18 65 / 0.12);
    display:grid;
    place-items:center;
    color:var(--amber);
    margin-bottom:20px;
}

.value h3{
    font-size:20px;
    margin-bottom:10px;
}

.value p{
    color:var(--muted);
    font-size:14px;
    line-height:1.6;
}

/* TIMELINE */
.timeline{
    position:relative;
    max-width:780px;
    margin:48px auto 0;
    padding-left:32px;
}

.timeline::before{
    content:'';
    position:absolute;
    left:8px;
    top:8px;
    bottom:8px;
    width:2px;
    background:linear-gradient(180deg,var(--amber),transparent);
}

.tl-item{
    position:relative;
    padding:0 0 40px 32px;
}

.tl-item:last-child{
    padding-bottom:0;
}

.tl-item::before{
    content:'';
    position:absolute;
    left:-32px;
    top:6px;
    width:18px;
    height:18px;
    border-radius:50%;
    background:var(--gradient-amber);
    box-shadow:0 0 0 4px var(--bg),0 0 20px oklch(0.78 0.18 65 / 0.5);
}

.tl-year{
    font-family:'Syne';
    font-size:14px;
    color:var(--amber);
    font-weight:700;
    margin-bottom:6px;
}

.tl-item h4{
    font-size:20px;
    margin-bottom:8px;
}

.tl-item p{
    color:var(--muted);
    font-size:14px;
    line-height:1.6;
}

/* TEAM */
.team-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:24px;
    margin-top:48px;
}

.member{
    border-radius:20px;
    overflow:hidden;
    background:var(--card);
    border:1px solid var(--border);
    transition:all .5s var(--ease);
}

.member:hover{
    transform:translateY(-6px);
    box-shadow:var(--shadow-amber);
    border-color:oklch(0.78 0.18 65 / 0.4);
}

.member-img{
    aspect-ratio:1;
    overflow:hidden;
    position:relative;
}

.member-img img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:transform .8s var(--ease);
}

.member:hover .member-img img{
    transform:scale(1.06);
}

.member-info{
    padding:20px;
}

.member h4{
    font-size:18px;
}

.member .role{
    font-size:13px;
    color:var(--amber);
    margin-top:4px;
}

/* RESPONSIVE */
@media (max-width:880px){

    .story-grid{
        grid-template-columns:1fr;
        gap:40px;
    }

    .stats-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .values-grid{
        grid-template-columns:1fr;
    }

    .team-grid{
        grid-template-columns:1fr;
    }
}

@media (max-width:580px){

    .stats-grid{
        grid-template-columns:1fr;
    }

    .hero{
        padding:100px 0 80px;
    }

    section{
        padding:70px 0;
    }
}

/* REVEAL */
[data-reveal]{
    opacity:0;
    transform:translateY(28px);
    transition:opacity .9s var(--ease),transform .9s var(--ease);
}

[data-reveal].in{
    opacity:1;
    transform:none;
}
</style>
</head>
<body>
@include('components.navigation-bar')
<!-- HERO -->
<section class="hero">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <div class="container hero-content">
        <span class="badge" data-reveal>
            <span class="dot"></span>
            About SunderMotors
        </span>

        <h1 data-reveal>
            Driving Trust in
            <span class="text-amber">Pre-Owned Excellence</span>
        </h1>

        <p class="lead" data-reveal>
            For over a decade, we've redefined what it means to buy and sell second-hand cars — combining transparency, technology, and a touch of craft to make every transaction feel premium.
        </p>
    </div>
</section>

<!-- STORY -->
<section>
    <div class="container story-grid story">

        <div data-reveal>
            <div class="section-eyebrow">Our Story</div>

            <h2 class="section-title">
                Born from a love of
                <span class="text-amber">honest deals</span>
            </h2>

            <p>
                SunderMotors started in 2014 in a small garage in Bengaluru, with one mission — give buyers a place they could trust, and sellers a price they deserved.
            </p>

            <p>
                Today, we've grown into one of India's most respected pre-owned dealerships, with thousands of verified cars on the road and a network of trusted partners across 20+ cities.
            </p>

            <p>
                Every car we list is hand-inspected. Every deal we close is documented. Every customer becomes part of the family.
            </p>
        </div>

        <div class="story-img" data-reveal>
            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=800&q=80" alt="showroom">
        </div>

    </div>
</section>

<!-- STATS -->
<section class="stats">
    <div class="container">

        <div class="stats-grid">

            <div class="stat" data-reveal>
                <div class="num">12K+</div>
                <div class="label">Cars Delivered</div>
            </div>

            <div class="stat" data-reveal>
                <div class="num">98%</div>
                <div class="label">Happy Customers</div>
            </div>

            <div class="stat" data-reveal>
                <div class="num">20+</div>
                <div class="label">Cities Covered</div>
            </div>

            <div class="stat" data-reveal>
                <div class="num">10y</div>
                <div class="label">Years of Trust</div>
            </div>

        </div>

    </div>
</section>

<!-- VALUES -->
<section>
    <div class="container">

        <div style="text-align:center;max-width:640px;margin:0 auto" data-reveal>
            <div class="section-eyebrow">What We Stand For</div>

            <h2 class="section-title">
                Values that move us
                <span class="text-amber">forward</span>
            </h2>

            <p class="section-desc" style="margin:0 auto">
                Six principles guide every car we list, every conversation we have, and every key we hand over.
            </p>
        </div>

        <div class="values-grid">

            <div class="value" data-reveal>
                <div class="icon"><i data-lucide="shield-check"></i></div>
                <h3>Transparency</h3>
                <p>Full inspection reports, real photos, accurate history — no hidden surprises.</p>
            </div>

            <div class="value" data-reveal>
                <div class="icon"><i data-lucide="award"></i></div>
                <h3>Quality First</h3>
                <p>200-point checks before any car enters our inventory.</p>
            </div>

            <div class="value" data-reveal>
                <div class="icon"><i data-lucide="handshake"></i></div>
                <h3>Fair Pricing</h3>
                <p>Market-based pricing for buyers and sellers — backed by data.</p>
            </div>

        </div>

    </div>
</section>

<!-- TIMELINE -->
<section style="background:linear-gradient(180deg,transparent,oklch(0.18 0.015 60),transparent)">
    <div class="container">

        <div style="text-align:center;max-width:640px;margin:0 auto" data-reveal>
            <div class="section-eyebrow">Our Journey</div>

            <h2 class="section-title">
                Milestones along the
                <span class="text-amber">road</span>
            </h2>
        </div>

        <div class="timeline">

            <div class="tl-item" data-reveal>
                <div class="tl-year">2014</div>
                <h4>The First Garage</h4>
                <p>Started with 5 cars and a handshake promise of transparency.</p>
            </div>

            <div class="tl-item" data-reveal>
                <div class="tl-year">2017</div>
                <h4>1,000 Cars Sold</h4>
                <p>Crossed our first major milestone with a 96% satisfaction rate.</p>
            </div>

            <div class="tl-item" data-reveal>
                <div class="tl-year">2026</div>
                <h4>The Next Chapter</h4>
                <p>Launching AI-powered car matching and instant valuation tools.</p>
            </div>

        </div>

    </div>
</section>

<!-- TEAM -->

@include('components.CTA')
@include('components.footer')

<script>

lucide.createIcons();

const io = new IntersectionObserver((entries) => {

    entries.forEach((e) => {

        if(e.isIntersecting){
            e.target.classList.add('in');
            io.unobserve(e.target);
        }

    });

},{
    threshold:0.12
});


document.querySelectorAll('[data-reveal]').forEach((el) => {
    io.observe(el);
});

</script>

</body>
</html>
