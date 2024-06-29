<html>
<head><title>ACTIVITY 10</title></head>
<body>
<?php
$k=5;
   for($i=0;$i<$k;$i++)
    {
        for($j=0;$j<$k;$j++) 
        {
            if($i==0||$i==$k-1)
            {
                echo "+";
            }
            else
            {
                if($j==0||$j==$k-1)
            {
                    echo "+";
                }
                else
                {
                    echo "*";
                }
            }
        }
        echo "<br>";
    }
?>
</body>
</html>
