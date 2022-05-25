@extends('layouts.app')

@section('content')

<!-- brand kit -->
<div id="brandKitPage">
    <div class="container-lg">
        <section class="banner text-center">
            <h1 class="mb-0">BRAND KIT</h1>
        </section>
        <section class="listGraphic">
            <div class="row">
                <div class="col-md-6 pb-4">
                    <div class="item">
                        <h5 class="titleBrandkit">Branding guideline</h5>
                        <table class="table text-white mb-0">
                            <tbody>
                                <tr>
                                    <td>Logo PNG 1900x1900 Vertical</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#previewLogoVerticalModal"><i class="fas fa-eye icon"></i></a>
                                        <a download="logo-1900x1900-vertical.png" href="{{ asset('img/logo-1900x1900-vertical.png') }}" title="logo-1900x1900-vertical"><i class="fas fa-download icon"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Logo PNG 1900x1900 Horizonal</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#previewLogoHorizontalModal"><i class="fas fa-eye icon"></i></a>
                                        <a download="logo-1900x1900-horizontal.png" href="{{ asset('img/logo-1900x1900-horizontal.png') }}" title="logo-1900x1900-horizontal"><i class="fas fa-download icon"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Branding Guidline</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#previewBrandIdentityModal"><i class="fas fa-eye icon"></i></a>
                                        <a download="Brand_identity_HyperasChain_2022.pdf" href="{{ asset('img/Brand_identity_HyperasChain_2022.pdf') }}" title="Brand_identity_HyperasChain_2022.pdf"><i class="fas fa-download icon"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <h5 class="titleBrandkit">Marketing tools</h5>
                        <table class="table text-white mb-0">
                            <tbody>
                                <tr>
                                    <td>Social Avatar</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#previewSocialAvatarModal"><i class="fas fa-eye icon"></i></a>
                                        <a download="social-avatar.zip" href="{{ asset('img/social-avatar.zip') }}" title="social-avatar.zip"><i class="fas fa-download icon"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cover Photo</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#previewCoverPhotoModal"><i class="fas fa-eye icon"></i></a>
                                        <a download="cover-photo.zip" href="{{ asset('img/cover-photo.zip') }}" title="cover-photo.zip"><i class="fas fa-download icon"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Wallpapers</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#previewWallpaperModal"><i class="fas fa-eye icon"></i></a>
                                        <a download="wallpaper.zip" href="{{ asset('img/wallpaper.zip') }}" title="wallpaper.zip"><i class="fas fa-download icon"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="previewLogoVerticalModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg text-center">
        <div class="modal-content">            
            <div class="modal-body">
                <img src="{{ asset('img/logo-1900x1900-vertical-preview.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="previewLogoHorizontalModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg text-center">
        <div class="modal-content">            
            <div class="modal-body">
                <img src="{{ asset('img/logo-1900x1900-horizontal-preview.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="previewBrandIdentityModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg text-center">
        <div class="modal-content">            
            <div class="modal-body">
                <p><img src="{{ asset('img/branding-guidline-hyperas-1.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-2.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-3.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-4.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-5.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-6.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-7.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-8.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-9.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-10.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-11.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-12.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-13.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-14.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-15.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-16.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-17.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-18.png') }}" alt=""></p>
                <p><img src="{{ asset('img/branding-guidline-hyperas-19.png') }}" alt=""></p>
                <img src="{{ asset('img/branding-guidline-hyperas-20.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="previewSocialAvatarModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg text-center">
        <div class="modal-content">            
            <div class="modal-body">
                <p><img src="{{ asset('img/social_Avata_2.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/social_1_Avata_800px.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/social_2_Avata_800px.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/social_3_Avata_400px.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/social_4_Avata_400px.jpg') }}" alt=""></p>
                <img src="{{ asset('img/social_Avata_1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="previewCoverPhotoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg text-center">
        <div class="modal-content">            
            <div class="modal-body">
                <p><img src="{{ asset('img/coverphoto_Youtube_Demo.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_01_Fanpage_1702x630px.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_02_Fanpage_1122x630px.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_Linked-in_1128x191px-2.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_Linked-in_1128x191px.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_Page_1.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_Page_2.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_Twitter_1500x-500px-2.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_Twitter_1500x-500px.jpg') }}" alt=""></p>
                <p><img src="{{ asset('img/coverphoto_Youtube_2048x1152px-2.jpg') }}" alt=""></p>
                <img src="{{ asset('img/coverphoto_Youtube_2048x1152px.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="previewWallpaperModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg text-center">
        <div class="modal-content">            
            <div class="modal-body">
                <p><img src="{{ asset('img/wallpaper_Asset 2@4x.png') }}" alt=""></p>
                <img src="{{ asset('img/wallpaper_Asset 1@4x.png') }}" alt="">            
            </div>
        </div>
    </div>
</div>
@endsection