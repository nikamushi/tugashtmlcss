const weatherData = {
  Jakarta: { temperature: 30, condition: "Terang" },
  Bandung: { temperature: 25, condition: "Hujan Ringan" },
  Surabaya: { temperature: 33, condition: "Panas Terik" },
  Samarinda: { temperature: 28, condition: "Mendung" },
  Medan: { temperature: 31, condition: "Terang" },
  Makassar: { temperature: 32, condition: "Panas" },
  Semarang: { temperature: 29, condition: "Mendung" },
  Yogyakarta: { temperature: 27, condition: "Sejuk" },
};

const container = document.getElementById("weather-container");
const emptyState = document.getElementById("empty-state");
const inputKota = document.getElementById("input-kota");

const getIcon = (cond) => {
  const icon = cond.toLowerCase();
  if (icon.includes("terang")) {
    return "☀️";
  } else if (icon.includes("hujan")) {
    return "🌧️";
  } else if (icon.includes("panas")) {
    return "🔥";
  } else if (icon.includes("mendung")) {
    return "☁️";
  } else if (icon.includes("sejuk")) {
    return "🌤️";
  } else {
    return "🌤️";
  }
};

const render = (data) => {
  container.innerHTML = "";

  if (!data || data.length === 0) {
    emptyState.classList.remove("d-none");
    emptyState.innerHTML = `
      <i class="bi bi-exclamation-triangle fs-1"></i>
      <p class="mt-2">Kota tidak ditemukan dalam data simulasi</p>
    `;
    return;
  }

  emptyState.classList.add("d-none");
  console.log(`Menampilkan ${data.length} data cuaca:`);

  for (let i = 0; i < data.length; i++) {
    const w = data[i];
    const col = document.createElement("div");
    col.className = "col-6 col-md-3";
    col.innerHTML = `
      <div class="card weather-card border-0 shadow h-100">
        <div class="card-body text-center p-3">
          <div class="fs-1 mb-2">${getIcon(w.condition)}</div>
          <h6 class="fw-bold mb-1 text-white">${w.city}</h6>
          <p class="fs-4 fw-bold text-white mb-2">${w.temperature}°C</p>
          <span class="badge badge-glass rounded-pill px-3">${
            w.condition
          }</span>
        </div>
      </div>
    `;
    container.appendChild(col);

    console.log(
      `Kota: ${w.city} | Suhu: ${w.temperature}°C | Kondisi: ${w.condition}`
    );
  }
};

document.getElementById("btn-submit").addEventListener("click", () => {
  const kota = inputKota.value.trim();

  if (!kota) {
    alert("Masukkan nama kota terlebih dahulu!");
    return;
  }

  const hasil = [];
  const query = kota.toLowerCase();
  for (const city in weatherData) {
    if (city.toLowerCase().indexOf(query) !== -1) {
      const d = weatherData[city];
      hasil.push({ city, temperature: d.temperature, condition: d.condition });
    }
  }

  render(hasil);
});

inputKota.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    document.getElementById("btn-submit").click();
  }
});
