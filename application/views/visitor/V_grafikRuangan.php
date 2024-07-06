<body id="page-top">   
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">          
            <div id="content">   
                <div class="container-fluid">       
                    <div class="card mx-auto" style="width:100%">
                        <div class="card-header bg-info py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Grafik Statistik Ruang Perawatan</h6>
                        </div>
                        <div class="card-body">                           
                            <!-- <form class="form-inline" method="GET" action="<?= base_url('VgrafikRuangan/generateChart') ?>" target="_blank">-->
                            <form class="form-inline" method="" action="" target="">
                                <table cellpadding="10"> 
                                    <thead>
                                        <tr> 
                                            <td>Bulan</td>
                                            <td>:</td> 
                                            <td>
                                                <select class="form-control" name="bulan" required>
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
                                            </td>
                                            <td>
                                                <select class="form-control" name="tahun" required>
                                                    <option value="">--pilih Tahun--</option>
                                                        <?php $tahun = date('Y');
                                                        for($i=2020; $i<$tahun+5; $i++){ ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                        <?php } ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </thead>                
                                </table>  
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
                                <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-eye"></i> Tampilkan</button> 
                                <a href="<?= base_url('VgrafikRuangan') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh" aria-hidden="true"></i> refresh</a>                                                                                                      
                                <?php if (count($filter) > 0) { ?>
                                    <!-- Jika ada data, tampilkan tombol untuk menghasilkan grafik -->               
                                    <a href="<?php echo base_url('VgrafikRuangan/generateChart?bulan='.$bulan),'&tahun='.$tahun?>" class="btn btn-success mb-2 ml-2" target="_blank">
                                    <i class="fa fa-line-chart"></i> Tampilkan Grafik
                                    </a>              
                                <?php } ?>
                            </form>
                        </div>
                        <div class="alert alert-info">
                                memilih bulan :<span class="font-weight-bold"><?php echo $tahun?>-<?php echo $bulan?> </span>             
                        </div>    

                        <!-- Tabel untuk menampilkan data -->
                        <?php if (count($filter) > 0) { ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Ruangan Perawatan</th>
                                            <th>BOR</th>
                                            <th>avLOS</th>
                                            <th>TOI</th>                                   			                       
                                            <th>BTO</th>    		                       
                                            <th>NDR</th>    		                      		                        
                                            <th>GDR</th>       
                                            <!-- Tambahkan kolom lain sesuai dengan data yang ingin ditampilkan -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($filter as $u) { ?>
                                            <tr>
                                            
                                                <td><?php echo $no++             ?></td>
                                                <td><?php echo $u->namaruangan   ?>   </td>
                                                <td><?php echo $u->bor           ?>   </td>
                                                <td><?php echo $u->avlos         ?>   </td>			                       
                                                <td><?php echo $u->toi           ?>   </td>
                                                <td><?php echo $u->bto           ?>   </td>
                                                <td><?php echo $u->ndr           ?>   </td>
                                                <td><?php echo $u->gdr           ?>   </td>   
                                                <!-- Tambahkan kolom lain sesuai dengan data yang ingin ditampilkan -->
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <!-- Jika tidak ada data, tampilkan pesan -->
                            <div class="alert alert-warning">Tidak ada data yang sesuai.</div>
                        <?php } ?>
                    </div>
                </div>
            </div>

   


