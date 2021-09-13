<?php
//optional parameter
function pertambahan($bil1, $bil2 = 2)
{
    return ($bil1 + $bil2);
}

echo pertambahan(10, 10)."<br>";//22
echo pertambahan(10). "<br>";//12
echo pertambahan(8). "<br>";//10
?>