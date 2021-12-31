    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $content ?></h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Profil</h3>

                  <p style="visibility: hidden;">New Orders</p>
                </div>
                <div class="icon">
                  <i class="far fa-user"></i>
                </div>
                <a href="<?= base_url('profile') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>Daftar Buku</h3>

                  <p style="visibility: hidden;">Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="fas fa-book"></i>
                </div>
                <a href="<?= base_url('buku') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- START ACCORDION-->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">VISI, MISI, DAN TUJUAN SATUAN PENDIDIKAN SMK MUHAMMADIYAH KOTA JAMBI</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                  <div id="accordion">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                            VISI SATUAN PENDIDIKAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <blockquote>
                            <p>
                              “Kokoh dalam Iman, Unggul dalam Ilmu dan Amal, Anggun dalam Akhlak serta Profesional.”
                            </p>
                          </blockquote>
                          <table width="100%" border="1" style="margin-top: 15px; border:1px solid black;">
                            <thead align="center" style="background-color: #007bff; color: white;">
                              <tr>
                                <td width="50%">VISI</td>
                                <td width="50%">INDIKATOR</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="padding-left: 10px;">Kokoh dalam Iman</td>
                                <td style="padding-left: 10px;">
                                  <ol>
                                    <li>Tertib menjalankan sholat fardu.</li>
                                    <li>Tertib menjalankan sholat sunah Dhuha dan Puasa Sunah.</li>
                                    <li>Mampu membaca Al Qur'an dengan baik.</li>
                                  </ol>
                                </td>
                              </tr>
                              <tr>
                                <td style="padding-left: 10px;">Unggul dalam Ilmu dan Amal</td>
                                <td style="padding-left: 10px;">
                                  <ol>
                                    <li>Pencapaian nilai UASBN di atas rata-rata Sekolah.</li>
                                    <li>UBK lulus 100% dengan presentasi siswa yang lulus kerja sebesar 20% dan melanjutkan perguruan tinggi 80%.</li>
                                    <li>Terampil mengoperasikan aplikasi komputer dan internet.</li>
                                    <li>Terampil dalam menjalankan keterampilan hidup (<em>life skills</em>).</li>
                                    <li>Terampil menjadi <em>public speaker</em>.</li>
                                  </ol>
                                </td>
                              </tr>
                              <tr>
                                <td style="padding-left: 10px;">Anggun dalam Akhlak serta Professional</td>
                                <td style="padding-left: 10px;">
                                  <ol>
                                    <li>Berakhlak mulia : hormat pada orang tua dan guru. Suka menolong dan bertanggung jawab.</li>
                                    <li>Lulusan SMK Muhammadiyah yang mampu bersaing di dunia kerja.</li>
                                    <li>Lulusan SMK Muhammadiyah dapat melanjutkan ke perguruan tinggi serta bersaing dalam pendidikan.</li>
                                    <li>Pembangunan kemitraan dengan pemerintahan daerah, masyarakat, orang tua, institusi pasangan dan dunia usaha/industri.</li>
                                    <li>Pelayanan prima terhadap kepentingan siswa dan masyarakat.</li>
                                  </ol>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="card card-warning">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                            MISI SATUAN PENDIDIKAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <ol>
                            <li>Melaksanakan bimbingan intensif tentang keislaman sesuai dengan Al Qur'an dan sunah.</li>
                            <li>Melaksanakan kegiatan keagamaan sebelum memulai pelajaran.</li>
                            <li>Melaksanakan sholat Dhuha dan sholat Zuhur berjamaah.</li>
                            <li>Mewujudkan dan melatih peserta didik dalam prestasi dengan mengoptimalkan proses pembelajaraan dan bimbingan.</li>
                            <li>Mewujudkan lulusan yang mampu bersaing baik di dunia kerja dan perguruan tinggi.</li>
                            <li>Mewujudkan lulusan yang terampil dalam TIK, kreatif dalam mengasa kemampuan (<em>skill</em>) dan aktif berbicara mennjadi <em>public speaker</em>.</li>
                            <li>Mewujudkan lulusan yang mampu menjadi pimpinan di dunia kerja dan perguruan tinggi yang bertanggung jawab dan berakhlak.</li>
                            <li>Membangun kemitraan yang kokoh dengan pemerintahan daerah, masyarakat, orang tua, institusi pasangan dan dunia usaha/industri.</li>
                            <li>Meningkatkan pelayanan prima terhadap kepentingan siswa dan masyarakat.</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <div class="card card-success">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                            TUJUAN PENDIDIKAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <ol>
                            <li style="font-weight: bold;">
                              Tujuan Pendidikan Nasional <br>
                              <b style="font-weight: normal;">Berdasarkan Undang Undang Nomor 20 tahun 2003 pasal 3 bahwa tujuan Pendidikan Nasional adalah mengembangkan potensi peserta didik agar menjadi manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakaf, kreatif, mandiri, dan menjadi warga negara yang demokratis serta bertanggung jawab.</b>
                            </li>
                            <li style="font-weight: bold;">
                              Tujuan Pendidikan Menengah Kejuruan <br>
                              <b style="font-weight: normal;">Meningkatkan kecerdasan pengetahuan, kepribadian, akhlak mulia serta keterampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanjut sesuai dengan kejuruannya.</b>
                            </li>
                            <li style="font-weight: bold;">
                              Tujuan Pendidikan SMK Muhammadiyah Kota Jambi <br>
                              <b style="font-weight: normal;">Menyiapkan peserta didik menjadi manusia yang produktif, mampu bekerja mandiri, mengisi lowongan kerja yang ada di dunia usaha dan industri sebagai tenaga kerja tingkat menengah sesuai dengan kompetensi keahlian yang diembangkan sikap pilihnya dan mengembangkan sikap profesional.</b>
                            </li>
                            <li style="font-weight: bold;">
                              Tujuan Pendidikan Kompetensi Keahlian<br>
                              <ol>
                                <li>
                                  Geologi Pertambangan<br>
                                  <b style="font-weight: normal;">Membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten dalam hal :</b><br>
                                  <ul style="font-weight: normal;">
                                    <li>Mengolah sumber daya energi dan menjadi tenaga ahli di areal pertambangan dengan mengisi pekerjaan yang ada di DUDI sebagai tenaga kerja tingkat menengah yang profesional.</li>
                                    <li>Mampu menerapkan K3LH dengan baik.</li>
                                  </ul>
                                </li>
                                <li>Perbankan Syariah <br>
                                  <b style="font-weight: normal;">Membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten dalam hal :</b><br>
                                  <ul style="font-weight: normal;">
                                    <li>Mendidik peserta didik agar menjadi insan yang beriman dan bertaqwa.</li>
                                    <li>Mendidik peserta didik agar menjadi warga negara yang bertanggung jawab.</li>
                                    <li>Mendidik dan melatih peserta didik dengan keahlian dan keterampilan dalam Kompetensi Keahlian Perbankan Syariah, agar dapat bekerja baik secara mandiri atau mengisi pekerjaan yang ada di DU/DI khususnya di Perbankan sebagai tenaga kerja tingkat menengah.</li>
                                    <li>Mendidik Peserta didik agar mampu memilih karir, berkompetisi dan mengembangkan sikap profesional dalam Kompetensi Keahlian Perbankan Syariah.</li>
                                    <li>Membekali peserta didik dengan ilmu pengetahuan dan keterampilan sebagai bekal untuk memasuki dunia kerja dan pendidikan yang lebih tinggi.</li>
                                  </ul>
                                </li>
                                <li>Teknik Instalasi Tenaga Listrik <br>
                                  <b style="font-weight: normal;">Membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten dalam hal :</b><br>
                                  <ul style="font-weight: normal;">
                                    <li>Mendidik peserta didik agar menjadi insan yang beriman dan bertaqwa.</li>
                                    <li>Mendidik peserta didik agar menjadi warga negara yang bertanggung jawab.</li>
                                    <li>Mendidik dan melatih peserta didik dengan keahlian dan keterampilan dalam Kompetensi Keahlian Teknik Instalasi Tenaga Listrik, agar dapat bekerja baik secara mandiri atau mengisi pekerjaan yang ada di DU/DI khususnya di Perbankan sebagai tenaga kerja tingkat menengah.</li>
                                    <li>Mendidik Peserta didik agar mampu memilih karir, berkompetisi dan mengembangkan sikap profesional dalam Kompetensi Teknik Instalasi Tenaga Listrik.</li>
                                    <li>Membekali peserta didik dengan ilmu pengetahuan dan keterampilan sebagai bekal untuk memasuki dunia kerja dan pendidikan yang lebih tinggi.</li>
                                  </ul>
                                </li>
                              </ol>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- END ACCORDION-->
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->