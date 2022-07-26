<?php 
include "config.php";
$getSliders = $conn->prepare("SELECT * FROM slider ORDER BY id DESC");
$getSliders->execute();
?>

<div id="carousel" class="carousel slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    <!-- start carousel -->
    <?php while ($corousel = $getSliders->fetch()) { ?>
    <div class="carousel-item ">
      <a href="<?php echo $corousel['link']?>">
        <img src="<?php echo $corousel['cover']?>" class="d-block w-100" alt="cover">
        <div class="carousel-caption d-none d-md-block" style="bottom: -0.75rem;">
          <h5><?php echo $corousel['bigTitle']?></h5>
          <p><?php echo $corousel['smallTitle']?></p>
        </div>
      </a>
      </div>
    <?php } ?>
    <!-- end carousel -->
    <!-- <div class="carousel-item ">
      <img src="img/Ashampoo_Snap_2022.04.10_16h50m39s_003_.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Spy x Family</h5>
        <p>الحلقة 3</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="img/Ashampoo_Snap_2022.04.10_16h58m08s_005_.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kaguya-sama wa Kokurasetai: Ultra Romantic</h5>
        <p>الحلقة 5</p>
      </div>
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script>
  document.querySelector('.carousel-item').classList.add('active')
</script>