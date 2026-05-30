<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Car Details</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>


*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f8fafc;
    color:#111827;
}

.container{
    width:100%;
    max-width:1400px;
    margin:90px auto 40px auto;
    padding:0 20px;
}

.car-card{
    background:#fff;
    border-radius:24px;
    overflow:hidden;
    border:1px solid #ede9fe;
    box-shadow:0 15px 50px rgba(109,40,217,.08);
}

.top-section{
    display:grid;
    grid-template-columns:1.1fr 1fr;
}

.image-section{
    background:#f1f5f9;
}

.image-section img{
    width:100%;
    height:100%;
    min-height:500px;
    max-height:650px;
    object-fit:cover;
    display:block;
}

.info-section{
    padding:40px;
}

.title{
    font-size:38px;
    font-weight:700;
    margin-bottom:10px;
    color:#111827;
}

.price{
    font-size:40px;
    font-weight:700;
    margin-bottom:25px;

    background:linear-gradient(
        135deg,
        #6d28d9,
        #8b5cf6
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.status{
    display:inline-block;
    padding:8px 18px;
    border-radius:30px;
    font-size:13px;
    font-weight:600;
    margin-bottom:30px;
}

.available{
    background:#dcfce7;
    color:#16a34a;
}

.sold{
    background:#fee2e2;
    color:#dc2626;
}

.specs{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
}

.spec{
    background:white;
    border-radius:16px;
    padding:18px;
    border:1px solid #ede9fe;
    box-shadow:0 4px 12px rgba(109,40,217,.05);
}

.spec-title{
    color:#64748b;
    font-size:13px;
}

.spec-value{
    margin-top:6px;
    color:#111827;
    font-size:18px;
    font-weight:600;
}

.buttons{
    display:flex;
    gap:15px;
    margin-top:30px;
}

.btn{
    text-decoration:none;
    padding:14px 24px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
    text-align:center;
}

.buy-btn{
    background:linear-gradient(
        135deg,
        #6d28d9,
        #8b5cf6
    );

    color:white;
}

.back-btn{
    background:#111827;
    color:white;
}

.btn:hover{
    transform:translateY(-2px);
}

.description{
    padding:40px;
    border-top:1px solid #e5e7eb;
}

.description h2{
    margin-bottom:15px;
    color:#111827;
}

.description p{
    line-height:1.9;
    color:#475569;
}

/* Tablet */

@media(max-width:992px){

    .top-section{
        grid-template-columns:1fr;
    }

    .image-section img{
        min-height:350px;
        max-height:450px;
    }

    .info-section{
        padding:25px;
    }

    .description{
        padding:25px;
    }

}

/* Mobile */

@media(max-width:576px){

    body{
        padding:0;
    }

    .container{
        margin-top:80px;
        padding:10px;
    }

    .title{
        font-size:26px;
    }

    .price{
        font-size:30px;
    }

    .specs{
        grid-template-columns:1fr;
    }

    .buttons{
        flex-direction:column;
    }

    .btn{
        width:100%;
    }

    .image-section img{
        min-height:250px;
    }

}

</style>


</head>
<body>
@include('components.navigation-bar')
<div class="container" style="margin-top:100px;margin-bottom:70px;">

    <div class="car-card">

        <div class="top-section">

            <div class="image-section">

                <img src="{{$details->secure_url}}" alt="Car">

            </div>

            <div class="info-section">

                <h1 class="title">
                    {{$details->title}}
                </h1>

                

                <div class="price">
                    ₹{{$details->price}}
                </div>

                <span class="status available">
                    Available
                </span>

                <div class="specs">

                    <div class="spec">
                        <div class="spec-title">Brand</div>
                        <div class="spec-value">{{$details->brand}}</div>
                    </div>

                    <div class="spec">
                        <div class="spec-title">Model</div>
                        <div class="spec-value">{{$details->model}}</div>
                    </div>

                    <div class="spec">
                        <div class="spec-title">Year</div>
                        <div class="spec-value">{{$details->year}}</div>
                    </div>

                    <div class="spec">
                        <div class="spec-title">Fuel Type</div>
                        <div class="spec-value">{{$details->fuel_type}}</div>
                    </div>

                    <div class="spec">
                        <div class="spec-title">KM Driven</div>
                        <div class="spec-value">{{$details->km_driven}}</div>
                    </div>

                </div>

                <div class="buttons">

                    <a href="#" class="btn buy-btn">
                        Buy Now
                    </a>

                    <button onclick="saveCar({{$details->id}})" class="btn back-btn">
                        Save Car
                    </button>

                </div>

            </div>

        </div>

        <div class="description">

            <h2>
                Vehicle Description
            </h2>

            <p>
                <b>{{$details->brand}} {{$details->title}} {{$details->model}}</b><br><br>
                <span>{{$details->description}}</span>
            </p>

        </div>

    </div>

</div>
@include('components.footer')
<script>

function saveCar(id){
    $.get('/api/saveCar/{{auth()->user()->id}}/{{$details->id}}',function(response){
        if(response){
            alert(response.msg);
        }
    })
}

</script>
</body>
</html>