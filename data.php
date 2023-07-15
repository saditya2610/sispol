  <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Pengolahan Sistem Polling Perusahaan yang bekerja sama dengan Dinas Perhubungan Provinsi Riau
                            </div>
                            <br/>
                                <div class="col-md-3">
                                    <input type="text" name="From" id="From" class="form-control" placeholder="Dari Tanggal"/>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="to" id="to" class="form-control" placeholder="Sampai Tanggal"/>
                                </div>
                                <div class="col-md-3">
                                    <input type="button" name="range" id="range" value="Proses" class="btn btn-primary"/>
                                </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div id="purchase_order">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> <center>No</center></th>
                                            <th><center>Nama Perusahaan</center></th>
                                            <th><center>Nama Responden</center></th>
                                            <th> <center>Pendidikan</center></th>
                                            <th> <center>Posisi</center></th>
                                            <th> <center>Jenis Kelamin</center></th>
                                            <th> <center>Umur</center></th>
                                            <th> <center>Waktu</center></th>
                                            <th><center>RL-1</center></th>
                                            <th><center>RL-2</center></th>
                                            <th><center>RL-3</center></th>
                                            <th><center>RL-4</center></th>
                                            <th><center>RL-5</center></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            <?php
                                                include 'connect.php'; 
                                                $query = mysqli_query($connect,"SELECT * FROM responden join jawaban_user where id_kategoriResponden='$id_kategorisend' AND id_respondenj=id_responden ORDER BY id_responden desc");
                                                $no=1;
                                                $sum=0;
                                                while ( $data = mysqli_fetch_array($query) ) { 
                                                        $jk=$data['jenis_kelamin'];
                                                    ?>

                                                    <?php if($jk==1)
                                                        {?>
                                                        <?php 

                                                            $jkl="L";       

                                                        }else{?>
                                                        <?php 
                                                            $jkl="P";    
                                                        }?>

                                                    <?php
                                                echo '
                                                <tr>
                                                    <td><center>'.$no++.'</center></td>
                                                    <td>'.$data["perusahaan"].'</td>
                                                    <td>'.$data["nama"].'</td>
                                                    <td><center>'.$data["pendidikan"].'</center></td>
                                                    <td>'.$data["pekerjaan"].'</td>
                                                    <td><center>'.$jkl.'</center></td>
                                                    <td><center>'.$data["umur"].'</center></td>
                                                    <td><center>'.$data["tanggal"].'</center></td>
                                                    <td><center>'.$data["jawaban1"].'</center></td>
                                                    <td><center>'.$data["jawaban2"].'</center></td>
                                                    <td><center>'.$data["jawaban3"].'</center></td>
                                                    <td><center>'.$data["jawaban4"].'</center></td>
                                                    <td><center>'.$data["jawaban5"].'</center></td>
                                                </tr>
                                                ';
                                            }?>
                            <?php
                                include 'connect.php';
                                $queryj = mysqli_query($connect,"SELECT  COUNT(*) AS jumlah FROM responden join jawaban_user where id_kategoriResponden='$id_kategorisend' AND id_respondenj=id_responden");
                                $jumlah=mysqli_fetch_array($queryj);
                                $count=$jumlah ['jumlah'];
                                $queryv = mysqli_query($connect,"SELECT * FROM responden join jawaban_user where id_kategoriResponden='$id_kategorisend' AND id_respondenj=id_responden");

                                $jawaban1=0;$jawaban2=0;$jawaban3=0;$jawaban4=0;$jawaban5=0;
                                while ( $datav = mysqli_fetch_array($queryv) ) {
                                        $jawaban1=$jawaban1+$datav['jawaban1'];
                                        $jawaban2=$jawaban1+$datav['jawaban2'];
                                        $jawaban3=$jawaban1+$datav['jawaban3'];
                                        $jawaban4=$jawaban1+$datav['jawaban4'];
                                        $jawaban5=$jawaban1+$datav['jawaban5'];};?>
                                    <?php
                                        $average1=$jawaban1/$count;
                                        $average2=$jawaban2/$count;
                                        $average3=$jawaban3/$count;
                                        $average4=$jawaban4/$count;
                                        $average5=$jawaban5/$count;
                                    ?>
                                <tr>
                                    <th>
                                            <td><b> NRR</b></td>
                                            <td><b> </b></td>
                                            <td><b> </b></td>
                                            <td><b> </b></td>
                                            <td><b> </b></td>
                                            <td><b> </b></td>
                                            <td><b> </b></td>
                                            
                                            <td><center><b><?php echo number_format( $average1,2);?></b></center></td>
                                            <td><center><b><?php echo number_format( $average2,2);?></b></center></td>
                                            <td><center><b><?php echo number_format( $average3,2);?></b></center></td>
                                            <td><center><b><?php echo number_format( $average4,2);?></b></center></td>
                                            <td><center><b><?php echo number_format( $average5,2);?></b></center></td>
                                          
                                        </th>  
                                    </tr

                                    <tr>
                                        <th>
                                         <td><b> NRR Tertimbang *0,125</b></td>
                                         <td><b> </b></td>
                                         <td><b> </b></td>
                                         <td><b> </b></td>
                                         <td><b> </b></td>
                                         <td><b> </b></td>
                                         <td><b> </b></td>
                                         <td><center><b><?php echo number_format(($average1=$average1*0.125),2);?></b></center></td>
                                         <td><center><b><?php echo number_format(($average2=$average2*0.125),2);?></b></center></td>
                                         <td><center><b><?php echo number_format(($average3=$average3*0.125),2);?></b></center></td>
                                         <td><center><b><?php echo number_format(($average4=$average4*0.125),2);?></b></center></td>
                                         <td><center><b><?php echo number_format(($average5=$average5*0.125),2);?></b></center></td>
                                        </th>  
                                    </tr>
                                     </tbody>
                                </table>

                                <?php $nrr=$average1+$average2+$average3+$average4+$average5; ?>
                                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                          <tr>
                                             <td width="61%"><b> Jumlah NRR Poll tertimbang </b></td>
                                             <td class="text-primary"><h4><center><b><?php echo number_format($nrr,2);?></b></center></h4>    </td>
                                        </tr>

                                        <tr>
                                             <td width="61%"><b>Nilai Poll (JML NRR Poll tertimbang *25) </b></td>
                                             <td class="text-primary"><h3><center><b><?php echo number_format(($ikm=$nrr*25),2);?></b></center></h3></td>
                                        </tr> 
                                        <tr>
                                             <td width="61%"><b> Keterangan Hasil Penilaian Poll </b></td>
                                             <td class="text-primary"><h5><center><b>Sangat Baik : 85 - 100 <br> Baik : 65 - 84 <br> Cukup Baik : 45 - 64 <br> Kurang Baik : 1 - 44 </b></center></h5></td>
                                        </tr>              
                                        </tbody>
                                        
                                    </table>

                                <form role="form" method='POST' action='export.php?id=<?php echo $id_kategorisend;?>'>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Ekspor Menjadi Excel</button>
                                </form>