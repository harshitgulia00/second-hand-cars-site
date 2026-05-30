<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* From Uiverse.io by ammarsaa */ 
body {
  background-color: #000;
  font-family: "Poppins", sans-serif;
}
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  padding: 40px;
  margin-top: 5%;
  border-radius: 20px;
  position: relative;
  background-color: #1a1a1a;
  color: #fff;
  border: 1px solid #333;
}

.title {
  font-size: 28px;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
  color: #FFBF00;
}

.title::before {
  width: 18px;
  height: 18px;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.title::before,
.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color:#FFBF00;
}

.message, 
.signin {
  font-size: 14.5px;
  color: rgba(255, 255, 255, 0.7);
}

.signin {
  text-align: center;
}

.signin a:hover {
  text-decoration: underline;
}

.signin a {
  color: #FFBF00;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  background-color: #333;
  color: #fff;
  width: 100%;
  padding: 20px 05px 05px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  color: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 12.5px;
  font-size: 0.9em;
}

.form label .input:focus + span,
.form label .input:valid + span {
  color: #FFBF00;
  top: 0px;
  font-size: 0.7em;
  font-weight: 600;
}

.input {
  font-size: medium;
}

.submit {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
  background-color: #FFBF00;
}

.submit:hover {
  background-color: #FFBF0096;
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
</style>
<body>
<center>
<form class="form" method="POST" action="{{ route('login') }}">
    @csrf
    <p class="title">LogIn </p>
            
    <label>
        <input class="input" type="email" placeholder="" name="email" required="">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="password" placeholder="" name="password" required="">
        <span>Password</span>
    </label>
    <label>
        <input type="checkbox" name="remember" id="remember">
        <span style="color: rgba(255, 255, 255, 0.7); font-size: 0.9em; margin-left: 5px;">Remember me</span>
    </label>
    <input type="hidden" name="redirect" value="{{ request('redirect') }}">
    <p class="signin">Forgot your password? <a href="{{ route('password.request') }}">Reset</a> </p>
    <button class="submit">Submit</button>
    <p class="signin">Didn't have an acount ? <a href="{{ route('register') }}">SignIn</a> </p>
</form>
<center>
</body>
</html>