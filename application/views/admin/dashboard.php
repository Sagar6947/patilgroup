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
                    <h1>Dashboard</h1>
                </div>

            </div>
        </header>

        <section class="page-content container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row m-0 col-border-xl">
                            <div class="col-md-12 col-lg-6 col-xl-3">
                                <div class="card-body">
                                    <div class="icon-rounded icon-rounded-primary float-left m-r-20">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    </div>

                                    <h6 class="text-muted m-t-10">Course Enquiry</h6>


                                </div>
                            </div>




                        </div>

                    </div>
                </div>
            </div>


        </section>
        <!--END PAGE CONTENT -->
    </div>

    </div>
    </div>
    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>