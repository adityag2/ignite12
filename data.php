<?php
$connect=mysql_connect("mysql221.cp.365techsupport.com","u1023946_ignite","aditya");
	mysql_select_db("db1023946_ignite");
	if ($connect==false)
	{
		echo "database connection failed";
	}
$n1=$_POST['t1'];
$n2=$_POST['t2'];
$n3=$_POST['t3'];
$n4=$_POST['t4'];
$n5=$_POST['t5'];
$n6=$_POST['t6'];
$n7=$_POST['t7'];

if($n7=="botix")
{
	
			$query=mysql_query("select * from botix");
			if ($query==false)
			{
				echo "query failed ".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into botix values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="wall")
{
	
			$query=mysql_query("select * from wall");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
			echo "insert into wall values('$n1','$n2','$n3','$n4','$n5','$n6')";
			$i=mysql_query("insert into wall values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="contraption")
{
	
			$query=mysql_query("select * from contraption");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into contraption values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }		

if($n7=="paper")
{
	
			$query=mysql_query("select * from paper");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into paper values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="adventure")
{
	
			$query=mysql_query("select * from chronicles");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into chronicles values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }							

if($n7=="coding")
{
	
			$query=mysql_query("select * from geeks");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into geeks values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="quizzard")
{
	
			$query=mysql_query("select * from quizzard");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into quizzard values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="idol")
{
	
			$query=mysql_query("select * from idol");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into idol values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="manager")
{
	
			$query=mysql_query("select * from young");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into young values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="anadigix")
{
	
			$query=mysql_query("select * from anadigix");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into anadigix values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
				
if($n7=="lan")
{
	
			$query=mysql_query("select * from lan");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into lan values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="machine")
{
	
			$query=mysql_query("select * from machine");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into machine values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="cyber")
{
	
			$query=mysql_query("select * from forensics");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into forensics values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="trafficking")
{
	
			$query=mysql_query("select * from trafficking");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into trafficking values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
				
if($n7=="open")
{
	
			$query=mysql_query("select * from open_source");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into open_source values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
			
if($n7=="robotics")
{
	
			$query=mysql_query("select * from robotics");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into robotics values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
				
if($n7=="inter")
{
	
			$query=mysql_query("select * from seminar");
			if ($query==false)
			{
				echo "query failed".mysql_error();
			}
			$e=intval($n6);
						$i=mysql_query("insert into seminar values('$n1','$n2','$n3','$n4','$n5','$n6')");
			if (!$i)
			{
				echo "error inserting values".mysql_error();
			}
         if($i==1)
            {
             echo "<h2> You are registered </h2>";
         }
         else
         echo "insertion fails";

            }
								
			?>
