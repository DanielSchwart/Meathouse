<?php
session_start(); 
?>
<?php

if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
       }
else{
    
   $user=$_SESSION['login_user'];
    if ($user=="JON"){
          echo "<html>
<head>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
    </script>
</head>
    <body>
<div class='login-page'>
  <div class='form'  >
<form class='login-form' action='save_tov.php' onload='resizeIframe(this)' enctype='multipart/form-data' method='post' >
    <table class='table-login'>
          <TR> <TD align='center' height='40pxs'>Добавить товар</TD></TR>
       </table>
    <br>
    <input type='text' class=ztext name=ztext required placeholder='Введите название товара'/><br>
<textarea name=text required data-autoresize rows='3' placeholder='Введите цену товара' type='text'  ></textarea>
<br><br><br><br>
 <p> Загружаемое изображение должно иметь размер 900х600 до 1200х800 </p>
<input required type=file name='image' id='image' class='image-p'  accept='image/*,image/jpeg'>
      <button type='submit' name='submit'>Добавить товар</button>
    <table class='table-s'>
              <TR> <TD align='center'  height='40pxs'><a href='admin.php' style='color: rgb(255,255,255)'>Вернутся в админ панель</a></TD></TR>
       </table>

      </form>
    </div>
</div>


<script>

    var textarea = null;
        window.addEventListener('load', function() {
            textarea = window.document.querySelector('textarea');
            textarea.addEventListener('keypress', function() {
                if(textarea.scrollTop != 0){
                    textarea.style.height = textarea.scrollHeight + 'px';
                }
            }, false);
        }, false);
    </script>


<style>
    .image-p{
        
     position: relative;
        top: -10px;
        right: -100px;
          font-weight: 700;
  color: white;
  text-decoration: none;
  padding: .8em 1em calc(.8em + 3px);
  border-radius: 3px;
  background: rgb(240, 128, 128);
  box-shadow: 0 -3px rgb(139, 0, 0) inset;
  transition: 0.2s;
    }
    .image-p:hover{
        background: rgb(139, 0, 0);
    }
    .image-p:active {
         background: rgb(33,147,90);
  box-shadow: 0 3px rgb(33,147,90) inset;
    }
    textarea {
    position: relative;
    top: 40px;
    resize: none; /* Запрещаем изменять размер */
    width: 100%;
   overflow: hidden;
        outline: 0;
  background: #f2f2f2;
  border: 2 ;
  box-sizing: border-box;
  font-size: 14px;
   }  
.login-page {
    
  width: 930px;
  padding: 0% 0% 0;
  margin: auto;
}
.form {
width: 850px;
    height: auto;
max-height: 1450px;  
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  margin: 0 auto 100px;
  padding: 32px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.24);
}
.table-login
{
       float: left; 
       position: relative;
       left: 300px;
       top: -32px;
       width: 240px;
       background: rgb(240, 128, 128);
       font-weight: 700;
       color: white;
       text-decoration: none;
}
    .table-s
{
       float: left; 
       position: relative;
       left: -32px;
       top: 48px;
       width: 914px;
       background: rgb(240, 128, 128);
       font-weight: 700;
       color: white;
       text-decoration: none;
}
.ztext {
  outline: 0;
  background: #f2f2f2;
  width: 350px;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
position: relative;
    top:20px;
    right:370px;
}
    .vtext {
  outline: 0;
  background: #f2f2f2;
  width: 350px;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
position: relative;
    top:60px;
    right:250px;
}
    .otext {
  outline: 0;
  background: #f2f2f2;
  width: 350px;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
position: relative;
    top:90px;
}
.form button {
    position:relative;
    top: 45px;
    right:140px;
    font-weight: 700;
  font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: rgb(240, 128, 128);
      box-shadow: 0 -3px rgb(139, 0, 0) inset;
      transition: 0.2s;
  width: 200px;
  border: 0;
  padding: 7px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover{ background: rgb(139, 0, 0); }
    .form button:active {
  background: rgb(33,147,90);
  box-shadow: 0 3px rgb(33,147,90) inset;
}.form button:focus {
  background: #43A047;
}
</style>
    </body>
</html>" ;
    }
    else {
         echo '<script type="text/javascript"> window.open("../profile_a.php","_self");</script>' ;
    }
}
   



?>
