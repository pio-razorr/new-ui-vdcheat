@extends('landing-page.layout.main')

@section('content')
    {{-- ======= Pricing Section ======= --}}
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>VVIP MODS</h2>
                <p>HARGA PAKETAN</p>
            </div>

            <div class="row mb-5" data-aos="fade-left">
                <table class="table table-striped table-bordered" id="daftar-harga">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Game</th>
                            <th>Paket</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">

                        <!-- Data Mobile Legends -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 150.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 225.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <!-- Data Point Blank Zepetto -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>1 Hari</td>
                            <td>Rp. 10.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>2 Hari</td>
                            <td>Rp. 15.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>3 + 2 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>7 + 3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>14 + 4 Hari</td>
                            <td>Rp. 70.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>21 + 5 Hari</td>
                            <td>Rp. 90.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>30 + 6 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>60 + 7 Hari</td>
                            <td>Rp. 180.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>90 + 8 Hari</td>
                            <td>Rp. 250.000</td>
                        </tr>

                        <!-- Data PUBG Mobile -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 200.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 325.000</span>
                            </td>
                        </tr>

                        <!-- Data COD Mobile -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 200.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 325.000</span>
                            </td>
                        </tr>

                        <!-- Data 8 Ball Pool -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 150.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 225.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <!-- Data Arena of Valor -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 150.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 225.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <!-- Data Lost Saga Origin VIP -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>1 Hari</td>
                            <td>Rp. 30.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>14 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>30 Hari</td>
                            <td>Rp. 200.000</td>
                        </tr>

                        <!-- Data Farlight 84 -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 200.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 325.000</span>
                            </td>
                        </tr>

                        <!-- Data Forward Assault -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>14 Hari</td>
                            <td>Rp. 75.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <!-- Data Contra Tournament -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Contra Tournament</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Contra Tournament</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Contra Tournament</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    {{-- End Features Section --}}
@endsection
