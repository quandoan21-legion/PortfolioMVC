<?php
class HomeController extends BaseController
{
    private $__conn, $__HomeModel;
    public function __construct($conn)
    {
        $this->__conn = $conn;
        $this->__HomeModel = $this->initModel("HomeModel", $this->__conn);
    }
    public function index()
    {
        $courses = $this->__HomeModel->getAllCourses();
        $this->view("portfolio", ["courses" => $courses]);
    }
}
