function cekKelulusan() {
  console.clear(); // bersihkan console biar rapi
  let nilai = document.getElementById("nilai").value;

  if (nilai === "") {
    console.log("⚠️ Silahkan masukkan nilai terlebih dahulu.");
    return;
  }

  nilai = parseInt(nilai);

  if (nilai >= 70) {
    console.log("Nilai Anda:", nilai, "-> Status: Lulus ✅");
  } else {
    console.log("Nilai Anda:", nilai, "-> Status: Tidak Lulus ❌");
  }
}
