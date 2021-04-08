<?php include 'components/head.php'; ?>
<body>
<?php include './components/topnav.php'; ?>
<div class="w3-container w3-content w3-mobile w3-auto">
    <div class="logo-container logo-center">
        <img class="logo-medium " src="./assets/logo/Standard.png" alt="" srcset="">
    </div>
    <form class="form-type w3-panel w3-white w3-card w3-display-container">
        <div class="form-signup">
            <p>What are you?</p>
            <div class="form-choice--type">
                <input class="w3-radio" type="radio" name="type" value="0" checked>
                <label>Patron</label>
            </div>
            <div class="form-choice--type">
                <input class="w3-radio" type="radio" name="type" value="1">
                <label>Bank</label>
            </div>
            <button></button>
        </div>
    </form>
</div>
</body>
<?php include "./components/footer.php";?>
