<body id="page-top">
    <div id="content-wrapper" class="d-flex flex-column">          
        <div id="content">                     
            <div class="container-fluid">          
                <div class="card shadow mb-4">
                <div class="card-header bg-custom-samping py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Indikator Ruang Perawatan </h6>
                    </div>
                    <div class="card-body">
                        <form class = "form-inline"> 
                            <div class="form-roup-mb-2">                                                                 
                                <select class="form-control" name="bulan"required >
                                        <option value="">--pilih Bulan--</option>
                                        <option value="01">januari</option>
                                        <option value="02">februari</option>
                                        <option value="03">maret</option>
                                        <option value="04">april</option>
                                        <option value="05">mei</option>
                                        <option value="06">juni</option>
                                        <option value="07">juli</option>
                                        <option value="08">agustus</option>
                                        <option value="09">september</option>
                                        <option value="10">oktober</option>
                                        <option value="11">november</option>
                                        <option value="12">desember</option>       
                                </select>
                            </div>
                            <div class="form-roup-mb-2 ml-3">                                               
                                <select class="form-control" name="tahun"required >
                                        <option value="">--pilih Tahun--</option>
                                        <?php $tahun = date('Y');
                                        for($i=2020; $i<$tahun+5;$i++){?>
                                        <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                        <?php }?>
                                </select>                                                           
                                </div>  
                                <?php
                                    if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
                                       (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                                             $bulan    = $_GET['bulan'];
                                             $tahun    = $_GET['tahun'];
                                             $kalender = $tahun. '-' .$bulan .'-01'; 
                                     }else{  
                                             $bulan = date('m') ;
                                             $tahun= date('Y') ;  
                                             $kalender = $tahun. '-' .$bulan .'-01';                    
                                            
                                    }
                                    ?>                                                                                        
                                    <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                    <a href="<?= base_url('Oplaporanruangan') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                
                                 <?php
                                 if(count($rekap) > 0) {?>
                                    <a href="<?php echo base_url('Oplaporanruangan/cetak?bulan='.$bulan),'&tahun='.$tahun?>" class="btn btn-success mb-2 ml-2 "target="_blank" > <i class="fa fa-print"></i>catak </a> 
                                 <?php }else{?>                                    
                                    <a class="btn btn-danger mb-2 ml-2"  href="#" data-toggle="modal" data-target="#cetakModal"> <i class="fa fa-print"></i>Cetak </a>
                                <?php }?>
                                

                            </div> 
                        </form> 
                    </div>
                    <?php
                        if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
                        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                                $bulan    = $_GET['bulan'];
                                $tahun    = $_GET['tahun'];
                                $kalender = $tahun. '-' .$bulan .'-01'; 
                        }else{  
                                $bulan = date('m') ;
                                $tahun= date('Y') ;  
                                $kalender = $tahun. '-' .$bulan .'-01';                    
                                
                        }
                        ?>
                    <div class="alert alert-info">
                                memilih bulan :<span class="font-weight-bold"><?php echo $bulan?> </span> 
                                Tahun :<span class="font-weight-bold"><?php echo $tahun?> </span> 
                    </div>              
                    <div class="table-responsive"> 
                    <?php
                    $jlh_peserta = count ($rekap);
                    if ($jlh_peserta > 0) {?>                                  
                         <table id="dataTable" class="table table-bordered table-striped"> <!-- datatable-->                                  
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                  
                                    <th> Nama Ruang Rawat</th>
                                    <th>Kelas Rawat</th>
                                    <th>Tempat Tidur Tersedia</th>                                      			                       
			                        <th>Pasien Masuk</th>    		                       
    		                        <th>Pasien Keluar Hidup</th>
    		                        <th>Pasien meninggal</th>
			                        <th>Meninggal kurang 48 jam</th>
    		                        <th>Meninggal Lebih 48 jam</th>
                                    <th>Jumlah Pasien Keluar hidup+mati</th>
                                    <th>Masuk keluar di hari yang sama</th>
                                     <th>Lama Di Rawat</th>
                                    <th>Hari Perawatan</th> 
                                  
                                  <!--  <th>Periode</th> 
                                    
    		                        <th>Bor</th>
                                    <th>Avlos</th>
                                    <th>TOI</th>
                                     <th>BTO</th>
                                    <th>NDR</th> 
                                    <th>GDR</th>-->
                                                            
			                      
		                        </tr>
                            </thead>
                            <tbody>
                            <?php                                      
                                   
                            $sum_masuk          =0;                                     
                            $sum_keluar         =0;
                            $sum_mati           =0;
                            $sum_matikurang     =0;
                            $sum_matilebih      =0;
                            $sum_jlhkeluar      =0;                                    
                            $sum_masukkeluar    =0;
                            $sum_lama           =0;       
                            $sum_hp             =0;  
                                    
                                $no = 1;
                                foreach($rekap as $u){ 
                            ?>
		                        <tr>
                                    <td><?php echo $no++ ?></td>
                                   
                                    <td><?php echo $u->namaruangan ?></td>
                                    <td><?php echo $u->namakelas ?></td>	
                                    <td><?php echo $u->tidur ?></td>						                           	                      
                                    <td><?php echo $u->masuk ?></td>			                       
                                    <td><?php echo $u->keluar ?></td>
                                    <td><?php echo $u->mati?></td>
                                    <td><?php echo $u->matikurang?></td>
                                    <td><?php echo $u->matilebih?></td>
                                    <td><?php echo $u->jlhkeluar ?></td>                                    
                                    <td><?php echo $u->masukkeluar?></td>
                                    <td><?php echo $u->lama?></td>
                                    <td><?php echo $u->hp?></td>                                       
                                    
                                <!--      
                                    <td><?php echo $u->periode?></td>
                                    <td><?php echo $u->bor?></td>
                                    <td><?php echo $u->avlos?></td>
                                    <td><?php echo $u->toi?></td>
                                    <td><?php echo $u->bto ?></td>                                    
                                    <td><?php echo $u->ndr?></td>
                                    <td><?php echo $u->gdr?></td>                                    
				                    -->    
                                <!--  <td class="text-center">                
                                    <a href="<?= base_url('Oplaporanruangan/edit').'/'.$u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>                                            
                                    <a onclick="return confirmDialog()" class="btn btn-info btn-sm" href="<?= base_url('Oplaporanruangan/hapus').'/'.$u->id ?>">
                                    <i class="fa fa-trash"></i></a>            
                                </td>  --> 
			                    </tr>                                    
			                    <?php
                            $sum_masuk+=$u         ->masuk ;
                            $sum_keluar+=$u        ->keluar ;
                            $sum_mati+=$u          ->mati ;
                            $sum_matikurang+=$u    ->matikurang;
                            $sum_matilebih+=$u     ->matilebih ;
                            $sum_jlhkeluar+=$u     ->jlhkeluar;
                            $sum_masukkeluar+=$u    ->masukkeluar ;                                                         
                            $sum_lama+=$u           ->lama ;
                            $sum_hp+=$u             ->hp ;
                            }?>                              
                            </tbody>
                            <tbody>       
                                <tr style="font-weight:bold;" >
                                    <td colspan='4'>Jumlah</td>          
                                    <td><?php echo $sum_masuk?>      
                                    <td><?php echo $sum_keluar?></td>          
                                    <td><?php echo $sum_mati?></td>
                                    <td><?php echo $sum_matikurang?></td>
                                    <td><?php echo $sum_matilebih?></td>
                                    <td><?php echo $sum_jlhkeluar?></td>         
                                    <td><?php echo $sum_masukkeluar?></td>
                                    <td><?php echo $sum_lama?></td>
                                    <td><?php echo $sum_hp?></td>                                    
                                </tr>
                            </tbody>
                        </table>
                        <?php }else{?>
		                <span class="badge badge-danger" style="font-size:14px;"><i class="fa fa-warning" style="font-size:20px;color:red"></i>Tidak ada data di pilih !!</span>               
                        <?php }	?> 
                    </div>
                </div>
            </div>
        </div>
     </div>
   

        
  <!-- print Modal
  <div class="modal fade" id="cetakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                    Tidak Ada Data yang akan di cetak..!</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Ok</button>
                    
                </div>
            </div>
        </div>
    </div>-->
       
    
    
   

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data ini?')
            }   
    </script>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

        <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      
       <!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- Include DataTables Buttons JS -->
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<!-- Include JSZip for Excel export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!-- Include PDFMake for PDF export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
<!-- Include Buttons HTML5 export extension -->
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<!-- Initialize DataTables with export and print buttons -->
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            dom: 'Bfrtip', // Menampilkan tombol export dan print
            buttons: [
                'copy', 'csv', 'excel', 'print' // Hanya menampilkan tombol copy, csv, excel, dan print
            ]
        });
    });
</script>


 