  <?php
                                     $con = mysqli_connect('localhost', 'root', '', 'ddn');
                                $sql = 'select * from didong';
                                $rs = mysqli_query($con, $sql);
                                ?>
                          <?php 
                         while($row = mysqli_fetch_assoc($rs)) {
                          $id = $row['id'];
                           $ten = $row['ten'];
                         $anh = $row['anh'];
                         $gia = $row['gia'];
                          $loai = $row['loai'];
                          ?>
                            <?php }?>