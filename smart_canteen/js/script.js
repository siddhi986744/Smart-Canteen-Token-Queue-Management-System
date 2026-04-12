
function loadOrderStatus() {
    fetch("order_status_data.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById("orderStatus").innerHTML = data;
        });
}

/* Load immediately */
loadOrderStatus();

/* Auto refresh every 5 seconds */
setInterval(loadOrderStatus, 5000);

