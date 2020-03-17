<!doctype html>

<?php
	session_start();
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/raid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- WoWHead Tool -->
	<script>var whTooltips = {colorLinks: true, iconizeLinks: true, renameLinks: true};</script>
	<script src="https://wow.zamimg.com/widgets/power.js"></script>

    <title>Gildenliste</title>

  </head>

  <body style="background-color: rgb(12, 12, 12);">

	<div class="jumbotron text-center" style="margin-bottom:0; background-color: rgb(15, 15, 15);">
 		 <h1 style="color: white;">Ascended</h1>
	</div>

  <!-- Navbar -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

		<!-- "Logo" -->
		<a class="navbar-brand" href="#">Ascended</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
      			<a class="nav-link" href="gildenliste.php">Gildenmember</a>
			</li>


		<!-- Dropdown -->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Raids</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Molten Core</a>
					<a class="dropdown-item" href="#">Onyxia</a>
				</div>
			</li>
		</ul>

		<form class="form-inline my-2 my-lg-0">
			  <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" style="margin-left: 5px;" data-toggle="modal" data-target="#modalLoginForm" type="button">Login</button>
			  <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#modalRegisterForm" type="button">Register</button>
    	</form>
		
		</div>
		
	</nav>
  <!-- Navbar - Ende -->

  <!-- Login / Register Modal -->

  <!-- Modal - Login -->
	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header text-center">
			<h4 class="modal-title w-100 font-weight-bold">Login</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body mx-3">
			<div class="md-form mb-5">
			<i class="fa fa-user prefix grey-text"></i>
			<input type="text" id="defaultForm-nick" class="form-control validate">
			<label data-error="wrong" data-success="right" for="defaultForm-nick">Nickname</label>
			</div>

			<div class="md-form mb-4">
			<i class="fa fa-lock prefix grey-text"></i>
			<input type="password" id="defaultForm-pass" class="form-control validate">
			<label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
			</div>

		</div>
		<div class="modal-footer d-flex justify-content-center">
			<button class="btn btn-default">Login</button>
		</div>
		</div>
	</div>
	</div>
<!-- Modal - Ende -->
<!-- Modal - Register -->
	<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header text-center">
			<h4 class="modal-title w-100 font-weight-bold">Register</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action="register.php" method="POST">
		<div class="modal-body mx-3">
			<div class="md-form mb-5">
			<input name="nick" type="text" minlength="2" maxlength="13" id="orangeForm-name" class="form-control validate" required>
			<label data-error="wrong" data-success="right" for="orangeForm-name">Nickname</label>
			</div>

			<div class="md-form mb-4">
			<input name="password"  type="password" minlength="4" maxlength="20" id="orangeForm-pass" class="form-control validate" required>
			<label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
			</div>

			<div class="md-form mb-5">
			<input name="guild"  type="text" minlength="2" maxlength="13" id="orangeForm-guild" class="form-control validate" required>
			<label data-error="wrong" data-success="right" for="orangeForm-guild">Gilde</label>
			</div>

			<div class="md-form mb-5">
			<input name="level"  type="number" min="1" max="60" id="orangeForm-level" class="form-control validate" required>
			<label data-error="wrong" data-success="right" for="orangeForm-level">Level</label>
			</div>

			<div class="md-form mb-5">
			<select  name="role" id="orangeForm-role" class="form-control validate" required>
				<option value="Tank">Tank</option>
				<option value="DPS">DPS</option>
				<option value="Heal">Heal</option>
				<option value="Off-Tank">Off-Tank</option>
			</select> 
			<label data-error="wrong" data-success="right" for="orangeForm-role">Rolle</label>
			</div>

			<div class="md-form mb-5">
			<select  name="class" id="orangeForm-class" class="form-control validate" required>
				<option value="Druid">Druid</option>
				<option value="Hunter">Hunter</option>
				<option value="Mage">Mage</option>
				<option value="Paladin">Paladin</option>
				<option value="Priest">Priest</option>
				<option value="Rogue">Rogue</option>
				<option value="Shaman">Shaman</option>
				<option value="Warlock">Warlock</option>
				<option value="Warrior">Warrior</option>
			</select> 
			<label data-error="wrong" data-success="right" for="orangeForm-class">Klasse</label>
			</div>

			<div id="register_warnung" class="alert alert-danger" style="display: none;">
				Nickname nicht mehr verfügbar!
			</div>
			<!-- Error Message -->
			<?php
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			
			if (strpos($url, 'error=username') !== false){
				echo "<script>alert('Nickname nicht mehr verfügabr!');</script>";
			}
			?>
			<!-- Error Message - Ende -->
		</div>
		<div class="modal-footer d-flex justify-content-center">
			<button id="registerButton" class="btn btn-deep-orange" type="submit">Signup</button>
		</div>
		</div>
	</div>
	</div>
