<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Password</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#000;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
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
    display:none;
}

.actions{
    display:flex;
    align-items:center;
    gap:15px;
    margin-top:30px;
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

.success{
    color:#f59e0b;
    font-size:14px;
    display:none;
}
</style>
</head>

<body>

<div class="container">

    <h2 class="title">Update Password</h2>

    <p class="desc">
        Ensure your account is using a long, random password to stay secure.
    </p>

    <!-- Laravel Form -->
    <form method="POST" action="{{ route('password.update') }}" id="passwordForm">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Current Password</label>

            <input 
                type="password"
                name="current_password"
                id="currentPassword"
                autocomplete="current-password"
                required
            >

            @error('current_password')
                <p class="error" style="display:block;">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label>New Password</label>

            <input 
                type="password"
                name="password"
                id="newPassword"
                autocomplete="new-password"
                required
            >

            @error('password')
                <p class="error" style="display:block;">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label>Confirm Password</label>

            <input 
                type="password"
                name="password_confirmation"
                id="confirmPassword"
                autocomplete="new-password"
                required
            >

            <p class="error" id="matchError">
                Passwords do not match
            </p>
        </div>

        <div class="actions">

            <button type="submit">
                Save
            </button>

            @if(session('status') === 'password-updated')
                <p class="success" id="successText" style="display:block;">
                    Password Updated Successfully.
                </p>
            @endif

        </div>

    </form>

</div>

<script>
document
.getElementById("passwordForm")
.addEventListener("submit", function(e){

    var newPassword =
        document.getElementById("newPassword").value;

    var confirmPassword =
        document.getElementById("confirmPassword").value;

    var matchError =
        document.getElementById("matchError");

    if(newPassword !== confirmPassword){

        e.preventDefault();

        matchError.style.display = "block";

        return;
    }

    matchError.style.display = "none";
});
</script>

</body>
</html>