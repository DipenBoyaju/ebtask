<?php 
include './lib/connectdb.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EB Pearls Assignment</title>
  <link rel="stylesheet" href="./css/style.css" />
  <script defer>
    function toggleMenu() {
      document.querySelector(".menu").classList.toggle("active");
    }
  </script>
</head>
<body>

  <nav class="header">
    <div class="logo">
      <img src="./images/logo.png" alt="">
    </div>

    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <div class="menu">
      <a href="#">Home</a>
      <a href="#">Solutions</a>
      <a href="#">Help Center</a>
      <a href="#">Get Started</a>
      <div class="buttonss">
    <button class="login-button">Login</button>
    <button class="request-button">Request a demo</button>
    </div>
    </div>
    <div class="buttons">
    <button class="login-button">Login</button>
    <button class="request-button">Request a demo</button>
    </div>
  </nav>

  <section class="hero">
    <h2>Get instant cash flow with invoice factoring</h2>
    <p>Why wait? Get same day funding and a faster way to access cash flow.</p>
    <button class="started-button">Get Started</button>
  </section>

  <section class="outsource">
    <div class="title">
      <h2>Outsource payment collection</h2>
      <p>Faster and flexible access to cash flow from one or all your invoices.</p>
    </div>
    <div class="source-items">
    <?php
  $select_outsource = $conn->prepare("SELECT * FROM `outsource`"); 
  $select_outsource ->execute();
  if($select_outsource->rowCount() > 0){
    while($fetch_outsource = $select_outsource->fetch(PDO::FETCH_ASSOC)){
  ?>
      <div class="source-item">
        <img src="./images/Earth.png" alt="">
        <h4><?= $fetch_outsource['title']; ?></h4>
        <p>We fund each invoice once approved and collect payment to optimise your cash flow.*
        </p>
      </div>
      <?php
    }
 }else{
    echo '<p class="empty">no outsource found</p>';
 }
 ?>
    </div>
  </section>

  <section class="taskmanager">
  <div class="tasksection">
    <div class="taskmanager-title">
      <h2>Task Manager</h2>
      <p>Your daily to do list</p>
    </div>
    <div class="tasklists">
      <div class="tasks">
        <div class="task">
          <div class="task-item">
          <input type="checkbox">
          <p>Task 1</p>
          </div>
          <button>Delete</button>
        </div>
        <form action="">
          <textarea name="" id="" placeholder="Add new task"></textarea>
          <button>Add Task</button>
        </form>
      </div>
    </div>
  </div>
  </section>

  <section class="contact">
    <div class="contact-title">
      <h2>Contact Us</h2>
      <p>Speak with our team to see how we can help your business.</p>
    </div>
    <div class="contact-form">
      <form action="">
        <input type="text" placeholder="Your name" require>
        <input type="email" placeholder="Email">
        <input type="tel" placeholder="Your best contact number">
        <textarea name="" id="">Business or company name</textarea>
        <button type="submit">Submit</button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-top">
      <div class="items">
       <p>Curabitur consequat, purus a scelerisque sagittis, nulla metus tincidunt elit, vel venenatis nulla libero nec nulla. Suspendisse potenti. Aenean a justo vel sapien pellentesque tincidunt. Sed luctus, elit ac interdum convallis, ligula libero egestas orci, at auctor felis ligula nec odio.</p>
       <div class="media">
        <img src="./images/linkedin.png" alt="">
        <img src="./images/Vector.png" alt="">
       </div>
      </div>
      <div class="items">
        <h4>Products</h4>
        <ul>
          <li>Payments</li>
          <li>Invoice Factoring</li>
          <li>Invoice finance</li>
          <li>Supplier finance</li>
          <li>Customer finance</li>
        </ul>
      </div>
      <div class="items">
        <h4>Company</h4>
        <ul>
          <li>About us</li>
          <li>Contact us</li>
        </ul>
      </div>
      <div class="items">
        <h4>Resources</h4>
        <ul>
          <li>Frequently asked questions</li>
          <li>Knowledge base</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="">
        <ul>
          <li>Privacy Policy</li>
          <li>Contact us</li>
        </ul>
      </div>
      <div class="">
        <ul>
          <li>Site map</li>
          <li>@ebpearls</li>
        </ul>
      </div>
    </div>
    </footer>
</body>
</html>
