<?php
$site=new Site();
$systemDetails=$site->getSystemDetails();
$system=$systemDetails[0];
$name=$system['name'];
$logo=$system['logo'];
?>  
   <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?php echo $name; ?> Teachers</h2>   
                        <h5>List of all classes </h5>

 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="color:#000;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Name</th>
                                            <th>EC Number</th>
                                            <th>DOB</th>
                                            <th>Start Date</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
         <?php
         $count=count($model);
         print_r($model);
         for($x=0;$x<$count;$x++) {                          
         $teacher=$model[$x];
         $id=$teacher['id'];
         $url=$this->createUrl("teachers/update/id/{$id}");
         ?> 
                                        <tr>
<td><?php echo "<a href='{$url}'>".$teacher['id']."</a>"; ?></td>
<td><?php echo $teacher['title']; ?></td>
<td><?php echo "<a href='{$url}'>".$teacher['name']."</a>";?></td>
<td><?php echo $teacher['ecnumber']; ?></td>
<td><?php echo $teacher['dob']; ?></td>
<td><?php echo $teacher['startdate']; ?></td>   
<td><?php echo $teacher['address']; ?></td>
                                    
                                        </tr>
   <?php
   }
   ?>                                    
                                         
                                    </tbody>
                                </table>
                            </div>



</div>
</div>
</div>
</div>