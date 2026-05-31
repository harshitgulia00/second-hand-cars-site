<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:white;
    color:black;
}

/* NAVBAR */

.navbar{
    width:100%;
    height:70px;
    background:#111827;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 25px;
    position:sticky;
    top:0;
    z-index:1000;
    border-bottom:1px solid rgba(255,255,255,0.06);
}

.logo{
    font-size:24px;
    font-weight:700;
    color:white;
}

.menu-btn{
    font-size:28px;
    cursor:pointer;
    color:white;
}

/* PAGE */

.page{
    padding:30px;
}

/* CARD */

.table-card{
    background:white;
    color:black;
    border-radius:20px;
    padding:25px;
    overflow:hidden;
    box-shadow:0 0 30px rgba(0,0,0,0.25);
}


/* HEADER */

.table-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    gap:20px;
    flex-wrap:wrap;
}

.table-title{
    font-size:24px;
    font-weight:600;
}

.search-box{
    width:320px;
    max-width:100%;
}

.search-box input{
    width:100%;
    height:45px;
    border:none;
    outline:none;
    border-radius:12px;
    padding:0 15px;
    background:#1e293b;
    color:white;
    font-size:14px;
}

/* TABLE */

.table-wrapper{
    width:100%;
    overflow-x:auto;
}

.custom-table{
    width:100%;
    min-width:1200px;
    border-collapse:collapse;
}

.custom-table thead{
    background:#1e293b;
}

.custom-table th{
    color:#94a3b8;
    text-align:left;
    padding:18px;
    font-size:14px;
    font-weight:600;
    white-space:nowrap;
}

.custom-table td{
    padding:20px 18px;
    border-bottom:1px solid rgba(255,255,255,0.05);
    font-size:14px;
    color:blaack;
    white-space:nowrap;
}

.custom-table tr:hover{
    padding:20px 18px;
    border-bottom:1px solid rgba(255,255,255,0.05);
    font-size:14px;
    color:white;
    white-space:nowrap;
}


.custom-table tbody tr{
    transition:0.3s;
}

.custom-table tbody tr:hover{
    background:#1a2438;
}

/* STATUS */

.status{
    padding:7px 15px;
    border-radius:30px;
    font-size:12px;
    font-weight:600;
}

.available{
    background:rgba(34,197,94,0.15);
    color:#22c55e;
}

.sold{
    background:rgba(239,68,68,0.15);
    color:#ef4444;
}

/* BUTTONS */

.action-btns{
    display:flex;
    gap:10px;
}

.update-btn,
.delete-btn{
    border:none;
    outline:none;
    padding:10px 16px;
    border-radius:10px;
    font-size:13px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

.update-btn{
    background:#2563eb;
    color:white;
}

.update-btn:hover{
    background:#1d4ed8;
    transform:translateY(-2px);
}

.delete-btn{
    background:#dc2626;
    color:white;
}

.delete-btn:hover{
    background:#b91c1c;
    transform:translateY(-2px);
}

/* MOBILE */

@media(max-width:768px){

    .page{
        padding:15px;
    }

    .table-card{
        padding:15px;
    }

    .table-title{
        font-size:20px;
    }

    .custom-table th,
    .custom-table td{
        padding:14px;
        font-size:13px;
    }

    .action-btns{
        flex-direction:column;
    }

    .update-btn,
    .delete-btn{
        width:100%;
    }

}

</style>

</head>

<body>

<!-- NAVBAR -->

@include('admin.adminPartials.navbar')
<!-- PAGE -->

<div class="page">

    <div class="table-card">

        <div class="table-header">

            <div class="table-title">
                Cars Management
            </div>
            <div class="table-title">
                <a type="button" class="delete-btn" href="/admin/addCar">Add Car</a>
            </div>
        </div>

        <div class="table-wrapper">

            <table class="custom-table">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Price</th>
                        <th>KM Driven</th>
                        <th>Fuel</th>
                        <th>Car Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                </thead>

                <tbody id="content"></tbody>

            </table>

        </div>

    </div>

</div>

<script>

$(document).ready(function(){
    showcars();
});

function showcars(){
    $.get('/api/cars',function(response){

        var rows = '';

        for(var i in response.cars){

            var car = response.cars[i];

            rows += `
            
            <tr>

                <td>${car.id}</td>
                <td>${car.title}</td>
                <td>${car.brand}</td>
                <td>${car.model}</td>
                <td>${car.year}</td>
                <td>₹${car.price}</td>
                <td>${car.km_driven}</td>
                <td>${car.fuel_type}</td>
                <td><img style="width:100px;height:100px" loading="lazy" src="${car.secure_url}"></td>
                <td>

                    ${
                        car.sold == 1
                        ?
                        '<span class="status sold">Sold</span>'
                        :
                        '<span class="status available">Available</span>'
                    }

                </td>

                <td>

                    <div class="action-btns">

                       

                        <button type="button" onclick="deleteCar(${car.id})" class="delete-btn">
                            Delete
                        </button>

                    </div>

                </td>

            </tr>

            `;

        }

        $('#content').html(rows);

    });
}

function deleteCar(id){
    $.get('/api/deleteCar/'+id,function(response){
        alert(response.msg);
        showcars();
    })
}

</script>

</body>
</html>