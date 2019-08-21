<?php
function __autoload($class)
{
    require_once "Classes/$class.php";
}

if(isset($_GET['id']))
{
    $uid=$_GET['id'];
    $sch=$_GET['sch'];
    $student= new student();
    $result= $student->selectOne($uid);
    $avg=$student->avgGradeCSM($uid);
    $avgCSMB=$student->avgGradeCSMB($uid);


}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8"/>
    <title>Student</title>
</head>
<body>

<div class="container mt-4">
    <div class="row">

        <div class="col-lg-12">
            <div class="jumbotron">

                <h2 class="mb-4">Students</h2>
                <table class="table">
                    <thead>
                    <tr>

                        <th scope="col">name Grade</th>
                        <th scope="col">Grade</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <?php

                        if(($result)!=0) {

                        foreach ($result as $r) {

                        ?>





                        <td><?php echo $r['idGrade'] ?></td>
                        <td><?php echo $r['nameGrade'] ?></td>


                    </tr>
                    <?php
                    }
                    }
                    else
                    {
                        echo "trenutno nema studenata";
                    }
                    ?>



                    </tbody>
                </table>


                <table class="table">
                    <thead>
                    <tr>

                        <th scope="col">Avarage</th>
                        <th scope="col">Final result</th>

                    </tr>
                    </thead>
                    <tr>
                    <tr>

                        <?php
                        if($sch=='CSM')
                        {

                        if (($result) != 0) {

                        foreach ($avg as $a) {

                        ?>


                        <td><?php echo $a['prosek'] ?></td>
                        <td><?php if ($a['prosek'] >= 7) echo "PASS";
                            else echo "Fail";
                            ?></td>


                    </tr>
                    <?php
                    }
                    }
                    else {
                        echo "Ne postoji ovaj student";
                            }
                    }
                        else if($sch=='CSMB')


                        // ovo sam razumeo da se odbacuje najmanja ocena i da se racuna prosek preostlaih ocena, ako je veci ili jednak 8 polozio je


                        {
                            foreach($avgCSMB as $a)
                            {
                                ?>
                    <td><?php echo $a['prosekCSMB'] ?></td>
                    <td><?php if ($a['prosekCSMB'] >= 8) echo "PASS";
                        else echo "Fail";
                        ?></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>



</body>
