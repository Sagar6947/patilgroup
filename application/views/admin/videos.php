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
                            <form action="<?= base_url('admin_Dashboard/videos') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">


                                    <div class="form-group col-md-12">
                                        <label class="">Title</label>
                                        <input class="form-control" required="" type="text" name="title" />
                                    </div>
                                  
                                    <div class="form-group col-md-12">
                                        <label class="">YouTube Video</label>
                                        <input class="form-control" required="" type="text" name="link" />
                                    </div>
                                    <button type="submit" class="btn  btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Title</th>
                                       
                                        <th>Video</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                if (!empty($videos)) {
                                    foreach ($videos as $row) {
                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <?php echo wordwrap($row['title'], 120, '<br>'); ?><br>
                                                </td>
                                                
                                                <td>
                                                    
                                                    <iframe width="200" height="205" src="<?= str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $row['link']); ?>" ></iframe>
                                                    
                                                    <?php echo wordwrap($row['testimonial'], 120, '<br>'); ?>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url() . 'admin_Dashboard/deletevideo/' . $row['id']; ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>

                                            </tr>
                                        </tbody>
                                <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <?php include 'includes/footer.php'; ?>

    </div>

    <?php include 'includes/footer-link.php'; ?>

</body>

</html>