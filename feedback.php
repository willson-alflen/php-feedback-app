<?php include 'parcials/header.php'; ?>

<?php
/* CODE BELOW USED TO UNDESTAD HOW TO GET THE DATA */
// $feedback = [ 
//   [
//     'id' => '1',
//     'name' => 'Beth Williams',
//     'email' => 'beth_williams@email.com',
//     'body' => "The course is ok"
//   ],
//   [
//     'id' => '2',
//     'name' => 'Jerry Junior',
//     'email' => 'jerry_junior@email.com',
//     'body' => "I think you should update your course"
//   ],
//   [
//     'id' => '3',
//     'name' => 'Bill Johnson',
//     'email' => 'bill_johnson@email.com',
//     'body' => "Good stuff, man. Thank you!"
//   ]
// ];

/* GETTING DATA FROM THE DATABASE */

// create a variable
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Past Feedback</h2>

<!-- that's how we work within an html file -->
<!-- instead of using {}, use : -->
<?php if (empty($feedback)) : ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>



<?php include 'parcials/footer.php'; ?>