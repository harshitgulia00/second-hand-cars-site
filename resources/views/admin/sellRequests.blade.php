<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sell Requests</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

@include('admin.adminPartials.navbar')

<div class="container mt-3">

    <ul class="nav nav-pills" role="tablist">

        <li class="nav-item">
            <a onclick="pendingRequests()"
               class="nav-link active"
               data-bs-toggle="pill"
               href="#pending">

                Pending Requests

            </a>
        </li>

        <li class="nav-item">
            <a onclick="acceptedRequests()"
               class="nav-link"
               data-bs-toggle="pill"
               href="#accepted">

                Accepted Requests

            </a>
        </li>

        <li class="nav-item">
            <a onclick="rejectedRequests()"
               class="nav-link"
               data-bs-toggle="pill"
               href="#rejected">

                Rejected Requests

            </a>
        </li>

    </ul>



    <div class="tab-content m-3">

        <div id="pending" class="container tab-pane active">
            <br>
        </div>

        <div id="accepted" class="container tab-pane fade">
            <br>
        </div>

        <div id="rejected" class="container tab-pane fade">
            <br>
        </div>

    </div>

</div>

<script>

$(document).ready(function(){

    pendingRequests();

});



function pendingRequests(){

    $.get('/api/sellRequests',function(response){

        if(response.success){

            let sellRequests=response.data;
            console.log(sellRequests)

            let html='';

            for(let sellRequest of sellRequests){

                html+=`

                <div class="card shadow mb-3">

                    <div class="card-body">

                        <h4>
                            ${sellRequest.name}
                        </h4>

                        <p>
                            ${sellRequest.email}
                            ||
                            ${sellRequest.phone}
                        </p>

                        <hr>

                        <p>
                            <b>Brand:</b>
                            ${sellRequest.brand}
                        </p>

                        <p>
                            <b>Model:</b>
                            ${sellRequest.model}
                        </p>

                        <p>
                            <b>Year:</b>
                            ${sellRequest.year}
                        </p>

                        <p>
                            <b>Expected Price:</b>
                            ₹${sellRequest.expected_price}
                        </p>

                        <p>
                            <b>Description:</b>
                            ${sellRequest.description}
                        </p>

                        <button
                            onclick="accept(${sellRequest.id})"
                            class="btn btn-success">

                            Accept

                        </button>

                        <button
                            onclick="reject(${sellRequest.id})"
                            class="btn btn-danger">

                            Reject

                        </button>

                    </div>

                </div>

                `;

            }

            $('#pending').html(html);

        }

    });

}




function acceptedRequests(){

    $.get('/api/sellRequests/accepted',function(response){

        if(response.success){

            let sellRequests=response.data;

            let html='';

            for(let sellRequest of sellRequests){

                html+=`

                <div class="card border-success mb-3">

                    <div class="card-body">

                        <h4>
                            ${sellRequest.name}
                        </h4>

                        <p>
                            ${sellRequest.email}
                            ||
                            ${sellRequest.phone}
                        </p>

                        <hr>

                        <p>
                            <b>Brand:</b>
                            ${sellRequest.brand}
                        </p>

                        <p>
                            <b>Model:</b>
                            ${sellRequest.model}
                        </p>

                        <p>
                            <b>Year:</b>
                            ${sellRequest.year}
                        </p>

                        <p>
                            <b>Expected Price:</b>
                            ₹${sellRequest.expected_price}
                        </p>

                    </div>

                </div>

                `;

            }

            $('#accepted').html(html);

        }

    });

}




function rejectedRequests(){

    $.get('/api/sellRequests/rejected',function(response){

        if(response.success){

            let sellRequests=response.data;

            let html='';

            for(let sellRequest of sellRequests){

                html+=`

                <div class="card border-danger mb-3">

                    <div class="card-body">

                        <h4>
                            ${sellRequest.name}
                        </h4>

                        <p>
                            ${sellRequest.email}
                            ||
                            ${sellRequest.phone}
                        </p>

                        <hr>

                        <p>
                            <b>Brand:</b>
                            ${sellRequest.brand}
                        </p>

                        <p>
                            <b>Model:</b>
                            ${sellRequest.model}
                        </p>

                        <p>
                            <b>Year:</b>
                            ${sellRequest.year}
                        </p>

                        <p>
                            <b>Expected Price:</b>
                            ₹${sellRequest.expected_price}
                        </p>

                    </div>

                </div>

                `;

            }

            $('#rejected').html(html);

        }

    });

}




function accept(id){
        let url = `/api/sellRequests/accept/${id}`
        $.get(url,function(response){
            if(response.success){
                pendingRequests();
            }
        })
    }




function accept(id){
        let url = `/api/sellRequests/reject/${id}`
        $.get(url,function(response){
            if(response.success){
                pendingRequests();
            }
        })
    }


</script>
<center style="margin: 20px;">
    @include('admin.adminPartials.footer')
</center>
</body>
</html>