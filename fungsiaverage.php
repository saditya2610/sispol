<?php
		include 'connect.php';
		$queryj = mysqli_query($connect,"SELECT  COUNT(*) AS jumlah FROM jawaban_user join responden where id_kategorij='$id_kategorisend' AND id_respondenj=id_responden");
		$jumlah=mysqli_fetch_array($queryj);
		$count=$jumlah ['jumlah'];

        $queryv = mysqli_query($connect,"SELECT * FROM jawaban_user join responden where id_kategorij='$id_kategorisend' AND id_respondenj=id_responden");
        $jawaban1=0;$jawaban2=0;$jawaban3=0;$jawaban4=0;$jawaban5=0;
 		while ( $datav = mysqli_fetch_array($queryv) ) {
	 			$jawaban1=$jawaban1+$datav['jawaban1'];
	 			$jawaban2=$jawaban1+$datav['jawaban2'];
	 			$jawaban3=$jawaban1+$datav['jawaban3'];
	 			$jawaban4=$jawaban1+$datav['jawaban4'];
	 			$jawaban5=$jawaban1+$datav['jawaban5'];};
?>
        	<?php
        		$average1=$jawaban1/$count;
        		$average2=$jawaban2/$count;
        		$average3=$jawaban3/$count;
        		$average4=$jawaban4/$count;
        		$average5=$jawaban5/$count;

        	?>


