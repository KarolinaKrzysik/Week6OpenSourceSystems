<?php
    include("myfunctions.inc");
    html_header("My second function demo");
    echo "I pay £". calculatetax(11000, 15). " tax.";
    html_footer();
?>