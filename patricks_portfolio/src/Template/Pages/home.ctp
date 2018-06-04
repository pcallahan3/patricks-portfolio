

   <div class="col-sm-12">
       <h1>Projects that Patrick Callahan has worked on</h1>
  </div>

  <div class="row">
    <div class="col-sm-4">
    <hr>
      <h5 class="text-center"><strong><a href="http://cavnesshr.com/" target="_blank">cavnesshr.com</a></strong></h5><br>

      <?= $this->Html->image("/img/cavness.PNG", [
                           "alt" => "CavnessHR",
                       ]); ?>

      <div class="col-sm-4 text-center">
            <br>
                 <!-- Trigger the modal with a button -->
                 <button type="button" class="btn btn-info btn-sm text-center" data-toggle="modal" data-target="#cavnessModal">View Project Description</button>
            </div>
    </div>

    <div class="col-sm-4">
    <hr>
      <h5 class="text-center"><strong><a href="http://keepnow.org/" target="_blank">keepnow.org</a></strong></h5><br>
        <?= $this->Html->image("/img/keep.PNG", [
                                  "alt" => "KEEP",
                              ]); ?>


      <div class="col-sm-4 text-center">
      <br>
           <!-- Trigger the modal with a button -->
           <button type="button" class="btn btn-info btn-sm text-center" data-toggle="modal" data-target="#keepModal">View Project Description</button>
      </div>

    </div>
    <div class="col-sm-4">
    <hr>
      <h5 class="text-center"><strong><a href="http://flywithgreenriver.greenrivertech.net/" target="_blank">flywithgreenriver.greenrivertech.net</a></strong></h5><br>

         <?= $this->Html->image("/img/grc_aviation.PNG", [
                                   "alt" => "Green River Aviation",
                               ]); ?>
      <div class="col-sm-4 text-center">
      <br>
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-sm text-center" data-toggle="modal" data-target="#greenriverModal">View Project Description</button>
      </div>
    </div>
  </div>
</div>


<!-- Cavness Modal -->
<div id="cavnessModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
          <h5 class="text-center"><strong><a href="http://cavnesshr.com/" target="_blank">cavnesshr.com</a></strong></h5><br>

                       <?= $this->Html->image("/img/cavness.PNG", [
                                                 "alt" => "CavnessHR",
                                             ]); ?>




                         <h5><strong>CavnessHR is a company that delivers HR solutions to small business with less than 50 employees.</strong></h5>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="keepModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="text-center"><strong><a href="http://keepnow.org/" target="_blank">keepnow.org</a></strong></h5><br>
                <?= $this->Html->image("/img/keep.PNG", [
                                          "alt" => "KEEP",
                                      ]); ?>


                  <h5><strong>The Kent Education and Equity Partnership (KEEP) is a non-profit that focuses on boosting the reading and math
                   scores of underprivileged minorities throughout the greater King county region. </strong></h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- Greenriver Modal -->
<div id="greenriverModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-body">
        <h5 class="text-center"><strong><a href="http://flywithgreenriver.greenrivertech.net/" target="_blank">flywithgreenriver.greenrivertech.net</a></strong></h5><br>

                <?= $this->Html->image("/img/grc_aviation.PNG", [
                                          "alt" => "Green River Aviation",
                                      ]); ?>

                  <h5><strong>The aviation department at Green River tasked us with developing a web presence for their program so they could
                  show people jobs/internship, scholarships, and feature events that occur with the program.</strong></h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div class="col-sm-12">

  <h2 class="text-center">Technologies Experience </h2>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Programming Languages</th>
        <th>Web Dev Technologies</th>
        <th>Databases</th>
        <th>Development Tools and Testing</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Java</td>
        <td>HTML5</td>
        <td>MySQL</td>
        <td>git</td>
      </tr>
      <tr>
        <td>PHP</td>
        <td>Bootstrap/CSS</td>
        <td>PostgreSQL</td>
       <td>GitHub</td>
      </tr>
      <tr>
        <td>JavaScript</td>
        <td>XAMPP</td>
        <td></td>
        <td>Junit</td>
      </tr>
      <tr>
        <td></td>
        <td>Wordpress</td>
        <td></td>
        <td>Selenium </td>
      </tr>
      <tr>
        <td></td>
         <td></td>
         <td></td>
         <td>PHPUnit </td>
      </tr>
       <tr>
              <td></td>
               <td></td>
               <td></td>
               <td>Eclipse</td>
            </tr>
    </tbody>
  </table>

</div>