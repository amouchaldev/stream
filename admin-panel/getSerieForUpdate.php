<?php 
include "../config.php";
$id = $_GET['id'];
$q = "SELECT * FROM serie WHERE serie_id = ?";
$getSerie = $conn->prepare($q);
$getSerie->execute([$id]);
$result = $getSerie->fetch();
if ($getSerie) { ?>
     <!-- title -->
     <!-- <input class="form-control name" type="text" value="<?php echo $result['name'];?>"/> -->
     <label class="form-label">اسم المسلسل</label>
          <input class="form-control name" type="text" value="<?php echo $result['name'];?>"/>
          <!-- category -->
          <label class="form-label">تصنيف</label>
          <input class="form-control category" type="text" value="<?php echo $result['category'];?>"/>
          <!-- description -->
          <label class="form-label">الوصف</label>
          <textarea class="form-control description" rows="3"><?php echo $result['description'];?></textarea>
          <!-- trailler -->
          <label class="form-label">العرض الدعائي</label>
          <input class="form-control trailler" type="text" value="<?php echo $result['trailler'];?>"/>
          <!-- rate -->
          <label class="form-label">التقييم</label>
          <input class="form-control rate" type="text" value="<?php echo $result['rate'];?>"/>
          <!-- prodaction year -->
          <label class="form-label">سنة الانتاج</label>
          <input class="form-control prodYear" type="text" value="<?php echo $result['prodYear'];?>"/>
          <!--  Poster -->
          <label class="form-label">البوستر</label>
          <input class="form-control poster" type="text" value="<?php echo $result['poster'];?>"/>
          <!--  quality -->
          <label class="form-label ">الجودة</label>
          <input class="form-control quality" type="text" value="<?php echo $result['quality'];?>" />
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn bg-first text-light" id="updateSerie">تحديث</button>
        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
      </div>
<?php } ?>