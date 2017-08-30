<?php
  $image_url = file_create_url($field_front_page_image[0]['uri']); ?>
  
  <div class="front-page-image" style="background-image: url('<?php print $image_url; ?>');">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1 caption">
          <h2><?php print $field_caption[0]['value']; ?></h2>
        </div>
      </div>
    </div>
  </div>
  
  