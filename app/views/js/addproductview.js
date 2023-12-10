$(document).ready(function () {
    listenAddProduct();
})

function listenAddProduct() {
    $("#add-prod-form").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        sendAjax(
            "/renew/add-product",
            formData,
            function (response) {
                console.log(response.data);
            },
            function (response) {
                console.log(response.data);
            },
            "AJAX Error: Unable to add product."
        );
    })
}