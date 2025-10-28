let Data = new Array();
function submitData() {
  let nama = document.getElementById("nama").value;
  let nim = document.getElementById("nim").value;
  let semester = document.getElementById("semester").value;
  let prodi = document.getElementById("prodi").value;
  let email = document.getElementById("email").value;

  Data.push(nama, nim, semester, prodi, email);
  console.log(Data);
}
