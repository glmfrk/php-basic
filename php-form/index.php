<?php include './header.php'; ?>
<section class="php__code-sec">
  <div class="container g-0">
    <div class="row">
      <div class="col">
        <div class="content__body">
          <div class="heading__content">
            <h2 class="heading">PHP Form Validation</h2>
            <div class="time">
              <?php echo date('d-F-y') ?>
            </div>
          </div>

         <?php 
         
            $intNum = 100;
            $min = 1;
            $max = 200;

            if (filter_var($intNum, FILTER_VALIDATE_INT, $option = array('min_range' => $min, 'max_range' => $max)) ) {
              var_dump($option);
              echo "It is valid range.";
            } else {
              echo 'It is not valid range';
            }
            echo "<br/>";

            $url = 'http://www.trainingwithliveproject.com/index.html/q?=key';

            if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
              echo "This is valid url : " . $url;
            } else {
              echo "It was invalid url.";
            }
         ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php include './footer.php'; ?>
