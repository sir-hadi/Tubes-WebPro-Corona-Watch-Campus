<!-- remember model id = ...number ,number ini adalah id data -->

<!-- Title Patient -->
<div class="titleBar row">
    <div class="col d-flex align-items-end">
        <div class="titleText display-4">PATIENT</div>
    </div>
    <div class="titlePatientImage col-4"></div>
</div>
<!-- end of Title Patient -->

<!-- Add Patient -->
<?php if ($_SESSION['username']!="Guest") { ?>
<div class="arrowWhiteAnchorWithBottomBorder ml-4 mt-4">
    <a class="" href="" data-toggle="modal" data-target="#addPatientModal">
        <div class="d-flex align-self-end">
            <div class="pl-1">
                <p class="lead">Add Patient</p>
            </div>
            <div class="pt-1 pl-4">
                <img class="arrowRight3" src="img/angle-arrow-pointing-to-right.svg" alt="">
            </div>
        </div>
    </a>
</div>
<?php } ?>
<!-- end of Add Patient -->

<!-- List of Patient -->
<div class="table-responsive p-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Birthplace</th>
                <th scope="col">Birthdate (YYYY-MM-DD)</th>
                <th scope="col">Gender</th>
                <th scope="col">Campus</th>
                <th scope="col">Condition</th>
                <?php if ($_SESSION['username']!="Guest") { ?>
                    <th scope="col">Action</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody id="theData">
            <tr>
                <?php $index=1; foreach (array_reverse($pasien) as $p) { ?>
                <th scope="col" class="lead"><?php echo $index++; ?></th>
                <th scope="col" class="lead"><?= $p['namaPasien'] ?></th>
                <th scope="col" class="lead"><?= $p['tempatLahir'] ?></th>
                <th scope="col" class="lead"><?= $p['tglLahir'] ?></th>
                <th scope="col" class="lead"><?= $p['jenisKelamin'] ?></th>
                <th scope="col" class="lead"><?= $p['kampusAsal'] ?></th>
                <th scope="col" class="lead"><?= $p['kondisi'] ?></th>
                <?php if ($_SESSION['username']!="Guest") { ?>
                <th scope="col">
                    <a href="" class="editPatient mr-4" data-toggle="modal" data-target="#editPatientModal1<?= $p['id'] ?>">
                        <svg height="26pt" viewBox="0 -1 401.52289 401" width="26pt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="m370.589844 250.972656c-5.523438 0-10 4.476563-10 10v88.789063c-.019532 16.5625-13.4375 29.984375-30 30h-280.589844c-16.5625-.015625-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980469 30-30h88.789062c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398437-50 50v260.59375c.03125 27.601563 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398437 50-50v-88.792969c0-5.523437-4.476563-10-10-10zm0 0" />
                            <path d="m376.628906 13.441406c-17.574218-17.574218-46.066406-17.574218-63.640625 0l-178.40625 178.40625c-1.222656 1.222656-2.105469 2.738282-2.566406 4.402344l-23.460937 84.699219c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.699219-23.464843c1.664062-.460938 3.179687-1.34375 4.402344-2.566407l178.402343-178.410156c17.546875-17.585937 17.546875-46.054687 0-63.640625zm-220.257812 184.90625 146.011718-146.015625 47.089844 47.089844-146.015625 146.015625zm-9.40625 18.875 37.621094 37.625-52.039063 14.417969zm227.257812-142.546875-10.605468 10.605469-47.09375-47.09375 10.609374-10.605469c9.761719-9.761719 25.589844-9.761719 35.351563 0l11.738281 11.734375c9.746094 9.773438 9.746094 25.589844 0 35.359375zm0 0" /></svg>
                    </a>
                    <a href="<?= site_url('pasien') ?>/hapusPasien/<?= $p['id'] ?>" class="deletePatient">
                        <svg height="26pt" viewBox="-40 0 427 427.00131" width="26pt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                            <path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                            <path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0" />
                            <path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" /></svg>
                    </a>
                </th>
                <?php } ?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- end of List of Patient -->

<!-- pagination stuff -->
<div class="col">
    <!--Tampilkan pagination-->
    <?php echo $pagination; ?>
</div>
<!-- end pagination stuff -->


<!-- Modal Add Patient -->
<div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="display-4">Add Patient</h4>
            </div>
            <div class="modal-body">
                <!-- isi form ini -->
                <form method="POST" action="<?= site_url('pasien') ?>/tambahPasien" id="add-pasien">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Patient Name</label>
                        <input type="text" class="form-control" id="namaPasien" placeholder="Patient Name" name="namaPasien" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Birthplace</label>
                        <input type="text" class="form-control" id="tempatLahir" placeholder="Patient birthplace" name="tempatLahir" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Birthdate (YYYY-MM-DD)</label>
                        <input type="text" class="form-control" id="tglLahir" placeholder="Birthdate (YYYY-MM-DD)" name="tglLahir" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Gender</label>
                        <select name="jenisKelamin" class="custom-select" id="formGroupExampleInput">
                            <option selected>Select Here..</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Campus</label>
                        <select name="kampusAsal" class="custom-select" id="formGroupExampleInput">
                            <option selected>Select Here..</option>
                            <?php foreach ($kampus as $k) { ?>
                                <option value="<?= $k['namaKampus'] ?>"><?php echo $k['namaKampus'] ?></option>
                            <?php } ?>
                        </select required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Condition</label>
                        <select name="kondisi" class="custom-select" id="formGroupExampleInput">
                            <option selected>Select Here..</option>
                            <option value="Positif">Positive</option>
                            <option value="Sembuh">Cure</option>
                            <option value="Meninggal">Death</option>
                            <option value="ODP">ODP</option>
                            <option value="PDP">PDP</option>
                            <option value="ODR">ODR</option>
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
<!-- End Of model add Patient -->

<!-- Modal Edit Patient , id = ...number ,number ini adalah id data -->
<?php foreach (array_reverse($pasien) as $p) { ?>
<div class="modal fade" id="editPatientModal1<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="display-4">Edit Patient</h4>
            </div>
            <div class="modal-body">
                <!-- isi form ini -->
                <form method="POST" action="<?= site_url('pasien') ?>/updatePasien/<?= $p['id'] ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Patient Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $p['namaPasien'] ?>" name="namaPasien" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Birthplace</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $p['tempatLahir'] ?>" name="tempatLahir" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Birthdate (YYYY-MM-DD)</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $p['tglLahir'] ?>" name="tglLahir" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Gender</label>
                        <select name="jenisKelamin" class="custom-select" id="formGroupExampleInput">
                            <option selected>Select Here..</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Campus</label>
                        <select name="kampusAsal" class="custom-select" id="formGroupExampleInput">
                            <option selected>Select Here..</option>
                            <?php foreach ($kampus as $k) { ?>
                                <option value="<?= $k['namaKampus'] ?>"><?php echo $k['namaKampus'] ?></option>
                            <?php } ?>
                        </select required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Condition</label>
                        <select name="kondisi" class="custom-select" id="formGroupExampleInput">
                            <option selected>Select Here..</option>
                            <option value="Positif">Positive</option>
                            <option value="Sembuh">Cure</option>
                            <option value="Meninggal">Death</option>
                            <option value="ODP">ODP</option>
                            <option value="PDP">PDP</option>
                            <option value="ODR">ODR</option>
                        </select required>
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
<!-- End of modal edit Patient -->
<!-- footer -->
<footer class="footer">
            <div class="row">
                <div
                    class="col-md-5"
                    style="
                        padding: 40px;
                        border-right: 1px solid gainsboro;
                        border-bottom: 1px solid gainsboro;
                    "
                >
                    <img
                        class="logo-f mb-3"
                        src="<?php echo base_url().'assets/img/CWC_LOGO.png' ?>"
                        alt=""
                    />
                    <p>
                        Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam
                        porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget
                        faucibus faucibus, purus erat eleifend enim, porta pellentesque ex
                        mi ut sem.
                    </p>
                    <p>© 2020 MadF & MadetheMeep, All rights reserved</p>
                </div>
                <div
                    class="col-md-3 footer-nav animated fadeInUp"
                    style="padding: 40px; border-right: 1px solid gainsboro;"
                >
                    <h2 class="" style="font-weight: 300; margin-bottom: 20px;">
                        Quick Links
                    </h2>
                    <div class="col-md-6">
                        <ul class="list-unstyled" style="">
                            <li class="lead"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="lead"><a href="<?= site_url('artikel') ?>">Article</a></li>
                            <li class="lead"><a href="<?= site_url('kampus') ?>">Campus</a></li>
                            <li class="lead"><a href="<?= site_url('pasien') ?>">Victim</a></li>
                            <li class="lead"><a href="<?= site_url('team') ?>">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" style="padding-top: 40px; padding-left: 20px;">
                    <h2 class="" style="font-weight: 300; margin-bottom: 20px;">
                        Contact Us
                    </h2>
                    <div class="row">
                        <div class="col">
                            <ul class="list-unstyled">
                                <li>
                                    <a class="row d-flex align-items-center" href="#">
                                        <svg
                                            class="footerIcon"
                                            version="1.1"
                                            id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px"
                                            y="0px"
                                            viewBox="0 0 384 384"
                                            style="enable-background: new 0 0 384 384;"
                                            xml:space="preserve"
                                        >
                                            <g>
                                                <g>
                                                    <path
                                                        fill="currentColor"
                                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.906-3.719-23.323-0.833-30.438,6.417l-43.177,32.594
                                                            c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                                                            c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.812C13.823,0,0,13.823,0,30.812
                                                            C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z
                                                            M362.667,353.188c0,5.229-4.25,9.479-9.479,9.479c-182.99,0-331.854-148.865-331.854-331.854c0-5.229,4.25-9.479,9.479-9.479
                                                            h70.521c5.229,0,9.479,4.25,9.479,9.479c0,25.802,4.052,51.125,11.979,75.115c1.104,3.542,0.208,7.208-3.375,10.938L82.75,165.427
                                                            c-2.458,3.26-2.844,7.625-1,11.26c29.927,58.823,66.292,95.188,125.531,125.542c3.604,1.885,8.021,1.49,11.292-0.979
                                                            l49.677-37.635c2.51-2.51,6.271-3.406,9.667-2.25c24.156,7.979,49.479,12.021,75.271,12.021c5.229,0,9.479,4.25,9.479,9.479
                                                            V353.188z"
                                                    />
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="lead">
                                            CWC Rosewood<br />
                                            081829829812
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="row d-flex align-items-center" href="#">
                                        <svg
                                            class="footerIcon"
                                            version="1.1"
                                            id="Layer_2"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px"
                                            y="0px"
                                            viewBox="0 0 384 384"
                                            style="enable-background: new 0 0 384 384;"
                                            xml:space="preserve"
                                        >
                                            <g>
                                                <g>
                                                    <path
                                                        fill="currentColor"
                                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.906-3.719-23.323-0.833-30.438,6.417l-43.177,32.594
                                                            c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                                                            c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.812C13.823,0,0,13.823,0,30.812
                                                            C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z
                                                            M362.667,353.188c0,5.229-4.25,9.479-9.479,9.479c-182.99,0-331.854-148.865-331.854-331.854c0-5.229,4.25-9.479,9.479-9.479
                                                            h70.521c5.229,0,9.479,4.25,9.479,9.479c0,25.802,4.052,51.125,11.979,75.115c1.104,3.542,0.208,7.208-3.375,10.938L82.75,165.427
                                                            c-2.458,3.26-2.844,7.625-1,11.26c29.927,58.823,66.292,95.188,125.531,125.542c3.604,1.885,8.021,1.49,11.292-0.979
                                                            l49.677-37.635c2.51-2.51,6.271-3.406,9.667-2.25c24.156,7.979,49.479,12.021,75.271,12.021c5.229,0,9.479,4.25,9.479,9.479
                                                            V353.188z"
                                                    />
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="lead">
                                            CWC Whiterun<br />
                                            08182982888
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="row d-flex align-items-center" href="#">
                                        <svg
                                            class="footerIcon"
                                            version="1.1"
                                            id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px"
                                            y="0px"
                                            viewBox="0 0 512 512"
                                            style="enable-background: new 0 0 512 512;"
                                            xml:space="preserve"
                                        >
                                            <g>
                                                <g>
                                                    <path
                                                        fill="currentColor"
                                                        d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
                                                            C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
                                                            M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
                                                            L338.213,256L482,112.212V399.787z"
                                                    />
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="lead">
                                            Outpatient enquiries <br />
                                            cwc@relation.com
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <a
                                class="row d-flex align-items-center"
                                href="#"
                                style="margin-bottom: 30px;"
                            >
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
                                    Port Road <br />
                                    Adelaide SA 5000
                                </div>
                            </a>
                            <div class="d-flex justify-content-around">
                                <a href="">
                                    <svg
                                        class="footerIconSocial"
                                        fill="currentColor"
                                        height="511pt"
                                        viewBox="0 0 511 511.9"
                                        width="511pt"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"
                                        />
                                        <path
                                            d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"
                                        />
                                        <path
                                            d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"
                                        />
                                    </svg>
                                </a>
                                <a href="">
                                    <svg
                                        class="footerIconSocial"
                                        fill="currentColor"
                                        viewBox="0 0 512 512"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"
                                        />
                                    </svg>
                                </a>
                                <a href="">
                                    <svg
                                        class="footerIconSocial"
                                        fill="currentColor"
                                        viewBox="0 -47 512.00004 512"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="m512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656s-59.539063 21.902344-74.632813 25.820313c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563l-32.84375 10.796875 30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125 12.707031-16.964844 48.765625-66.40625 48.84375-66.519531zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625c-27.035156-6.621094-42.445312-22.796875-50.613281-35.203125-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?php echo base_url().'assets/script.js' ?>"></script>
        <script src="<?php echo base_url().'assets/dataTeam.json' ?>"></script>
    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- AJAX -->
<script type="text/javascript">
    getData();

    function getData(){
        $.ajax({
            type: 'ajax',
            url: '<?= site_url(); ?>/pasien/pasien_data',
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                var baris = '';
                var index = 1;
                for (let i = 0; i < data.length; i++) {
                    baris += '<tr>' +
                        '<th scope="col" class="lead">' + index++ + '</th>' +
                        '<th scope="col" class="lead">' + data[i].namaPasien + '</th>' +
                        '<th scope="col" class="lead">' + data[i].tempatLahir + '</th>' +
                        '<th scope="col" class="lead">' + data[i].tglLahir + '</th>' +
                        '<th scope="col" class="lead">' + data[i].jenisKelamin + '</th>' +
                        '<th scope="col" class="lead">' + data[i].kampusAsal + '</th>' +
                        '<th scope="col" class="lead">' + data[i].kondisi + '</th>' +
                        '<th scope="col">' +
                            '<a href="" class="editPatient mr-4" data-toggle="modal" data-target="#editPatientModal1' + data[i].id + '">' + 
                                '<svg height="26pt" viewBox="0 -1 401.52289 401" width="26pt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="m370.589844 250.972656c-5.523438 0-10 4.476563-10 10v88.789063c-.019532 16.5625-13.4375 29.984375-30 30h-280.589844c-16.5625-.015625-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980469 30-30h88.789062c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398437-50 50v260.59375c.03125 27.601563 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398437 50-50v-88.792969c0-5.523437-4.476563-10-10-10zm0 0" />' +
                                    '<path d="m376.628906 13.441406c-17.574218-17.574218-46.066406-17.574218-63.640625 0l-178.40625 178.40625c-1.222656 1.222656-2.105469 2.738282-2.566406 4.402344l-23.460937 84.699219c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.699219-23.464843c1.664062-.460938 3.179687-1.34375 4.402344-2.566407l178.402343-178.410156c17.546875-17.585937 17.546875-46.054687 0-63.640625zm-220.257812 184.90625 146.011718-146.015625 47.089844 47.089844-146.015625 146.015625zm-9.40625 18.875 37.621094 37.625-52.039063 14.417969zm227.257812-142.546875-10.605468 10.605469-47.09375-47.09375 10.609374-10.605469c9.761719-9.761719 25.589844-9.761719 35.351563 0l11.738281 11.734375c9.746094 9.773438 9.746094 25.589844 0 35.359375zm0 0" /></svg>' +
                            '</a>' + 
                            '<a href="' + '<?= site_url('pasien') ?>/hapusPasien/' + data[i].id +'" class="deletePatient">' +
                                '<svg height="26pt" viewBox="-40 0 427 427.00131" width="26pt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">' +
                                    '<path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />' +
                                    '<path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />' +
                                    '<path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0" />' +
                                    '<path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" /></svg>' +
                            '</a>' +
                        '</th>' +
                        '</tr>';
                }
                $('#theData').html(baris);
            }
        });
    }

    $(#add-pasien).submit(function(e) {
        e.preventDefault();
        var namaPasien = $('#namaPasien').val();
        var tempatLahir = $('#tempatLahir').val();
        var tglLahir = $('#tglLahir').val();
        var dataForm = $(this);
        console.log("A")
        $.ajax({
            url: '<?= site_url('pasien') ?>/tambahPasien',
            type: 'POST',
            data: dataForm.serialize(),
            dataType: 'JSON',
            error: function() {
                alert('Something is wrong');
            },
            success: function(data) {
                getData();
                alert('Record added succesfully');
            }
        });
    });

</script>
</html>
