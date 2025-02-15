<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Enter your Marks & Get Your Result</h2>
	<form action="" method="post">
		<p>Hindi: <input type="number" name="hindi" required min="0" max="100" /></p>
		<p>English: <input type="number"name="english" required min="0" max="100" /></p>
		<p>Gujarati: <input type="number"name="gujarati" required min="0" max="100" /></p>
		<p><input type="submit" name="submit"value="Submit"/></p>
	</form>
</div>


</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
	$hindi=$_REQUEST['hindi'];
	$english=$_REQUEST['english'];
	$gujarati=$_REQUEST['gujarati'];
	
	$total=$hindi+$english+$gujarati;
	$per=($total*100)/300;

	if($per>90)
	{
		$grade="A+ Garde";
	}
	elseif($per>80)
	{
		$grade="A Garde";
	}
	elseif($per>70)
	{
		$grade="B+ Garde";
	}
	elseif($per>60)
	{
		$grade="B Garde";
	}
	elseif($per>50)
	{
		$grade="C+ Garde";
	}
	elseif($per>40)
	{
		$grade="C Garde";
	}
	else
	{
		$grade="Fail";
	}	
}




?>
<div class="container mt-3">
  <h2>Your Result</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Hindi</th>
		<th>English</th>
        <th>Gujarati</th>
		<th>Total Marks</th>
		<th>Per %</th>
		<th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $hindi;?></td>
        <td><?php echo $english;?></td>
		<td><?php echo $gujarati;?></td>
		<td><?php echo $total;?></td>
		<td><?php echo $per;?></td>
		<td><?php echo $grade;?></td>
      </tr>

    </tbody>
  </table>
</div>