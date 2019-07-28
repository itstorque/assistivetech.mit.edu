<?php
    $json=file_get_contents("../teams.json");
    $data =  json_decode($json);

		foreach ($data as $key => $value) {

			if (strpos($key, ' Teams') !== false) {

				echo "<br><h2 class='ui header'>".$key."<button onclick='location.href = \"/admin/new_project?year=".substr($key, 0, 4)."\"' class= 'ui right floated green button large'><i class='add icon'></i>Add Project</button></h2><br><table class='ui celled padded table'><thead>";

				echo "<tr><th>";

				echo "Edit";

				echo "</th><th>";

				echo "Team Name";

				echo "</th><th>";

				echo "Project Short Description";

				echo "</th><th>";

				echo "Project Full Description";

				echo "</th><th>";

				echo "Documentation";

				echo "</th><th>";

				echo "Won";

				echo "</th></tr></thead>";

				foreach ($value as $key => $value_2) {

					echo "<tr><td><center><a href='/admin/edit_project?id=".$value_2->{'id'}."'><i class='pencil icon'></i>";

					echo $value_2->{'id'};

					echo "</a></center></td><td>";

					echo $value_2->{'Team Name'};

					echo "</td><td>";

					echo $value_2->{'Project Description'};

					echo "</td><td>";

					echo $value_2->{'Project Detail'};

					echo "</td><td>";

					if (!(isset($value_2->{'Documentation'})) || $value_2->{'Documentation'}=="") {

						echo "<center><i class='minus icon'></i></center>";

					} else {

						echo "<center class='clickable' onclick='location.href = \"".$value_2->{'Documentation'}."\"'><i class='chain icon'></i></center>";

					}

					echo "</td><td>";

					$win_str = "None";

					$text_win = array("1st", "2nd", "3rd");

					if ($value_2->{'Place'} !== 0) {

						$win_str = "<b>".$text_win[$value_2->{'Place'}-1]."</b>";

						if (isset($value_2->{'Category'})) {

							$win_str .= ' on '.$value_2->{'Category'};

						}

					}

					echo $win_str;

					echo "</td></tr>";

					// foreach ($value_2 as $key => $object) {
					//     print_r($key);
					// }

				}

			}

			echo "</table>";

		}

 ?>
