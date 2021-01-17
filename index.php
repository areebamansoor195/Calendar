<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calender</title>
<link rel="stylesheet" type="text/css" href="assets/plugin/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugin/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<header class="text-center">
<h1>Dynamic Calender</h1>
</header>
<div class="container">
<div class="row justify-content-md-center">
<div class="offset-md-2 col-md-8">
<div class="row">
<?php

for($i=1;$i<=12;$i++){
if($i %2==0){ ?>
<div class="col-md-3">
<div class="calender-main-block odd">
<h5>Nov 2021</h5>
<table>
	<thead>
		<tr>
		<?php  $Days = ["Sun","Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        $arrayLength = count($Days);
        
        $i = 0;
        while ($i < $arrayLength)
        {
            echo $Days[$i];
            $i++;
		}
		?>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
		</tr>
		<tr>
			<td>8</td>
			<td>9</td>
			<td>10</td>
			<td>11</td>
			<td>12</td>
			<td>13</td>
			<td>14</td>
		</tr>
		<tr>
			<td>15</td>
			<td>16</td>
			<td>17</td>
			<td>18</td>
			<td>19</td>
			<td>20</td>
			<td>21</td>
		</tr>
		<tr>
			<td>22</td>
			<td>23</td>
			<td>24</td>
			<td>25</td>
			<td>26</td>
			<td>27</td>
			<td>28</td>
		</tr>
		<tr>
			<td>29</td>
			<td>30</td>
			<td>31</td>
		</tr>
	</tbody>
</table>
</div>
</div>
<?php }
else {
?>
<div class="col-md-3">
<div class="calender-main-block odd">
<h5>January 2021</h5>
<table>
<thead>
	<tr>
	<?php  $Days = ["Sun","Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        $arrayLength = count($Days);
        
        $i = 0;
        while ($i < $arrayLength)
        {
            echo $Days[$i];
            $i++;
		}
		?>
	</tr>
</thead>
<tbody>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
	</tr>
	<tr>
		<td>8</td>
		<td>9</td>
		<td>10</td>
		<td>11</td>
		<td>12</td>
		<td>13</td>
		<td>14</td>
	</tr>
	<tr>
		<td>15</td>
		<td>16</td>
		<td>17</td>
		<td>18</td>
		<td>19</td>
		<td>20</td>
		<td>21</td>
	</tr>
	<tr>
		<td>22</td>
		<td>23</td>
		<td>24</td>
		<td>25</td>
		<td>26</td>
		<td>27</td>
		<td>28</td>
	</tr>
	<tr>
		<td>29</td>
		<td>30</td>
	</tr>
</tbody>
</table>
</div>
</div>
<?php 
} 
}
?>
</div>
</div>
</div>
</div>


<script type="text/javascript" src="assets/js/jQuery.js"></script>
</body>
</html>