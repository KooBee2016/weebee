<?php
    $year_now = date('y');
    $month_now = date('n');
    $month_double = date('m');
    $day_now = date('d');

    $s365 = $dbh->query("SELECT *FROM shindai365 WHERE year='$year_now' AND month='$month_now'");
    foreach ($s365 as $row) { ?>

<ul id="menu" style="margin-top:-1px;">

    <li class="gn_li_home">
      <a href="http://weebee1212.com/index.php">
      <img src="http://weebee1212.com/common/image/gn/GNHOME.jpg"> 
      </a>
    </li>


    <li class="gn_li">
      <img src="http://weebee1212.com/common/image/gn/GN-interview.jpg" >
      <ul><li id="gn_interview">
      <div class="circle1">
      <a href="http://weebee1212.com/interview/index.php">
      <img src="http://weebee1212.com/common/image/gn/interview.png">
      </a>
      </div>  
      </li></ul>
    </li>

    <li class="gn_li">
      <img src="http://weebee1212.com/common/image/gn/GN-photo.jpg">
      <ul><li　id="gn_snap">
      <img src="http://weebee1212.com/common/image/gn/photo.png" style="width:auto; height:auto; position: absolute; margin-left: -82%;" usemap="#photo">
      <map name="photo">
      <area shape="rect" coords="101,358,385,459" href="http://weebee1212.com/photo_bijo/index.php" />
      <area shape="rect" coords="100,70,390,180" href="http://weebee1212.com/shindai365/index.php?year=<?php echo$year_now;?>&month=<?php echo $month_now;?>"/> 
      <area shape="rect" coords="108,223,378,320" href="http://weebee1212.com/snap/index.php" />     
      </map>
      </img>

      </li></ul>
    </li>

    <li class="gn_li">
      <img src="http://weebee1212.com/common/image/gn/GN-lecture.jpg">
      <ul><li id="gn_lecture">
      <a href="http://weebee1212.com/omotekou/index.php">
      <img src="http://weebee1212.com/common/image/gn/lecture.png">
      </a>
      </a></li></ul>
    </li>

    <li class="gn_li">
      <img src="http://weebee1212.com/common/image/gn/GN-circle.jpg">
      <ul><li id="gn_circle">
      <img src="http://weebee1212.com/common/image/gn/circle.png" usemap="#circle" >
      <map name="circle">
      <area shape="rect" coords="92,63,366,169" href="http://weebee1212.com/shinkare/index.php" />
      <area shape="rect" coords="99,206,379,315" href="http://weebee1212.com/dantai/index.php" /> 
      </map>
      </li></ul>

    </li>
    <li class="gn_li">
      <img src="http://weebee1212.com/common/image/gn/GN-job.jpg">
      <ul><li id="gn_job">
      <a href="http://weebee1212.com/job/index.php">
      <img src="http://weebee1212.com/common/image/gn/job.png" >
      </a></li></ul>
    </li>


    <li class="gn_li">
      <img src="http://weebee1212.com/common/image/gn/GN-coupon.jpg" >
      <ul><li id="gn_coupon">
      <a href="http://weebee1212.com/koopon2014/index.php">
      <img src="http://weebee1212.com/common/image/gn/coupon.png">
      </a></li></ul>
    </li>

    <li class="gn_li">
      <a href="http://weebee1212.com/special_content/index.php">
      <img src="http://weebee1212.com/common/image/gn/GN-special.jpg">
      </a>
    </li>

</ul>

<?php }; ?>