</form>
<!-- Modal - Ende -->
<!-- Modal Login/Register Ende -->

  <!-- Gilden Liste -->
	<div class="container-fluid mt-sm-3">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group float-right p-sm-3 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
				
					<!-- Klasse -->
					<label for="klasse" style="color: white;">Klasse</label>
					<select class="form-control-inline" id="klasse" onchange="filter()">
						<option value="">Alle</option>
						<option value="Druid">Druid</option>
						<option value="Hunter">Hunter</option>
						<option value="Mage">Mage</option>
						<option value="Paladin">Paladin</option>
						<option value="Priest">Priest</option>
						<option value="Rogue">Rogue</option>
						<option value="Shaman">Shaman</option>
						<option value="Warlock">Warlock</option>
						<option value="Warrior">Warrior</option>
					</select>

					<!-- Nickname -->
					<label for="suche" style="color: white;">Nickname</label>
					<input type="text" class="form-control-inline" id="nickname" onkeyup="filter()">

					<script>
						//Sortier Funktion
						function sortTable(n) {
							var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
							table = document.getElementById("myTable");
							switching = true;
							dir = "asc";

							while (switching) {
								switching = false;
								rows = table.rows;

								for (i = 1; i < (rows.length - 1); i++) {
								shouldSwitch = false;
								x = rows[i].getElementsByTagName("TD")[n];
								y = rows[i + 1].getElementsByTagName("TD")[n];

								if (dir == "asc") 
								{
									for (zaehler = 0; zaehler < 6; zaehler++) 
									{
										document.getElementById("asc" + zaehler).style.display = "none";
										document.getElementById("desc" + zaehler).style.display = "none";	
									}
									document.getElementById("asc" + n).style.display = "";

									if(n == 0)
									{
										if (Number(x.innerHTML) > Number(y.innerHTML)) 
										{
											shouldSwitch = true;
											break;
										}
									}
									else
									{
										if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) 
										{
											shouldSwitch = true;
											break;
										}
									}
								} else if (dir == "desc") {

									for (zaehler = 0; zaehler < 6; zaehler++) 
									{
										document.getElementById("asc" + zaehler).style.display = "none";
										document.getElementById("desc" + zaehler).style.display = "none";
										
									}
									document.getElementById("desc" + n).style.display = "";

									if(n == 0)
									{
										if (Number(x.innerHTML) < Number(y.innerHTML)) 
										{
											shouldSwitch = true;
											break;
										}
									}
									else
									{
										if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) 
										{
											shouldSwitch = true;
											break;
										}
									}
								}
								}
								if (shouldSwitch) {
								rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
								switching = true;
								switchcount ++;
								} else {

								if (switchcount == 0 && dir == "asc") {
									dir = "desc";
									switching = true;
								}
								}
							}
							}

						//Filter Funktion
						function filter() 
						{
							// Variablen
							var input, input2, filter, filter2, table, tr, td, i, txtValue;
							input = document.getElementById("nickname");
							input2 = document.getElementById("klasse");

							filter = input.value.toUpperCase();
							filter2 = input2.value.toUpperCase();

							table = document.getElementById("myTable");
							tr = table.getElementsByTagName("tr");

							for (i = 0; i < tr.length; i++) 
							{
								td = tr[i].getElementsByTagName("td")[1];
								td2 = tr[i].getElementsByTagName("td")[2];
								if (td || td2) 
								{
									txtValue = td.textContent || td.innerText;
									txtValue2 = td2.textContent || td2.innerText;
									if (txtValue.toUpperCase().indexOf(filter) > -1 && txtValue2.toUpperCase().indexOf(filter2) > -1 ) 
									{
										tr[i].style.display = "";
									}
									else 
									{
										tr[i].style.display = "none";
									}
								}
							}
						}
					</script>
				</div>
			</div>
		</div>
	</div>
    


	<div class="container" style="margin-top:15px">
			<table class="table table-dark table-striped table-hover text-center" id="myTable">
			<thead>
		<tr>
			<th style="cursor: pointer;" onclick="sortTable(0)" id="th1">
				<span id="asc0" class="fa fa-long-arrow-up" style="display: none;"></span>
				<span id="desc0" class="fa fa-long-arrow-down"  style="display: none;"></span>
				Level
			</th>
			<th style="cursor: pointer;" onclick="sortTable(1)" id="th2">
				<span id="asc1" class="fa fa-long-arrow-up" style="display: none;"></span>
				<span id="desc1" class="fa fa-long-arrow-down"  style="display: none;"></span>
				Name
			</th>
			<th style="cursor: pointer;" onclick="sortTable(2)" id="th3">
				<span id="asc2" class="fa fa-long-arrow-up" style="display: none;"></span>
				<span id="desc2" class="fa fa-long-arrow-down"  style="display: none;"></span>
				Klasse
			</th>
			<th style="cursor: pointer;" onclick="sortTable(3)" id="th4">
				<span id="asc3" class="fa fa-long-arrow-up" style="display: none;"></span>
				<span id="desc3" class="fa fa-long-arrow-down"  style="display: none;"></span>
				Rolle
			</th>
			<th style="cursor: pointer;" onclick="sortTable(4)" id="th5">
				<span id="asc4" class="fa fa-long-arrow-up" style="display: none;"></span>
				<span id="desc4" class="fa fa-long-arrow-down"  style="display: none;"></span>
				Gilde
			</th>
			<th>Onyxia</th>
			<th style="cursor: pointer;" onclick="sortTable(5)" id="th6">
				<span id="asc5" class="fa fa-long-arrow-up" style="display: none;"></span>
				<span id="desc5" class="fa fa-long-arrow-down"  style="display: none;"></span>
				MC - Softreserve
			</th>
		</tr>
		</thead>

		<tbody>
		<?php 
			$verbindung = mysqli_connect ("localhost", "root", "") 
			or die("Fehler im System"); 

			mysqli_select_db ($verbindung, "ascended") 
			or die("Es konnte keine Verbindung zur Datenbank hergestellt werden.");

			$abfrage = "SELECT u_id, rank, level, nick, class, role, guild, raid_cd_ony, raid_lead, mc_soft, verified_nick
		FROM user WHERE guild_intern = 0 OR 1
		ORDER BY u_id ASC";
			$ergebnis = $verbindung->query($abfrage);
			$anzahl = 1;

			while($row2 = $ergebnis->fetch_assoc())
				{
					if ($anzahl <= 40){
					$ony_datum = date_create($row2["raid_cd_ony"]);
					$rank = $row2["rank"];

					echo "<tr>
					 <td>" . utf8_encode($row2["level"]) . "</td>" . 
					"<td>" . rank_color($rank) . utf8_encode($row2["nick"]) . verified_nick($row2["verified_nick"], utf8_encode($row2["nick"])) . "</span></a></td>" . 
					"<td class=\"" . class_color(utf8_encode($row2["class"])) . "\"><img src=\"assets/images/classes/" . utf8_encode($row2["class"]) . ".png\" alt=\"" . utf8_encode($row2["class"]) . "\">  " . utf8_encode($row2["class"]) . "</td>" . 
					"<td>" . utf8_encode($row2["role"]). "</td>" .
					"<td>" . utf8_encode($row2["guild"]). "</td>" .
					"<td>" . date_format($ony_datum, 'd.m.Y H:i:s') . "</td>" .
					"<td><a href=\"\" data-wowhead=\"item=" . $row2["mc_soft"] . "\"></a></td>
					</tr>";
					$anzahl++;
					}
					else
					{
						mysqli_close($verbindung); 
						break;
					}
				} 

				/*
				function rank_img($rank)
				{
					switch($rank){
						case 0:
							return "";
							break;
						case 1:
							return "";
							break;
						case 2:
							return "<img src=\"assets/images/raid_leader.png\" class=\"mr-sm-1\" style=\"width: 25px;height: 25px;\"> ";
							break;
						case 3:
							return "";
							break;
						case 4:
							return "<img src=\"assets/images/admin.png\" class=\"mr-sm-1\" style=\"width: 25px;height: 25px;\"> ";
							break;
						default:
							return "";
					}
				}
				*/
				function verified_nick($verified_nick, $nick)
				{
					if ($verified_nick == 1) 
					{
						return "<span class=\"fa fa-check-circle ml-sm-1\" style=\"color: rgba(0, 182, 251, 1.0);\" data-toggle=\"tooltip\" title=\"Verifiziert als " . $nick . "\">";

					}
					else
					{
						return "";
					}
				}

				function rank_color($rank) 
				{
					switch ($rank) {
						case 0:
							return "";
							break;
						case 2:
							return "<a class=\"rank_raid_lead\" href=\"\" data-toggle=\"tooltip\" title=\"Raid Leader\">";
							break;
						case 4:
							return "<a class=\"rank_admin\" href=\"\" data-toggle=\"tooltip\" title=\"Admin\">";
							break;
						default:
							return "";
					}
				}

				function class_color($class) 
				{
					switch ($class) {
						case "Druid":
							return "druid";
							break;
						case "Hunter":
							return "hunter";
							break;
						case "Mage":
							return "mage";
							break;
						case "Paladin":
							return "paladin";
							break;
						case "Priest":
							return "priest";
							break;
						case "Rogue":
							return "rogue";
							break;
						case "Shaman":
							return "shaman";
							break;
						case "Warlock":
							return "warlock";
							break;
						case "Warrior":
							return "warrior";
							break;
						default:
							return "";
					}
				}
			?>
			</tbody>
			</table>
	</div>
    <!-- Gilden Liste - Ende -->

	<!-- Footbar -->
	<footer class="page-footer font-small blue pt-4">
		<div class="footer-copyright text-center py-3" style="color: rgb(200, 200, 200);">© 2019 Copyright

  		</div>
	</footer>
	<!-- Footbar - Ende -->

	<!-- Optional JavaScript -->
	<script>
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
