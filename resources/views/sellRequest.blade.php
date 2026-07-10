<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunndarMotors - Sell</title>
</head>
<style>
    /* From Uiverse.io by ammarsaa */ 
body {
  background-color: black;
  font-family: "Poppins", sans-serif;
}
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 500px;
  padding: 40px;
  margin-top: 15%;
  margin-bottom: 10%;
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


/* ================= upload file input ================= */
/* From Uiverse.io by csemszepp */ 
.custum-file-upload {
  height: 200px;
  width: 300px;
  display: flex;
  flex-direction: column;
  align-items: space-between;
  gap: 20px;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border: 2px dashed #f19f11;
  background-color: #212121;
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0px 48px 35px -48px #f19f11;
}

.custum-file-upload .icon {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .icon svg {
  height: 80px;
  fill: #f19f11;
}

.custum-file-upload .text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .text span {
  font-weight: 400;
  color: #f19f11;
}

.custum-file-upload input {
  display: none;
}
</style>
<body>
    @include('components.navigation-bar')
<center>

@if(session('message'))
    <div style="color: green; margin-bottom: 20px;">
        {{ session('message') }}
    </div>
@endif

<form class="form" method="POST" action="/sellCar" enctype="multipart/form-data">
    @csrf
    <p class="title">Sell Car <br>  </p>
        Enter the details of your car and we will get back to you with an offer.
        <br><br>
     <label>
        <input class="input" type="text" placeholder="" name="name" required>
        <span>Name</span>
    </label> 
    <input hidden name="user_id" value="{{Auth::user()->id}}">
    <label>
        <input class="input" type="email" placeholder="" name="email" required>
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="number" placeholder="" name="phone" required>
        <span>Phone number:</span>
    </label>
    <label>
        <textarea class="input" placeholder="" name="message" required></textarea>
        <span>Message</span>
    </label>
    <label>
        <input class="input" type="text" placeholder="" name="brand" required>
        <span>Car Brand</span>
    </label>
    <label>
        <input class="input" type="text" placeholder="" name="model" required>
        <span>Car Model</span>
    </label>
     <label>
        <input class="input" type="number" placeholder="" name="year" required>
        <span>Year</span>
    </label> 
     <label>
        <input class="input" type="number" placeholder="" name="expected_price" required>
        <span>Expected Price</span>
    </label>
     <label>
        <textarea class="input" placeholder="" name="description" required></textarea>
        <span>Description</span>
    </label>

    <button class="submit" type="submit">Send Request</button>
</form>
<center>
    @include('components.footer')
</body>
</html>