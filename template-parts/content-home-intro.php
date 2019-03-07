<?php 

// Introduction
$introduction_title = get_field('introduction_title');
$introduction_text_area = get_field('introduction_text_area');
$introduction_signature_image = get_field('introduction_signature_image');
$dish_image = get_field('dish_image');
?>
<div id="about" class="content-block about-block">
  <div class="about-block-inner container">
    <div class="clear text-center">
      <div class="about-block-content col-6-l">
        <h2 class="heading"><?php echo $introduction_title; ?></h2>
        <p>
        <?php echo $introduction_text_area; ?>
        </p>
        <img class="img-fluid about-chef" src="<?php echo $introduction_signature_image; ?>" alt="Chef">
      </div>
      <div class="about-block-img col-6-l none-m block-l">
        <img class="img-fluid" src="<?php echo $dish_image; ?>" alt="Dish of food">
      </div>
    </div>
  </div>
</div>