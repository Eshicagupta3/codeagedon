<?php
require "connect.php";
$query_run=@mysqli_query($conn,"select * from question order by number asc");
if(@mysqli_num_rows($query_run)>0)
 
{
   
    while($row=@mysqli_fetch_assoc($query_run))
    {
    
        $q=$row['ques'];
        $sno=$row['sno'];
    	$a=$row['ans'];
    	$n=$row['number'];
     
    
echo "<form method='post' name='delete1' action=''>
 
    <input type='hidden' name='iname'   value='" .$sno ."'/>
 <button name='del1' id='mySubmit' style='float: right;'><span class='glyphicon glyphicon-remove'></span></button>

    </form>";
    	echo $n;
    	echo "- ques: ";
    	echo $q." ";
    	echo "<br>";
    	echo "ans: ";
    	echo $a;
echo "<br><hr>";
}
}
?>