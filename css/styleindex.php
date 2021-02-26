<?php header("Content-Type: text/css; charset: UTF-8");
session_start();
if(isset($_SESSION['Text']))
{
    $ClFondo=$_SESSION['Cl_Fondo'];
    $ClLetra=$_SESSION['Cl_Letra'];
}
?>

@import url('https://fonts.googleapis.com/css2?family=Stick&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Stick', sans-serif;
}

body{
    width: 100%;
    height: 100vh;
    background: <?php echo($ClFondo); ?>;
    overflow: hidden;
}

.text{
    position:relative;
    transform: rotate(calc(-0.2deg * 100));
    z-index: 1;
}

.text .txtBox{
    position: absolute;
    font-size: 10vw;
    color: <?php echo($ClLetra) ?>;
    transform: translate(-50%,-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    cursor: default;
    user-select: none;
    text-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.text .txtBox span{
color: #f00;
}

a{
    font-size: 40px;
    cursor: pointer;
    color: #fff;
    text-decoration: none;
    z-index: 99;
    position: absolute;
}
