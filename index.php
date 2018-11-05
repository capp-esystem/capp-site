<?php
include_once('app.php');
include_once('navbar.php');
 ?>

<!DOCTYPE html>
<html>
  <?php htmlHeader('CAPP Co-Assessment of Presentations by Peers') ?>
  <body>
    <?php navHeader() ?>
    <div class="jumbotron">
      <div class="container">
        <h1>CAPP <small>Co-Assessment of Presentations by Peers</small></h1>
        <p>A project supported by the Teaching Development Grant of the City University of Hong Kong, aiming to provide a user-friendly platform to tutors for co-assessment of presentations by peers.</p>
        <div class="text-center">
          <a href="download.php" type="button" class="btn btn-success btn-lg">Download</a>
        </div>
      </div>
    </div>
    <div class="container">
      <section>
        <div class="page-header">
          <h2>Motivation</h2>
        </div>
        <p>
          Student presentation is a common coursework adopted by tutors. Engaging students to act as co-assessors in the presentations can promote knowledge discovery if the process is done in an open and friendly manner. To quote more benefits, co-assessment by peers can encourages student involvement and responsibility, reduces “free-rider” problem and encourages student reflection on their role contribution.
        </p>
        <p>
          CAPP (Co-Assessment of Presentations by Peers) is a project supported by the Teaching Development Grant of the City University of Hong Kong, aiming to provide a user-friendly platform to tutors for co-assessment of presentations by peers. The system was first launched in early 2016. With subsequent funding from the Teaching Development Grant of the City University of Hong Kong, the system is now upgraded to version 2.0, which enables usage in smartphone environment. This allows teachers to conduct co-assessment during class more effectively. In addition, most of the interfaces are improved in a more user-friendly way.
        </p>
      </section>
      <section>
        <div class="page-header">
          <h2>Project Aim and Objectives</h2>
        </div>
        <p>
          The project aims to develop a web-based platform that provides qualitative and quantitative co-assessment and feedback of presentations by students.
        </p>
        <p>
          Objectives
          <ul>
            <li>To promote student-directed learning and knowledge discovery through co-assessment by peers.</li>
            <li>To encourage active listening to peers’ presentations.</li>
            <li>To improve the feedback and reflection process to facilitate deep learning.</li>
          </ul>
        </p>
      </section>
    </div>
  </body>
</html>
