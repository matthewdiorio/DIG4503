<?php include 'components/Head.php';
include "private/autoload.php";
?>
<?php include './components/MainNavigation.php'; ?>

<?php

    $url_address = $_SESSION['url_address'];
    $query = "SELECT * FROM users WHERE url_address = ? limit 1";
    $stm = $connection->prepare($query);
    $check = $stm->execute([$url_address]);
    if ($check) {
        $data = $stm->fetchAll(PDO::FETCH_OBJ);
    }

?>

    <main class="dashboard">
        <div class="w3-row  w3-mobile">
            <div class="w3-half  w3-mobile">
                <div class=" w3-section">

                    <div class="w3-margin-left w3-center">
                        <h2><strong>Welcome, <?php echo $data[0]->first_name ?>
                    </div>
                    <div class="w3-auto w3-card applications w3-round w3-border ">

                        <div class="w3-right app-div w3-padding-large w3-left w3-auto">

                            <h4>Food Distribution Center <br> Semoran Food Pantry</h4>
                            <p>1771 N Semoran Blvd, <br />Orlando, FL 32807</p>
                            <strong>In Review</strong>
                        </div>
                    </div>

                </div>
                <div class=" w3-section">
                    <?php
                    $appointments = "";
                    $query = "SELECT * FROM appointments";
                    $stm = $connection->prepare($query);
                    $check = $stm->execute([$url_address]);
                    if ($check) {
                        $data = $stm->fetchAll(PDO::FETCH_OBJ);
                        if (is_array($data)) {
                            foreach ($data as &$record) {
                                $appointments .=
                                    '
                
                    <div class="w3-right app-div w3-padding-large w3-right w3-auto">

                    <h4>' . $record->foodbank . '</h4>
                    <p>' . $record->address . '</p>
                    <strong>' . $record->day . ' - ' . $record->time . '</strong>
                    </div>
                ';
                            }
                        }
                    }
                    ?>
                    <div class="w3-margin-left w3-center">
                        <h2><strong> Upcoming Appointments</strong></h2>
                    </div>
                    <div class="w3-auto w3-card applications appointment w3-round w3-border ">
                        <?php echo $appointments ?>
                    </div>


                </div>
            </div>
            <div class="w3-half w3-mobile">
                <div class=" w3-section">
                    <div class="w3-auto w3-margin-right">
                        <h2>Events This Week</h2>
                        <div id="events"></div>
                    </div>
                </div>
                <div class="w3-auto w3-margin w3-padding ">
                    <h3><strong>Scan Your QR</strong></h3>
                    <img style="width:10vw;" class="w3-mobile w3-image w3-auto w3-light-grey w3-round w3-border  " src="./assets/qr_default.png" alt="default qr code">
                </div>
            </div>

        </div>

    </main>
<script src="scripts/events.js"></script>
<?php include "./components/Footer.php"; ?>
<?php include 'components/Head.php';
include "private/autoload.php";
?>
<?php include './components/MainNavigation.php'; ?>

<?php

    $url_address = $_SESSION['url_address'];
    $query = "SELECT * FROM users WHERE url_address = ? limit 1";
    $stm = $connection->prepare($query);
    $check = $stm->execute([$url_address]);
    if ($check) {
        $data = $stm->fetchAll(PDO::FETCH_OBJ);
    }

?>

    <main class="dashboard">
        <div class="w3-row  w3-mobile">
            <div class="w3-half  w3-mobile">
                <div class=" w3-section">

                    <div class="w3-margin-left w3-center">
                        <h2><strong>Welcome, <?php echo $data[0]->first_name ?>
                    </div>

                    <?php
                    $applications = "";
                    $query = "SELECT * FROM applications";
                    $stm = $connection->prepare($query);
                    $check = $stm->execute([$url_address]);
                    if ($check) {
                        $data = $stm->fetchAll(PDO::FETCH_OBJ);
                        if (is_array($data)) {
                            foreach ($data as &$record) {
                                $appplications .=
                                    '
                                    <div class="w3-right app-div w3-padding-large w3-left w3-auto">

                                    <h4>' . $record->foodbank . '</h4>
                                    <p>' . $record->address . '</p>
                                    <strong>' . $record->status . '</strong>
                                    </div>
                                    ';
                                 }
                             }
                         }
                    ?>
                    <div class="w3-auto w3-card applications w3-round w3-border ">
                        <?php echo $applications; ?>
                    </div>

                </div>
                <div class=" w3-section">
                    <?php
                    $appointments = "";
                    $query = "SELECT * FROM appointments";
                    $stm = $connection->prepare($query);
                    $check = $stm->execute([$url_address]);
                    if ($check) {
                        $data = $stm->fetchAll(PDO::FETCH_OBJ);
                        if (is_array($data)) {
                            foreach ($data as &$record) {
                                $appointments .=
                                    '
                
                    <div class="w3-right app-div w3-padding-large w3-right w3-auto">

                    <h4>' . $record->foodbank . '</h4>
                    <p>' . $record->address . '</p>
                    <strong>' . $record->day . ' - ' . $record->time . '</strong>
                    </div>
                ';
                            }
                        }
                    }
                    ?>
                    <div class="w3-margin-left w3-center">
                        <h2><strong> Upcoming Appointments</strong></h2>
                    </div>
                    <div class="w3-auto w3-card applications appointment w3-round w3-border ">
                        <?php echo $appointments ?>
                    </div>


                </div>
            </div>
            <div class="w3-half w3-mobile">
                <div class=" w3-section">
                    <div class="w3-auto w3-margin-right">
                        <h2>Events This Week</h2>
                        <div id="events"></div>
                    </div>
                </div>
                <div class="w3-auto w3-margin w3-padding ">
                    <h3><strong>Scan Your QR</strong></h3>
                    <img style="width:10vw;" class="w3-mobile w3-image w3-auto w3-light-grey w3-round w3-border  " src="./assets/qr_default.png" alt="default qr code">
                </div>
            </div>

        </div>

    </main>

<script src="scripts/events.js"></script>
<?php include "./components/Footer.php"; ?>