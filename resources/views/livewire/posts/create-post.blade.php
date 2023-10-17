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
                        <label for="upload-file" class="form-label"><i class='bx bxs-image-add bx-sm bx-tada'></i></label>
                        <input name="postimage[]" type="file" id="upload-file" onchange="preview(this)" multiple />
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

<script>
    function preview(elem, output = '') {
        Array.from(elem.files).map((file) => {
            const blobUrl = window.URL.createObjectURL(file)
            output += `<img src=${blobUrl}>`
        })
        elem.nextElementSibling.innerHTML = output
    }
</script>
