document.addEventListener('DOMContentLoaded', () => {
  const totalMesas = 20;
  const ocupadas = window.ocupadasFromServer || [];
  const mesasSelecionadas = JSON.parse(localStorage.getItem("mesasSelecionadas")) || [];
  const container = document.getElementById("restaurant");

  container.innerHTML = "";

  for (let i = 1; i <= totalMesas; i++) {
    const div = document.createElement("div");
    div.classList.add("table");
    div.dataset.id = i;
    div.textContent = i;

    if (ocupadas.includes(i)) {
      div.classList.add("occupied");
    } else if (mesasSelecionadas.includes(i)) {
      div.classList.add("selected");
    }

    div.addEventListener("click", () => {
      if (div.classList.contains("occupied")) return;

      div.classList.toggle("selected");

      const id = parseInt(div.dataset.id);
      const index = mesasSelecionadas.indexOf(id);

      if (index > -1) {
        mesasSelecionadas.splice(index, 1);
      } else {
        mesasSelecionadas.push(id);
      }

      localStorage.setItem("mesasSelecionadas", JSON.stringify(mesasSelecionadas));
    });

    container.appendChild(div);
  }

  // FORM SUBMIT
  const form = document.getElementById("reserva-form");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (mesasSelecionadas.length === 0) {
      alert("Por favor, selecione pelo menos uma mesa!");
      return;
    }

    const formData = new FormData(form);
    mesasSelecionadas.forEach((mesa, i) => {
      formData.append(`mesas[${i}]`, mesa);
    });

    try {
      const response = await fetch("/reserva", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
      });

      const result = await response.json();
      if (result.success) {
        alert(result.message);
        localStorage.removeItem("mesasSelecionadas");
        window.location.reload();
      }
    } catch (error) {
      console.error("Erro ao reservar:", error);
      alert("Ocorreu um erro, tente novamente.");
    }
  });
});
