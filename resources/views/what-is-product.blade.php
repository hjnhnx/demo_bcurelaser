@extends('layouts.master')
@section('title')
    What Is B-Cure Laser?
@endsection
@section('extraCss')
    <style>
        .header-image {
            background-image: url('https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/bg_01.jpg');
            background-repeat: no-repeat;
            background-position: 50% 0%;
            background-size: cover;
            padding: 50px 0 50px 0;
            line-height: 2.44791vw;
            font-size: 30px;
            color: #fff;
        }

        .header-content {
            background: #ff8700;
            width: 31.5625vw;
            padding: 1.92708vw 1.5625vw 1.92708vw 2.70833vw;
        }

        .title {
            position: relative;
            margin: 0 0 4.16666vw 0;
            padding: 1.66666vw 0 1.25vw 1.5625vw;
        }

        .title-img {

            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            line-height: 0;
            font-size: 0;
        }

        .icon-img {
            width: auto;
            height: 6.82291vw;
            margin: 0 0 0 0.46875vw;
        }

        .content-1 {
            background: #21323f;
            padding: 2.34375vw 0 0 0;
            line-height: 1.5625vw;
            font-size: 1.35416vw;
            font-weight: normal;
            color: #fff;
        }

        .col-3 {
            margin: 0 0 4.47916vw 0;
            padding: 0 1.04166vw;
            text-align: center;
        }
        @media only screen and (max-width: 991px) {
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
                padding-top: 20px;
            }
            .header-image{
                background-image: url('https://www.bcurelaser.co.uk/wp-content/themes/astra-child/images/bg_01_mobile.jpg') !important;
                padding: 40.8vw 4.66666vw 3.86666vw 4.66666vw;
                line-height: 6.26666vw;
                font-size: 4vw;
            }
            .header-content{
                width: auto;
                padding: 4.93333vw 13.33333vw 3.6vw 4.93333vw;
            }
            .title{
                margin: 0 0 8.26666vw 0;
                padding: 6vw 0 6.13333vw 3.73333vw;
                line-height: 3.2vw;
                font-size: 2.93333vw;
            }
            .title h2{
                margin: 0 0 1.2vw 0;
                padding: 0;
                line-height: 5.6vw;
                font-size: 5.33333vw;
            }
            .title h5{
                margin: 0;
                line-height: inherit;
                font-size: inherit;
            }
            .title-img{
                top: 3.56666vw;
            }
            .title-img img{
                height: 15vw;
                margin: 0 0 0 0.4vw;
            }
            .content-1{
                display: none;
            }
            #col-reverse{
                flex-direction: column-reverse;
            }
            #title-bottom{
                font-size: 22px;
            }
        }
    </style>
