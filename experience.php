<div class="centre">
        <a class="button" href="https://publuu.com/flip-book/326018/750983">Mon CV</a>
    <?php
    $data=yaml_parse_file('yaml/test.yaml');
    //print_array($data);
    echo '<img id="partelios" src="assets/images/'.$data["partelios-img"].'">';
    echo "<h1 id=\"apprentit\">".ucfirst($data["apprentit"])."</h1>\n";
    echo "<p id=\"presentation\">".ucfirst($data["presentation"])."</p>\n";
    ?>
</div>
    

