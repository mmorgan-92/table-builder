<!DOCTYPE html>
<html>
<style>

body{
  background: linear-gradient(rgba(74, 189, 172, 0.75),rgba(74, 189, 172, 0.75)), url("images/ales-krivec-4176.jpg");
  background-size: cover;
  color: #ffffff;
}

.content{
  padding-top: 20%;
}
label{
  color: #ffffff;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background: rgba(255, 255, 255, 0.75);
}

H1{
  font-size: 50px;
}
input{
  margin-bottom: 3% !important;
  border-radius: 10px;
  border: 1px solid #FC4A1A !important;


}
button {
    background-color: #FC4A1A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius: 10px;

}

button:hover {
  -webkit-box-shadow: 0px 0px 23px 7px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 23px 7px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 23px 7px rgba(0,0,0,0.75);
}
a{
  text-decoration: none;
  background: #FC4A1A !important;
  color: #ffffff;
}
a:hover{
  opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    color: #ffffff;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding-left: 30%;
    padding-right: 30%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
  <div class="content">
  <div class="imgcontainer">
    <h1>User Login</h1>
  </div>
  <form action="checkLogin.php" method="post">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" required placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" required placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>
  </form>
</div>



</body>
</html>
