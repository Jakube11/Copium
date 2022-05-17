<?php
    echo 'test';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
            $datae = array();
            $datae[] = array(
                'dev_r' => $_POST['dev_r'],
                'content' => $_POST['content'],
            );
            return json_encode($datae);
        }
          
        $name = "MessageFromUser";
        $file_name = $name . '.json';
       
        if(file_put_contents("/DevMessages/$file_name", get_data())) {
                echo $file_name .' file created';
            }
        else {
            echo 'There is some error';
        }
    }
?>