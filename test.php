<?php
    include('include/header.php');
?>

<style>
    body, html {
        overflow: hidden; /* Prevent scrolling */
        font-family: Arial, sans-serif;
        background-color: #f8e3e3; /* Romantic background color */
    }

    .hero {
        text-align: center;
        padding: 100px 0;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/background.jpg') center/cover no-repeat;
        color: #fff;
    }

    h1 {
        font-size: 3em;
        margin-bottom: 20px;
    }

    .btn {
        width: 160px;
        height: 50px;
        border: 1px solid #ff99aa; /* Soft pink color */
        color: #ff99aa; /* Soft pink color */
        margin: auto;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .btn p {
        font-size: 20px;
        padding-top: 12px;
        font-weight: bold;
        transition: 1s;
    }

    span {
        width: 80px;
        height: 80px;
        top: 80px;
        position: absolute;
        background: #ff99aa; /* Soft pink color */
        border-radius: 50%;
        z-index: -1;
        transition: 1s;
    }

    span:nth-child(1) {
        left: -20px;
        transition-delay: .1s;
    }

    span:nth-child(2) {
        left: 30px;
        transition-delay: .3s;
    }

    span:nth-child(3) {
        left: 80px;
        transition-delay: .5s;
    }

    span:nth-child(4) {
        left: 125px;
        transition-delay: .7s;
    }

    .btn:hover span {
        top: -10px;
    }

    .btn:hover p {
        color: #000;
        transition-delay: .5s;
    }

    .bubbles {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .bubbles img {
        width: 50px;
        animation: bubble 7s linear infinite;
    }

    @keyframes bubble {
        0% {
            transform: translateY(0);
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            transform: translateY(-80vh);
            opacity: 0;
        }
    }

    .total-days {
        text-align: center;
        margin-top: 50px;
        font-size: 1.2em;
    }
</style>

<body>
    <div class="hero">
        <h1>Testing1</h1>
        <div class="btn">
            <span></span><span></span><span></span><span></span>
            <p>RSVP Now</p>
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
        $total_days = $interval->format('%a') + 1; // Add 1 to include today
        echo "<div class='total-days'>Total days since February 19, 2020: $total_days</div>";
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