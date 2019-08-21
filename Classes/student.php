<?php
class student extends db
{
    public function selectAllStudents()
    {
        $sql="SELECT * FROM student";
        $result=$this->connect()->query($sql);

        if($result->rowCount()>0)
        {
            while($row=$result->fetch())
            {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function selectOne($id)
    {

       $sql="SELECT * FROM `grade` INNER JOIN `student` ON grade.studentId=student.idStudent WHERE studentId=$id";
        $result=$this->connect()->query($sql);
        if($result->rowCount()>0)
        {
            while($row=$result->fetch())
            {
                $data[] = $row;
            }
            return $data;
        }

    }

    public function avgGradeCSM($id)
    {
        $sql="SELECT AVG(nameGrade) as prosek FROM `grade` INNER JOIN `student` ON grade.studentId=student.idStudent WHERE studentId=$id  AND schoolBroad='CSM'";
        $result=$this->connect()->query($sql);
        return $result;
    }

    public function avgGradeCSMB ($id)
    {
        $sql="SELECT AVG(nameGrade) AS prosekCSMB FROM `grade` INNER JOIN `student` ON grade.studentId=student.idStudent WHERE nameGrade != (SELECT MIN(nameGrade) FROM `grade`) AND studentId=$id AND schoolBroad='CSMB'";
        $result=$this->connect()->query($sql);
        return $result;
    }




}