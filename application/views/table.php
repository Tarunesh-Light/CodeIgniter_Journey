<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIRA</title>
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
  .formm{
    display:grid;
    gap:15px;
}
body{
    font-family: myFirstFont;
    background-color: black;
}

.header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
}

.navigation{
    display: flex;
    gap: 5px;
}

.tabular{
    text-align: center;
    border-color:white;
    padding:20px;
}

.Row{
    border-bottom: 2px solid white;
}

td,th{
    padding-right: 40px;
    padding-left: 40px;
    padding-bottom: 20px;
    color: white;
    font-size: 20px;
    text-decoration: none;
    margin:50px;
}
th{
    padding-bottom:10px;
}

.tabular{
    position: absolute;
    top: 35%;
    left: 30%;
    transform: translate(-30%, -30%);
    
 }

.About,.Stories,.Shareup{
    font-size: 19px;
    text-decoration: none;
    color: white;
    padding: 25px;
}

.Stories{
    padding-right: 40px;
}

.Addstory{
    text-decoration: none;
    color: black; 
    position: absolute;
    top: 85%;
    left: 85%;
    transform: translate(-85%, -85%);
    font-size: 18px;
    background-color: white;
    padding:5px;
    border-radius:  6px;
    font-weight: 800;
    font-family: myFirstFont;
}

.trr{
    padding-top:15px;
}

.idd{
    border-bottom:color solid white;
}

td{
    border:1px solid black;
    word-break:break-all;
}

.contactlabel{
padding-right: 10px;
}

.storylabel{
    padding-left: 13px;
    padding-right: 13px;
}
#contact,#Name{
    width: 179px;
    height: 25px;
    border-radius:4px;
    padding-left:5px;
}
.userlabel,.storylabel,.contactlabel,.idlabel{
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
.Feedback{
    border: 5px solid;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
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

.update{
    font-size:19px;
    text-decoration:none !important;
}

</style>

</head>
<body>
<header class="header">
    <a href="http://localhost/codeigniter/feedback/selectdata" class="Shareup">Share Up</a>
    <nav>
        <ul class="navigation">
            <li><a class="About" href="About.php">About</a></li>
            <li><a class="Stories" href="http://localhost/codeigniter/feedback/selectdata">Stories</a></li>
        </ul>
    </nav>
</header>

<?php
if(isset($data1)){?>
<div class="Feedback">
<form action="<?php echo base_url('');?>feedback/updatealter/" method="POST" class="formm">
<div>
    <label for="id" class="idlabel">Id:</label> 
    <input type="text" id="id" name="id" value="<?php echo $data1[0]->id ?>">
    </div>
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
</form>
<div>
<?php
} else {?>
<table class="tabular">
<tr class="Row">
    <th class="idd">ID</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Story</th>
    <th>Update</th>
    <th>Delete</th>
</tr><?php
if(isset($data)){
foreach($data as $i){?>
    <tr class="trr">
    <td><?=$i->id?></td>
    <td><?=$i-> Name?></td>
    <td><?=$i-> Contact?></td>
    <td><?=$i->Story?></td>
    <td class="update"><a href="<?=base_url('feedback/update/'.$i->id)?>">Update</a></td>
    <td class="update"><a href="<?=base_url('feedback/delete/'.$i->id)?>">Delete</a></td>
    </tr>
    <div><a href="http://localhost/codeigniter/feedback/feedbackform" class="Addstory">Add Story</a></div>
   <?php  
}}}?>
</table>


</body>
</html>