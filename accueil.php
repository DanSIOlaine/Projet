    <div class="container">
   
    <?php

$data=yaml_parse_file('yaml/test.yaml');
//print_array($data);


echo '<img id="img" src="assets/images/'.$data["photo"].'">';
echo "<p>".ucfirst($data["accroche"])."</p>\n";
echo "<h1 id=\"dan\">".ucfirst($data["prenom"])." ".$data["nom"]."</h1>\n";
?>
    

    </div>