document.addEventListener("DOMContentLoaded", () => {
    const checkoutButtons = document.querySelectorAll(".checkout");
    checkoutButtons.forEach((button) => {
        button.addEventListener("click", async () => {
            await checkout();
            alert("confirm the order");
            window.location.reload();
        });
    });
});

async function checkout() {
    const response = await fetch("/checkout.php",{
        method: "POST",
    })

    const body = await response.json();

    return !!body
}