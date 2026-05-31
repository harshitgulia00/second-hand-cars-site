<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f8fafc;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

form{
    width:100%;
    max-width:600px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
    border:1px solid #e5e7eb;
}

form div{
    margin-bottom:20px;
}

label{
    display:block;
    margin-bottom:8px;
    font-size:14px;
    font-weight:600;
    color:#374151;
}

input,
textarea{
    width:100%;
    padding:14px;
    border:1px solid #d1d5db;
    border-radius:12px;
    outline:none;
    font-size:15px;
    transition:.3s;
}

input:focus,
textarea:focus{
    border-color:#6d28d9;
    box-shadow:0 0 0 4px rgba(109,40,217,.12);
}

textarea{
    resize:none;
}

button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:linear-gradient(
        135deg,
        #6d28d9,
        #8b5cf6
    );
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(109,40,217,.25);
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Request</title>
</head>
<body>

<form action="/buyRequest" method="POST">
    @csrf

    <input type="hidden" name="car_id" value="{{$id}}">

    <div>
        <label>Name</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label>Phone</label>
        <input type="text" name="phone" required>
    </div>

    <div>
        <label>Message</label>
        <textarea name="message" rows="5"></textarea>
    </div>

    <button type="submit">
        Send Buy Request
    </button>
</form>

</body>
</html>