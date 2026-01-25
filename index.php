<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php require('inc/links.php'); ?>

  <title><?php echo $settings_r['site_title'] ?> - Home</title>
</head>

<body class="bg-light">

<?php require('inc/header.php'); ?>

<!-- HERO / CAROUSEL -->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">

      <?php
        $res = mysqli_query($con,"SELECT * FROM carousel");
        while($row = mysqli_fetch_assoc($res)){
          echo "
            <div class='swiper-slide'>
              <img src='".CAROUSEL_IMG_PATH.$row['image']."' class='w-100 d-block'>
            </div>
          ";
        }
      ?>

    </div>
  </div>
</div>

<!-- CHECK AVAILABILITY -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>

      <form action="rooms.php">
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label">Check-in</label>
            <input type="date" class="form-control shadow-none" name="checkin" required>
          </div>

          <div class="col-lg-3 mb-3">
            <label class="form-label">Check-out</label>
            <input type="date" class="form-control shadow-none" name="checkout" required>
          </div>

          <div class="col-lg-2 mb-3">
            <label class="form-label">Adult</label>
            <select class="form-select shadow-none" name="adult">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>

          <div class="col-lg-2 mb-3">
            <label class="form-label">Children</label>
            <select class="form-select shadow-none" name="children">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>

          <div class="col-lg-2 mb-3">
            <button type="submit" class="btn text-white shadow-none custom-bg">
              Submit
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- ABOUT -->
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-lg-6 mb-4">
      <h3 class="fw-bold h-font mb-3">Welcome to <?php echo $settings_r['site_title']; ?></h3>
      <p>
        <?php echo $settings_r['site_about']; ?>
      </p>
    </div>
    <div class="col-lg-6 mb-4">
      <img src="images/about/about.jpg" class="w-100 rounded">
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>