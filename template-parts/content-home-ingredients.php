<?php 
$title_panel = get_field('title_panel');
$description_panel = get_field('description_panel');
$ingredient_img_one = get_field('ingredient_img_one');
$ingredient_img_two = get_field('ingredient_img_two');
$ingredient_img_three = get_field('ingredient_img_three');
$background_img = get_field('background_img');
?>
<div id="ingredients" class="content-block ingredients-block" <?php if($background_img): ?> style = "background-image:url('<?php echo $background_img; ?>')";<?php endif; ?>>
>
  <div class="ingredients-block-inner container clear">
    <div class="feature-box text-center col-6-l right-m">
      <h2 class="heading-secondary"><?php echo $title_panel; ?></h2>
      <div class="feature-box-content">
        <p>
        <?php echo $description_panel; ?>
        </p>
        <div class="feature-image-group clear" >
          <img class="img-fluid feature-image feature-image-1" src="<?php echo $ingredient_img_one; ?>" alt="Wheat">
          <img class="img-fluid feature-image feature-image-2" src="<?php echo $ingredient_img_two; ?>" alt="Spices">
          <img class="img-fluid feature-image feature-image-3" src="<?php echo $ingredient_img_three; ?>" alt="Bread">
        </div>
      </div>
    </div>
  </div>
</div>