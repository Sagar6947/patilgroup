<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $data['title'] = 'Top Real Estate Developers & Builders in Nashik | Patil Group';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('home', $data);
    }



    public function about()
    {

        $data['title'] =  'About Us | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('about', $data);
    }

    public function about_nashik()
    {

        $data['title'] =  'About Nashik | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('about-nashik', $data);
    }



    public function complete_project()
    {

        $data['title'] =  'Complete Project | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['project'] = $this->CommonModal->getRowBybyOrder('tbl_complete_project', 'id', 'ASC');
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('complete-project', $data);
    }


    public function ongoing_projects()
    {
        $url = $this->uri->segment(2);

        $table = "tbl_project";
        $where = array('id' => $url);

        $data['details'] = $this->CommonModal->getRowByMoreId($table, $where);
        $data['title'] =   $data['details'][0]['name'] . ' | Patil Group';

        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('ongoing-projects', $data);
    }

    public function prangan_testimonial()
    {


        $data['title'] =  'Prangan Testimonials | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('prangan-testimonial', $data);
    }
    public function testimonials()
    {
        $url = $this->uri->segment(2);
        $table = "testimonials";
        $where = array('pid' => $url);
        $data['details'] = $this->CommonModal->getRowByMoreId($table, $where);
        $data['title'] =  'Our Testimonials | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('testimonials', $data);
    }

    public function goda_spandan()
    {


        $data['title'] =  'Goda Spandan - Ongoing 4bhk residential flats in Nashik | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('goda-spandan', $data);
    }
    
    public function ekaant()
    {


        $data['title'] =  'Ekaant - 4bhk luxurious residential flats in Nashik | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('ekaant', $data);
    }

    public function prangan()
    {


        $data['title'] =  'Prangan - Ongoing 3bhk residential flats in Nashik | Patil Group - Top Real Estate Developers & Builders in Nashik';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        $this->load->view('prangan', $data);
    }



    public function career()
    {
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');

        $data['title'] =  'Career | Patil Group';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['resume'] = imageUpload('image', 'uploads/resume/');
            $insert = $this->CommonModal->insertRowReturnId('tbl_career', $post);
            if ($insert) {
                $this->session->set_flashdata('msg', 'Thank You  We will Contact you as soon as possible.');
                redirect(base_url('career'));
            } else {
                $this->session->set_flashdata('msg', 'We are facing technical error ,please try again later or get in touch with Email ID provided in Career section.');
                redirect(base_url('career'));
            }
        } else {
            $this->load->view('career', $data);
        }
    }



    public function contact()
    {

        $data['title'] =  'Contact Us | Patil Group';
        $data['onpro'] = $this->CommonModal->getAllRows('tbl_project');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insert = $this->CommonModal->insertRowReturnId('contact_query', $post);
            if ($insert) {
                $this->session->set_flashdata('msg', 'Your query is successfully submit. We will contact you as soon as possible.');
                 $this->session->set_flashdata('msg_class', 'alert-success');
                 redirect($_SERVER["HTTP_REFERER"]);
                
            } else {
                $this->session->set_flashdata('msg', 'We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.');
                 $this->session->set_flashdata('msg_class', 'alert-success');
                 redirect($_SERVER["HTTP_REFERER"]);
            }
        } else {
        }

        $this->load->view('contact', $data);
    }
}
