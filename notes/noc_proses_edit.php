//proses: noc_1
public function editNoc1(Noc $noc)
{
	$form = "noc_1";
	$tajuk = "Semakan NOC baharu";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateNoc1(Request $request, $id)
{
	$request->validate([
		'tarikhSemak' => 'required',
		'inputStatusSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_semak     = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_semak    = $request->inputStatusSemak;
	$semakan->status_noc = "noc_2";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}


//proses: noc_2
public function editSemakUlasan(Noc $noc)
{
	$form = "noc_2";
	$tajuk = "Semakan Permohonan Ulasan";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}
public function editSediaUlasan(Noc $noc)
{
	$form = "noc_3";
	$tajuk = "Penyediaan Ulasan NOC";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}
public function editHantarUlasan(Noc $noc)
{
	$form = "noc_4";
	$tajuk = "Semakan Permohonan Ulasan";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function editSediaMemo(Noc $noc)
{
	$form = "noc_5";
	$tajuk = "Penyediaan Memo Kelulusan NOC";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function editTerimaMemo(Noc $noc)
{
	$form = "noc_6";
	$tajuk = "Penyediaan Memo Kelulusan NOC";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function editSediaSurat(Noc $noc)
{
	$form = "noc_7";
	$tajuk = "Penyediaan Surat Kelulusan Rasmi";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function editHantarSurat(Noc $noc)
{
	$form = "noc_8";
	$tajuk = "Penhantaran Surat Kelulusan Rasmi Kepada Kementerian/Jabatan";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function editMohonModul(Noc $noc)
{
	$form = "noc_9";
	$tajuk = "Permohonan Rasmi NOC di MyProjek";
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}



public function updateSemakUlasan(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
		'inputStatusSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_mohon_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_semak_ulasan    = $request->inputStatusSemak;
	$semakan->status_noc = "noc_3";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}

public function updateSediaUlasan(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_sedia_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_noc = "noc_4";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}

public function updateHantarUlasan(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_hantar_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_noc = "noc_5";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}

public function updateSediaMemo(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
		'pengurusan_tinggi' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_sedia_memo_kelulusan = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->pengurusan_tinggi    = $request->pengurusan_tinggi;
	$semakan->status_noc = "noc_6";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}

public function updateTerimaMemo(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_kelulusan_pt = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_noc = "noc_7";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}

public function updateSediaSurat(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_sedia_surat = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_noc = "noc_8";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}

public function updateHantarSurat(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_hantar_surat_lulus = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_noc = "noc_9";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}

public function updateMohonModul(Request $request, $id)
{

	$request->validate([
		'tarikhSemak' => 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_mohon_modul = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
	$semakan->status_noc = "noc_10";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
}