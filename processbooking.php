<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
    // Text fields: check each value was submitted before using it
    if (isset($_POST["firstname"])) { $firstname = $_POST["firstname"]; } else { $firstname = ""; }
    if (isset($_POST["lastname"]))  { $lastname  = $_POST["lastname"];  } else { $lastname  = ""; }
    if (isset($_POST["age"]))       { $age       = $_POST["age"];       } else { $age       = ""; }
    if (isset($_POST["species"]))   { $species   = $_POST["species"];   } else { $species   = ""; }
    if (isset($_POST["food"]))      { $food      = $_POST["food"];      } else { $food      = ""; }
    if (isset($_POST["bookday"]))   { $bookday   = $_POST["bookday"];   } else { $bookday   = ""; }
    if (isset($_POST["partysize"])) { $partysize = $_POST["partysize"]; } else { $partysize = ""; }

    $species = "";
    if (isset($_POST["species"])) {
        switch ($_POST["species"]) {
            case "M": $species = "Human"; break;
            case "D": $species = "Dwarf"; break;
            case "E": $species = "Elf"; break;
            case "H": $species = "Hobbit"; break;
        }
    }

    $booked = array();
    if (isset($_POST["accom"])) { $booked[] = "Acommodation";}
    if (isset($_POST["4day"])) { $booked[] = "Four-Day tour";}
    if (isset($_POST["10day"])) { $booked[] = "Ten-Day tour";}

    if (count($booked) > 0) {
        $bookings = "You are booked on the " . implode(" and ", $booked);
    }
    else {
        $bookings = "You have not selected any bookings";
    }

    echo "<p>Welcome $firstname $lastname !<br />";
    echo "$bookings<br />";
    echo "Species: $species<br />";
    echo "Age: $age<br />";
    echo "Meal Preference: $food<br />";
    echo "Number of travellers: $partysize<br />";
?>
</body>
</html>