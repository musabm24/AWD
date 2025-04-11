<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  @media (max-width: 768px) {
    .navbar-collapse {
      display: none;
    }
    .navbar-collapse.show {
      display: block !important;
    }

    #carFilterForm {
      flex-direction: column !important;
      align-items: stretch;
    }

    #carFilterForm select,
    #carFilterForm button {
      width: 100%;
    }

    .navbar-nav {
      width: 100%;
    }

    .navbar-toggler {
      margin-left: auto;
    }
  }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Motor Market</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
        <li class="nav-item w-100">
          <form id="carFilterForm" class="d-flex flex-column flex-lg-row w-100 gap-2 mt-2 mt-lg-0">
            <select id="carMake" class="form-select mb-2 mb-lg-0t" onchange="updateModels()">
              <option value="">All Makes</option>
              <?php foreach ($makes as $make): ?>
                <option value="<?= esc($make['make']) ?>"><?= esc($make['make']) ?></option>
              <?php endforeach; ?>
            </select>

            <select id="carModel" class="form-select mb-2 mb-lg-0">
              <option value="">All Models</option>
            </select>

            <button type="button" class="btn btn-primary" onclick="filterCars()">Search</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggler = document.querySelector('.navbar-toggler');
    const collapse = document.querySelector('.navbar-collapse');

    toggler.addEventListener('click', function () {
      collapse.classList.toggle('show');
    });
  });

  const models = <?= json_encode($models) ?>;

  function updateModels() {
    const make = document.getElementById('carMake').value;
    const modelSelect = document.getElementById('carModel');
    modelSelect.innerHTML = '<option value="">All Models</option>';

    const filteredModels = models.filter(model => model.make === make);
    filteredModels.forEach(model => {
      const option = document.createElement('option');
      option.value = model.model;
      option.textContent = model.model;
      modelSelect.appendChild(option);
    });
  }

  function filterCars() {
    const make = document.getElementById('carMake').value;
    const model = document.getElementById('carModel').value;

    fetch(`https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/cars/filter?make=${make}&model=${model}`)
      .then(response => response.text())
      .then(data => {
        document.getElementById('carResults').innerHTML = data;
      })
      .catch(error => console.error('Error:', error));
  }
</script>