<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Country GetHint Example</title>
<?php
function concat($str1, $str2, $str3) {
    return $str1 . $str2 . $str3;
}
if (isset($_GET["q"])) {
    // Array of sample country names
    $countries = array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan",
                       "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
                       "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic",
                       "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia",
                       "Fiji", "Finland", "France",
                       "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana",
                       "Haiti", "Honduras", "Hungary",
                       "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
                       "Jamaica", "Japan", "Jordan",
                       "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan",
                       "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                       "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar",
                       "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway",
                       "Oman",
                       "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal",
                       "Qatar",
                       "Romania", "Russia", "Rwanda",
                       "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria",
                       "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu",
                       "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan",
                       "Vanuatu", "Vatican City", "Venezuela", "Vietnam",
                       "Yemen",
                       "Zambia", "Zimbabwe");

    // Get the query parameter from the URL
    $q = $_REQUEST["q"];

    $hint = "";

    // Lookup all country names from array if $q is different from ""
    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($countries as $country) {
            if (stristr($country, substr($q, 0, $len))) {
                if ($hint === "") {
                    $hint = $country;
                } else {
                    $hint = concat($hint, ", ", $country);

                }
            }
        }
        
    }

    // Output suggestion (or "no suggestion" if no hint was found)
    echo $hint === "" ? "no suggestion" : $hint;
    exit; // Important to exit to prevent further execution of the script
}
?>
<script>
function getHint(str) {
    if (str.length == 0) {
        document.getElementById("hint").innerHTML = "";
        return;
    } else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    document.getElementById("hint").innerHTML = xhr.responseText;
                } else {
                    alert('Error: ' + xhr.status);
                }
            }
        };
        xhr.open("GET", "?q=" + str, true);
        xhr.send();
    }
}
</script>
</head>
<body>

<h2>Start typing a country name in the input field below:</h2>
<form>
    Country name: <input type="text" onkeyup="getHint(this.value)">
</form>
<p>Suggestions: <span id="hint"></span></p>

</body>
</html>
