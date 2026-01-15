<?php
/*
    Name: Sinamban, Harvey Jireh C.
    Section: CYB-201
    Date Submitted: January 15, 2025
*/

include 'includes/header.php';
$school = "HOLY ANGEL UNIVERSITY";
$name = "Harvey Sinamban";
$spaceString = " Hello PHP World ";
$number = 20620552.6789;
$nameList = ["Harvey", "Jireh", "Canlas", "Sinamban"];
?>

<h2>List of Values Used</h2>
<table>
    <tr>
        <th>Value</th>
    </tr>
    <tr>
        <td><?= $school?></td>
    </tr>
    <tr>
        <td><?= $name?></td>
    </tr>
    <tr>
        <td><?= $spaceString?></td></td>
    </tr>
    <tr>
        <td><?= $number?></td></td>
    </tr>
    <tr>
        <td><?= print_r($nameList, true) ?></td>
    </tr>
</table>

<h2>Changing the Case of Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Description</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><code>strtolower()</code></td>
        <td>Lowercase</td>
        <td><?= strtolower($school); ?></td>
    </tr>
    <tr>
        <td><code>strtoupper()</code></td>
        <td>Uppercase</td>
        <td><?= strtoupper($school); ?></td>
    </tr>
    <tr>
        <td><code>ucwords()</code></td>
        <td>Capitalize</td>
        <td><?= ucwords(strtolower($school)); ?></td>
    </tr>
</table>

<h2>Counting Characters and Words</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Description</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><code>strlen()</code></td>
        <td>Number of Characters (Name)</td>
        <td><?= strlen($name); ?></td>
    </tr>
    <tr>
        <td><code>str_word_count()</code></td>
        <td>Number of Words (Name)</td>
        <td><?= str_word_count($name); ?></td>
    </tr>
</table>

<h2>Removing and Replacing Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Description</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><code>ltrim()</code></td>
        <td>Remove Whitespaces from the Left</td>
        <td><?= ltrim($spaceString); ?></td>
    </tr>
    <tr>
        <td><code>rtrim()</code></td>
        <td>Remove Whitespaces from the Right</td>
        <td><?= rtrim($spaceString); ?></td>
    </tr>
    <tr>
        <td><code>trim()</code></td>
        <td>Remove Whitespaces from left and right</td>
        <td><?= trim($spaceString); ?></td>
    </tr>
    <tr>
        <td><code>str_replace()</code></td>
        <td>Replace "PHP" with "DWEB"</td>
        <td><?= str_replace("PHP", "DWEB", $spaceString); ?></td>
    </tr>
    <tr>
        <td><code>str_ireplace()</code></td>
        <td>Replace "PHP" with "DWEB" (Not Case-sensitive)</td>
        <td><?= str_ireplace("PHP", "DWEB", $spaceString); ?></td>
    </tr>
    <tr>
        <td><code>str_repeat()</code></td>
        <td>Repeat the String</td>
        <td><?= str_repeat($spaceString, 2); ?></td>
    </tr>
</table>

<h2>Other Built-in Functions</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Description</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><code>strpos()</code></td>
        <td>Position of "PHP"</td>
        <td><?= strpos($spaceString, "PHP"); ?></td>
    </tr>
    <tr>
        <td><code>str_contains()</code></td>
        <td>Checks the Substring (PHP) is Found in a String</td>
        <td><?= str_contains($spaceString, "PHP"); ?></td>
    </tr>
    <tr>
        <td><code>str_starts_with()</code></td>
        <td>Checks if String Starts with Substring (PHP)</td>
        <td><?= str_starts_with($spaceString, "PHP") ? "Yes" : "No"; ?></td>
    </tr>
    <tr>
        <td><code>str_ends_with()</code></td>
        <td>Checks if String Ends with Substring (World)</td>
        <td><?= str_ends_with($spaceString, "World ") ? "Yes" : "No"; ?></td>
    </tr>
    <tr>
        <td><code>round()</code></td>
        <td>Round a Number</td>
        <td><?= round($number, 2); ?></td>
    </tr>
    <tr>
        <td><code>sqrt()</code></td>
        <td>Square a Number</td>
        <td><?= sqrt($number); ?></td>
    </tr>
    <tr>
        <td><code>array_rand()</code></td>
        <td>Selects a Random Key from the Array</td>
        <td><?= array_rand($nameList) ?></td>
    </tr>
    <tr>
        <td><code>in_array()</code></td>
        <td>Checks if a Value is in an Array (Jireh)</td>
        <td><?= in_array("Jireh", $nameList) ? "Yes" : "No"; ?></td>
    </tr>
    <tr>
        <td><code>count()</code></td>
        <td>Count Number of Items in Array</td>
        <td><?= count($nameList); ?></td>
    </tr>
</table>

<?php   
include 'includes/footer.php';
?>