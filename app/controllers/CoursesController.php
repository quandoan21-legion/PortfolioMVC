<?php
class CoursesController extends BaseController
{
    private $__conn, $__CoursesModel, $__temp;
    public function __construct($conn)
    {
        $this->__conn = $conn;
        $this->__CoursesModel = $this->initModel("CoursesModel", $this->__conn);
    }

    public function CreateCertificateForm()
    {
        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $courses = $this->__temp->getAllCourses();
        $this->view("CreateCertificate", ["courses" => $courses]);
    }

    public function DeleteCourse($data)
    {
        $this->__CoursesModel->delete($data);
        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $courses = $this->__temp->getAllCourses();
        $this->view("CreateCertificate", ["courses" => $courses]);
    }

    public function EditCourse($data)
    {
        $this->view("EditCertificate", ["ID" => $data]);
    }

    public function Edit()
    {
        $data = [];
        $data["CourseName"] = $_POST["CourseName"];
        $data["Certificate"] = $_POST["Certificate"];
        $data["ID"] = $_POST["ID"];
        $this->__CoursesModel->edit($data);
        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $courses = $this->__temp->getAllCourses();
        $this->view("CreateCertificate", ["courses" => $courses]);
    }

    public function Add()
    {
        $CourseName = $_POST["CourseName"];
        $Certificate = $_POST["Certificate"];
        $this->__CoursesModel->create("Courses", "CourseName, Certificate", [$CourseName, $Certificate]);
        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $courses = $this->__temp->getAllCourses();
        $this->view("CreateCertificate", ["courses" => $courses]);
    }
}
