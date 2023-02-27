<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/template/header_link'); ?>

<body class="sidebar-fixed">
    <div id="app">
        <?php $this->load->view('admin/template/header'); ?>

        <?php $this->load->view('admin/template/sidebar'); ?>
        <!--START PAGE HEADER -->
        <header class="page-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1><?= $title ?></h1>
                </div>

                <ul class="actions top-right">
                    <li>
                        <button onclick="history.back()" class="btn btn-dark"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    </li>
                </ul>

            </div>
        </header>

        <section class="page-content container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <label class="">Title</label>
                                                <input class="form-control" required="" type="text" name="title" value="<?= $blog[0]['title']  ?>">
                                            </div>

                                            <div class="col-sm-5">
                                                <label class="">Image</label>
                                               <input class="form-control pd-r-80" type="file" name="img">
                                                    <input class="form-control pd-r-80" type="hidden" name="image" value="<?= $blog[0]['image'] ?>">
                                                    </div>
                                                <div class="col-sm-2">     
                                                    <img src="<?= base_url() ?>uploads/blog/<?= $blog[0]['image'] ?>" height="100px" />
                                                </div>
                                            
                                           
                                             <div class="col-sm-6">
                                                <label class="">Author Name</label>
                                                <input class="form-control" type="text" name="author" value="<?= $blog[0]['author']  ?>">
                                            </div>
                                             <div class="col-sm-6">
                                                <label class=""> Author Designation</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" type="text" name="designation" value="<?= $blog[0]['designation']  ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                            <label class="">Description</label>
                                                <div class="pos-relative">
                                                 <textarea class="form-control" name="description" id="editor1"><?= $blog[0]['description']  ?></textarea>
                                                </div>
                                            </div>

                                          
                                        </div>
                                        <br>
                                        <button  class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
</div>
<?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>