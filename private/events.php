<?php

require "../private/autoload.php";

    $events = "";
    $query = "SELECT banks.id, banks.name, banks.logo_url, events.bank_id, events.day, events.times FROM banks inner join events ON banks.id=events.bank_id";
    $stm = $connection->prepare($query);
    $check = $stm->execute();
    if ($check) {
        $data = $stm->fetchAll(PDO::FETCH_OBJ);
        if (is_array($data)) {
            foreach ($data as &$record) {


                $events .= '<div class="w3-panel w3-white w3-card w3-bar w3-auto">
                    <img style="max-width:5vw;" class="w3-bar-item w3-circle w3-mobile" src="'. $record->logo_url.'"/>
                    <div class="w3-bar-item w3-auto">
                        <strong class=" w3-section">'. $record->name.'</strong>
                        <p class=" w3-section" >'. $record->day .' '.$record->times.'</p>
                    </div>
                    
                </div>';


            }
        
    }

}
echo $events;