@endsection
@section('main')
    <div>
        <div class="header-image">
            <div class="container">
                <div class="header-content">
                    <div style="padding: 3.95833vw 0 1.71875vw 1.97916vw;">
                        <h1>B-Cure Laser l?? g???</h1>
                        <p>B-Cure Laser d???a tr??n c??ng ngh??? LLLT (Li???u ph??p laser c?????ng ????? th???p), c??n ???????c g???i l?? Laser
                            l???nh,
                            Laser m???m, Li???u ph??p quang sinh h???c ho???c quang tr??? li???u.</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding: 50px 0 50px 0">
            <div class="container">
                <div class="title">
                    <h2>C??ng ngh??? ti??n ti???n</h2>
                    <h5 style="font-weight: normal">C?? ch??? ho???t ?????ng c???a B-Cure Laser</h5>
                    <div class="title-img">
                        <img class="icon-img"
                             src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/carousel_stamp_01.png" alt="">
                        <img class="icon-img"
                             src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/stamp_no_glasses.png" alt="">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/bdKqLX-MT5c"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <br>
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/vg_dKoa3OmI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-6">
                        <p>
                            B-Cure Laser d???a tr??n c??ng ngh??? LLLT (Li???u ph??p laser c?????ng ????? th???p), c??n ???????c g???i l?? Laser
                            l???nh, Laser m???m ho???c Laser quang sinh h???c. (Li???u ph??p Laser ????? th???p
                            trong kho???ng 1-1000mW). N?? l?? m???t ch??m ??nh s??ng ????n s???c m???ch l???c, v???i m???t b?????c s??ng ???????c x??c
                            ?????nh, di chuy???n theo m???t pha v?? theo m???t h?????ng.
                        </p>
                        <p>
                            M???t thi???t b??? d???a tr??n c??ng ngh??? LLLT, B-Cure Laser c?? t??c d???ng quang h??a nhi???u h??n l?? t??c
                            ?????ng nhi???t l??n c??c m?? s???ng. N?? ho???t ?????ng tr??n b??? m???t da, ?????ng th???i th??m nh???p s??u qua c??c m??
                            da (4cm), kh??ng c?? t??c d???ng l??m n??ng v?? kh??ng l??m t???n th????ng da.
                        </p>
                        <p>
                            K??ch th??ch sinh h???c: Khi ??nh s??ng laser ???????c h???p th??? b???i m???t m?? s???ng, n?? k??ch ho???t c??c ph???n
                            ???ng sinh h???c trong c??c t??? b??o. M???t lo???t c??c ch???t h??a h???c n???i sinh ???????c s???n xu???t trong c??c t???
                            b??o v?? ???????c mang theo l??u l?????ng m??u v?? b???ch huy???t ?????n c??c b??? ph???n kh??c c???a c?? th???. Do ????,
                            t??c ?????ng c???a ??nh s??ng laser l???nh c?? th??? kh??ng ch??? c???c b???, m?? c??ng c?? th??? ?????t ???????c hi???u ???ng
                            cho to??n th??n.
                        </p>
                        <p>
                            M???t thi???t b??? d???a tr??n c??ng ngh??? LLLT, B-Cure Laser c?? t??c d???ng quang h??a nhi???u h??n l?? t??c
                            ?????ng nhi???t l??n c??c m?? s???ng. N?? ho???t ?????ng tr??n b??? m???t da, ?????ng th???i th??m nh???p s??u qua c??c m??
                            da (4cm), kh??ng c?? t??c d???ng l??m n??ng v?? kh??ng l??m t???n th????ng da.
                        </p>
                        <p>
                            <strong>Kh??ng c???n k??nh b???o h???</strong> - Do c?? ch??? quang ??i???n c???i ti???n m???i, ph??n ph???i n??ng
                            l?????ng r???ng cho ph??p s??? d???ng thi???t b??? B-Cure Laser m?? kh??ng c???n s??? d???ng k??nh b???o h??? ????? an
                            to??n cho m???t. (?????t ch???ng nh???n CS 0120 c???a Ch??u ??u)
                        </p>
                        <p>
                            M???t danh m???c m???i ???????c c???p b???ng s??ng ch??? trong LLLT - Ch??m tia laser ???????c c???p b???ng s??ng ch???
                            v???i di???n t??ch 4,5 cm?? c???a ch??m tia laser.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-1">
            <div class="container">
                <div>
                    <h2 class="text-uppercase" style="color: #ff9b00;margin: 0 0 1.04166vw 0;padding: 0;">T??c d???ng ??i???u
                        tr???</h2>
                    <p style="margin: 0 0 3.54166vw 0;">T??c d???ng ??i???u tr??? c???a laser c?????ng ????? th???p bao g???m:</p>
                    <div>
                        <div class="row">
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_1.png"
                                     alt="">
                                <p style="font-size: 16px">T??ng m???c ATP (Adenosine TriPhosphate)</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_5.png"
                                     alt="">
                                <p style="font-size: 16px">T??ng t???ng h???p protein</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_2.png"
                                     alt="">
                                <p style="font-size: 16px">T??ng s??? trao ?????i ch???t c???a t??? b??o</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_3.png"
                                     alt="">
                                <p style="font-size: 16px">T??ng s???n sinh collagen</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_4.png"
                                     alt="">
                                <p style="font-size: 16px">T??ng s???n xu???t enzyme</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_6.png"
                                     alt="">
                                <p style="font-size: 16px">L??u l?????ng m??u t???t h??n</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_7.png"
                                     alt="">
                                <p style="font-size: 16px">L??u l?????ng b???ch huy???t v?? d???n l??u t???t h??n</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_8.png"
                                     alt="">
                                <p style="font-size: 16px">Gi???m vi??m nhi???m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding: 50px 0 50px 0">
            <div class="container">
                <div class="row" style="margin-bottom: 50px" id="col-reverse">
                    <div class="col-6">
                        <img width="100%" src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/image_01.jpg"
                             alt="">
                    </div>
                    <div class="col-6">
                        <h2>Ph??n t??? ATP</h2>
                        <p>T??c d???ng ch??nh v?? quan tr???ng nh???t c???a ??nh s??ng laser ?????i v???i c??c t??? b??o, l?? t??ng m???c s???n xu???t
                            atp (Adenosine TriPhosphate).??Qu?? tr??nh n??y ???????c g???i l?? 'k??ch th??ch sinh h???c'.
                        <p class="collapse multi-collapse multiCollapseExample1">
                            C??c ph??n t??? ATP ???????c t??m th???y trong c??c t??? b??o c???a t???t c??? c??c sinh v???t s???ng. Trong h??? th???ng
                            ?????ng v???t v?? con ng?????i, Adenosine TriPhosphate ???????c t???ng h???p trong c??c b??o quan trong t??? b??o
                            nh??? ???????c g???i l?? ty th???. Trong ty th???, ngu???n n??ng l?????ng t??? b??o ch??nh - ATP - ???????c s???n xu???t
                            b???ng c??ch k???t h???p oxy v???i ???????ng c?? ngu???n g???c t??? th???c ph???m. ATP c?? th??? ???????c m?? t??? l?? 'con t??u
                            n??ng l?????ng' ho???c 'con thoi n??ng l?????ng'. N?? c?? kh??? n??ng khai th??c n??ng l?????ng h??a h???c ???????c t???o
                            ra t??? th???c ph???m v?? v???n chuy???n n?? qua m??ng t??? b??o ????? chuy???n ?????i th??nh 'nhi??n li???u' c???n thi???t
                            cho ch???c n??ng c?? th??? b??nh th?????ng. Adenosine TriPhosphate th?????ng ???????c g???i l?? 'n??ng l?????ng c???a
                            cu???c s???ng'. N???u m???t ng?????i kh??ng c?? ????? m???c ATP c?? s???n, n??ng l?????ng kh??ng th??? ?????n ???????c c??c m??.
                            ??i???u n??y c?? th??? d???n ?????n m???t lo???t c??c v???n ????? s???c kh???e, bao g???m nh???y c???m v???i c??c b???nh truy???n
                            nhi???m, ch???a l??nh v???t th????ng k??m, vi??m v?? s??ng.
                        </p>
                        <p class="collapse multi-collapse multiCollapseExample1">
                            Laser cung c???p n??ng l?????ng ??nh s??ng v??o c??c m?? s???ng, qu?? tr??nh ???? c??n ???????c g???i l?? 'li???u ph??p
                            quang sinh h???c'. ??i???u n??y l??m t??ng ATP v?? do ???? v???n chuy???n nhi???u n??ng l?????ng v?? ch???t dinh
                            d?????ng xung quanh c?? th???, ????? trao ?????i ch???t l??nh m???nh, c???i thi???n kh??? n??ng mi???n d???ch v?? c??c c??
                            quan ho???t ?????ng hi???u qu???.
                        </p>
                        <p class="collapse multi-collapse multiCollapseExample1">
                            C??c thi???t b??? B-Cure Laser th?????ng ???????c s??? d???ng b???i c??c c?? nh??n, c??ng nh?? c??c chuy??n gia y t???
                            v?? nh?? tr??? li???u, ????? gi???m ??au, gi???m vi??m, t??ng t???c ????? l??nh th????ng, ?????y nhanh qu?? tr??nh t??i
                            t???o m??, gi???m thi???u s??? h??nh th??nh m?? s???o v?? c???i thi???n kh??? n??ng v???n ?????ng, ph???c h???i sau ch???n
                            th????ng ho???c ph???u thu???t.
                        </p>
                        <a class="toggle_text" data-toggle="collapse" href=".multiCollapseExample1" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample1">Xem th??m</a></p>


                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-6">
                        <h2>T??c ?????ng ?????n c??n ??au</h2>
                        <p>Trong nhi???u tr?????ng h???p, c??n ??au kh??ng ng???ng l?? k???t qu??? c???a ??p l???c l??n c??c s???i th???n kinh. ??p
                            l???c n??y g??y s??ng v?? vi??m xung quanh khu v???c b??? ???nh h?????ng. B-Cure Laser m??? r???ng c??c m???ch m??u
                            v?? b???ch huy???t t???o ??i???u ki???n cho vi???c l???c v?? l??m s???ch v??ng b??? vi??m v?? ph?? n???, do ???? gi???i
                            ph??ng ??p l???c l??n d??y th???n kinh. Gi???m ??p l???c d???n ?????n gi???m m???c ????? ??au v?? cho ph??p c??c m???ch m??u
                            v?? b???ch huy???t b??m n??ng l?????ng c???n thi???t ????? ch???a l??nh khu v???c b??? ???nh h?????ng.
                        <p class="collapse multi-collapse multiCollapseExample2">
                            B-Cure Laser c?? hi???u qu??? v?? an to??n v?? c?? th??? ???????c ??p d???ng t???i nh??. B-Cure Laser "kh??ng c??
                            t??c d???ng ph???" v?? c?? th??? ???????c s??? d???ng ri??ng nh?? m???t ph????ng th???c tr??? li???u ?????c l???p ho???c k???t h???p
                            v???i c??c li???u ph??p th??ng th?????ng kh??c, ch???ng h???n nh?? v???t l?? tr??? li???u.
                        </p>
                        <a class="toggle_text1" data-toggle="collapse" href=".multiCollapseExample2" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample2">Xem th??m</a></p>

                    </div>
                    <div class="col-6">
                        <img width="100%" src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/image_02.jpg"
                             alt="">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px" >
                    <h2 class="text-uppercase text-center" id="title-bottom">Ch???n thi???t b??? ph?? h???p <strong style="color:#f68e1e">v???i b???n</strong></h2>
                </div>
                @include('common.featured_product')
            </div>
        </div>
    </div>
@endsection
@section('extraJs')
    <script>
        let toggleText = true;
        $('.toggle_text').click(function () {
            if (toggleText) {
                $('.toggle_text').text('???n b???t');
                toggleText = false
            } else {
                $('.toggle_text').text('Xem th??m');
                toggleText = true
            }
        })
        $('.toggle_text1').click(function (){
            if(toggleText){
                $('.toggle_text1').text('???n b???t');
                toggleText = false
            }else{
                $('.toggle_text1').text('Xem th??m');
                toggleText = true
            }
        })
    </script>
@endsection
