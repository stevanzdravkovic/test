<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">

                <h2 class="mb-4">Students</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID Student</th>
                        <th scope="col">Name</th>
                        <th scope="col">School Board</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $student = new student();
                    $rows= $student->selectAllStudents();
                    if(($rows)!=0) {

                        foreach ($rows as $row) {

                            ?>


                            <tr>


                                <td><?php echo $row['idStudent'] ?></td>
                                <td><?php echo $row['nameStudent'] ?></td>
                                <td><?php echo $row['schoolBroad'] ?></td>

                                <td><a class="btn btn-sm btn-primary"
                                       href="showmore.php?id=<?php echo $row['idStudent'] ?>&&sch=<?php echo $row['schoolBroad']?>">show more</a>
                                </td>
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
            </div>
        </div>
    </div>
</div>

