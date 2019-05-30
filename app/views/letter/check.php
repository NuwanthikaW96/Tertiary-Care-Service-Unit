<?php $this->setSiteTitle("Check Submission");?>

<?php $this->start('head'); ?>
<link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="container">
    <?php foreach($this->subDetails as $subDetail): ?>
    
			<div class="inner">
				<div class="image-holder" style="transform: translateX(100px);">
                <img  style="width: 250px ; height: 300px" src="<?php echo PROOT ?>/css/detail.png"  alt="">
                 </div>
            <div class="container" style="padding-top: 50px  ;font-size: 20px ;font-family:'Times New Roman', Times, serif ;transform: translateX(0px);">
            <p ><strong>Name: </strong><?=$subDetail->nameInitial?></p>
        <p ><strong>Register Number: </strong><?=$subDetail->nicNumber?></p>
        <p><strong>Email: </strong><?=$subDetail->regNumber?></p>
        <p><strong>Date of Stage 1: </strong><?=$subDetail->dateStage1?></p>
        <p><strong>Date of Stage 2: </strong><?=$subDetail->dateStage2?></p>
        <p><strong>Date of Stage 3: </strong><?=$subDetail->dateStage3?></p>
        <p><strong>Date of Stage 4: </strong><?=$subDetail->dateStage4?></p>
        <p><strong>Date of Stage 5: </strong><?=$subDetail->dateStage5?></p>
    
        
			</div>
		</div>
<?php endforeach; ?>


<?php $this->end();?> 