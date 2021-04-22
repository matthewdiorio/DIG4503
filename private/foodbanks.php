<?php

require "../private/autoload.php";

    $foodbanks = "";
    $query = "SELECT * FROM banks";
    $stm = $connection->prepare($query);
    $check = $stm->execute();
    if ($check) {
        $data = $stm->fetchAll(PDO::FETCH_OBJ);
        if (is_array($data)) {
            foreach ($data as &$record) {
                $foodbanks .= '<div class=" result_card w3-mobile w3-card w3-bottombar w3-section w3-bar-item ">
                <div class=" w3-mobile w3-row ">
                    <div class=" w3-half ">
                        <img src="'.$record->logo_url.'" alt=""
                    class="w3-image w3-section result_image w3-mobile" style="max-width:200px";>
                </div>
                <div class="w3-half">
                    <h3 class="w3-left w3-margin-left">' . $record->name . '</h3>
                    <br>
                    <p class="w3-padding-24 w3-margin w3-justify">' . $record->address . '</p>
                    <a href="#" class="result_btn w3-button w3-margin w3-border w3-padding-16 w3-round">Learn More</a>
                </div>
            </div>
        </div>';

            }
        
    }

}
echo $foodbanks;
