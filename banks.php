<?php include "./components/Head.php"; ?>
<?php include "./components/MainNavigation.php"; ?>

    <section class="search">
        <div class="w3-grey search-section w3-display-container w3-center w3-row ">
            <div class="w3-bar w3-auto w3-display-middle">
                <div class="w3-quarter w3-bar-item w3-mobile"></div>
                <div class="w3-animate-left w3-half w3-bar-item">
                    <input placeholder="Type food bank name" type="text"
                        class="w3-large w3-input w3-round search-box w3-mobile">
                </div>
                <div class="w3-bar-item w3-mobile">
                    <button
                        class="w3-margin-top w3-animate-left search-btn  w3-mobile w3-large w3-white w3-btn w3-round">Search</button>
                </div>
                <div class="w3-quarter w3-bar-item""></div>
            </div>
        </div>
    </section>
    <section class=" w3-section search_results ">
        <!-- Add a dynamic generation of results either PHP or JS-->
        <div class=" w3-bar-block w3-auto w3-center w3-mobile w3-container w3-section " id="foodbanks">
            
        </div>
        </div>
        </div>
    </section>
<?php include "./components/Footer.php";?>
<script src="scripts/foodbank.js"></script>

