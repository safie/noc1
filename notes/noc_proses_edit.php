//proses: noc_1
public function editSemak(Noc $noc)
{
	$form 	= "noc_1";
	$tajuk 	= "Semakan awal NOC";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateSemak(Request $request, $id)
{
	
	$request->validate([
		'tarikh' 		=> 'required',
		'inputStatusSemak' 	=> 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_semak     	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_semak    	= $request->inputStatusSemak;
	$semakan->status_noc 		= "noc_2";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'NOC telah disemak');
}

//proses: noc_2 (update)
public function editMohonUlasan(Noc $noc)
{
	$form 	= "noc_2";
	$tajuk 	= "Permohonan Ulasan Bajet/Teknikal";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateMohonUlasan(Request $request, $id)
{
	$request->validate([
		'tarikh' 		=> 'required',
	]);

	$semakan = Noc::find($id);
	$semakan->tarikh_mohon_ulasan	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc 			= "noc_3";
	$semakan->save();
	
	return redirect()->route('noc.index')->with('success', 'Ulasan telah dipohon');
}


//proses: noc_3
public function editSemakUlasan(Noc $noc)
{
	$form 	= "noc_3";
	$tajuk 	= "Semakan Permohonan Ulasan"; //Bajet@Teknikal
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateSemakUlasan(Request $request, $id)
{
	$request->validate([
		'tarikh' 		=> 'required',
		'inputStatusSemak' 	=> 'required',
	]);

	$semakan 						= Noc::find($id);
	$semakan->tarikh_mohon_ulasan	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_semak_ulasan	= $request->inputStatusSemak;
	$semakan->status_noc 			= "noc_4";
	$semakan->save();
	
	return redirect()->route('noc.index')->with('success', 'Permohonan Ulasan telah disemak');
}


//Proses: noc_4
public function editSediaUlasan(Noc $noc)
{
	$form	= "noc_3";
	$tajuk	= "Penyediaan Ulasan"; //Bajet@Teknikal
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateSediaUlasan(Request $request, $id)
{
	$request->validate([
		'tarikh' => 'required',
	]);

	$semakan 						= Noc::find($id);
	$semakan->tarikh_sedia_ulasan	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc 			= "noc_5";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'Ulasan sedang disediakan');
}

//proses: noc_5
public function editHantarUlasan(Noc $noc)
{
	$form 	= "noc_5";
	$tajuk 	= "Penghantaran Ulasan"; //Bajet@Teknikal
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateHantarUlasan(Request $request, $id)
{
	$request->validate([
		'tarikh' => 'required',
	]);

	$semakan 						= Noc::find($id);
	$semakan->tarikh_hantar_ulasan	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc			= "noc_6";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'Ulasan telah dihantar');
}

//proses: noc_6
public function editSediaMemo(Noc $noc)
{
	$form	= "noc_6";
	$tajuk	= "Penyediaan Memo Kelulusan";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateSediaMemo(Request $request, $id)
{
	$request->validate([
		'tarikh' 			=> 'required',
		'pengurusan_tinggi'	=> 'required',
	]);

	$semakan								= Noc::find($id);
	$semakan->tarikh_sedia_memo_kelulusan	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->pengurusan_tinggi				= $request->pengurusan_tinggi;
	$semakan->status_noc					= "noc_7";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'Memo kelulusan sedang disediakan');
}

//proses: noc_7 (update)
public function editHantarMemo(Noc $noc)
{
	$form	= "noc_7";
	$tajuk	= "Penghantaran Memo Kelulusan Kepada Pejabat KP/TKP";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateHantarMemo(Request $request, $id)
{
	$request->validate([
		'tarikh' => 'required',
	]);

	$semakan								= Noc::find($id);
	$semakan->tarikh_hantar_memo_kelulusan	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc					= "noc_8";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'Memo kelulusan telah dihantar');
}

//proses: noc_8
public function editTerimaMemo(Noc $noc)
{
	$form	= "noc_8";
	$tajuk	= "Penerimaan Memo Kelulusan Daripada Pejabat KP/TKP";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateTerimaMemo(Request $request, $id)
{
	$request->validate([
		'tarikh' => 'required',
	]);

	$semakan						= Noc::find($id);
	$semakan->tarikh_kelulusan_pt	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc			= "noc_9";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'Memo kelulusan telah diterima');
}

//proses: noc_9
public function editSediaSurat(Noc $noc)
{
	$form	= "noc_9";
	$tajuk	= "Penyediaan Surat Kelulusan";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateSediaSurat(Request $request, $id)
{
	$request->validate([
		'tarikh' => 'required',
	]);

	$semakan 						= Noc::find($id);
	$semakan->tarikh_sedia_surat	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc			= "noc_10";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'Surat kelulusan sedang disediakan');
}

//proses: noc_10
public function editHantarSurat(Noc $noc)
{
	$form	= "noc_10";
	$tajuk	= "Penhantaran Surat Kelulusan Kepada Kementerian";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateHantarSurat(Request $request, $id)
{
	$request->validate([
		'tarikh' => 'required',
	]);

	$semakan 							= Noc::find($id);
	$semakan->tarikh_hantar_surat_lulus	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc				= "noc_11";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', Surat kelulusan rasmi telah dihantar');
}


//proses: noc_11
public function editMohonModul(Noc $noc)
{
	$form	= "noc_11";
	$tajuk	= "Permohonan Modul NOC MyProjek oleh Kementerian";
	
	return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
}

public function updateMohonModul(Request $request, $id)
{

	$request->validate([
		'tarikh' => 'required',
	]);

	$semakan 						= Noc::find($id);
	$semakan->tarikh_mohon_modul	= Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
	$semakan->status_noc			= "noc_12";
	$semakan->save();

	return redirect()->route('noc.index')->with('success', 'Modul NOC MyProjek telah dipohon');
}