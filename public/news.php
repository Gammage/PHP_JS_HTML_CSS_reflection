
<?php
$servername = "localhost";
$username = "bengamma_bengammage";
$password = "B_202003195502";
$dbname = "bengamma_portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `posted_on`, `posted_by`, `type`, `image_name`, `title`, `text` FROM `news` LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $records = array();
  while($row = $result->fetch_assoc()) {
    $records[] = $row;

  }
} else {
  echo "0 results";
}
$conn->close();
?>

<?php foreach($records as $rec){?>   
<div class="news_entry_one">
    <div class="news_image">
        <a href="#"><img src="assetsnetmatterstask/images/news_container/<?php echo $rec['image_name'] ?>" alt="advertisement for free software development training"></a>
        <div class="news_button_small">
            <a href="#">news</a>
            <div class="hover_box">
                <span>View all: IT support / News</span>
            </div>
            <div class="arrow_box"></div>
        </div>
    </div>
    <div class="news_info">
        <a href="#"><h3><?php echo $rec['title'] ?></h3></a>
        <p class="news_info_p"><?php echo $rec['text'] ?></p>
        <a href="#" class="news_button">read more</a>
        <div class="news_author"> <!-- maybe for jscript, this would change -->
            <img class="author_image" src="assetsnetmatterstask/images/news_container/netmatters_logo_small.png" alt="image of Tessa Woodrow">
            <div class="posted_by">
                <p><b>Posted by <?php echo $rec['posted_by'] ?></b></p>
                <p><?php echo $rec['posted_on'] ?></p>
            </div>    
        </div> 
    </div>
</div>
<?php }?>

