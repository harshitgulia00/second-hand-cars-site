<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Delete Account</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body{
      background:#000;
      color:#fff;
      min-height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      padding:20px;
    }

    .container{
      width:100%;
      max-width:600px;
      background:#111;
      border:1px solid #f59e0b;
      border-radius:14px;
      padding:30px;
      box-shadow:0 0 20px rgba(245, 158, 11, 0.2);
    }

    h2{
      color:#f59e0b;
      margin-bottom:12px;
      font-size:28px;
    }

    p{
      color:#cfcfcf;
      line-height:1.7;
      margin-bottom:25px;
    }

    .delete-btn{
      background:#f59e0b;
      color:#000;
      border:none;
      padding:14px 22px;
      border-radius:8px;
      cursor:pointer;
      font-weight:bold;
      font-size:16px;
      transition:0.3s;
    }

    .delete-btn:hover{
      background:#ffb938;
      transform:translateY(-2px);
    }

    /* MODAL */

    .modal{
      position:fixed;
      inset:0;
      background:rgba(0,0,0,0.8);
      display:none;
      justify-content:center;
      align-items:center;
      padding:20px;
    }

    .modal-content{
      width:100%;
      max-width:500px;
      background:#111;
      border:1px solid #f59e0b;
      border-radius:14px;
      padding:30px;
      animation:popup 0.3s ease;
    }

    @keyframes popup{
      from{
        transform:scale(0.8);
        opacity:0;
      }
      to{
        transform:scale(1);
        opacity:1;
      }
    }

    .modal-content h3{
      color:#f59e0b;
      margin-bottom:15px;
      font-size:24px;
    }

    .modal-content p{
      margin-bottom:20px;
    }

    input{
      width:100%;
      padding:14px;
      border-radius:8px;
      border:1px solid #444;
      background:#000;
      color:#fff;
      outline:none;
      margin-bottom:25px;
      font-size:15px;
    }

    input:focus{
      border-color:#f59e0b;
    }

    .buttons{
      display:flex;
      justify-content:flex-end;
      gap:12px;
    }

    .cancel-btn{
      background:#222;
      color:#fff;
      border:none;
      padding:12px 20px;
      border-radius:8px;
      cursor:pointer;
      transition:0.3s;
    }

    .cancel-btn:hover{
      background:#333;
    }

    .confirm-btn{
      background:#f59e0b;
      color:#000;
      border:none;
      padding:12px 20px;
      border-radius:8px;
      cursor:pointer;
      font-weight:bold;
      transition:0.3s;
    }

    .confirm-btn:hover{
      background:#ffb938;
    }
  </style>
</head>
<body>

  <div class="container">

    <h2>Delete Account</h2>

    <p>
      Once your account is deleted, all of its resources and data will be permanently deleted.
      Before deleting your account, please download any data or information that you wish to retain.
    </p>

    <button class="delete-btn" id="openModal">
      Delete Account
    </button>

  </div>

  <!-- MODAL -->

  <div class="modal" id="modal">

    <div class="modal-content">

      <h3>Are you sure?</h3>

      <p>
        Once your account is deleted, all of its resources and data will be permanently deleted.
        Please enter your password to confirm.
      </p>

      <form>

        <input 
          type="password" 
          placeholder="Enter Password"
          required
        >

        <div class="buttons">

          <button type="button" class="cancel-btn" id="closeModal">
            Cancel
          </button>

          <button type="submit" class="confirm-btn">
            Delete
          </button>

        </div>

      </form>

    </div>

  </div>

  <script>
    const modal = document.getElementById('modal');
    const openModal = document.getElementById('openModal');
    const closeModal = document.getElementById('closeModal');

    openModal.addEventListener('click', () => {
      modal.style.display = 'flex';
    });

    closeModal.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
      if(e.target === modal){
        modal.style.display = 'none';
      }
    });
  </script>

</body>
</html>