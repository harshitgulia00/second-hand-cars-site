<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#000;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.container{
    width:100%;
    max-width:450px;
    background:#111;
    border:1px solid #f59e0b;
    border-radius:15px;
    padding:35px;
    box-shadow:0 0 20px rgba(245,158,11,0.2);
}

.desc{
    color:#ccc;
    font-size:14px;
    line-height:1.6;
    margin-bottom:25px;
}

.status{
    background:rgba(34,197,94,0.1);
    color:#22c55e;
    padding:12px;
    border-radius:10px;
    margin-bottom:20px;
    font-size:14px;
}

.form-group{
    margin-bottom:20px;
}

label{
    display:block;
    margin-bottom:8px;
    color:#f59e0b;
    font-size:15px;
    font-weight:bold;
}

input{
    width:100%;
    padding:14px;
    border-radius:10px;
    border:1px solid #333;
    background:#000;
    color:#fff;
    outline:none;
    font-size:15px;
    transition:0.3s;
}

input:focus{
    border-color:#f59e0b;
    box-shadow:0 0 10px rgba(245,158,11,0.3);
}

.error{
    color:red;
    font-size:13px;
    margin-top:6px;
}

.actions{
    display:flex;
    justify-content:flex-end;
    margin-top:25px;
}

button{
    background:#f59e0b;
    color:#000;
    border:none;
    padding:13px 22px;
    border-radius:10px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#ffb81c;
}

</style>
</head>

<body>

<div class="container">

    <div class="desc">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">

        @csrf

        <!-- Email -->
        <div class="form-group">

            <label for="email">
                {{ __('Email') }}
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
            >

            @error('email')
                <p class="error">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="actions">

            <button type="submit">
                {{ __('Email Password Reset Link') }}
            </button>

        </div>

    </form>

</div>

<script>

// optional tiny animation

document.querySelector("form")
.addEventListener("submit", function(){

    var button =
        document.querySelector("button");

    button.innerHTML = "Sending...";

});

</script>

</body>
</html>