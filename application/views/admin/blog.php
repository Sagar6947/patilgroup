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
                        <a href="<?= base_url('admin_Dashboard/blog_add'); ?>" class="btn btn-primary">
                            Add blog</a>

                    </li>
                </ul>

            </div>
        </header>
        <section class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12   mb-3 ">
                    <?php if ($msg = $this->session->flashdata('msg')) :
                        $msg_class = $this->session->flashdata('msg_class') ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
                            </div>
                        </div>
                    <?php
                        $this->session->unset_userdata('msg');
                    endif; ?>
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">

                                <ul class="actions top-right">
                                    <li>
                                        <a href="javascript:void(0)" data-q-action="card-expand"><i class="icon dripicons-expand-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bs4-table" class="table table-striped table-bordered" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                 <th>Author</th>
                                                  <th>Author Designation </th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($blog as $row) {
                                            ?>

                                            <tr>
                                            <td><?php echo $i; ?></td>

                                            <td><?= $row['title']; ?></td>
                                                    <td>
                                            <img src="<?= base_url(); ?>uploads/blog/<?= $row['image']; ?>" style="width: 50px;height: 50px;" />
                                                    </td>
                                                    
                                                     <td><?= $row['author']; ?></td>
                                                     
                                                      <td><?= $row['designation']; ?></td>
                                         <td><?= substr($row['description'], 0 , 80); ?></td>
                                             <td> <a href="<?php echo base_url() . 'admin_Dashboard/editblog/' . $row['id']; ?>" class="btn btn-success edit"><i class="fas fa-pencil-alt"></i></a> </td>
                                         <td><a href="<?php echo base_url() . 'admin_Dashboard/deleteblog/' . $row['id']; ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                            <?php
                                                $i++;
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>S No</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!--END PAGE CONTENT -->
    </div>

    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>