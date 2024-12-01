<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
 

 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">اضافة العلاج</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">الصفحة الرئيسيه</a></li>
                        <li class="breadcrumb-item active">اضافة العلاج</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="row" method="POST"  id="submitProductForm" action="php_action/createProduct.php" method="POST" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <div class="form-group col-md-6">
                                                <label class="control-label">صوره العلاج</label>
                                                 <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>                         
                                                    <div class="kv-avatar center-block">             
                                                    <input type="file" class="form-control" id="MedicineImage" placeholder="اسم العلاج" name="Medicine" class="file-loading" >
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="ontrol-label">اسم العلاج</label>
                                                  <input type="text" class="form-control" id="productName" placeholder="اسم العلاج" name="productName" autocomplete="off" required="" />
                                                </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">االكمية</label>
                                                  <input type="text" class="form-control" id="quantity" placeholder="الكمية" name="quantity" autocomplete="off"  required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">المعدل</label>
                                                   <input type="text" class="form-control" id="rate" placeholder="المعدل" name="rate" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">MRP</label>
                                                   <input type="text" class="form-control" id="mrp" placeholder="MRP" name="mrp" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">رقم الحزمة</label>
                                                   <input type="text" class="form-control" id="Batch No" placeholder="رقم الحزمة" name="bno" autocomplete="off" required="" pattern="^[Aa-Zz]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">تاريخ النتهاء</label>
                                                   <input type="date" class="form-control" id="expdate" placeholder="تاريخ الانتهاء" name="expdate" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">اسم المصنع</label>
                                                  <select class="form-control" id="brandName" name="brandName">
                        <option value="">~~اختيار~~</option>
                        <?php 
                        $sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1 AND brand_active = 1";
                                $result = $connect->query($sql);

                                while($row = $result->fetch_array()) {
                                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                } // while
                                
                        ?>
                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                           
                                                <label class="control-label">اسم المنتج</label>
                                                  <select type="text" class="form-control" id="categoryName"  name="categoryName" >
                        <option value="">~~اختيار~~</option>
                        <?php 
                        $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                                $result = $connect->query($sql);

                                while($row = $result->fetch_array()) {
                                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                } // while
                                
                        ?>
                      </select>
                                    </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">الحالة</label>
                                                     <select class="form-control" id="productStatus" name="productStatus">
                        <option value="">~~اختيار~~</option>
                        <option value="1">فعال</option>
                        <option value="2">غير فعال</option>
                      </select>
                                        </div>

                                        <div class="col-md-1 mx-auto">
                                        <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">ادخال</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


 
<?php include('./constant/layout/footer.php');?>
 .


1