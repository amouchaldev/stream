<?php
include "../config.php";
$id = $_GET['id'];
$getSlider = $conn->prepare("SELECT * FROM slider WHERE id = ?");
$getSlider->execute([$id]);
$result = $getSlider->fetch();
if ($getSlider) { ?>
         <!-- <h3 class="bg-first p-3 rounded text-light">اضافة سلايدر</h3> -->
                    <!-- big title -->
                    <label class="form-label">العنوان</label>
                    <input class="form-control bigTitle" type="text" value="<?php echo $result['bigTitle']?>"/>
                    <!-- small title -->
                    <label class="form-label">العنوان الصغير</label>
                    <input class="form-control smallTitle" type="text" value="<?php echo $result['smallTitle']?>"/>
                    <!-- cover -->
                    <label class="form-label">الغلاف</label>
                    <input class="form-control cover" type="text" value="<?php echo $result['cover']?>"/>
                    <!-- link -->
                    <label class="form-label">الرابط</label>
                    <input class="form-control link" type="text" value="<?php echo $result['link']?>"/>
                    <!-- add button -->
                    <!-- <button class="btn bg-first text-light mt-3 addSlider">تع</button> -->
<?php }
else {
    echo 2;
}
?>