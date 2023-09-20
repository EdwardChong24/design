<?php
    include('include/header.php');
?>

<body>
    <div class="wrapper">

        <input type="radio" name="rotate-switches" id="rotate" checked class="rotate">
        <label for="rotate" class="rotate-label">Auto</label>

        <input type="radio" name="rotate-switches" id="front" class="rotate">
        <label for="front" class="rotate-label">Front</label>

        <input type="radio" name="rotate-switches" id="left" class="rotate">
        <label for="left" class="rotate-label">Left</label>

        <input type="radio" name="rotate-switches" id="back" class="rotate">
        <label for="back" class="rotate-label">Back</label>

        <input type="radio" name="rotate-switches" id="right" class="rotate">
        <label for="right" class="rotate-label">Right</label>

        <input type="radio" name="rotate-switches" id="top" class="rotate">
        <label for="top" class="rotate-label">Top</label>

        <input type="radio" name="rotate-switches" id="bottom" class="rotate">
        <label for="bottom" class="rotate-label">Bottom</label>

        <div class="perspective">

            <div class="cube">

                <div class="front">
                    <img src="cube_images/1.jpg" alt="">
                </div>

                <div class="back">
                    <img src="cube_images/2.jpg" alt="">
                </div>

                <div class="top">
                    <img src="cube_images/3.jpg" alt="">
                </div>

                <div class="bottom">
                    <img src="cube_images/4.jpg" alt="">
                </div>

                <div class="left">
                    <img src="cube_images/5.jpg" alt="">
                </div>

                <div class="right">
                    <img src="cube_images/6.jpg" alt="">
                </div>

            </div>

        </div>    

    </div>

</body>
</html>