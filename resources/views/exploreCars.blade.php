<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SundarMotors - explore Cars</title>
</head>
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

  margin-bottom:10px;

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
    font-size:1rem;
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
<body>
    @include('components.navigation-bar')


<div style="display:flex;gap:2rem;overflow-x:auto;padding-bottom:1rem;margin-bottom:3rem;justify-content:center;padding-top:100px;flex-wrap:wrap">

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
        <span style="font-size: 1.5rem;">₹{{$car -> price}}</span>
      </div>

      <a href="/details/{{$car->id}}" class="qazplm-viewbutton">
        View →
      </a>

    </div>

  </div>

</div>

    @endforeach

</div>

{{ $cars->links('vendor.pagination.custom') }}

    @include('components.footer')
</body>
</html>