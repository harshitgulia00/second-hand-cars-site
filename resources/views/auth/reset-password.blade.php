<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>

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

.title{
    color:#f59e0b;
    font-size:28px;
    font-weight:bold;
    margin-bottom:25px;
    text-align:center;
}

.form-group{
    margin-bottom:22px;
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

.match-error{
    color:red;
    font-size:13px;
    margin-top:6px;
    display:none;
}

</style>
</head>

<body>

<div class="container">

    <h2 class="title">
        Reset Password
    </h2>

    <form method="POST" action="{{ route('password.store') }}" id="resetForm">

        @csrf

        <!-- Password Reset Token -->
        <input 
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
        >

        <!-- Email -->
        <div class="form-group">

            <label for="email">
                {{ __('Email') }}
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email', $request->email) }}"
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

        <!-- Password -->
        <div class="form-group">

            <label for="password">
                {{ __('Password') }}
            </label>

            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="new-password"
            >

            @error('password')
                <p class="error">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <!-- Confirm Password -->
        <div class="form-group">

            <label for="password_confirmation">
                {{ __('Confirm Password') }}
            </label>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
            >

            @error('password_confirmation')
                <p class="error">
                    {{ $message }}
                </p>
            @enderror

            <p class="match-error" id="matchError">
                Passwords do not match
            </p>

        </div>

        <!-- Button -->
        <div class="actions">

            <button type="submit">
                {{ __('Reset Password') }}
            </button>

        </div>

    </form>

</div>

<script>

document
.getElementById("resetForm")
.addEventListener("submit", function(e){

    var password =
        document.getElementById("password").value;

    var confirmPassword =
        document.getElementById("password_confirmation").value;

    var matchError =
        document.getElementById("matchError");

    if(password !== confirmPassword){

        e.preventDefault();

        matchError.style.display = "block";

        return;
    }

    matchError.style.display = "none";

    document.querySelector("button").innerHTML =
        "Resetting...";
});

</script>

</body>
</html>