<?php
/**
 * Template Name: Custom Page
 */
get_header(); ?>

<div class="custom-wrapper">
    <!-- Custom Page - Form Design -->
    <!-- Page will be updated -->
    <div class="custom-content-1">
        <div class="container m-5">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div>
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-upload" type="button" role="tab" aria-controls="v-pills-upload" aria-selected="true">
                        <i class="fa-solid fa-cloud-arrow-up fa-2x px-1"></i>Upload</button>
                    </div>
                    <div>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-text" type="button" role="tab" aria-controls="v-pills-text" aria-selected="false">
                        <i class="fa-solid fa-font fa-2x px-1"></i>Add Text</button>
                    </div>
                    <div>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-picture" type="button" role="tab" aria-controls="v-pills-picture" aria-selected="false">
                        <i class="fa-solid fa-image fa-2x px-1"></i>Add Pictures</button>
                    </div>
                    <div>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-color" type="button" role="tab" aria-controls="v-pills-color" aria-selected="false">
                        <i class="fa-solid fa-palette fa-2x px-1"></i>Colors</button>
                    </div>
                    <div>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ai" type="button" role="tab" aria-controls="v-pills-ai" aria-selected="false">
                        <i class="fa-solid fa-spinner fa-2x px-1"></i>AI Search</button>
                    </div>
                </div>

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-upload" role="tabpanel" aria-labelledby="v-pills-upload-tab" tabindex="0">
                        <div class="container custom-tab">
                            <!-- <p>just try</p> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-text" role="tabpanel" aria-labelledby="v-pills-text-tab" tabindex="0">
                        <div class="container custom-tab">
                            <!-- <p>just try</p> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-picture" role="tabpanel" aria-labelledby="v-pills-picture-tab" tabindex="0">
                        <div class="container custom-tab">
                            <!-- <p>just try</p> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-color" role="tabpanel" aria-labelledby="v-pills-color-tab" tabindex="0">
                        <div class="container custom-tab">
                            <!-- <p>just try</p> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-ai" role="tabpanel" aria-labelledby="v-pills-ai-tab" tabindex="0">
                        <div class="container custom-tab">
                            <!-- <p>just try</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>