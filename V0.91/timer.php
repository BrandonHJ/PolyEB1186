<?php

//$time =  strtotime('last Monday');

//echo gmdate('Y-m-d H:i:s', $time);;

echo 'test123 <br/>';

?>

<!DOCTYPE html>
<html>
<head>
    <script>
        function startTime()
        {

            var ret = new Date(new Date());
            ret.setDate(ret.getDate() + (3 - 1 - ret.getDay() + 7) % 7 + 1);


            //var today=new Date();
            var h=ret.getHours();
            var m=ret.getMinutes();
            var s=ret.getSeconds();
// add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('txt').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
</head>

<body onload="startTime()">
<div id="txt"></div>
</body>
</html>