<?php 
include "../config.php";
$id = $_GET['id'];
$q = "SELECT * FROM season INNER JOIN serie ON season.serie_id = serie.serie_id WHERE season.serie_id = ?";
$getSeason = $conn->prepare($q);
$getSeason->execute([$id]);
$result = $getSeason->fetch();
if ($getSeason) { ?>
     <!-- serie -->
          <label class="form-label">مسلسل</label>
          <input class="form-control name" readonly type="text" value="<?php echo $result['name'];?>"/>
          <!-- season number -->
          <label class="form-label">موسم رقم</label>
          <input class="form-control seasonNum" type="number" value="<?php echo $result['seasonNum'];?>"/>
          <!-- category -->
          <label class="form-label">تصنيف</label>
          <input class="form-control category" readonly type="text" value="<?php echo $result['category'];?>"/>
            <!-- عدد الحلقات -->
            <label class="form-label">عدد الحلقات</label>
          <input class="form-control epiNum" type="number" value="<?php echo $result['epiNum'];?>"/>
          <!-- description -->
          <label class="form-label">الوصف</label>
          <textarea class="form-control description"readonly rows="3"><?php echo $result['description'];?></textarea>
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
        <button type="button" class="btn bg-first text-light" id="updateSeason">تحديث</button>
        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">اغلاق</button>
      </div>
<?php } ?>