 <?php 
 require_once('./constant/connect.php');
  

 ?>

 
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">الصفحةالرئيسية</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>الصفحة الرئيسية</a>
                        </li> 
                 
                         <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-industry"></i><span class="hide-menu">الصانع</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">اضافة الشركة المصنعة</a></li>
                           
                                <li><a href="brand.php">ادارة الشركة المصنعة</a></li>
                                 <li><a href="importbrand.php">استيراد الشركة المصنعة</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">المنتجات</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-category.php">اضافة المنتجات</a></li>
                           
                                <li><a href="categories.php">ادارة المنتجات</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-medkit"></i><span class="hide-menu">العلاج</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-product.php">اضافة العلاج</a></li>
                           
                                <li><a href="product.php">ادارة العلاج</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">الفواتير</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-order.php">اضافة الفواتير</a></li>
                           
                                <li><a href="Order.php">ادارةالفواتير</a></li>
                            </ul>
                        </li>
                         
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <!-- <li><a href="report.php" href="#" aria-expanded="false"><i class="fa fa-print"></i><span class="hide-menu">Reports</span></a></li> -->
                        



                  

<li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">التقارير</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <!-- <li><a href="report.php">Order Report</a></li> -->
                           <li><a href="sales_report.php">تقرير المبيعات</a></li>
                                <li><a href="productreport.php">تقرير المنتج</a></li>
                                <li><a href="expreport.php">تقرير منتهي الصلاحيه</a></li>
                            </ul>
                        </li>
                  <?php }?>


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        