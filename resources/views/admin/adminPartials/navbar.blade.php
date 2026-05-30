<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Responsive Navbar</title>



  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:Arial, Helvetica, sans-serif;
    }

    body{
      background:#f5f7fb;
    }

    .navbar{
      width:100%;
      background:#111827;
      padding:18px 25px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      position:sticky;
      top:0;
      z-index:999;
    }

    .logo{
      color:white;
      font-size:26px;
      font-weight:700;
      letter-spacing:1px;
    }

    .nav-links{
      display:flex;
      align-items:center;
      gap:30px;
      list-style:none;
    }

    .nav-links a{
      color:#d1d5db;
      text-decoration:none;
      font-size:15px;
      transition:0.3s;
      position:relative;
    }

    .nav-links a:hover{
      color:white;
    }

    .nav-links a::after{
      content:'';
      position:absolute;
      left:0;
      bottom:-6px;
      width:0%;
      height:2px;
      background:linear-gradient(135deg,#7c3aed,#2563eb);
      transition:0.3s;
    }

    .nav-links a:hover::after{
      width:100%;
    }

    .menu-btn{
      width:32px;
      display:none;
      flex-direction:column;
      gap:6px;
      cursor:pointer;
    }

    .menu-btn span{
      width:100%;
      height:3px;
      background:white;
      border-radius:20px;
      transition:0.3s;
    }



    @media(max-width:900px){

      .menu-btn{
        display:flex;
      }

      .nav-links{
        position:absolute;
        top:75px;
        left:0;
        width:100%;
        background:#111827;
        flex-direction:column;
        align-items:flex-start;
        padding:25px;
        gap:22px;
        display:none;
        border-top:1px solid rgba(255,255,255,0.08);
      }

      .nav-links.active{
        display:flex;
      }

    }

  </style>

</head>
<body>



  <nav class="navbar">

    <div class="logo">
      AdminPanel
    </div>



    <ul class="nav-links">

      <li>
        <a href="/admin"></a>
      </li>


      <li>
        <a href="/admin/cars">Cars</a>
      </li>

      <li>
        <a href="/admin/buyRequests">Buy Requests</a>
      </li>

      <li>
        <a href="/admin/sellRequests">Sell Requests</a>
      </li>

      <li>
        <a href="/admin/messages">Messages</a>
      </li>

    </ul>



    <div class="menu-btn">

      <span></span>
      <span></span>
      <span></span>

    </div>

  </nav>




  <script>

    $(function(){

      $('.menu-btn').click(function(){

        $('.nav-links').toggleClass('active');

      });

    });

  </script>

</body>
</html>