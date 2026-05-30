<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SunderMotors Footer</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#110c07;
    font-family:'Inter',sans-serif;
    color:#f5ecdf;
}

/* ================= FOOTER ================= */

.footer{
    width:100%;
    background:
        radial-gradient(circle at top left, rgba(244,169,58,0.08), transparent 40%),
        radial-gradient(circle at bottom right, rgba(196,122,29,0.08), transparent 45%),
        #1a140d;
    border-top:1px solid rgba(255,200,120,0.12);
    padding:80px 25px 25px;
    overflow:hidden;
}

/* ================= GRID ================= */

.footer-container{
    max-width:1200px;
    margin:auto;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.5fr 1fr 1fr 1.2fr;
    gap:50px;
}

/* ================= BRAND ================= */

.footer-brand-logo{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:18px;
}

.footer-brand-logo img{
    width:50px;
    height:50px;
    object-fit:cover;
    border-radius:12px;
}

.footer-brand-name{
    font-family:'Syne',sans-serif;
    font-size:1.7rem;
    font-weight:800;
    color:#f4a93a;
}

.footer-brand-name span{
    color:#f5ecdf;
}

.footer-brand-desc{
    color:#a89684;
    line-height:1.7;
    max-width:320px;
    font-size:15px;
}

/* ================= TITLES ================= */

.footer-title{
    font-size:0.9rem;
    text-transform:uppercase;
    letter-spacing:0.15em;
    color:#f4a93a;
    margin-bottom:22px;
    font-weight:700;
}

/* ================= LINKS ================= */

.footer-links{
    list-style:none;
}

.footer-links li{
    margin-bottom:14px;
}

.footer-links a{
    text-decoration:none;
    color:#a89684;
    transition:0.3s;
    position:relative;
}

.footer-links a:hover{
    color:#f5ecdf;
    padding-left:8px;
}

/* ================= CONTACT ================= */

.footer-contact-item{
    display:flex;
    gap:12px;
    margin-bottom:18px;
    color:#a89684;
    line-height:1.6;
    font-size:15px;
}

/* ================= SOCIAL ================= */

.footer-socials{
    display:flex;
    gap:12px;
    margin-top:25px;
}

.footer-social{
    width:42px;
    height:42px;
    border-radius:10px;
    background:#221913;
    border:1px solid rgba(255,200,120,0.12);

    display:flex;
    justify-content:center;
    align-items:center;

    color:#a89684;
    cursor:pointer;
    transition:0.3s;
}

.footer-social:hover{
    background:linear-gradient(135deg,#f4c14a,#c47a1d);
    color:#1a140d;
    transform:translateY(-3px);
}

/* ================= BOTTOM ================= */

.footer-divider{
    height:1px;
    background:rgba(255,200,120,0.12);
    margin:45px 0 25px;
}

.footer-bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:15px;
    color:#a89684;
    font-size:14px;
}

.footer-bottom-links{
    display:flex;
    gap:24px;
}

.footer-bottom-links a{
    text-decoration:none;
    color:#a89684;
    transition:0.3s;
}

.footer-bottom-links a:hover{
    color:#f4a93a;
}

/* ================= REVEAL ================= */

.reveal{
    opacity:0;
    transform:translateY(30px);
    transition:0.8s ease;
}

.reveal.active{
    opacity:1;
    transform:translateY(0);
}

/* ================= RESPONSIVE ================= */

@media(max-width:900px){

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

}

@media(max-width:400px){

   .footer-text-logo{
        font-size:0.8rem;
    }

}

@media(max-width:600px){

    .footer-grid{
        grid-template-columns:1fr;
    }

    .footer-bottom{
        flex-direction:column;
        align-items:flex-start;
    }

}

</style>
</head>

<body>

<footer class="footer">



    <!-- MAIN -->

    <div class="footer-container">

        <div class="footer-grid">

            <!-- BRAND -->

            <div class="reveal">

                <div class="footer-brand-logo">

                    <img src="{{ asset('build/assets/logo.png') }}" alt="Logo">

                    <div class="footer-brand-name">
                        <i class="footer-text-logo">Sunder<span>Motors</span></i>
                    </div>

                </div>

                <p class="footer-brand-desc">
                    India's trusted marketplace for premium pre-owned cars. Verified inventory, fair pricing, and zero hassle.
                </p>

                <div class="footer-socials">

                    <a href="https://www.instagram.com/sundarmotors1?igsh=ZGlzeGFzNnVmcGdx&utm_source=qr" class="footer-social"><i class='fa-brands fa-instagram' style='font-size:36px'></i></a>
                    <a href="https://www.facebook.com/share/1DFkL9KQBm/?mibextid=wwXIfr" class="footer-social"><i class='fa-brands fa-facebook' style='font-size:36px'></i></a>
                    <a href="https://www.threads.com/@sundarmotors1" class="footer-social"><i class='fa-brands fa-threads' style='font-size:36px'></i></a>

                </div>

            </div>

            <!-- QUICK LINKS -->

            <div class="reveal">

                <div class="footer-title">
                    Quick Links
                </div>

                <ul class="footer-links">

                    <li><a href="/">Home</a></li>
                    <li><a href="/explore">Explore Cars</a></li>
                    <li><a href="/sellCar">Sell Your Car</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact</a></li>

                </ul>

            </div>

            <!-- SUPPORT -->

            <div class="reveal">

                <div class="footer-title">
                    Support
                </div>

                <ul class="footer-links">

                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Financing</a></li>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">RC Transfer</a></li>
                    <li><a href="#">FAQs</a></li>

                </ul>

            </div>

            <!-- CONTACT -->

            <div class="reveal">

                <div class="footer-title">
                    Get in Touch
                </div>

                <div class="footer-contact-item">
                    📍shop no. 47, near radha krishna mandir, A 2 Block, Paschim Vihar, New delhi, Delhi, 110063

                </div>

                <div class="footer-contact-item">
                    📞<a style="color:#a89684" href="tel:+91 8888886078">+918888886078</a>|
                        <a style="color:#a89684" href="tel:+91 9871735020">+919871735020</a>
                </div>

                <div class="footer-contact-item">
                    ✉ <a style="color:#a89684" href="mailto:sundarmotors1@gmail.com">sundarmotors1@gmail.com</a>
                </div>

            </div>

        </div>

        <!-- BOTTOM -->

        <div class="footer-divider"></div>

        <div class="footer-bottom">

            <div>
                © 2026 SunderMotors. All rights reserved.
            </div>

            <div class="footer-bottom-links">

                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Cookies</a>

            </div>

        </div>

    </div>

</footer>

<script>

const observer =
    new IntersectionObserver(function(entries){

        entries.forEach(function(entry){

            if(entry.isIntersecting){

                entry.target.classList.add("active");

            }

        });

    }, {
        threshold:0.15
    });

document
.querySelectorAll(".reveal")
.forEach(function(el){

    observer.observe(el);

});

</script>

</body>
</html>