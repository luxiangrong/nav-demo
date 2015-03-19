<?php
	$lists = array(
		'list1',
		'list2',
		'list3',
		'list4',
		'list5',
		'list6',
		'list7',
		'list8',
		'list8',
	);
?>

<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>nav demo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->

    <style>
      .secondary-wrap {
        top: 41px\9;
        *top: 64px;
      }
    </style>
</head>

<body>


    <div class="container">
        <img class="content-img" src="images/content.jpg" alt="">
        <ul class="menu">
            <li data-target="menu-1"><a href="">首页</a>
            </li>
            <li data-target="menu-2"><a href="">产品中心</a>
            </li>
            <li data-target="menu-3"><a href="">解决方案</a>
            </li>
            <li data-target="menu-4"><a href="">客户服务</a>
            </li>
            <li data-target="menu-5"><a href="">新闻资讯</a>
            </li>
            <li data-target="menu-6"><a href="">关于昕辰</a>
            </li>
        </ul>

		<div class="secondary-wrap" id="menu-1">
            <div class="secondary-outer">
                <ul class="secondary">
					<?php $i = 0; ?>
			        <?php foreach($lists in $list):?>
						<?php if($i == 0): ?>
							<li><a href="content.jpg"><?php echo $list;?></a></li>
						<?php endif; ?>
						<?php $i = ($i ++ ) % 4; ?> 
			        <?php endforeach; ?>
        		</ul>
        		<ul class="secondary">
					<?php $i = 0; ?>
			        <?php foreach($lists in $list):?>
						<?php if($i == 1): ?>
							<li><a href="content.jpg"><?php echo $list;?></a></li>
						<?php endif; ?>
						<?php $i = ($i ++ ) % 4; ?> 
			        <?php endforeach; ?>
        		</ul>
        		<ul class="secondary">
					<?php $i = 0; ?>
			        <?php foreach($lists in $list):?>
						<?php if($i == 2): ?>
							<li><a href="content.jpg"><?php echo $list;?></a></li>
						<?php endif; ?>
						<?php $i = ($i ++ ) % 4; ?> 
			        <?php endforeach; ?>
        		</ul>
        		<ul class="secondary">
					<?php $i = 0; ?>
			        <?php foreach($lists in $list):?>
						<?php if($i == 3): ?>
							<li><a href="content.jpg"><?php echo $list;?></a></li>
						<?php endif; ?>
						<?php $i = ($i ++ ) % 4; ?> 
			        <?php endforeach; ?>
        		</ul>
        	</div>
        </div>
    </div>




    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->


    <!-- build:js({app,.tmp}) scripts/main.js -->
    <script src="scripts/main.js"></script>
    <!-- endbuild -->
</body>

</html>
