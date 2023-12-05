<?php include '../app/src/atas.php'?>
<style>
  a {
    text-decoration: none;
  }

  .form {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 100%;
    background-color: #ffffff00;
    padding: 20px;
    border-radius: 20px;
    position: relative;
  }

  .title {
    font-size: 28px;
    color: rgb(65, 214, 225);
    font-weight: 600;
    letter-spacing: -1px;
    position: relative;
    display: flex;
    align-items: center;
    padding-left: 30px;
  }

  .title::before,
  .title::after {
    position: absolute;
    content: "";
    height: 16px;
    width: 16px;
    border-radius: 50%;
    left: 0px;
    background-color: rgb(65, 225, 225);
  }

  .title::before {
    width: 18px;
    height: 18px;
    background-color: rgb(65, 134, 225);
  }

  .title::after {
    width: 18px;
    height: 18px;
    animation: pulse 1s linear infinite;
  }

  .message {
    margin-top: -30px;
    margin-bottom: 0;
  }

  .message,
  .signin {
    color: rgba(255, 255, 255, 0.822);
    font-size: 14px;
  }

  .signin {
    text-align: center;
  }

  .signin a {
    color: royalblue;
  }

  .signin a:hover {
    text-decoration: underline royalblue;
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
    width: 100%;
    padding: 10px 10px 20px 10px;
    outline: 0;
    border: 1px solid rgba(105, 105, 105, 0.397);
    border-radius: 10px;
    background: none;
    color: white;
  }

  .form label .input+span {
    position: absolute;
    left: 10px;
    top: 15px;
    color: grey;
    font-size: 0.9em;
    cursor: text;
    transition: 0.3s ease;
  }

  .form label .input:placeholder-shown+span {
    top: 9px;
    font-size: 0.9em;
  }

  .form label .input:focus+span,
  .form label .input:valid+span {
    top: -23px;
    font-size: 0.7em;
    font-weight: 600;
    color: rgb(0, 229, 236);
  }

  .form label .input:valid+span {
    color: rgb(0, 229, 236);
  }

  .submit {
    border: none;
    outline: none;
    background-color: rgba(48, 48, 48, 0);
    border: 2px solid aquamarine;
    padding: 10px;
    border-radius: 10px;
    color: aquamarine;
    font-size: 16px;
    transform: .3s ease;
    cursor: pointer;
    transition: .3s;
  }

  .submit:hover {
    background-color: #022e31;
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
    border: 2px dashed #e8e8e8;
    background-color: #21212100;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0px 48px 35px -48px #e8e8e877;
    transition: .3s;
  }

  .custum-file-upload:hover {
    border-radius: 10px 50px 10px 50px;
  }

  .custum-file-upload .icon {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .custum-file-upload .icon svg {
    height: 80px;
    fill: #e8e8e8;
  }

  .custum-file-upload .text {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .custum-file-upload .text span {
    font-weight: 400;
    color: #e8e8e8;
  }

  .custum-file-upload input {
    display: none;
  }

  select {
    width: 100%;
    border-radius: 10px;
    font-size: 17px;
    color: gray;
    background: none;
    border: 1px solid rgb(78, 78, 78);
    height: 45px;
    padding-left: 5px;
  }

  select option {
    width: 80%;
    background: #212121;
    color: rgb(226, 226, 226);
  }
</style>


<main>

  <section class="features section">
    <!-- <h1 style="text-align: center;">Member</h1> -->
    <div class="container" style="display: flex;width: 90%;justify-content: center;">
      <form class="form" method="post" enctype="multipart/form-data" action="../app/models/bergabung.php">
        <p class="title">Gabung KKT</p>
        <p class="message">Isi form untuk bergabung dengan KKT</p>
        <div class="flex">
          <label>
            <input placeholder="" type="text" class="input" name="nd">
            <span>Nama depan</span>
          </label>

          <label>
            <input placeholder="" type="text" class="input" name="nb">
            <span>nama belakang</span>
          </label>
        </div>
        <label>
          <select name="sm">
            <option>Pilih satu akun sosial media kamu</option>
            <option value="Instagram">> Instagram</option>
            <option value="Facebook">> Facebook</option>
            <option value="Telegram">> Telegram</option>
            <option value="Tiktok">> Tiktok</option>
            <option value="Twiter">> Twiter</option>
          </select>
        </label>
        <label>
          <input placeholder="EX : https://www.instagram.com/phyte_kagenou/" type="text" class="input" name="lk">
          <span>Link sosial media kamu </span>
        </label>
        <label>
          <input placeholder="" type="number" class="input" name="wa">
          <span>Whatsapp untuk bergabung</span>
        </label>
        <label>
          <input placeholder="" type="text" class="input" name="dk">
          <span>Deskripsikan diri kamu</span>
        </label>
        <label for="file" class="custum-file-upload" style="width: 100%;">
          <div class="icon">
            <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path>
              </g>
            </svg>
          </div>
          <div class="text">
            <span>Pilih Foto</span>
          </div>
          <input id="file" type="file" name="gb">
        </label>

        <button class="submit" type="submit">Submit</button>
        <!-- <p class="signin">Already have an acount ? <a href="#">Signin</a> </p> -->
      </form>
    </div>
  </section>
</main>

<?php include '../app/src/bawah.php' ?>