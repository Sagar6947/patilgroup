<?php
defined('BASEPATH') or exit('no direct access allowed');

class Admin_Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        if (sessionId('admin_id') == "") {
            redirect(base_url('admin'));
        }
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $data['title'] = "op Real Estate Developers & Builders in Nashik | Patil Group";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['test'] = $this->CommonModal->getNumRow('testimonials');

        // $data['blog'] = $this->CommonModal->getNumRow('tbl_blog');
        // $data['enquiry'] = $this->CommonModal->getNumRow('tbl_enquiry');
        // $data['video'] = $this->CommonModal->getNumRow('tbl_video');

        // $data['enquiry'] = $this->CommonModal->getRowBybyOrder('tbl_enquiry', 'id', 'DESC');
        $this->load->view('admin/dashboard', $data);
    }

    public function testimonials()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Testimonials  ";
        $data['testimonials'] = $this->CommonModal->getAllRows('testimonials');


        if (count($_POST) > 0) {

            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/testimonial/');
            $savedata = $this->CommonModal->insertRowReturnId('testimonials', $post);

            if ($savedata) {
                $this->session->set_userdata('msg', 'Testimonial Added Succesfully.');
            } else {
                $this->session->set_userdata('msg', 'We are facing technical error, please try again later  ');
            }
            redirect(base_url('admin_Dashboard/testimonials'));
        } else {
            $this->load->view('admin/testimonials', $data);
        }
    }

    public function videos()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Videos";
        $data['videos'] = $this->CommonModal->getAllRows('tbl_video');


        if (count($_POST) > 0) {

            $post = $this->input->post();

            $savedata = $this->CommonModal->insertRowReturnId('tbl_video', $post);

            if ($savedata) {
                $this->session->set_userdata('msg', 'Videos Added Succesfully.');
            } else {
                $this->session->set_userdata('msg', 'We are facing technical error, please try again later  ');
            }
            redirect(base_url('admin_Dashboard/videos'));
        } else {
            $this->load->view('admin/videos', $data);
        }
    }

    public function deletevideo($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "tbl_video";
        $this->CommonModal->deleteRowById($table, array('id' => $id));
        redirect('admin_Dashboard/videos');
    }


    public function deletetestimonials($tid)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "testimonials";
        $this->CommonModal->deleteRowById($table, array('tid' => $tid));
        redirect('admin_Dashboard/testimonials');
    }

    public function team()
    {
        $table = "tbl_team";
        $id = 'id';
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Management Team";
        $data['team'] = $this->Dashboard_model->fetchalldesc($table, $id);
        $this->load->view('admin/team', $data);
    }





    public function team_add()
    {
        $data['title'] = "Add Management Team ";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $this->load->view('admin/team_add', $data);
    }

    public function addteam()
    {
        $table = 'tbl_team';
        if (count($_POST) > 0) {
            print_r($_POST);

            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/team/');

            if ($this->Dashboard_model->insertdata($table, $post)) {

                $this->session->set_flashdata('msg', 'Team Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('admin_Dashboard/team'));
        } else {
            redirect(base_url('admin_Dashboard/team'));
        }
    }

    public function editteam()
    {
        $id = $this->uri->segment(3);
        // echo $id;
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Edit Team";
        $data['team'] = $this->CommonModal->getRowById('tbl_team', 'id', $id);
        if (count($_POST) > 0) {
            $post = $this->input->post();

            $temp_image = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/team/');
                $post['image'] = $img;
                if ($temp_image != "") {
                    unlink('uploads/team/' . $temp_image);
                }
            }
            $update = $this->CommonModal->updateRowById('tbl_team', 'id', $id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'Team Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url('admin_Dashboard/team'));
        } else {
            $this->load->view('admin/edit_team', $data);
        }
    }

    public function deleteteam($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "tbl_team";

        $data = $this->CommonModal->getRowById('tbl_team', 'id', $id);
        if (file_exists("uploads/team/" . $data[0]['image'])) {
            unlink('uploads/team/' . $data[0]['image']);
        }

        if ($this->CommonModal->deleteRowById($table, array('id' => $id))) {
            $this->session->set_flashdata('msg', 'Team Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'team not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/team');
    }


    public function blog()
    {
        $table = "tbl_blog";
        $id = 'id';
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Blog";
        $data['blog'] = $this->Dashboard_model->fetchalldesc($table, $id);
        $this->load->view('admin/blog', $data);
    }


    public function blog_add()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Blog Add";


        if (count($_POST) > 0) {

            $post = $this->input->post();
            $title = $this->input->post('title');
            $post['url_title'] = url_title($title);
            $post['image'] = imageUpload('image', 'uploads/blog/');

            $savedata = $this->CommonModal->insertRowReturnId('tbl_blog', $post);


            if ($savedata) {
                $this->session->set_userdata('msg', 'Blog Added Succesfully.');
            } else {
                $this->session->set_userdata('msg', 'We are facing technical error, please try again later  ');
            }
            redirect(base_url('admin_Dashboard/blog'));
        } else {
            $this->load->view('admin/blog_add', $data);
        }
    }


    public function deleteblog($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "tbl_blog";

        $data = $this->CommonModal->getRowById('tbl_blog', 'id', $id);
        if (file_exists("uploads/blog/" . $data[0]['image'])) {
            unlink('uploads/blog/' . $data[0]['image']);
        }

        if ($this->CommonModal->deleteRowById($table, array('id' => $id))) {
            $this->session->set_flashdata('msg', 'Blog Delete successfully');
            $this->session->set_flashdata('blog', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'blog not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/blog');
    }


    public function editblog()
    {
        $id = $this->uri->segment(3);
        // echo $id;
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Edit blog";
        $data['blog'] = $this->CommonModal->getRowById('tbl_blog', 'id', $id);
        if (count($_POST) > 0) {
            $post = $this->input->post();


            $title = $this->input->post('title');
            $post['url_title'] = url_title($title);

            $temp_image = $post['image'];
            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/blog/');
                $post['image'] = $img;
                if ($temp_image != "") {
                    unlink('uploads/blog/' . $temp_image);
                }
            }

            $update = $this->CommonModal->updateRowById('tbl_blog', 'id', $id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'blog Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url('admin_Dashboard/blog'));
        } else {
            $this->load->view('admin/edit_blog', $data);
        }
    }



    public function enquiry()
    {
        $table = "tbl_enquiry";
        $id = 'id';
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Course Enquiry";
        $data['enquiry'] = $this->Dashboard_model->fetchalldesc($table, $id);
        $this->load->view('admin/enquiry', $data);
    }


    public function deletequery($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "tbl_enquiry";
        $this->CommonModal->deleteRowById($table, array('id' => $id));
        redirect('admin_Dashboard/enquiry');
    }



    public function banner()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Home Banner";
        $data['banner'] = $this->CommonModal->getAllRows('banner');
        $config['upload_path'] = base_url('uploads/banner');

        if (count($_POST) > 0) {

            $post = $this->input->post();
            $no = rand();
            $folder = "./uploads/banner/";
            move_uploaded_file($_FILES["b_img"]["tmp_name"], "$folder" . $no . $_FILES["b_img"]["name"]);
            $file_name = $no . $_FILES["b_img"]["name"];
            $post['b_img'] =  $file_name;
            $savedata = $this->CommonModal->insertRowReturnId('banner', $post);

            if ($savedata) {
                $this->session->set_flashdata('msg', 'Banner added Sucessfully');
                $this->session->set_flashdata('msg_class', 'alert-success');;
            } else {
                $this->session->set_userdata('msg', 'Something went Wrong. please try again later  ');
            }
            redirect(base_url('admin_Dashboard/banner'));
        } else {
            $this->load->view('admin/banner', $data);
        }
    }
    public function deletebanner($bid)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "banner";
        $data = $this->CommonModal->getRowById('banner', 'bid', $bid);
        print_r($data[0]['b_img']);
        if (file_exists("./uploads/banner/' . $data[0]['b_img']")) {
            unlink('./uploads/banner/' . $data[0]['b_img']);
        }

        if ($this->CommonModal->deleteRowById($table, array('bid' => $bid))) {

            $this->session->set_flashdata('msg', 'Banner Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Banner not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }
        redirect('admin_Dashboard/banner');
    }
}
