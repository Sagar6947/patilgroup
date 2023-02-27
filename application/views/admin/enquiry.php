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
            </div>
        </header>
        <section class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
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
                                <table id="recent-transaction-table" class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Enquiry date</th>
                                            <th>Name </th>
                                            <th>Email</th>
                                            <th>Number</th>
                                            <th>Course</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if (!empty($enquiry)) {
                                            foreach ($enquiry as $row) {
                                        ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td style="word-wrap: break-word;"><?= convertDatedmy($row['create_date']); ?></td>
                                                    <td><?php echo $row['name']; ?> </td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['phone']; ?></td>
                                                    <td><?php echo $row['course']; ?></td>
                                                    <td><?php echo wordwrap($row['message'], 80 , '<br>'); ?></td>
                                                    <td><a href="<?php echo base_url() . 'admin_Dashboard/deletequery/' . $row['id']; ?>" class="btn btn-danger delete">
                                                        <i class="fas fa-trash-alt"></i></a>
                                                    </td>


                                                </tr>

                                        <?php
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </tbody>
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