<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/buyRequest" method="POST">
    @csrf

    <input type="hidden" name="car_id" value="{{$details->id}}">

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