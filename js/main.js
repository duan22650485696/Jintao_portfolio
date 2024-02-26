(()=>{
    document.getElementById('ham-menu').addEventListener('click', function() {
    document.querySelector('.nav-menu').classList.toggle('active');
});


  const form = document.querySelector("#form");
const feedback = document.createElement("div");
feedback.id = "feedback";
form.appendChild(feedback);

function handleFormSubmission(event) {
    event.preventDefault();
    
    // Check if name and message fields are empty
    const name = form.elements.name.value.trim();
    const message = form.elements.message.value.trim();
    if (name === "" || message === "") {
        feedback.innerHTML = "<p class='error-message'>Please fill in both the name and message fields.</p>";
        return;
    }

    const formData = new FormData(form);
    fetch("adduser.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.errors) {
            feedback.innerHTML = "";
            data.errors.forEach(error => {
                const errorElement = document.createElement("p");
                errorElement.textContent = error;
                feedback.appendChild(errorElement);
            });
        } else {
            feedback.innerHTML = `<p>${data.message}</p>`;
            form.reset();
        }
    })
    .catch(error => {
        console.error("Error:", error);
        feedback.innerHTML = "<p class='error-message'>Oops! Something went wrong. Please try again later.</p>";
    });
}

form.addEventListener("submit", handleFormSubmission);



})();