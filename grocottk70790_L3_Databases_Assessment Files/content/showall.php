<h2>Show All Poems [Testing]</h2>

<?php

$find_sql = "SELECT * FROM `poems`";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);

// Loop through results and display them...
do {
    $poem = preg_replace('/[^A-Za-z0-9.,?\s\'\-]/', ' ', $find_rs['content']); // From ""[...]useful_code.txt""
    // include("get_author.php");
    ?>
<div class="results">
    <p>
        <?php echo $poem; ?><br />
        <!-- Displays author name -->
        <a href="index.php?page=author&Author_ID=<?php echo $find_rs['Author_ID']; ?>">
        <?php echo $full_name; ?>
        </a> <!-- Author name -->
    </p>
    <?php include("show_subjects.php"); ?>
</div>
<br />
<?php

} // End of the do command for display results

while($find_rs = mysqli_fetch_assoc($find_query))

?>
