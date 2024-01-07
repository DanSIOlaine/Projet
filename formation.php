    <div class="sainte">
        <a class="button" href="https://publuu.com/flip-book/326018/750983">Mon CV</a>
        <?php
    $data=yaml_parse_file('yaml/test.yaml');
    //print_array($data);
    echo '<img src="assets/images/'.$data["img"].'">';
    echo "<h1 id=\"sup\">".ucfirst($data["sup"])."</h1>\n";
    echo "<p id=\"bts\">".ucfirst($data["bts"])."</p>\n";
    ?>


    </div>
        
    <div class="contenant">
        
            <?php

//print_array($data);

echo "<p id=\"pave\">".ucfirst($data["pave"])."</p>\n";


?>
    </div>