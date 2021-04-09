<?php 
include './components/Head.php';
?>
<body>

<?php 
include './components/MainNavigation.php';
?>

    <section class="intro">
        <div class="w3-center">
            <div class="w3-container w3-display-middle w3-mobile">
                <div class="w3-round-large w3-light-blue w3-padding">
                    <div class="w3-light-blue w3-panel w3-bottombar w3-leftbar w3-rightbar w3-topbar w3-border-white w3-round-large w3-margin-right w3-margin-left">
                        <div class="w3-padding">
                            <p class="w3-large w3-text-white">10 Ways FoodEx is<br> bringing you closer<br> to your next meal.</p>
                        </div>
                    </div>
                </div>
                <button class="w3-btn w3-round-large w3-red w3-text-white">Read</button>
            </div>
            <img src="https://via.placeholder.com/1920x600" class="w3-image w3-stretch" alt="" srcset="">
        </div>
    </section>

    <section class="squares w3-center w3-padding">
        <h2>Search for a pantry near you</h2>
        <form name="bankSearch" method="POST" action="banks">
            <input name="bank_input" id="search_bank" placeholder="&#x1F50E;"></input>
            <button type="submit" class="w3-btn w3-round-xlarge w3-red w3-text-white">Go</button>
        </form>
        <div class="w3-row w3-auto w3-light-blue">
            <h2 class="w3-text-white">Community Support</h2>
            <div class="square w3-mobile w3-grey w3-border w3-auto w3-third"></div>
            <div class="square w3-mobile w3-grey w3-border w3-third"></div>
            <div class="square w3-mobile w3-grey w3-border w3-third"></div>
        </div>
    </section>

    <?php include "./components/Footer.php";?>
</body>

</html>