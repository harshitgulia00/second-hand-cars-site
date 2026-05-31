<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@include('admin.adminPartials.navbar')
<div class="container mt-3">


  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a onclick="pendingRequests()" class="nav-link active" data-bs-toggle="pill" href="#pending">Pending Requests</a>
    </li>
    <li class="nav-item">
      <a onclick="acceptedRequests()" class="nav-link" data-bs-toggle="pill" href="#accepted">Accepted Requests</a>
    </li>
    <li class="nav-item">
      <a onclick="rejectedRequests()" class="nav-link" data-bs-toggle="pill" href="#rejected">Rejected Requests</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content m-3">
    <div id="pending" class="container tab-pane active"><br>

    </div>
    <div id="accepted" class="container tab-pane fade"><br>
      </div>
    <div id="rejected" class="container tab-pane fade"><br>
    
  </div>
</div>
<script>
    $(document).ready(function(){   
        pendingRequests();
    });
    function pendingRequests(){
        $.get('/api/buyRequests',function(response){
            if(response.success){
                let buyRequests = response.data;
                let html=``;
                for(let buyRequest of buyRequests){
                    html+=`
                        <div class="container bg-secondary text-white m-3 p-3 rounded">
                            <h4>` + buyRequest.name + `</h4>
                            <p>Car ID : `+ buyRequest.car_id +`</p>
                            <p>` + buyRequest.email + ` || ` + buyRequest.phone + `</p><p>` + buyRequest.message + `</p><br>
                            <button onclick="accept(` + buyRequest.id + `)" class="btn btn-success">Accept</button>
                            <button onclick="reject(` + buyRequest.id + `)" class="btn btn-danger">Reject</button>
                        </div>
                    `
            }
            $('#pending').html(html);}
        })
    }
    function acceptedRequests(){
        $.get('/api/buyRequests/accepted',function(response){
            if(response.success){
                let buyRequests = response.data;
                let html=``;
                for(let buyRequest of buyRequests){
                    html+=`
                        <div class="container bg-success text-white m-3 p-3 rounded">
                            <h4>` + buyRequest.name + `</h4>
                            <p>Car ID : `+ buyRequest.car_id +`</p>
                            <p>` + buyRequest.email + ` || ` + buyRequest.phone + `</p><p>` + buyRequest.message + `</p><br>
                        </div>
                    `
            }
            $('#accepted').html(html);}
        })
    }
    function rejectedRequests(){
        $.get('/api/buyRequests/rejected',function(response){
            if(response.success){
                let buyRequests = response.data;

                let html=``;
                for(let buyRequest of buyRequests){
                    html+=`
                        <div class="container bg-danger text-white m-3 p-3 rounded">
                            <h4>` + buyRequest.name + `</h4><br>
                            <p>Car ID : `+ buyRequest.car_id +`</p>
                            <p>` + buyRequest.email + ` || ` + buyRequest.phone + `</p><p>` + buyRequest.message + `</p><br>
                        </div>
                    `
            }
            $('#rejected').html(html);}
        })
    }
    function accept(id){
        let url = `/api/buyRequest/accept/${id}`
        $.get(url,function(response){
            if(response.success){
                pendingRequests();
            }
        })
    }

    function reject(id){
        let url = `/api/buyRequest/reject/${id}`
        $.get(url,function(response){
            if(response.success){
                pendingRequests();
            }
        })
    }
</script>
</body>
</html>
