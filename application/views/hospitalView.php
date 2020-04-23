<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital</title>
</head>

<body>
    <!-- remember model id = ...number ,number ini adalah id data -->

    <!-- Title Hospital -->
    <div class="titleBar row">
        <div class="col d-flex align-items-end">
            <div class="titleText display-4">HOSPITAL</div>
        </div>
        <div class="titleHospitalImage col-4"></div>
    </div>
    <!-- end of Title Hospital -->

    <!-- Add Hospital -->
    <?php if ($_SESSION['username']!="Guest") { ?>
        <div class="arrowWhiteAnchorWithBottomBorder ml-4 mt-4">
            <a class="" href="" data-toggle="modal" data-target="#addHospitalModal">
                <div class="d-flex align-self-end">
                    <div class="pl-1">
                        <p class="lead">Add Hospital</p>
                    </div>
                    <div class="pt-1 pl-4">
                        <img class="arrowRight3" src="img/angle-arrow-pointing-to-right.svg" alt="">
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
    <!-- end of Add Hospital -->

    <!-- List of Hospital -->
    <div class="p-5 justify-content-center">
        <?php foreach ($rumahsakit as $rs) { ?>
            <div class="card mb-3 rounded-0" style="max-width: 1900px;">
                <div class="row no-gutters">
                <div class="col-md-4 ">
                    <img src="https://www.healthcareitnews.com/sites/hitn/files/120319%20CaroMont%20Regional%20Medical%20Center%20712.jpg" style="background-size: cover;" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="display-5"><?php echo $rs['namaRs'] ?></h5>
                    <p class="card-text">
                        Amount PPE : <?php echo $rs['jumlahApd'] ?> <br>
                        Available room : <?php echo $rs['kamarTersedia'] ?> rooms <br>
                        Total medical staff : <?php echo $rs['jumlahStaffMedis'] ?> Staff<br>
                    </p>
                    <!-- Tonggel Modal -->
                    <div class="d-flex justify-content-end">
                        <a href="" class="editHospital mr-4" data-toggle="modal" data-target="#editHospitalModal1<?= $rs['id'] ?>">
                            <svg height="26pt" viewBox="0 -1 401.52289 401" width="26pt" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m370.589844 250.972656c-5.523438 0-10 4.476563-10 10v88.789063c-.019532 16.5625-13.4375 29.984375-30 30h-280.589844c-16.5625-.015625-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980469 30-30h88.789062c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398437-50 50v260.59375c.03125 27.601563 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398437 50-50v-88.792969c0-5.523437-4.476563-10-10-10zm0 0" />
                                <path
                                    d="m376.628906 13.441406c-17.574218-17.574218-46.066406-17.574218-63.640625 0l-178.40625 178.40625c-1.222656 1.222656-2.105469 2.738282-2.566406 4.402344l-23.460937 84.699219c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.699219-23.464843c1.664062-.460938 3.179687-1.34375 4.402344-2.566407l178.402343-178.410156c17.546875-17.585937 17.546875-46.054687 0-63.640625zm-220.257812 184.90625 146.011718-146.015625 47.089844 47.089844-146.015625 146.015625zm-9.40625 18.875 37.621094 37.625-52.039063 14.417969zm227.257812-142.546875-10.605468 10.605469-47.09375-47.09375 10.609374-10.605469c9.761719-9.761719 25.589844-9.761719 35.351563 0l11.738281 11.734375c9.746094 9.773438 9.746094 25.589844 0 35.359375zm0 0" />
                                </svg>
                        </a>
                        <a href="<?php echo site_url('rumahsakit/hapusRS/').$rs['id'] ?>" class="deleteHospital">
                            <svg height="26pt" viewBox="-40 0 427 427.00131" width="26pt" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                                <path
                                    d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                                <path
                                    d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0" />
                                <path
                                    d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                                </svg>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- end of List of Hospital -->

    <!-- pagination stuff -->
    <div class="col">
        <?php echo $pagination; ?>
    </div>
    <!-- end pagination stuff -->

    <!-- Modal Add Hospital -->
    <div class="modal fade" id="addHospitalModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="display-4">Add Hospital</h4>
                </div>
                <div class="modal-body">
                    <!-- isi form ini -->
                    <form method="POST" action="<?php echo site_url('rumahsakit/tambahRS') ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Hospital Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Hospital Name" name="namaRs" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Amount PPE</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Amount PPE"
                                name="jumlahApd" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Available room</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Available room"
                                name="kamarTersedia" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Total medical staff</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Total medical staff"
                                name="jumlahStaffMedis" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary rounded-0" id="hapus" value="Submit"
                        placeholder="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of model add Hospital -->

    <!-- Modal Edit Hospital ,inget id = ...number ,number ini adalah id data -->
    <?php foreach(array_reverse($rumahsakit) as $rs) { ?>
        <div class="modal fade" id="editHospitalModal1<?= $rs['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="display-4">Edit Hospital</h4>
                    </div>
                    <div class="modal-body">
                        <!-- isi form ini -->
                        <form method="POST" action="<?php echo site_url('rumahsakit/updateRS/').$rs['id'] ?>">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Hospital Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $rs['namaRs'] ?>"
                                    placeholder="Hospital Name" name="namaRs" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Amount PPE</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $rs['jumlahApd'] ?>"
                                    placeholder="Amount PPE" name="jumlahApd" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Available room</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $rs['kamarTersedia'] ?>"
                                    placeholder="Available room" name="kamarTersedia" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Total medical staff</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $rs['jumlahStaffMedis'] ?>"
                                    placeholder="Total medical staff" name="jumlahStaffMedis" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary rounded-0" id="hapus" value="Submit" placeholder="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End of modal edit Hospital -->

</body>

</html>