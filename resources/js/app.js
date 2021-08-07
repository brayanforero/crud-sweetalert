require("./bootstrap");
let forms = document.querySelectorAll("form");

forms.forEach((f) => {
    f.addEventListener("submit", (e) => {
        Swal.fire({
            icon: "warning",
            title: "Atention !!",
            text: "Are you secure this user?",
            confirmButtonText: `Ok`,
            showCancelButton: true,
        }).then((rs) => {
            if (rs.isConfirmed) e.target.submit();
        });

        e.preventDefault();
    });
});
