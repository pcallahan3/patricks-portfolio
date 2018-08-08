<!--Landing page for Patricks Portfolio-->


<!--Elevator pitch-->
<div class="container-fluid">
  <div class="jumbotron ">
    <h1 class="text-center">Elevator Pitch</h1> 
      <p>With a passion to continually learn and grow as a developer and investor, having me on your team will add value to 
         solving reoccurring problems that businesses face.Together we collectively exchange ideas, and more importantly, 
          build out those ideas to find solutions that enhance people’s lives over time.  
      </p>
  </div>
    <br>
    <hr>
    
<!--Patricks Projects-->
<div class="col-lg-12 text-center">
       <h1>Projects that Patrick Callahan has worked on</h1>
</div>
  <div class="row">
    <div class="col-sm-4">
    <hr>
      <h5 class="text-center"><strong><a href="http://cavnesshr.com/" target="_blank">cavnesshr.com</a></strong></h5><br>
      <?= $this->Html->image("/img/cavness.png", [
                           "alt" => "CavnessHR",
                            "height" => '140px'
                       ]); ?>
      <div class="col-sm-12 text-center"><br>
      <h5><strong>CavnessHR is a company that delivers HR solutions to small business with less than 50 employees.</strong></h5>
               
      </div>
   </div>
    <div class="col-sm-4">
    <hr>
      <h5 class="text-center"><strong><a href="http://keepnow.org/" target="_blank">keepnow.org</a></strong></h5><br>
        <?= $this->Html->image("/img/keep.png", [
                                  "alt" => "KEEP",
                                  "height" => '140px'
                              ]); ?>
      <div class="col-sm-12 text-center"><br>
          <h5><strong>The Kent Education and Equity Partnership (KEEP) is a non-profit that focuses on boosting the reading and math
                   scores of underprivileged minorities throughout the greater King county region. </strong></h5>
      </div>
    </div>
    <div class="col-sm-4">
        <hr>
          <h5 class="text-center"><strong><a href="http://flywithgreenriver.greenrivertech.net/" target="_blank">flywithgreenriver.greenrivertech.net</a></strong></h5><br>
            <?= $this->Html->image("/img/grc_aviation.png", [
                                      "alt" => "Green River Aviation",
                                       "height" => '140px'
                                  ]); ?>
    <div class="col-sm-12 text-center"> <br>
        <h5><strong>The Green River Aviation Department tasked us with building a website so they could
                    have a web presence to attract potential to the aviation program that Green River College offers.</strong></h5>
               
    </div>
   </div>
  </div>
</div>


<!--Table of skills-->
<br>
<br>
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
        <td>Python</td>
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
