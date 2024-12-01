<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
  
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">اضافة ادارةالمنتجات</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">الصفحةالرئيسية</a></li>
                        <li class="breadcrumb-item active">اضافة المنتجات</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/createCategories.php" enctype="multipart/form-data">

                                   
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">اسم المنتجات</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control"id="categoriesName" placeholder="اسم المنتجات" name="categoriesName"  required="" pattern="^[a-zA-z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">الحالة</label>
                                                <div class="col-sm-9">
                                                     <select class="form-control" id="categoriesStatus" name="categoriesStatus">
                        <option value="">~~اختيار~~</option>
                        <option value="1">فعال</option>
                        <option value="2">غير فعال</option>
                      </select>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">ادخال</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


 
<?php include('./constant/layout/footer.php');?>
 .


