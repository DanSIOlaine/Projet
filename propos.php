
    <div>
        <div class="container">

<?php

$data=yaml_parse_file('yaml/test.yaml');
//print_array($data);

echo "<h1 id=\"dan\">".ucfirst($data["histoire"])."</h1>\n";
echo "<p id=\"text\">".ucfirst($data["text"])."</p>\n";
echo '<img id="pp" src="assets/images/'.$data["photo2"].'">';

?>
        </div>
    </div>



    



