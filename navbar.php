<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript">
        $(window).on('scroll',function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         $(document).ready(function(){
                $('.menu h4').click(function(){
                    $("nav ul").toggleClass("active")
            })
            })
        </script>
	</head>
    <style>
        body{
	margin: 0;
	padding: 0;
    font-family: sans-serif;
    }
    .responsive-bar{
    display: none;
}
nav{
    z-index: 2;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    height: 100px;
    padding: 10px 100px;
    box-sizing: border-box;
    transition: .5s;
}
nav.black{
    background: #fff;
    height: 80px;
    padding: 10px 50px;
}
nav .logo{
    float: left;
}
nav .logo img{
    height: 80px;
    transition: .5s;
}
nav.black .logo img{
    height: 60px;
}
nav > ul{
    width: 80%;
    margin: 0 auto;
    padding: 0;
    float: right;
}
nav > ul > li{
    list-style: none;
     display: inline-block; 
   
    
}
nav > ul > li > a:hover{
    background: transparent;
    color: #fff;
}
nav > ul > li > a{
    color: #fff;
    text-decoration: none;
    font-weight:bold;
    text-transform: uppercase; /*for capitalisation of letters */
    line-height: 80px;
    padding: 5px 20px;
    transition: .5s;   
}
nav.black > ul > li > a{
    color: #000;
    line-height: 60px;
}

section.sec1{
    width: 100%;
    height: 100vh;
    background: url(https://images.pexels.com/photos/276517/pexels-photo-276517.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    background-size: cover;
}
section.content{
    margin: 0;
    padding: 0;
    font-size: 1.1em;
}
section.sec2{
    width: 100%;
    height: 100vh;
    background: url(https://images.pexels.com/photos/276517/pexels-photo-276517.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    background-size: cover;
}
@media(max-width:768px){
    .responsive-bar{
        display: block;
        width: 100%;
        height: 60px;
        background: #fff;
        position: fixed;
        top: 0;
        left: 0;
        padding: 5px 20px;
        box-sizing: border-box;
        z-index: 1;
    }
    .responsive-bar .logo img{
        float: left;
        height: 50px;  
    }
    .responsive-bar .menu h4{
        float: right;
        color: #fff;
        margin: 0;
        padding: 0;
        line-height: 50px;
        cursor: pointer;
        text-transform: uppercase;
    }
    nav{
        padding: 0;
    }
    nav,
    nav.black{
    background: #fff;
    height: 60px;
    padding: 0;
    }
    nav .logo{
        display: none;
    }
    nav ul{
        position: absolute;
        width: 100%;
        top: 60px;
        left: 0;
        background: #fff;
        float: none;
        display: none;
    }
    nav ul.active{
        display: block;
    }
    nav ul li{
        width: 100%;
    }
    nav ul li a{
        display: block;
        padding: 0;
        width: 100%;
        text-align: center;
        line-height: 30px !important;
        color: #fff;
        
    }

    nav > ul{
        width: 100%;
        display: none;
    }
    nav > ul > li{
        display: block;
        text-align: center;
    }
    .active{
        display: block;
    }
}
    </style>
<body>
        <div class="responsive-bar">
        <div class="logo">
            <img src="http://www.mhf.org.au/media/zoo/images/yourlogohere_2cb8c31ab01096e7842d781ac311a776.png" alt="logo"/>
            </div>
            <div class="menu">
            <h4>Menu</h4>
            </div>
        </div>
		<nav>
            <div class="logo">
            <img src="http://www.mhf.org.au/media/zoo/images/yourlogohere_2cb8c31ab01096e7842d781ac311a776.png" alt="logo"/>
            </div>
         <ul>
            <li><a href="#">Home</a></li>
             <li><a href="#">Solutions</a></li>
             <li><a href="#">About Us</a></li>
             <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        
        
	</body>
</html>