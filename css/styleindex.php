<?php header("Content-Type: text/css; charset: UTF-8");

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
    background: #000;
    overflow: hidden;
}

.text{
    position:relative;
    transform: rotate(calc(-0.2deg * 100));
}

.text .txtBox{
    position: absolute;
    font-size: 10vw;
    color: #fff;
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
