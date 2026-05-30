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
  background-color: #b63e3e;
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
    @include('admin.adminPartials.navbar')
<center>

@if(session('message'))
    <div style="color: green; margin-bottom: 20px;">
        {{ session('message') }}
    </div>
@endif

<form class="form" method="POST" action="/addcar" enctype="multipart/form-data">
    @csrf
    <p class="title">Add Car <br>  </p>
        <br><br>
     <label>
    <input class="input" type="text" placeholder="" name="title" required>
    <span>Car Title</span>
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
    <input class="input" type="number" placeholder="" name="price" required>
    <span>Price</span>
</label>

<label>
    <input class="input" type="number" placeholder="" name="km_driven" required>
    <span>KM Driven</span>
</label>

<label>
    <select class="input" name="fuel_type" required>
        <option value="">Select Fuel Type</option>
        <option value="Petrol">Petrol</option>
        <option value="Diesel">Diesel</option>
        <option value="CNG">CNG</option>
        <option value="Electric">Electric</option>
    </select>
</label>

<label>
    <textarea class="input" placeholder="" name="description" required></textarea>
    <span>Description</span>
</label>
    <!-- From Uiverse.io by csemszepp --> 
<label for="file" class="custum-file-upload">
<div class="icon">
<svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path> </g></svg>
</div>
<div class="text">
   <span>Click to upload image</span>
   </div>
   <input id="file" type="file" required name="image">
</label>

    <button class="submit" type="submit">Add</button>
</form>
</center>

</body>
</html>
