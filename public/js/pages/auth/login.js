document.getElementById("password-addon").addEventListener("click", function () {
    const input = this.parentElement.querySelector("input");

    if (input) {
        if (input.type === "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
    }
});

const btnLogin = document.getElementById('btnLogin');
const formLogin = document.getElementById('formLogin');

formLogin.addEventListener('submit', function (e) {
    e.preventDefault();
    const correo = document.getElementById('correo').value;
    const password = document.getElementById('password').value;

    if (correo === '' || password === '') {
        alert('Debe completar todos los campos');
        return;
    }

    const formData = new FormData(formLogin);

    fetch('/auth/login', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'home';
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});