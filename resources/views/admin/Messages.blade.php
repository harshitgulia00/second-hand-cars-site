<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

@include('admin.adminPartials.navbar')

<div class="container mt-4">

    <h2 class="mb-4">
        Contact Messages
    </h2>


    <ul class="nav nav-pills mb-3">

        <li class="nav-item">
            <a
                onclick="unreadMessages()"
                class="nav-link active"
                data-bs-toggle="pill"
                href="#unread">

                Unread Messages

            </a>
        </li>

        <li class="nav-item">
            <a
                onclick="readMessages()"
                class="nav-link"
                data-bs-toggle="pill"
                href="#read">

                Read Messages

            </a>
        </li>

    </ul>



    <div class="tab-content">

        <div
            id="unread"
            class="tab-pane active">

        </div>


        <div
            id="read"
            class="tab-pane fade">

        </div>

    </div>

</div>



<script>

$(document).ready(function(){

    unreadMessages();

});



function unreadMessages(){

    $.get('/api/messages/unread',function(response){

        if(response.success){

            let messages=response.data;

            let html='';

            for(let message of messages){

                html+=`

                <div class="card shadow mb-3">

                    <div class="card-body">

                        <h5>
                            ${message.name}
                        </h5>

                        <p>
                            <b>Email:</b>
                            ${message.email}
                        </p>

                        <p>
                            <b>Message:</b>
                            ${message.message}
                        </p>

                        <button
                            onclick="markAsRead(${message.id})"
                            class="btn btn-success">

                            Mark As Read

                        </button>

                    </div>

                </div>

                `;

            }

            $('#unread').html(html);

        }

    });

}




function readMessages(){

    $.get('/api/messages/read',function(response){

        if(response.success){

            let messages=response.data;

            let html='';

            for(let message of messages){

                html+=`

                <div class="card border-success mb-3">

                    <div class="card-body">

                        <h5>
                            ${message.name}
                        </h5>

                        <p>
                            <b>Email:</b>
                            ${message.email}
                        </p>

                        <p>
                            <b>Message:</b>
                            ${message.message}
                        </p>

                    </div>

                </div>

                `;

            }

            $('#read').html(html);

        }

    });

}




function markAsRead(id){

    $.get('/api/messages/read/'+id,function(response){

        if(response.success){

            unreadMessages();

        }

    });

}

</script>
<center style="margin: 20px;">
    @include('admin.adminPartials.footer')
</center>
</body>
</html>