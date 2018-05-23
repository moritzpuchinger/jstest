<?php
    function menu($foldername) {
        $children = array_diff(scandir($foldername),array("..",".",".DS_Store"));
        /*array_shift($children);
        array_shift($children);*/
        sort($children);
        $childrenstring = "";
        for($i=0;$i<count($children);$i++) {
            //$children[$i] = substr($children[$i],2);
            if(count(scandir($foldername."/".$children[$i])) == 3 && (scandir($foldername."/".$children[$i])[2] == "index.html" || scandir($foldername."/".$children[$i])[2] == "index.php")) {
                if(basename(dirname($_SERVER["PHP_SELF"])) == $children[$i]) {
                    $extra = "is-active";
                } else {
                    $extra = "";
                }
                $childrenstring .= '<li class="'.$extra.'"><a class="link" href=/'.str_replace(" ","%20",str_replace("/Applications/MAMP/htdocs/","",$foldername)).'/'.$children[$i].'>'.$children[$i].'</a></li>';
            } else {
                $childrenstring .= '<li class="menu_element">
                    <a href="#">
                        '.$children[$i].'
                    </a>
                    <ul class="menu vertical nested">
                        '.menu($foldername."/".$children[$i]).'
                    </ul>
                </li>';
            }
        }
        return $childrenstring;
    }
?>