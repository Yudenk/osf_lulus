<?php
$json = array();
$show = mysqli_query($connect, "SELECT * FROM event");

// <option value="Lomba">Lomba</option>
// 					<option value="Konser">Konser</option>
// 					<option value="Tanding">Tanding</option>
// 					<option value="Talkhosw">Talkshow</option>
// 					<option value="Bazar">Bazar</option>
// 					<option value="Festival">Festival</option>
// 					<option value="Workshop">Workshop</option>

while($row = mysqli_fetch_array($show))
{
    if($row['kategori'] == 'Lomba')
    {
        $json[] = array(
            'backgroundColor' => 'red',
            'title' => $row['nama_event'],
            'start' => $row['tanggal_awal'],
            'end' => $row['tanggal_akhir'],
        );
    }

    else if($row['kategori'] == 'Konser')
    {
        $json[] = array(
            'backgroundColor' => 'green',
            'title' => $row['nama_event'],
            'start' => $row['tanggal_awal'],
            'end' => $row['tanggal_akhir'],
        );
    }

    else
    {
        $json[] = array(
            'title' => $row['nama_event'],
            'start' => $row['tanggal_awal'],
            'end' => $row['tanggal_akhir'],
        );
    }
}