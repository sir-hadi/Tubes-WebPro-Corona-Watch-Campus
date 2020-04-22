<!-- model id = ...number ,number ini adalah id data -->

    <!-- Title Campus -->
    <div class="campusTitleBar row">
        <div class="col d-flex align-items-end">
            <div class="titleCampus display-4" >CAMPUS</div>
        </div>
        <div
			class="titleCampusImage col-4"	
		></div>
    </div>
    <!-- end of Title Campus -->

    <!-- Add Campus button -->
    <?php if ($_SESSION['username']!="Guest") { ?>
    <div class="arrowWhiteAnchorWithBottomBorder ml-4 mt-4">
        <a class="" href=""  data-toggle="modal" data-target="#addCampusModal">
            <div class="d-flex align-self-end">
                <div class="pl-1">
                    <p class="lead">Add Campus</p>
                </div>
                <div class="pt-1 pl-4">
                    <img class="arrowRight3" src="img/angle-arrow-pointing-to-right.svg" alt="">
                </div>
            </div>
        </a>
    </div>
    <?php } ?>
    <!-- end of Add Campus button -->

    <!-- Card Campus -->
    <div class="row align-self-center mt-5 ml-5 mr-4">
        <?php foreach ($kampus as $k) {?>  
        <div class="col-lg-3 col-md-3 mb-4">
            <div class="card rounded-0" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title display-5"><?= $k['namaKampus'] ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Positive : <?= $k['jumlahTerjangkit']?></li>
                    <li class="list-group-item">Death : <?= $k['jumlahMeninggal']?></li>
                </ul>
                <div class="card-body">
                    <a href="<?= site_url('kampus') ?>/<?= $k['id']?>" class="card-link" data-toggle="modal" data-target="#viewCampusModal<?= $k['id']?>">View</a>
                    <?php if ($_SESSION['username']!="Guest") { ?>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#editCampusModal<?= $k['id']?>">Edit</a>
                        <a href="<?= site_url('kampus') ?>/hapusKampus/<?= $k['id'] ?>" class="card-link">Delete</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
    <!-- End Of Card Campus -->

    <!-- Modal Add Campus -->
    <div class="modal fade" id="addCampusModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="display-4">Add Campus</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= site_url('kampus') ?>/tambahKampus">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Campus Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Campus Name"
                                name="namaKampus" required>
                        </div>
                        <div class="form-group">
                            <!-- tinggal terapin phpnya -->
                            <label for="formGroupExampleInput">Nearest Hospital</label>
                            <select name="rsTerdekat" class="custom-select" id="formGroupExampleInput">
                                <option selected>Select Here..</option>
                                <?php foreach ($rumahsakit as $rs) { ?>
                                    <option value="<?= $rs['namaRs'] ?>"><?php echo $rs['namaRs'] ?></option>
                                <?php } ?>
                            </select required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary rounded-0" id="hapus" value="Submit" placeholder="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of model add campus -->

    <!-- Modal Edit Campus , id = ...number ,number ini adalah id data -->
    <?php foreach ($kampus as $k) {?>
    <div class="modal fade" id="editCampusModal<?= $k['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="display-4">Edit Campus</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= site_url('kampus') ?>/updateKampus/<?= $k['id'] ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Campus Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $k['namaKampus'] ?>" 
                                name="namaKampus" required>
                        </div>
                        <div class="form-group">
                            <!-- tinggal terapin phpnya -->
                            <label for="formGroupExampleInput">Nearest Hospital</label>
                            <select class="custom-select" id="formGroupExampleInput">
                                <option selected>Select Here..</option>
                                <?php foreach ($rumahsakit as $rs) { ?>
                                    <option value="<?= $rs['namaRs'] ?>"><?php echo $rs['namaRs'] ?></option>
                                <?php } ?>
                              </select required>
                        </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary rounded-0" id="hapus" value="Submit" placeholder="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <!-- End of modal edit Campus -->

    <!-- View Campus -->
    <?php foreach ($kampus as $k) {?>
    <div class="modal fade bd-example-modal-lg" id="viewCampusModal<?= $k['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"   
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="container">
                    <div class="row justify-content-between">
                        <h4 class="display-4 mt-3 ml-2 mb-4"><?php $k['namaKampus'] ?></h4>
                        <a href="" data-dismiss="modal">
                            <svg class="mt-4 mr-2" id="Capa_1" fill="currentColor" enable-background="new 0 0 413.348 413.348" height="28" viewBox="0 0 413.348 413.348" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="campusCoronaData row text-center mb-5">
                        <div class="col">
                            <h2>Positive</h2>
                            <h3><?= $k['jumlahTerjangkit'] ?></h3>
                        </div>
                        
                        <div class="col" >
                            <h2>Cure</h2>
                            <h3><?= $k['jumlahSembuh'] ?></h3>
                        </div>
    
                        <div class="col">
                            <h2>Death</h2>
                            <h3><?= $k['jumlahMeninggal'] ?></h3>
                        </div>
                    </div>

                    <div class="campusCoronaData row text-center" style="margin-bottom: 30px;">
                        <div class="col">
                            <h2>ODP</h2>
                            <h3><?= $k['jumlahODP'] ?></h3>
                        </div>
                        
                        <div class="col">
                            <h2>PDP</h2>
                            <h3><?= $k['jumlahPDP']?></h3>
                        </div>
    
                        <div class="col">
                            <h2>ODR</h2>
                            <h3><?= $k['jumlahODR'] ?>
                        </h3>
                        </div>
                    </div>

                    <h2 class="nearHospitalText"> Nearest Hospital</h2>
                    <div class="row d-flex align-items-center pl-3 mb-3" >
                        <svg
							class="footerIcon"
							fill="currentColor"
							height="512pt"
							viewBox="-66 0 512 512.001"
							width="512pt"
    						xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="m191.167969.00390625-.800781-.00390625c-104.96875 0-190.367188 85.40625-190.367188 190.386719 0 57.554687 29.417969 102.445312 62.195312 147.148437l127.917969 174.464844s120.90625-164.148438 128.46875-174.460938c32.777344-44.703124 62.195313-89.59375 62.195313-147.148437 0-104.722656-84.980469-189.972656-189.609375-190.38671875zm103.226562 319.79687475c-7.570312 10.328125-87.003906 119.121094-103.898437 141.996094l-104.113282-141.996094c-30.851562-42.078125-56.386718-80.859375-56.386718-129.414062 0-88.191407 71.535156-159.988281 159.625-160.390625h.769531c88.441406 0 160.394531 71.953125 160.394531 160.394531 0 48.554687-25.539062 87.332031-56.390625 129.410156zm0 0"
							/>
							<path
								d="m190.390625 80.480469c-60.605469 0-109.90625 49.304687-109.90625 109.90625 0 60.605469 49.300781 109.910156 109.90625 109.910156 60.601563 0 109.90625-49.304687 109.90625-109.910156 0-60.601563-49.304687-109.90625-109.90625-109.90625zm0 189.820312c-44.066406 0-79.914063-35.847656-79.914063-79.914062 0-44.0625 35.847657-79.910157 79.914063-79.910157 44.0625 0 79.914063 35.847657 79.914063 79.910157 0 44.066406-35.851563 79.914062-79.914063 79.914062zm0 0"
							/>
						</svg>
						<div class="lead">
                        <?= $k['rsTerdekat'] ?> 
						</div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php } ?>
    <!-- End of View Campus -->
