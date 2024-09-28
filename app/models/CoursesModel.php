<?php
class CoursesModel
{
    private $__conn;
    public function __construct($conn)
    {
        $this->__conn = $conn;
    }
    public function create($table, $cols, $values)
    {
        // Convert columns and values into arrays
        $colsArray = explode(',', $cols);
        $placeholders = rtrim(str_repeat('?,', count($colsArray)), ','); // Create placeholders

        // Construct the SQL query
        $sql = "INSERT INTO $table (" . implode(',', $colsArray) . ") VALUES ($placeholders)";


        // Prepare the statement
        $stmt = $this->__conn->prepare($sql);

        // Execute the statement with values
        if ($stmt->execute($values)) {
            // Success handling (optional)
            return true;
        } else {
            // Error handling (optional)
            return false;
        }
    }

    public function edit($data)
    {

        $CourseName = $data["CourseName"];
        $Certificate = $data["Certificate"];
        $ID = $data["ID"];
        try {
            $sql = "UPDATE Courses SET CourseName = :NewCourseName,  Certificate = :CertificateName WHERE ID = :ID";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("NewCourseName", $CourseName, PDO::PARAM_STR);
            $stmt->bindParam("CertificateName", $Certificate, PDO::PARAM_STR);
            $stmt->bindParam("ID", $ID, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM Courses WHERE ID = $id";
        $stmt = $this->__conn->prepare($sql);
        $stmt->execute();
    }
}
