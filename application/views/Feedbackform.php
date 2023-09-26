<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" type="text/css" href="style.css" />  -->
<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
   }

@font-face {
    font-family: myFirstFont;
    src: url(http://localhost/feedbackstyle/DeathNote.ttf);
  }

.sharebutton{
    text-decoration: none;
    color: black; 
    position: absolute;
    top: 80%;
    left: 75%;
    transform: translate(-80%, -75%);
    font-size: 22px;
    background-color: white;
    padding:5px;
    border-radius:  6px;
    font-weight: 600;
}
.header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
}

.About,.Stories,.Shareup{
    font-size: 19px;
    text-decoration: none;
    color: white;
    padding: 25px;
}

.navigation{
    display: flex;
    gap: 5px;
}

.Stories{
    padding-right: 40px;
}


body{
    background-color: rgb(0, 0, 0);
    font-family: myFirstFont;
}

.submit{
    text-decoration: none;
    color: black; 
    position: absolute;
    top: 130%;
    left: 120%;
    transform: translate(-130%, -120%);
    font-size: 22px;
    background-color: white;
    padding:5px;
    border-radius:  11px;
    font-weight: 900;
    font-family: myFirstFont;
}

.Feedback{
    border: 5px solid;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
}

.userlabel,.storylabel,.contactlabel{
    color:white;
    font-size: 18px;
}

#story{
    width: 179px;
    height: 200px;
    border-radius:5px;
    padding-left:5px;
    padding-top:3px;
    text-decoration:none;
}

#contact,#Name{
    width: 179px;
    height: 25px;
    border-radius:4px;
    padding-left:5px;
}

.contactlabel{
padding-right: 10px;
}

.storylabel{
    padding-left: 13px;
    padding-right: 13px;
}

.Feedback{
    background-color: rgba(197, 173, 173, 0.192);
    border-radius: 10px;

}

.formm{
    display:grid;
    gap:15px;
}
</style>

</head>
<body>
<header class="header">
    <a href="http://localhost/codeigniter/feedback/feedbackform" class="Shareup">Share Up</a>
    <nav>
        <ul class="navigation">
            <li><a class="About" href="About.php">About</a></li>
            <li><a class="Stories" href="http://localhost/codeigniter/feedback/selectdata">Stories</a></li>
        </ul>
    </nav>
</header>


<div class="Feedback">
<form action="<?php echo base_url('');?>feedback/formdata/" method="POST" class="formm">
    <div class="name">
       <label for="Name" class="userlabel">Username :</label> 
       <input type="text" id="Name" name="name" placeholder="Enter your Name">
     </div>
     <div class="contact">
        <label for="contact" class="contactlabel">Contact :</label> 
        <input type="text" id="contact" name="contact" placeholder="Mode of Contact" >
    </div>
    <div class="Story">
        <label for="story" class="storylabel">Story :</label> 
        <textarea type="text" id="story" name="story"></textarea>
    </div>
    <div>
    <input class="submit" type="submit">
    </div>
</div>
</form>
</body>
</html>