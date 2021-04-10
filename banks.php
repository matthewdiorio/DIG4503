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
        <div class=" w3-bar-block w3-auto w3-center w3-mobile w3-container w3-section ">
            <div class=" result_card w3-mobile w3-card w3-bottombar w3-section w3-bar-item ">
                <div class=" w3-mobile w3-row ">
                    <div class=" w3-half ">
                        <img src=" https://iscf.org/wp-content/uploads/2017/04/ISCF-Logo-Hoz-768x269.png" alt=""
                    class="w3-image w3-section result_image w3-mobile">
                </div>
                <div class="w3-half">
                    <h3 class="w3-left w3-margin-left">Islamic Society of Central Florida (ISCF) </h3>
                    <br>
                    <p class="w3-padding-24 w3-margin w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent erat arcu, commodo eu lorem a,
                        dapibus consequat diam. Nam ut congue tellus. Cras et auctor turpis. Nulla ut egestas felis. Nullam
                        convallis lectus sed est ornare lacinia. Etiam condimentum dapibus pharetra. Suspendisse varius
                        posuere metus sit amet dapibus.  </p>
                        <a href="#" class="result_btn w3-button w3-margin w3-border w3-padding-16 w3-round">Learn More</a>                    </div>
            </div>
        </div>
        <div class="result_card w3-mobile w3-card w3-bottombar w3-section w3-bar-item w3-row w3-padding">
            <div class="w3-half ">
                <img src="https://pbs.twimg.com/profile_images/1510198702/Logo_2.png" alt=""
                    class="w3-image w3-section result_image w3-mobile">
            </div>
            <div class="w3-half">
                <h3 class="w3-left w3-margin-left">Knights Helping Knights Pantry</h3>
                <br>
                <p class="w3-padding-24 w3-margin w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent erat arcu, commodo eu lorem a,
                    dapibus consequat diam. Nam ut congue tellus. Cras et auctor turpis. Nulla ut egestas felis. Nullam
                    convallis lectus sed est ornare lacinia. Etiam condimentum dapibus pharetra. Suspendisse varius
                    posuere metus sit amet dapibus.  </p>
                    <a href="#" class="result_btn w3-button w3-margin w3-border w3-padding-16 w3-round">Learn More</a>
            </div>
        </div>
        </div>
        </div>
    </section>
<?php include "./components/Footer.php";?>
