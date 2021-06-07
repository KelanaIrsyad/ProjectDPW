function	check(){
	var c =0;
	var q1=document.quiz.question1.value;
	var q2=document.quiz.question2.value;
	var q3=document.quiz.question3.value;
	var q4=document.quiz.question4.value;
	var q5=document.quiz.question5.value;
	var nilai = document.getElementById('nilai');

	if(q1=="Virus yang menyerang organ pernapasan") {c++}
	if(q2=="Kontak langsung dengan pengidap Covid-19") {c++}
	if(q3=="Organ pernapasan") {c++}
	if(q4=="A dan D benar") {c++}
	if(q5=="DKI Jakarta") {c++}


	nilai.textContent=`Nilai akhir Anda adalah ${c}`;

}