<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    
<style>
    *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(114, 121, 126, 0.5)50%,rgba(114, 121, 126, 0.5)50%), url(Tourimages/cover-img-1.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: black;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: yellow;
}





.btn{
    width: 100px;
    height: 40px;
    background: yellow;
    border: 2px solid yellow;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}



.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background:yellow;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: yellow;
    font-size: 65px
}

.form{
    width: 250px;
    height: 380px;
    background: transparent;
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: yellow;
    font-size: 22px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid yellow;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: yellow;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: yellow;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: yellow;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: yellow;
}
</style>

</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Tour</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Home.html">HOME</a></li>
                    <li><a href="Detail.html">TOUR</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="contact.html">FEEDBACK</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="content">
            <h1>Connect<br><span> With</span> <br>Us</h1>
            <p class="par">From the sun-kissed beaches of Bali to the majestic peaks of the Himalayas,<br>
                our tours span the globe. Dive into cultural immersion, thrilling adventures, and serene escapes.</p>
                 
                <div class="form">
                <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error'];?> </p>
                <?php } ?>
                    <form action="logIn.php" method="post">
                    <h2>Login Here</h2>
                    <input type="text" name="uname" placeholder="Enter Username Here" required/>
                    <input type="password" name="password" placeholder="Enter Password Here"required >
                    <button class="btnn" name="save">Login</a></button>
                    <p class="link">Don't have an account<br>
                    <a href="Registration.html">Sign up </a> here</a></p>
                    </form>
                </div>
            
                    </div>
                </div>
        </div>
    </div>
    <!-- <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js">
        function redirect_to_home_page()
        {
            window.location.href="Home.html";
        }

    </script> -->
</body>
</html>