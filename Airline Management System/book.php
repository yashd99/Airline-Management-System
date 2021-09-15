<?php
    session_start();
    if(empty($_SESSION['user_info'])){
        echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
    }
    $conn = mysqli_connect("localhost","root","yash99","airplanes");
    if(!$conn){
        echo "<script type='text/javascript'>alert('Database failed');</script>";
        die('Could not connect: '.mysqli_connect_error());
    }
?>
<html>
<head>
<title>Transaction form</title>
<script type="text/javascript">
		function validate()	{
			var source=document.getElementById("source");
			if(source.selectedIndex==0)
			{
				alert("Please select your source");
				source.focus();
				return false;		
			}
			var destination=document.getElementById("destination");
            if(destination.selectedIndex==0)
			{
				alert("Please select your destination");
				destination.focus();
				return false;		
			}
            var month_start=document.getElementById("month_start");
            if(month_start.selectedIndex==0)
            {
                alert("Please select your start month");
                source.focus();
                return false;
            }
            var day_start=document.getElementById("day_start");
            if(day_start.selectedIndex==0)
            {
                alert("Please select your start day");
                source.focus();
                return false;
            }
            var year_start=document.getElementById("year_start");
            if(year_start.selectedIndex==0)
            {
                alert("Please select your start year");
                source.focus();
                return false;
            }
                
           
            
		}

</script>
<style type="text/css">
	html {
		background: url(airline3.jpg) no-repeat center center;
		background-size: cover;
	}
	#mainarea	{
		width: 40%;
		height: 50%;
		margin: auto;
		border-radius: 25px;
		border: 2px solid blue;
		margin-top: 90px;
		padding-bottom: 20px;
		background-color: rgba(0,0,0,0.2);
	    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
	}
	#cancelform	{
		margin-top: 50px;
	}
</style>
</head>
<body>
<?php 
include ("nav.php")
?>
<div id="mainarea">
<h1 align="center"><font color="Cornsilk" face="Times New Roman">Enter the Flight Details</font></h1>
<form  action="ticket.php" method="post" onsubmit="return validate()">
<table align="center">
<tr>
<td><p><font color="Cornsilk" size="5"> Select source:</font></p></td>&nbsp;&nbsp;
<td><select id="source" align="center" name="source">
<option value="None" disabled selected>------Select source------</option>
<option value="Mumbai">Mumbai</option>
<option value="Chennai">Chennai</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="London">London</option>
<option value="New York">New York</option>
<option value="Abu Dhabi">Abu Dhabi</option>
</select>
</td>
</tr>
<tr>
<td><p><font color="Cornsilk" size="5">Select destination:</font></p></td>
<td><select id="destination" align="center" name="destination">
<option value="None" disabled selected>---Select destination---</option>
<option value="Sydney">Sydney</option>
<option value="Singapore">Singapore</option>
<option value="London">London</option>
<option value="Mumbai">Mumbai</option>
<option value="Goa">Goa</option></select></td>
</tr>


</TR><tr></tr><tr></tr>
</table><br><br>





<fieldset class="date">
<legend><font color="Cornsilk" size="4">Select Date </legend>
<label for="month_start"><font color="Cornsilk" size="4">Month</label>
<select id="month_start"
name="month_start" />
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option>
</select> -
<label for="day_start"><font color="Cornsilk" size="4">Day</label>
<select id="day_start"
name="day_start" />
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select> -
<label for="year_start">Year</label>
<select id="year_start"
name="year_start" />
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
</select>
<span class="inst">(Month-Day-Year)</span>
</fieldset>

<p>

<center><input type="SUBMIT" value="SUBMIT" id="submit" name="submit"  >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</center>

</p>

</form>

</div>
</body>
</html>
