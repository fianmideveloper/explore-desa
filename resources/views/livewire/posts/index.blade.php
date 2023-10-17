<div>
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Selamat Datang di halaman posting, {{ 'yg login' }}! 🎉
                        </h5>
                        <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today.
                            Check your new badge in
                            your profile.
                        </p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#basicModal">
                            <i class='bx bxs-image-add bx-sm bx-tada'></i> Unggah
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mt-3">
                            <!-- Modal -->
                            <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">Name</label>
                                                    <input type="text" id="nameBasic" class="form-control"
                                                        placeholder="Enter Name" />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="emailBasic" class="form-label">Email</label>
                                                    <input type="text" id="emailBasic" class="form-control"
                                                        placeholder="xxxx@xxx.xx" />
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="dobBasic" class="form-label">DOB</label>
                                                    <input type="text" id="dobBasic" class="form-control"
                                                        placeholder="DD / MM / YY" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Basic with Icons</h5>
                <small class="text-muted float-end">Merged input group</small>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-2">
                        <div class="image-upload">
                            <label for="upload-file" class="form-label"><i
                                    class='bx bxs-image-add bx-sm bx-tada'></i></label>
                            <input name="postimage[]" type="file" id="upload-file" onchange="preview(this)"
                                multiple />
                            <div class="border-0 preview-area">
                                {{-- preview images --}}
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"
                                aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
