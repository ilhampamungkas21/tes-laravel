
<?php

  echo "PHP BAGIAN 1";
   echo "<hr/>";
   $nilai ="72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86"; 
 

   $data = explode(" " , $nilai);
   $data2 = explode(" " , $nilai);
   $jumlah_array = count($data);
   $max = max($data);

   rsort($data2);

   //$datasort = sort($data);




	 //rata2
	$jumlah = 0;
	for ($i = 0; $i <= count($data)-1; $i++) 
	{
	    $jumlah = $jumlah+$data[$i];
	}

	$rata= $jumlah/$jumlah_array;


	// 7 Nilai tertinggi
	for ($i = 0; $i <= 7-1; $i++) 
	{
	     $nilaimaxtujuh = $data[$i].",";
	}


    echo " Data 1 = " . $data[0];
	 echo "<br/>";

	 echo "jumlah array =". $jumlah_array;
	 echo "<br/>";

	 echo "Nilai Max =". $max;
	 echo "<br/>";

	 echo "1. Nilai Rata-Rata adalah = ".$rata;
	 echo "<br/>";

	 echo "2. 7 NIlai Tertinggi = ";
	 for ($i = 0; $i <= 7-1; $i++) 
	{
	     echo $data[$i].",";
	}

	 echo "<br/>";
	 echo "3. 7 NIlai Terendah  = ";
	 for ($i = 0; $i <= 7-1; $i++) 
	{
	     echo $data2[$i].",";
	}




 echo "<br/>";
 echo "<br/>";
 echo "<br/>";





function hitungLower($kata)
{
$hrfKecil = strtolower(substr($kata,0,3));
$hrfBesar = substr($kata,3);
echo $hrfKecil.$hrfBesar." mengandung ".strlen($hrfKecil)." buah huruf kecil";
}


 echo "<br/>";
 echo "<br/>";
 echo "<br/>";


$str = "Jakarta adalah ibukota negara Republik Indonesia";
$strarr = explode(" ",$str);
$jml = count($strarr);

for ($i = 0; $i <=$jml-1; $i+=2) 
{
	echo 'Unigram = '.$strarr[$i].',';
}





 echo "<br/>";
 echo "<br/>";



  echo "PHP BAGIAN 2";
  echo "<hr/>";








?>