<?php
    include('include/header.php');
?>

<style>
    body, html {
        overflow: hidden; /* Prevent scrolling */
    }
</style>

<body>
    <div class="hero">
        <h1>RESPONSIVE DESIGN,<br>MAKE WEBSITE BY YOURSELF.</h1>
        <div class="btn">
            <span></span><span></span><span></span><span></span>
            <p>Hover Me</p>
        </div>
    </div>
    <div class="bubbles">
        <?php
            for ($i = 0; $i < 7; $i++) {
                echo '<img src="images/bubble.png" alt="Bubble">';
            }
        ?>
    </div>

    <?php
        // Calculate the total number of days
        $start_date = new DateTime('2020-02-19');
        $today = new DateTime();
        $interval = $today->diff($start_date);
        $total_days = $interval->format('%a') +1;
        echo "<h1>Total days: $total_days</h1>";
        
    ?>

    <script>
        function showMenu(){
            var toggle = document.getElementById("mobileMenu");
            if(toggle.style.height === "0px"){
                toggle.style.height = "200px";
            }
            else{
                toggle.style.height = "0px";
            }
        }
    </script>
</body>
</html>