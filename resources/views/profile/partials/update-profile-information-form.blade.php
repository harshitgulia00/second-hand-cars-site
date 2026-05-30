<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Information</title>

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
    max-width:500px;
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
}

.desc{
    color:#aaa;
    font-size:14px;
    margin-top:10px;
    line-height:1.5;
}

.form-group{
    margin-top:22px;
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

.verify-text{
    color:#ccc;
    font-size:14px;
    margin-top:12px;
    line-height:1.5;
}

.verify-btn{
    background:none;
    border:none;
    color:#f59e0b;
    cursor:pointer;
    text-decoration:underline;
    font-size:14px;
}

.verify-btn:hover{
    color:#ffcf5a;
}

.success-email{
    color:#22c55e;
    font-size:14px;
    margin-top:10px;
}

.actions{
    display:flex;
    align-items:center;
    gap:15px;
    margin-top:30px;
}

button.save-btn{
    background:#f59e0b;
    color:#000;
    border:none;
    padding:13px 22px;
    border-radius:10px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button.save-btn:hover{
    background:#ffb81c;
}

.success{
    color:#f59e0b;
    font-size:14px;
}

</style>
</head>

<body>

<div class="container">

    <h2 class="title">
        Profile Information
    </h2>

    <p class="desc">
        Update your account's profile information and email address.
    </p>

    <!-- Email Verification Form -->
    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Profile Update Form -->
    <form method="POST" action="{{ route('profile.update') }}">

        @csrf
        @method('PATCH')

        <!-- Name -->
        <div class="form-group">

            <label for="name">
                Name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
            >

            @error('name')
                <p class="error">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <!-- Email -->
        <div class="form-group">

            <label for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
            >

            @error('email')
                <p class="error">
                    {{ $message }}
                </p>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div>

                    <p class="verify-text">

                        Your email address is unverified.

                        <button 
                            form="send-verification"
                            class="verify-btn"
                        >
                            Click here to re-send the verification email.
                        </button>

                    </p>

                    @if (session('status') === 'verification-link-sent')

                        <p class="success-email">
                            A new verification link has been sent to your email address.
                        </p>

                    @endif

                </div>

            @endif

        </div>

        <!-- Save -->
        <div class="actions">

            <button type="submit" class="save-btn">
                Save
            </button>

            @if (session('status') === 'profile-updated')

                <p class="success" id="savedMessage">
                    Saved.
                </p>

            @endif

        </div>

    </form>

</div>

<script>

setTimeout(function(){

    var savedMessage =
        document.getElementById("savedMessage");

    if(savedMessage){
        savedMessage.style.display = "none";
    }

}, 2000);

</script>

</body>
</html>