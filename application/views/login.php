<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Login Form</title> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
        <div class="card-header bg-transparent border-bottom-0 pb-0 text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png" alt="Logo IPDN" width="30%" class="img-fluid mx-auto d-block">
            <div class="mt-3">
                <span class="card-info text-center"><b>PRESENSI THL IPDN</b></span>
            </div>
        </div>
        <?php if(@$this->session->error): ?>
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                <button class="close" aria-dismissable="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p><?= $this->session->error ?></p>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('auth/login') ?>" method="post">
            <div class="input-field">
                <input type="text" name="username" id="username" class="form-control" required/>
                <label>Username</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" class="pswrd form-control" required>
                <span class="show">SHOW</span>
                <label>Password</label>
            </div>
            <div class="button">
                <div class="inner"></div>

                <button>LOGIN</button>
            </div>
        </form>

        <script>
            var input = document.querySelector('.pswrd');
            var show = document.querySelector('.show');
            show.addEventListener('click', active);
            function active(){
                if(input.type === "password"){
                input.type = "text";
                show.style.color = "#1DA1F2";
                show.textContent = "HIDE";
                }else{
                input.type = "password";
                show.textContent = "SHOW";
                show.style.color = "#111";
                }
            }
        </script>
    </div>
  </body>
</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:600|Noto+Sans|Open+Sans:400,700&display=swap');
*{
  margin: 0;
  padding: 0;
  border-radius: 5px;
  box-sizing: border-box;
}
body{
  height: 100vh;
  display: flex;
  align-items: center;
  text-align: center;
  font-family: sans-serif;
  justify-content: center;
  background: url("https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Minimalist-Crumpled-Paper-Simple-Background-Image.jpg");
  background-size: cover;
  background-position: center;
}
.container{
  position: relative;
  width: 400px;
  background: white;
  padding: 60px 40px;
}
header{
  font-size: 40px;
  margin-bottom: 60px;
  font-family: 'Montserrat', sans-serif;
}
.input-field, form .button{
  margin: 25px 0;
  position: relative;
  height: 50px;
  width: 100%;
}
.input-field input{
  height: 100%;
  width: 100%;
  border: 1px solid silver;
  padding-left: 15px;
  outline: none;
  font-size: 19px;
  transition: .4s;
}
input:focus{
  border: 1px solid #1DA1F2;
}
.input-field label, span.show{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.input-field label{
  left: 15px;
  pointer-events: none;
  color: grey;
  font-size: 18px;
  transition: .4s;
}
span.show{
  right: 20px;
  color: #111;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  user-select: none;
  visibility: hidden;
  font-family: 'Open Sans', sans-serif;
}
input:valid ~ span.show{
  visibility: visible;
}
input:focus ~ label,
input:valid ~ label{
  transform: translateY(-33px);
  background: white;
  font-size: 16px;
  color: #1DA1F2;
}
form .button{
  margin-top: 30px;
  overflow: hidden;
  z-index: 111;
}
.button .inner{
  position: absolute;
  height: 100%;
  width: 300%;
  left: -100%;
  z-index: -1;
  transition: all .4s;
  background: -webkit-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
}
.button:hover .inner{
  left: 0;
}
.button button{
  width: 100%;
  height: 100%;
  border: none;
  background: none;
  outline: none;
  color: white;
  font-size: 20px;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
}
.container .auth{
  margin: 35px 0 20px 0;
  font-size: 19px;
  color: grey;
}
.links{
  display: flex;
  cursor: pointer;
}
.facebook, .google{
  height: 40px;
  width: 100%;
  border: 1px solid silver;
  border-radius: 3px;
  margin: 0 10px;
  transition: .4s;
}
.facebook:hover{
  border: 1px solid #4267B2;
}
.google:hover{
  border: 1px solid #dd4b39;
}
.facebook i, .facebook span{
  color: #4267B2;
}
.google i, .google span{
  color: #dd4b39;
}
.links i{
  font-size: 23px;
  line-height: 40px;
  margin-left: -90px;
}
.links span{
  position: absolute;
  font-size: 17px;
  font-weight: bold;
  padding-left: 8px;
  font-family: 'Open Sans', sans-serif;
}
.signup{
  margin-top: 50px;
  font-family: 'Noto Sans', sans-serif;
}
.signup a{
  color: #3498db;
  text-decoration: none;
}
.signup a:hover{
  text-decoration: underline;
}
</style>