// update
const modal = document.querySelector("#kt_modal_update_user");
modal.addEventListener("show.bs.modal", (e) => {
    Livewire.emit("update_user", {
        id: e.relatedTarget.getAttribute("data-user-id"),
    });
});

document.addEventListener("livewire:load", function () {
    Livewire.on("success", function (success) {
        $("#kt_modal_update_user").modal("hide");
        $("#kt_modal_add_product").modal("hide");
        $("#kt_modal_add_category").modal("hide");
        $("#kt_modal_add_post").modal("hide");
        swal.fire({
            title: success,
            icon: "success",
            confirmButtonText: "Xác nhận!",
        });
    });
});

document.addEventListener("livewire:load", function () {
    Livewire.on("error", function (error) {
        swal.fire({
            title: error,
            icon: "error",
            confirmButtonText: "Xác nhận!",
        });
    });
});
