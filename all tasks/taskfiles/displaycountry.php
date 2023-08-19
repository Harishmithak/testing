<?php

$xml = simplexml_load_file('Country.xml');


echo "<h2>All Country Details</h2>";
foreach ($xml->country as $country) {
    echo "<h3>{$country->name}</h3>";
    echo "Capital: {$country->capital}<br>";
    echo "Population: {$country->population}<br>";
    echo "Official Language: {$country->language}<br>";
    echo "Continent: {$country->continent}<br>";
    echo "Boundaries:<br>";
    echo "East: {$country->boundary->east}<br>";
    echo "West: {$country->boundary->west}<br>";
    echo "North: {$country->boundary->north}<br>";
    echo "South: {$country->boundary->south}<br><br>";
}

// b. Display country name, capital, and continent name
echo "<h2>Country Name, Capital, and Continent</h2>";
foreach ($xml->country as $country) {
    echo "<h3>{$country->name}</h3>";
    echo "Capital: {$country->capital}<br>";
    echo "Continent: {$country->continent}<br><br>";
}

// c. Display country name and boundary details
echo "<h2>Country Name and Boundary Details</h2>";
foreach ($xml->country as $country) {
    echo "<h3>{$country->name}</h3>";
    echo "Boundaries:<br>";
    echo "East: {$country->boundary->east}<br>";
    echo "West: {$country->boundary->west}<br>";
    echo "North: {$country->boundary->north}<br>";
    echo "South: {$country->boundary->south}<br><br>";
}

// d. Display all details for India and Sri Lanka
echo "<h2>Details for India and Sri Lanka</h2>";
foreach ($xml->country as $country) {
    if ($country->name == "India" || $country->name == "Sri Lanka") {
        echo "<h3>{$country->name}</h3>";
        echo "Capital: {$country->capital}<br>";
        echo "Population: {$country->population}<br>";
        echo "Official Language: {$country->language}<br>";
        echo "Continent: {$country->continent}<br>";
        echo "Boundaries:<br>";
        echo "East: {$country->boundary->east}<br>";
        echo "West: {$country->boundary->west}<br>";
        echo "North: {$country->boundary->north}<br>";
        echo "South: {$country->boundary->south}<br><br>";
    }
}
?>
