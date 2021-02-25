<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styleindex.php" type="text/css" media="all">
    <!-- CSS only -->
    <title>Text Effetc || Person</title>
</head>
<body>
    <div class="text">
    </div>
    <footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
        <script>

            for (let i = 0; i <= 100; i++) {
                let box = document.createElement('div');
                box.classList.add('txtBox');
                box.innerHTML="Just <span>4</span> Fun";
                document.querySelector(".text").appendChild(box);
            }

            document.body.addEventListener ("mousemove", e => {
                gsap.to('.txtBox',{
                    x : e.clientX,
                    y : e.clientY,
                    stagger: -0.01,
                    rotate : (i,terget) => {
                        return (i+1)* 0.1;
                    }
                })
            })
        </script>
        <a href="Home.php"><<<</a>
    </footer>
</body>
</html>