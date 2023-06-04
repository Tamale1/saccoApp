function showLoader(button = null) {
  Swal.fire({
    icon: "info",
    title:
      '<span class="text-primary"><i class="fa fa-spinner fa-spin"></i> Submitting</span>',
    html: "Please Wait!!",
    showConfirmButton: false,
    allowOutsideClick: false,
    showCancelButton: true,
    backdrop: `rgb(113 176 230 / 40%)`,
  });
}

function pushNotificationError(message) {
  message = message || "Something went wrong";
  Swal.fire({
    icon: "error",
    title: "Error",
    html: message,
    showConfirmButton: true,
    allowOutsideClick: false,
    showCancelButton: false,
  });
}

function pushNotificationClose() {
  Swal.close();
}
