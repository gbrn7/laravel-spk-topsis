const body = document.querySelector("body");

$(".sidebar ul li").on("click", function () {
  $(".sidebar ul li.active").removeClass("active");
  $(this).addClass("active");
});

$('.open-btn').on('click', function () {
  $('.sidebar').addClass('active');
});

$('.content-right').on('click', function () {
  $('.sidebar').removeClass('active');
});

function createAlternative() {
  Swal.fire({
    title: "<p>Tambah Alternatif</p>",
    html: `
    <div class="form-group mb-3 text-start">
    <label for="nama" class="mb-1">Nama Alternatif</label>
    <input
      class="form-control"
      type="text"
      name="nama"
      id="nama"
      placeholder="Lenovo Yoga 5i"
    />
    </div>
    `,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonColor: '#198754',
    confirmButtonText: `
      Simpan
    `,
    cancelButtonText: `
      Batal
    `
  });
}

function updateAlternative() {
  Swal.fire({
    title: "<p>Perbarui Alternatif</p>",
    html: `
    <div class="form-group mb-3 text-start">
    <label for="nama" class="mb-1">Nama Alternatif Baru</label>
    <input
      class="form-control"
      type="text"
      name="nama"
      default=0
      id="nama"
      placeholder="Lenovo Yoga 5i"
    />
    </div>
    `,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonColor: '#ffc107',
    confirmButtonText: `
      Simpan
    `,
    cancelButtonText: `
      Batal
    `
  });
}

function deleteAlternative() {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
      });
    }
  });
}

function testing(id) {
  Swal.fire({
    title: "<p>Penilaian Alternatif</p>",
    html: `
    <div class="form-group mb-3 text-start">
    <label for="nama" class="mb-1">Memori</label>
    <input
      class="form-control"
      type="number"
      name="Memori"
      id="Memori"
    />
    </div>
    <div class="form-group mb-3 text-start">
    <label for="nama" class="mb-1">Ram</label>
    <input
      class="form-control"
      type="number"
      name="nama"
      id="nama"
    />
    </div>
    `,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonColor: '#ffc107',
    confirmButtonText: `
      Simpan
    `,
    cancelButtonText: `
      Batal
    `
  });
}



$(document).ready(function () {

  let load = document.querySelector(".loading-wrapper");

  body.removeChild(load);

  document.querySelector('.wrapper').classList.remove('d-none');

  $('#example').DataTable();
});
