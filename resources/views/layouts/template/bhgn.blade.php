<div class="mx-auto my-auto">
    @if (Auth::user()->bahagian == 1)
        <p>Pejabat Ketua Pengarah</p>
    @elseif (Auth::user()->bahagian == 2)
        <p>Pejabat Timbalan Ketua Pengarah (SEKTORAL)</p>
    @elseif (Auth::user()->bahagian == 3)
        <p>Pejabat Timbalan Ketua Pengarah (MAKRO)</p>
    @elseif (Auth::user()->bahagian == 4)
        <p>Pejabat Timbalan Ketua Pengarah (DASAR)</p>
    @elseif (Auth::user()->bahagian == 5)
        <p>Pejabat Pengarah Kanan (Pengurusan)</p>
    @elseif (Auth::user()->bahagian == 6)
        <p>Bahagian Infrastruktur dan Kemudahan Awam</p>
    @elseif (Auth::user()->bahagian == 7)
        <p>Bahagian Pertanian</p>
    @elseif (Auth::user()->bahagian == 8)
        <p>Bahagian Pengurusan Nilai</p>
    @elseif (Auth::user()->bahagian == 9)
        <p>Bahagian Tenaga</p>
    @elseif (Auth::user()->bahagian == 10)
        <p>Bahagian Keselamatan dan Ketenteraman Awam</p>
    @elseif (Auth::user()->bahagian == 11)
        <p>Unit Statistik</p>
    @elseif (Auth::user()->bahagian == 12)
        <p>Bahagian Ekonomi Makro</p>
    @elseif (Auth::user()->bahagian == 13)
        <p>Bahagian Industri Perkhidmatan</p>
    @elseif (Auth::user()->bahagian == 14)
        <p>Bahagian Industri Pembuatan Sains dan Teknologi</p>
    @elseif (Auth::user()->bahagian == 15)
        <p>Bahagian Bajet Pembangunan</p>
    @elseif (Auth::user()->bahagian == 16)
        <p>Bahagian K-Ekonomi</p>
    @elseif (Auth::user()->bahagian == 17)
        <p>Bahagian Ekonomi Alam Sekitar Dan Sumber Asli</p>
    @elseif (Auth::user()->bahagian == 18)
        <p>Bahagian Pembangunan Ekuiti</p>
    @elseif (Auth::user()->bahagian == 19)
        <p>Unit Audit Dalam</p>
    @elseif (Auth::user()->bahagian == 20)
        <p>Bahagian Perkhidmatan Sosial</p>
    @elseif (Auth::user()->bahagian == 21)
        <p>Bahagian Pembangunan Wilayah</p>
    @elseif (Auth::user()->bahagian == 22)
        <p>Bahagian Pembangunan Modal Insan</p>
    @elseif (Auth::user()->bahagian == 23)
        <p>Bahagian Penyelarasan, Kawalan dan Pemantauan</p>
    @elseif (Auth::user()->bahagian == 24)
        <p>Bahagian Perancangan Strategik dan Kerjasama Antarabangsa</p>
    @elseif (Auth::user()->bahagian == 25)
        <p>Bahagian Khidmat Pengurusan dan Kewangan</p>
    @elseif (Auth::user()->bahagian == 26)
        <p>Bahagian Sumber Manusia</p>
    @elseif (Auth::user()->bahagian == 27)
        <p>Bahagian Akaun</p>
    @elseif (Auth::user()->bahagian == 28)
        <p>Bahagian Pengurusan Maklumat</p>
    @elseif (Auth::user()->bahagian == 29)
        <p>Unit Komunikasi Korporat</p>
    @elseif (Auth::user()->bahagian == 30)
        <p>Bahagian Pembangunan</p>
    @elseif (Auth::user()->bahagian == 31)
        <p>Unit Undang-Undang</p>
    @elseif (Auth::user()->bahagian == 32)
        <p>Sekretariat Majlis Tindakan Ekonomi</p>
    @elseif (Auth::user()->bahagian == 33)
        <p>Unit Integriti</p>
    @endif
</div>
