

    <?php
    $data=yaml_parse_file('yaml/test.yaml');
    //print_array($data);
    echo "<h1 id=\"comp\">".ucfirst($data["competence"])."</h1>\n";
    echo '<img id="code" src="assets/images/'.$data["photo3"].'">';
    ?>
    
    <div class="bandeau">
    <?php
        echo '<img id="pix" src="assets/images/'.$data["pix-img"].'">';
        echo "<h1 id=\"pix2\">".ucfirst($data["pix"])."</h1>\n";
        echo "<p>".ucfirst($data["obt-pix"])."</p>\n";
    ?>
        
    </div>